// assets/js/accordion-tabs.js
document.addEventListener('DOMContentLoaded', () => {
	const accordions = document.querySelectorAll('.wp-block-accordion.is-style-system-tabs, .wp-block-accordion.is-style-system-tabs-vertical');

	accordions.forEach(accordion => {
		const items = Array.from(accordion.querySelectorAll('.wp-block-accordion-item'));
		if (items.length === 0) return;

		const tablist = document.createElement('div');
		tablist.className = 'system-tabs__tablist';
		tablist.setAttribute('role', 'tablist');

		const panelsWrapper = document.createElement('div');
		panelsWrapper.className = 'system-tabs__panels';

		const isVertical = accordion.classList.contains('is-style-system-tabs-vertical');
		
		const tabs = [];

		// SLUG GENERATION LOGIC (Per Accordion)
		const slugCounts = new Map();

		function slugify(value) {
			return value
				.toLowerCase()
				.trim()
				.replace(/&/g, 'and')
				.replace(/[^\w\s-]/g, '')
				.replace(/\s+/g, '-')
				.replace(/-+/g, '-')
				.replace(/^-|-$/g, '');
		}

		function uniqueSlug(base) {
			const slug = base || 'tab';
			const count = slugCounts.get(slug) || 0;

			slugCounts.set(slug, count + 1);

			return count === 0 ? slug : `${slug}-${count + 1}`;
		}

		function getTabSlug(heading, index) {
			const existingId = heading.id || heading.closest('[id]')?.id;

			if (existingId && existingId.trim() !== '') {
				return uniqueSlug(existingId);
			}

			return uniqueSlug(slugify(heading.textContent) || `tab-${index + 1}`);
		}

		items.forEach((item, index) => {
			const heading = item.querySelector('.wp-block-accordion-heading') || item.querySelector('summary') || item.firstElementChild;
			const content = item.querySelector('.wp-block-accordion-panel') || item.querySelector('.wp-block-accordion-content') || (item.querySelector('summary') ? item.querySelector('summary').nextElementSibling : item.lastElementChild);
			
			if (!heading || !content) return;

			const tabBtn = document.createElement('button');
			tabBtn.className = 'system-tabs__tab';
			tabBtn.setAttribute('role', 'tab');
			
			const panel = document.createElement('div');
			panel.className = 'system-tabs__panel';
			panel.setAttribute('role', 'tabpanel');
			panel.hidden = true; // start hidden
			
			const slug = getTabSlug(heading, index);

			tabBtn.dataset.systemTabSlug = slug;
			panel.dataset.systemTabSlug = slug;

			if (!panel.id) {
				panel.id = `${accordion.id || 'system-tabs'}-panel-${slug}`;
			}

			if (!tabBtn.id) {
				tabBtn.id = `${accordion.id || 'system-tabs'}-tab-${slug}`;
			}

			tabBtn.setAttribute('aria-controls', panel.id);
			panel.setAttribute('aria-labelledby', tabBtn.id);

			// Color Sync: Retain the user's color choices from the editor
			const applyColors = (source, target1, target2) => {
				Array.from(source.classList).forEach(cls => {
					if (cls.startsWith('has-')) {
						target1.classList.add(cls);
						if (target2) target2.classList.add(cls);
					}
				});
				if (source.getAttribute('style')) {
					target1.style.cssText += source.getAttribute('style');
					if (target2) target2.style.cssText += source.getAttribute('style');
				}
			};

			// Safely move DOM nodes instead of innerHTML so SVGs and spans survive perfectly
			while (heading.firstChild) {
				tabBtn.appendChild(heading.firstChild);
			}

			// Apply colors from the original item and heading to both the tab button and the new panel
			applyColors(item, tabBtn, panel);
			if (heading) applyColors(heading, tabBtn, null);
			if (content) applyColors(content, panel, null);
			
			// Copy content children safely
			while (content.firstChild) {
				panel.appendChild(content.firstChild);
			}

			tabs.push({ btn: tabBtn, panel: panel });
			tablist.appendChild(tabBtn);
			panelsWrapper.appendChild(panel);
		});

		// Clear original accordion content and append tabs structure
		accordion.innerHTML = '';
		accordion.appendChild(tablist);
		accordion.appendChild(panelsWrapper);

		// NEW ACTIVATE TAB FUNCTION
		function activateTab(activeTab, options = {}) {
			const {
				updateHash = true,
				scroll = false,
			} = options;

			tabs.forEach((t) => {
				const selected = t === activeTab;
				
				t.btn.setAttribute('aria-selected', selected ? 'true' : 'false');
				t.btn.setAttribute('tabindex', selected ? '0' : '-1');

				if (t.panel) {
					t.panel.hidden = !selected;
				}
			});

			if (updateHash && activeTab.btn.dataset.systemTabSlug) {
				history.replaceState(null, '', `#${encodeURIComponent(activeTab.btn.dataset.systemTabSlug)}`);
			}

			if (scroll) {
				accordion.scrollIntoView({
					behavior: 'smooth',
					block: 'start',
				});
			}
		}

		// HASH LOGIC
		function getHashSlug() {
			return decodeURIComponent(window.location.hash.replace(/^#/, '')).trim();
		}

		function activateFromHash() {
			const hash = getHashSlug();

			if (!hash) {
				return false;
			}

			const target = tabs.find((t) => t.btn.dataset.systemTabSlug === hash);

			if (!target) {
				return false;
			}

			activateTab(target, { updateHash: false, scroll: true });

			return true;
		}

		accordion.systemTabsActivateFromHash = activateFromHash;

		// Initialize
		const activatedByHash = activateFromHash();

		if (!activatedByHash) {
			const initiallyOpen = tabs.find((t, index) => {
				return items[index]?.hasAttribute('open') || items[index]?.classList.contains('is-open');
			});

			activateTab(initiallyOpen || tabs[0], {
				updateHash: false,
			});
		}

		// Keyboard & Click Events
		tabs.forEach((t, i) => {
			t.btn.addEventListener('click', (e) => {
				e.preventDefault();
				activateTab(t);
			});

			t.btn.addEventListener('keydown', (e) => {
				let newIndex = i;

				if (!isVertical) {
					if (e.key === 'ArrowRight') newIndex = i + 1;
					if (e.key === 'ArrowLeft') newIndex = i - 1;
				} else {
					if (e.key === 'ArrowDown') newIndex = i + 1;
					if (e.key === 'ArrowUp') newIndex = i - 1;
				}

				if (e.key === 'Home') newIndex = 0;
				if (e.key === 'End') newIndex = tabs.length - 1;

				if (newIndex !== i && newIndex >= 0 && newIndex < tabs.length) {
					e.preventDefault();
					activateTab(tabs[newIndex]);
					tabs[newIndex].btn.focus();
				}
			});
		});
	});
});

window.addEventListener('hashchange', () => {
	document
		.querySelectorAll('.wp-block-accordion.is-style-system-tabs, .wp-block-accordion.is-style-system-tabs-vertical')
		.forEach((accordion) => {
			if (typeof accordion.systemTabsActivateFromHash === 'function') {
				accordion.systemTabsActivateFromHash();
			}
		});
});
