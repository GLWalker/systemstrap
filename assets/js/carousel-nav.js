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

    const carousels = document.querySelectorAll('.is-style-system-carousel, .is-style-system-carousel-auto, .is-style-system-carousel-multi');

    carousels.forEach(carousel => {
        // Prevent double initialization
        if (carousel.classList.contains('is-initialized')) return;

        // 1. Identify the container holding the actual slides
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

        // 2. Build the Splide DOM structure
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
                list.appendChild(slide);
            });
            
            // Append track to the original container
            container.appendChild(track);
        }

        // Ensure all slides have the required class
        slides.forEach(slide => {
            slide.classList.add('splide__slide');
        });

        // 3. Determine Splide Settings
        const isAuto = carousel.classList.contains('is-style-system-carousel-auto') || carousel.classList.contains('is-style-system-carousel-multi');
        
        let splideOptions = {
            type: 'slide',
            rewind: true,
            gap: sliderGap,
            pagination: true,
            arrows: false,
            drag: true,
        };

        if (isAuto) {
            // "Auto" style shows 3 on desktop, 2 on tablet, 1 on mobile
            splideOptions.perPage = 3;
            splideOptions.breakpoints = {
                899: {
                    perPage: 2,
                },
                599: {
                    perPage: 1,
                }
            };
        } else {
            // Standard carousel shows 1 item at a time (e.g. hero sliders)
            splideOptions.perPage = 1;
        }

        // 4. Mount Splide
        const splideInstance = new Splide(carousel, splideOptions);
        splideInstance.mount();

        // 5. Bind custom Gutenberg navigation arrows if present
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
