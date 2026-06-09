document.addEventListener('DOMContentLoaded', function() {
    const dropdownParents = document.querySelectorAll('.wp-block-navigation-item.has-child');

    dropdownParents.forEach(parent => {
        const checkBoundary = () => {
            const submenu = parent.querySelector('.wp-block-navigation__submenu-container');
            if (!submenu) return;

            // Reset classes first
            submenu.classList.remove('is-align-right', 'is-align-top');

            // Get rect
            const rect = submenu.getBoundingClientRect();
            
            // If the element is hidden (display: none), getBoundingClientRect might return 0
            if (rect.width === 0 && rect.height === 0) {
                // Temporarily show it invisibly to get dimensions
                submenu.style.visibility = 'hidden';
                submenu.style.display = 'flex';
                
                const tempRect = submenu.getBoundingClientRect();
                
                if (tempRect.right > window.innerWidth) submenu.classList.add('is-align-right');
                if (tempRect.bottom > window.innerHeight) submenu.classList.add('is-align-top');
                
                submenu.style.visibility = '';
                submenu.style.display = '';
            } else {
                if (rect.right > window.innerWidth) submenu.classList.add('is-align-right');
                if (rect.bottom > window.innerHeight) submenu.classList.add('is-align-top');
            }
        };

        // Attach listeners
        parent.addEventListener('mouseenter', checkBoundary);
        parent.addEventListener('focusin', checkBoundary);
        
        // Also listen for WordPress interactivity API clicks (for click-to-open menus)
        const toggleBtn = parent.querySelector('.wp-block-navigation-submenu__toggle');
        if (toggleBtn) toggleBtn.addEventListener('click', () => setTimeout(checkBoundary, 10));
    });
});
