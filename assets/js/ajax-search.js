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
            let html = '';
            
            posts.forEach((post, index) => {
                // Format the date
                const date = new Date(post.date).toLocaleDateString(undefined, {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                });

                // Strip HTML from excerpt and limit length
                let excerpt = post.excerpt.rendered.replace(/(<([^>]+)>)/gi, "");
                if (excerpt.length > 120) {
                    excerpt = excerpt.substring(0, 120) + '...';
                }

                html += `
                <div class="strap-search-result-item" style="animation: strap-zoom-in 0.3s ease-out both; animation-delay: ${index * 0.05}s;">
                    <div style="display:flex; justify-content:space-between; align-items:baseline; margin-bottom: 0.5rem; gap: 1rem;">
                        <h5 style="margin:0; font-size: var(--wp--preset--font-size--medium);"><a href="${post.link}" style="text-decoration:none; color:inherit;">${post.title.rendered}</a></h5>
                        <small style="opacity:0.6; white-space:nowrap; font-size: var(--wp--preset--font-size--small);">${date}</small>
                    </div>
                    <p style="margin: 0; font-size: var(--wp--preset--font-size--small); opacity: 0.8;">${excerpt}</p>
                    <hr style="margin: var(--wp--preset--spacing--30) 0; opacity: 0.1;">
                </div>
                `;
            });

            resultsList.innerHTML = html;
        }

        function updatePaginationButtons() {
            if (btnPrev) {
                if (currentPage <= 1) {
                    btnPrev.style.opacity = '0.3';
                    btnPrev.style.pointerEvents = 'none';
                } else {
                    btnPrev.style.opacity = '1';
                    btnPrev.style.pointerEvents = 'auto';
                }
            }

            if (btnNext) {
                if (currentPage >= totalPages || totalPages === 0) {
                    btnNext.style.opacity = '0.3';
                    btnNext.style.pointerEvents = 'none';
                } else {
                    btnNext.style.opacity = '1';
                    btnNext.style.pointerEvents = 'auto';
                }
            }
        }
    });
});
