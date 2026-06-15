document.addEventListener('DOMContentLoaded', function() {
    const searchWrappers = document.querySelectorAll('.strap-ajax-search-wrapper');

    searchWrappers.forEach(wrapper => {
        const input = wrapper.querySelector('.strap-ajax-search-form input');
        if (!input) return;

        // The DOM elements
        const title = wrapper.querySelector('.strap-ajax-search-title');
        const resultsList = wrapper.querySelector('.strap-ajax-results-list');
        const noResults = wrapper.querySelector('.strap-ajax-no-results');
        const loading = wrapper.querySelector('.strap-ajax-loading');

        // We find the closest dialog or panel to locate the footer controls
        // since the footer might be a sibling of the wrapper inside the modal
        const modalPanel = wrapper.closest('.is-style-system-modal') || document;
        const counter = modalPanel.querySelector('.strap-ajax-counter');
        const btnPrev = modalPanel.querySelector('.strap-ajax-prev');
        const btnNext = modalPanel.querySelector('.strap-ajax-next');

        let currentPage = 1;
        let totalPages = 1;
        let currentQuery = '';
        let debounceTimer;
        const resultsPerPage = 5;

        // Set initial button states
        updatePaginationButtons();

        input.addEventListener('input', function(e) {
            clearTimeout(debounceTimer);
            currentQuery = e.target.value.trim();
            currentPage = 1; // Reset to first page on new search

            if (currentQuery.length < 2) {
                // Clear results if query is too short
                resultsList.innerHTML = '<p style="opacity:0.6; text-align:center; padding: 2rem 0;">Type above to start searching.</p>';
                noResults.style.display = 'none';
                if (title) title.style.display = 'none';
                if (counter) counter.textContent = '0 results found';
                totalPages = 1;
                updatePaginationButtons();
                return;
            }

            debounceTimer = setTimeout(() => {
                fetchResults();
            }, 400); // 400ms debounce
        });

        if (btnPrev) {
            btnPrev.addEventListener('click', function(e) {
                e.preventDefault();
                if (currentPage > 1) {
                    currentPage--;
                    fetchResults();
                }
            });
        }

        if (btnNext) {
            btnNext.addEventListener('click', function(e) {
                e.preventDefault();
                if (currentPage < totalPages) {
                    currentPage++;
                    fetchResults();
                }
            });
        }

        function fetchResults() {
            // Show loading
            resultsList.style.display = 'none';
            noResults.style.display = 'none';
            loading.style.display = 'block';
            if (title) title.style.display = 'block';

            // We use systemStrapAjax.rest_url passed via wp_localize_script
            // The default is /wp-json/wp/v2/posts
            const url = new URL(systemStrapAjax.rest_url);
            url.searchParams.append('search', currentQuery);
            url.searchParams.append('per_page', resultsPerPage);
            url.searchParams.append('page', currentPage);
            url.searchParams.append('_embed', '1'); // Get embedded data if needed later

            fetch(url)
                .then(response => {
                    // Get total results headers
                    const total = response.headers.get('X-WP-Total') || 0;
                    totalPages = parseInt(response.headers.get('X-WP-TotalPages')) || 1;
                    
                    if (counter) {
                        counter.textContent = `${total} results found`;
                    }
                    
                    updatePaginationButtons();
                    return response.json();
                })
                .then(data => {
                    loading.style.display = 'none';
                    
                    if (!data || data.length === 0) {
                        noResults.style.display = 'block';
                        resultsList.innerHTML = '';
                        return;
                    }

                    resultsList.style.display = 'block';
                    renderResults(data);
                })
                .catch(error => {
                    console.error('AJAX Search Error:', error);
                    loading.style.display = 'none';
                    resultsList.style.display = 'block';
                    resultsList.innerHTML = '<p style="color:red; text-align:center;">An error occurred while searching.</p>';
                });
        }

        function renderResults(posts) {
            resultsList.innerHTML = '';

            posts.forEach((post, index) => {
                const date = new Date(post.date).toLocaleDateString(undefined, {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                });

                let excerpt = getPlainText(post.excerpt && post.excerpt.rendered ? post.excerpt.rendered : '');
                if (excerpt.length > 120) {
                    excerpt = excerpt.substring(0, 120) + '...';
                }

                resultsList.appendChild(createResultNode(post, date, excerpt, index));
            });
        }

        function updatePaginationButtons() {
            if (btnPrev) {
                const isDisabled = currentPage <= 1;
                setPaginationState(btnPrev, isDisabled);
            }

            if (btnNext) {
                const isDisabled = currentPage >= totalPages || totalPages === 0;
                setPaginationState(btnNext, isDisabled);
            }
        }

        function setPaginationState(buttonWrapper, isDisabled) {
            const buttonLink = buttonWrapper ? buttonWrapper.querySelector('.wp-block-button__link') : null;

            if (!buttonWrapper || !buttonLink) {
                return;
            }

            buttonWrapper.classList.toggle('is-disabled', isDisabled);
            buttonLink.setAttribute('aria-disabled', isDisabled ? 'true' : 'false');
            buttonLink.tabIndex = isDisabled ? -1 : 0;
        }

        function createResultNode(post, date, excerpt, index) {
            const item = document.createElement('div');
            item.className = 'strap-search-result-item';
            item.style.animation = 'strap-zoom-in 0.3s ease-out both';
            item.style.animationDelay = `${index * 0.05}s`;

            const header = document.createElement('div');
            header.style.display = 'flex';
            header.style.justifyContent = 'space-between';
            header.style.alignItems = 'baseline';
            header.style.marginBottom = '0.5rem';
            header.style.gap = '1rem';

            const heading = document.createElement('h5');
            heading.style.margin = '0';
            heading.style.fontSize = 'var(--wp--preset--font-size--medium)';

            const link = document.createElement('a');
            link.style.textDecoration = 'none';
            link.style.color = 'inherit';
            link.textContent = getPlainText(post.title && post.title.rendered ? post.title.rendered : '');

            const safeHref = getSafeUrl(post.link);
            if (safeHref) {
                link.href = safeHref;
            }

            heading.appendChild(link);

            const dateNode = document.createElement('small');
            dateNode.style.opacity = '0.6';
            dateNode.style.whiteSpace = 'nowrap';
            dateNode.style.fontSize = 'var(--wp--preset--font-size--small)';
            dateNode.textContent = date;

            header.appendChild(heading);
            header.appendChild(dateNode);

            const excerptNode = document.createElement('p');
            excerptNode.style.margin = '0';
            excerptNode.style.fontSize = 'var(--wp--preset--font-size--small)';
            excerptNode.style.opacity = '0.8';
            excerptNode.textContent = excerpt;

            const divider = document.createElement('hr');
            divider.style.margin = 'var(--wp--preset--spacing--30) 0';
            divider.style.opacity = '0.1';

            item.appendChild(header);
            item.appendChild(excerptNode);
            item.appendChild(divider);

            return item;
        }

        function getPlainText(value) {
            const parser = document.createElement('div');
            parser.innerHTML = value || '';
            return parser.textContent || parser.innerText || '';
        }

        function getSafeUrl(value) {
            try {
                const url = new URL(value, window.location.origin);
                if (url.protocol === 'http:' || url.protocol === 'https:') {
                    return url.toString();
                }
            } catch (error) {
                return '';
            }

            return '';
        }
    });
});
