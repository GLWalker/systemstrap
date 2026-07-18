document.addEventListener('DOMContentLoaded', function () {
    var carouselSelector = '.is-style-system-carousel-auto';
    var previewRoot = document.querySelector('.editor-styles-wrapper') || document.body;
    var pendingFrame = 0;

    function getDirectInnerContainer(carousel) {
        return Array.from(carousel.children).find(function (child) {
            return child.classList && child.classList.contains('wp-block-group__inner-container');
        }) || null;
    }

    function getDirectSlideContainer(carousel) {
        var container = getDirectInnerContainer(carousel) || carousel;
        var directChildren = Array.from(container.children);
        var firstChild = directChildren[0];

        if (
            directChildren.length === 1 &&
            firstChild &&
            firstChild.tagName &&
            firstChild.tagName.toLowerCase() === 'ul'
        ) {
            return firstChild;
        }

        return container;
    }

    function getDirectSlides(container) {
        return Array.from(container.children).filter(function (child) {
            return child.nodeType === 1;
        });
    }

    function getRelevantImageFigures(slides) {
        var relevantFigures = [];
        var index;
        var slide;

        for (index = 0; index < slides.length; index += 1) {
            slide = slides[index];

            if (!slide.classList || !slide.classList.contains('wp-block-image')) {
                return [];
            }

            relevantFigures.push(slide);
        }

        return relevantFigures;
    }

    function detectThumbnailMode(slides) {
        var relevantFigures = getRelevantImageFigures(slides);

        if (!relevantFigures.length) {
            return 'thumbnail';
        }

        return relevantFigures.every(function (figure) {
            return figure.classList.contains('size-medium');
        }) ? 'medium' : 'thumbnail';
    }

    function applyThumbnailMode(carousel) {
        var slides = getDirectSlides(getDirectSlideContainer(carousel));
        var mode = detectThumbnailMode(slides);

        carousel.classList.toggle('is-system-thumb-medium', mode === 'medium');
        carousel.classList.toggle('is-system-thumb-thumbnail', mode !== 'medium');
    }

    function syncThumbnailModes(scope) {
        var root = scope || document;

        if (root.matches && root.matches(carouselSelector)) {
            applyThumbnailMode(root);
        }

        root.querySelectorAll(carouselSelector).forEach(function (carousel) {
            applyThumbnailMode(carousel);
        });
    }

    function scheduleSync(scope) {
        if (pendingFrame) {
            return;
        }

        pendingFrame = window.requestAnimationFrame(function () {
            pendingFrame = 0;
            syncThumbnailModes(scope || previewRoot);
        });
    }

    syncThumbnailModes(previewRoot);

    if (typeof MutationObserver !== 'undefined' && previewRoot) {
        (new MutationObserver(function (mutations) {
            var affectedCarousel = null;

            mutations.some(function (mutation) {
                if (mutation.target && mutation.target.closest) {
                    affectedCarousel = mutation.target.closest(carouselSelector);
                }

                if (!affectedCarousel && mutation.addedNodes) {
                    affectedCarousel = Array.from(mutation.addedNodes).find(function (node) {
                        return node.nodeType === 1 && node.matches && node.matches(carouselSelector);
                    }) || null;
                }

                return !!affectedCarousel;
            });

            scheduleSync(affectedCarousel || previewRoot);
        })).observe(previewRoot, {
            childList: true,
            subtree: true,
            attributes: true,
            attributeFilter: [ 'class' ],
        });
    }
});
