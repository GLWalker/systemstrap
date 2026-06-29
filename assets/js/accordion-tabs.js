// assets/js/accordion-tabs.js
document.addEventListener('DOMContentLoaded', () => {
	var accordions = document.querySelectorAll('.wp-block-accordion.is-style-system-tabs, .wp-block-accordion.is-style-system-tabs-vertical');

	accordions.forEach(accordion => {
		var items = Array.from(accordion.querySelectorAll('.wp-block-accordion-item'));
		if (items.length === 0) return;

		var tablist = document.createElement('div');
		tablist.className = 'system-tabs__tablist';
		tablist.setAttribute('role', 'tablist');

		var panelsWrapper = document.createElement('div');
		panelsWrapper.className = 'system-tabs__panels';

		var isVertical = accordion.classList.contains('is-style-system-tabs-vertical');
		
		var tabs = [];

		// SLUG GENERATION LOGIC (Per Accordion)
		var slugCounts = new Map();

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
			var slug = base || 'tab';
			var count = slugCounts.get(slug) || 0;

			slugCounts.set(slug, count + 1);

			return count === 0 ? slug : `${slug}-${count + 1}`;
		}

		function getTabSlug(heading, index) {
			var existingId = heading.id || heading.closest('[id]')?.id;

			if (existingId && existingId.trim() !== '') {
				return uniqueSlug(existingId);
			}

			return uniqueSlug(slugify(heading.textContent) || `tab-${index + 1}`);
		}

		function shouldCopyClass(className) {
			var blocked = [
				'wp-block-accordion-item',
				'wp-block-accordion-heading',
				'wp-block-accordion-panel',
				'wp-block-accordion-content',
				'wp-block-accordion-heading__toggle',
				'is-open',
			];

			if (!className || blocked.includes(className)) {
				return false;
			}

			if (className.indexOf('block-editor-') === 0 || className.indexOf('components-') === 0) {
				return false;
			}

			return className.indexOf('wp-block-') !== 0;
		}

		function copyPresentation(source, target) {
			if (!source || !target) {
				return;
			}

			Array.from(source.classList).forEach(className => {
				if (shouldCopyClass(className)) {
					target.classList.add(className);
				}
			});

			if (source.getAttribute('style')) {
				target.style.cssText = `${target.style.cssText};${source.getAttribute('style')}`;
			}
		}

		function copyShellBorderPresentation(source, target) {
			if (!source || !target) {
				return;
			}

			var originalStyle = target.getAttribute('style') || '';
			var computedStyle = window.getComputedStyle(source);

			Array.from(source.classList).forEach(className => {
				if (className === 'has-border-color' || /^has-.+-border-color$/.test(className)) {
					target.classList.add(className);
				}
			});

			for (var index = 0; index < source.style.length; index += 1) {
				var property = source.style[index];

				if (property.indexOf('border') === 0) {
					target.style.setProperty(
						property,
						source.style.getPropertyValue(property),
						source.style.getPropertyPriority(property)
					);
				}
			}

			if (computedStyle.borderStyle !== 'none') {
				target.style.borderStyle = computedStyle.borderStyle;
			}

			if (computedStyle.borderRadius !== '0px') {
				target.style.borderRadius = computedStyle.borderRadius;
			}

			if (originalStyle) {
				target.style.cssText = `${target.style.cssText};${originalStyle}`;
			}
		}

		function removeAccordionToggleIcon(node) {
			if (!node) {
				return;
			}

			Array.from(node.querySelectorAll('.wp-block-accordion-heading__toggle-icon, [class*="accordion-heading__toggle-icon"]')).forEach(icon => {
				icon.remove();
			});
		}

		function resetTabButtonLayout(button) {
			if (!button) {
				return;
			}

			[
				'width',
				'min-width',
				'max-width',
				'inline-size',
				'min-inline-size',
				'max-inline-size',
				'flex',
				'flex-basis',
				'flex-grow',
				'flex-shrink',
			].forEach(property => {
				button.style.removeProperty(property);
			});
		}

		function syncActiveTabSeam(activeTab) {
			if (!activeTab || !activeTab.btn || !activeTab.panel) {
				return;
			}

			var buttonRect = activeTab.btn.getBoundingClientRect();
			var panelRect = activeTab.panel.getBoundingClientRect();

			tabs.forEach((tabSet) => {
				if (!tabSet.panel) {
					return;
				}

				tabSet.panel.style.removeProperty('--system-tabs-active-tab-left');
				tabSet.panel.style.removeProperty('--system-tabs-active-tab-width');
				tabSet.panel.style.removeProperty('--system-tabs-active-tab-top');
				tabSet.panel.style.removeProperty('--system-tabs-active-tab-height');
			});

			activeTab.panel.style.setProperty(
				'--system-tabs-active-tab-left',
				`${Math.max(0, buttonRect.left - panelRect.left)}px`
			);
			activeTab.panel.style.setProperty(
				'--system-tabs-active-tab-width',
				`${buttonRect.width}px`
			);
			activeTab.panel.style.setProperty(
				'--system-tabs-active-tab-top',
				`${Math.max(0, buttonRect.top - panelRect.top)}px`
			);
			activeTab.panel.style.setProperty(
				'--system-tabs-active-tab-height',
				`${buttonRect.height}px`
			);
		}

		var shellBorderCopied = false;

		items.forEach((item, index) => {
			var heading = item.querySelector('.wp-block-accordion-heading') || item.querySelector('summary') || item.firstElementChild;
			var content = item.querySelector('.wp-block-accordion-panel') || item.querySelector('.wp-block-accordion-content') || (item.querySelector('summary') ? item.querySelector('summary').nextElementSibling : item.lastElementChild);
			var headingControl = heading ? heading.querySelector('.wp-block-accordion-heading__toggle') || heading : null;
			
			if (!heading || !headingControl || !content) return;

			if (!shellBorderCopied) {
				copyShellBorderPresentation(item, accordion);
				shellBorderCopied = true;
			}

			var tabBtn = document.createElement('button');
			tabBtn.className = 'system-tabs__tab wp-block-accordion-heading__toggle';
			tabBtn.setAttribute('role', 'tab');
			
			var panel = document.createElement('div');
			panel.className = 'system-tabs__panel wp-block-accordion-panel';
			panel.setAttribute('role', 'tabpanel');
			panel.hidden = true; // start hidden
			
			var slug = getTabSlug(headingControl, index);

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

			copyPresentation(item, tabBtn);
			copyPresentation(item, panel);
			copyPresentation(heading, tabBtn);
			copyPresentation(headingControl, tabBtn);
			copyPresentation(content, panel);
			resetTabButtonLayout(tabBtn);
			removeAccordionToggleIcon(headingControl);

			// Move DOM nodes instead of innerHTML so icons, spans, and inline formatting survive.
			while (headingControl.firstChild) {
				tabBtn.appendChild(headingControl.firstChild);
			}
			
			// Copy content children safely
			while (content.firstChild) {
				panel.appendChild(content.firstChild);
			}

			tabs.push({ btn: tabBtn, panel: panel });
			tablist.appendChild(tabBtn);
			panelsWrapper.appendChild(panel);
		});

		if (tabs.length === 0) {
			return;
		}

		// Clear original accordion content and append tabs structure
		accordion.innerHTML = '';
		accordion.dataset.systemTabsEnhanced = 'true';
		accordion.appendChild(tablist);
		accordion.appendChild(panelsWrapper);

		// NEW ACTIVATE TAB FUNCTION
		function activateTab(activeTab, options = {}) {
			var {
				updateHash = true,
				scroll = false,
			} = options;

			tabs.forEach((t) => {
				var selected = t === activeTab;
				
				t.btn.setAttribute('aria-selected', selected ? 'true' : 'false');
				t.btn.setAttribute('tabindex', selected ? '0' : '-1');

				if (t.panel) {
					t.panel.hidden = !selected;
				}
			});

			syncActiveTabSeam(activeTab);

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
			var hash = getHashSlug();

			if (!hash) {
				return false;
			}

			var target = tabs.find((t) => t.btn.dataset.systemTabSlug === hash);

			if (!target) {
				return false;
			}

			activateTab(target, { updateHash: false, scroll: true });

			return true;
		}

		function getActiveTab() {
			return tabs.find((t) => t.btn.getAttribute('aria-selected') === 'true') || null;
		}

		accordion.systemTabsActivateFromHash = activateFromHash;

		// Initialize
		var activatedByHash = activateFromHash();

		if (!activatedByHash) {
			var initiallyOpen = tabs.find((t, index) => {
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
				var newIndex = i;

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

		window.addEventListener('resize', () => {
			var activeTab = getActiveTab();

			if (activeTab) {
				syncActiveTabSeam(activeTab);
			}
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
