/**
 * System Carousel (Splide.js Initialization)
 *
 * Automatically converts blocks with the "System Carousel" style into premium Splide sliders.
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // Safety check in case Splide didn't load
    if (typeof Splide === 'undefined') {
        console.warn('Splide.js is not loaded.');
        return;
    }

    // Initialize Global Registry
    window.systemCarousels = window.systemCarousels || {};

    const carousels = document.querySelectorAll('.is-style-system-carousel, .is-style-system-carousel-auto, .is-style-system-carousel-multi');

    carousels.forEach(carousel => {
        // Prevent double initialization
        if (carousel.classList.contains('is-initialized')) return;

        // 1. Dynamic ID Generation (Styleable Token)
        if (!carousel.id) {
            carousel.id = 'system-carousel-' + Math.random().toString(36).substr(2, 9);
        }

        // 2. Identify the container holding the actual slides
        let container = carousel;
        let innerContainer = carousel.querySelector('.wp-block-group__inner-container');
        
        if (innerContainer) {
            container = innerContainer;
        }

        let isList = false;
        // If the container only has a single UL child (e.g. Latest Posts), the UL holds the slides
        if (container.children.length === 1 && container.children[0].tagName.toLowerCase() === 'ul') {
            container = container.children[0];
            isList = true;
        }

        const slides = Array.from(container.children);
        if (slides.length === 0) return;

        // Capture gap before we remove the fallback CSS by adding .is-initialized
        let computedGap = getComputedStyle(carousel).gap;
        let sliderGap = (computedGap && computedGap !== 'normal' && computedGap !== '') ? computedGap : '1.5rem';

        // 3. Build the Splide DOM structure
        carousel.classList.add('splide', 'is-initialized');

        const track = document.createElement('div');
        track.className = 'splide__track';
        
        // If the original container was a UL, we can reuse it as the splide__list
        let list;
        if (isList) {
            list = container;
            list.classList.add('splide__list');
            list.parentNode.insertBefore(track, list);
            track.appendChild(list);
        } else {
            list = document.createElement('div');
            list.className = 'splide__list';
            track.appendChild(list);
            
            // Move slides into the new list wrapper
            slides.forEach(slide => {
                // Safari Nuclear Fix: Wrap the complex Gutenberg block in a pure DOM element
                const wrapper = document.createElement('div');
                wrapper.className = 'splide__slide system-slide-wrapper';
                wrapper.appendChild(slide);
                list.appendChild(wrapper);
            });
            
            // Append track to the original container
            container.appendChild(track);
        }

        // Ensure all slides have the required class (if it was a native list)
        if (isList) {
            slides.forEach(slide => {
                slide.classList.add('splide__slide');
            });
        }

        // Safari Fix: Remove lazy loading from images inside the carousel before Splide measures them
        const images = carousel.querySelectorAll('img');
        images.forEach(img => {
            if (img.getAttribute('loading') === 'lazy') {
                img.removeAttribute('loading');
            }
        });

        // 4. Determine Splide Settings
        const isAuto = carousel.classList.contains('is-style-system-carousel-auto') || carousel.classList.contains('is-style-system-carousel-multi');
        
        let splideOptions = {
            type: 'slide',
            rewind: true,
            pagination: true,
            arrows: false,
            drag: true,
            snap: true, // Forces drag to snap to the nearest image boundary instead of stopping midway
            autoWidth: isAuto ? true : false, // Safely use autoWidth for multi-item sliders
            gap: `calc(${sliderGap} - (var(--wp--preset--spacing--20, 0.5rem) * 2))`
        };

        if (!isAuto) {
            // Standard carousel shows 1 item at a time
            splideOptions.perPage = 1;
        } else {
            splideOptions.focus = 0; // Essential for snap: true to know where to align autoWidth slides
            splideOptions.omitEnd = true; // Prevents empty space at the end of the track
        }

        // 5. Mount Splide
        const splideInstance = new Splide(carousel, splideOptions);
        splideInstance.mount();

        // 6. Register in Global API
        window.systemCarousels[carousel.id] = splideInstance;

        // 7. Bind custom Gutenberg navigation arrows if present
        const parentWrapper = carousel.parentElement ? carousel.parentElement.closest('.wp-block-group') : null;
        if (parentWrapper) {
            const prevBtn = parentWrapper.querySelector('.carousel-prev');
            const nextBtn = parentWrapper.querySelector('.carousel-next');

            if (prevBtn) {
                const prevLink = prevBtn.querySelector('.wp-block-button__link') || prevBtn;
                prevLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    splideInstance.go('<');
                });
            }

            if (nextBtn) {
                const nextLink = nextBtn.querySelector('.wp-block-button__link') || nextBtn;
                nextLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    splideInstance.go('>');
                });
            }
        }
    });
});
