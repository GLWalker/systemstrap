/**
 * System Carousel (Splide.js Initialization)
 *
 * Automatically converts SystemStrap carousel variations into Splide sliders.
 */

document.addEventListener('DOMContentLoaded', function () {
    var resolvedTemplateUri = (typeof systemstrap !== 'undefined' && systemstrap.templateUri)
        ? systemstrap.templateUri
        : '/wp-content/themes/systemstrap/';
    var carouselSelector = '.is-style-system-carousel, .is-style-system-carousel-auto, .is-style-system-carousel-multi';
    var reducedMotionQuery = window.matchMedia ? window.matchMedia('(prefers-reduced-motion: reduce)') : null;

    if (typeof Splide === 'undefined') {
        console.warn('Splide.js is not loaded.');
        return;
    }

    window.systemCarousels = window.systemCarousels || {};

    function parseCssLength(value, fallback, contextElement) {
        var parsed;
        var rootFontSize;
        var contextFontSize;
        var trimmedValue = String(value || '').trim();

        if (!trimmedValue || trimmedValue === 'normal') {
            return fallback;
        }

        parsed = parseFloat(trimmedValue);

        if (!Number.isFinite(parsed)) {
            return fallback;
        }

        if (trimmedValue.endsWith('rem')) {
            rootFontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
            return Number.isFinite(rootFontSize) ? parsed * rootFontSize : fallback;
        }

        if (trimmedValue.endsWith('em')) {
            contextFontSize = parseFloat(getComputedStyle(contextElement || document.documentElement).fontSize);
            return Number.isFinite(contextFontSize) ? parsed * contextFontSize : fallback;
        }

        return parsed;
    }

    function normalizeThemePlaceholderImage(image) {
        var source = image.getAttribute('src');
        var marker = 'wp-content/themes/systemstrap/';
        var relativePath;

        if (!source || source.indexOf(marker) === -1 || /^https?:\/\//i.test(source)) {
            return;
        }

        relativePath = source.slice(source.indexOf(marker) + marker.length);
        image.setAttribute('src', resolvedTemplateUri + relativePath);
    }

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
            return {
                container: firstChild,
                isList: true,
            };
        }

        return {
            container: container,
            isList: false,
        };
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

    function applyThumbnailModeClasses(carousel, mode) {
        carousel.classList.toggle('is-system-thumb-medium', mode === 'medium');
        carousel.classList.toggle('is-system-thumb-thumbnail', mode !== 'medium');
    }

    function resolveJustificationValue(element) {
        if (!element || !element.classList) {
            return '';
        }

        if (element.classList.contains('is-content-justification-left')) {
            return 'flex-start';
        }

        if (element.classList.contains('is-content-justification-right')) {
            return 'flex-end';
        }

        if (element.classList.contains('is-content-justification-space-between')) {
            return 'space-between';
        }

        if (element.classList.contains('is-content-justification-center')) {
            return 'center';
        }

        return '';
    }

    function resolveBlockJustification(carousel, wrapper) {
        var outerGroup = wrapper && wrapper.parentElement ? wrapper.parentElement.closest('.wp-block-group') : null;
        var justification = resolveJustificationValue(carousel);

        if (!justification) {
            justification = resolveJustificationValue(wrapper);
        }

        if (!justification) {
            justification = resolveJustificationValue(outerGroup);
        }

        return justification || 'center';
    }

    function isCenterOutCarousel(carousel) {
        var wrapper = carousel ? carousel.closest('.system-carousel-wrapper') : null;
        var outerGroup = wrapper && wrapper.parentElement ? wrapper.parentElement.closest('.wp-block-group') : null;

        return !!(outerGroup && outerGroup.classList.contains('has-nav-center-out'));
    }

    function resolveCarouselGap(carousel) {
        var styles = getComputedStyle(carousel);
        var gapCandidates = [
            styles.columnGap,
            styles.gap,
            styles.getPropertyValue('--wp--style--block-gap'),
            styles.getPropertyValue('--wp--preset--spacing--30'),
            '1.5rem',
        ];
        var index;
        var value;

        for (index = 0; index < gapCandidates.length; index += 1) {
            value = String(gapCandidates[index] || '').trim();

            if (value && value !== 'normal') {
                return value;
            }
        }

        return '1.5rem';
    }

    function createCarouselId() {
        if (window.crypto && typeof window.crypto.randomUUID === 'function') {
            return 'system-carousel-' + window.crypto.randomUUID();
        }

        return 'system-carousel-' + Math.random().toString(36).slice(2, 11);
    }

    function buildSplideMarkup(carousel, slideContainer, slides, isList) {
        var track = document.createElement('div');
        var list;

        track.className = 'splide__track';

        if (isList) {
            list = slideContainer;
            list.classList.add('splide__list');
            list.parentNode.insertBefore(track, list);
            track.appendChild(list);

            slides.forEach(function (slide) {
                slide.classList.add('splide__slide', 'system-slide-wrapper');
            });
        } else {
            list = document.createElement('div');
            list.className = 'splide__list';
            track.appendChild(list);

            slides.forEach(function (slide) {
                var wrapper = document.createElement('div');

                wrapper.className = 'splide__slide system-slide-wrapper';
                wrapper.appendChild(slide);
                list.appendChild(wrapper);
            });

            slideContainer.appendChild(track);
        }

        return {
            list: list,
            track: track,
        };
    }

    function detectCarouselType(carousel, isList) {
        var isAuto = carousel.classList.contains('is-style-system-carousel-auto');
        var isMulti = carousel.classList.contains('is-style-system-carousel-multi');

        return {
            isAuto: isAuto,
            isAutoListCarousel: isAuto && isList,
            isList: isList,
            isMulti: isMulti,
            isStandard: !isAuto && !isMulti,
            isThumbnailCarousel: isAuto && !isList,
        };
    }

    function createBaseSplideOptions(carouselType, sliderGap) {
        var options = {
            type: 'slide',
            rewind: true,
            pagination: true,
            arrows: false,
            drag: true,
            snap: true,
            gap: sliderGap,
        };

        if (reducedMotionQuery && reducedMotionQuery.matches) {
            options.speed = 0;
            options.rewindSpeed = 0;
        }

        if (carouselType.isStandard) {
            options.perPage = 1;
            options.autoWidth = false;
            return options;
        }

        if (carouselType.isMulti) {
            options.perPage = 3;
            options.autoWidth = false;
            options.breakpoints = {
                899: {
                    perPage: 2,
                },
                599: {
                    perPage: 1,
                },
            };
            return options;
        }

        if (carouselType.isAutoListCarousel) {
            options.perPage = 3;
            options.autoWidth = false;
            options.focus = 0;
            options.omitEnd = true;
            options.breakpoints = {
                899: {
                    perPage: 2,
                },
                599: {
                    perPage: 1,
                },
            };
        }

        return options;
    }

    function getDensityCap(mode, carousel) {
        var isMobile = window.matchMedia && window.matchMedia('(max-width: 599px)').matches;
        var isTablet = !isMobile && window.matchMedia && window.matchMedia('(max-width: 899px)').matches;
        var isCenterOut = isCenterOutCarousel(carousel);
        var cap;

        if (mode === 'medium') {
            if (isMobile) {
                cap = 1;
            } else if (isTablet) {
                cap = 3;
            } else {
                cap = 4;
            }
        } else if (isMobile) {
            cap = 3;
        } else if (isTablet) {
            cap = 4;
        } else {
            cap = 5;
        }

        if (isCenterOut) {
            cap -= 1;
        }

        return Math.max(1, cap);
    }

    function resolveThumbnailLayout(trackWidth, slideCount, mode, gapPx, gutterPx, thumbnailWidth, mediumWidth, carousel) {
        var preferredWidth = mode === 'medium' ? mediumWidth : thumbnailWidth;
        var minimumWidth = Math.max(72, Math.round(preferredWidth * (mode === 'medium' ? 0.6 : 0.8)));
        var usableWidth = Math.max(1, Math.floor(trackWidth - (gutterPx * 2) - 2));
        var visibleCount = Math.max(1, Math.min(slideCount, getDensityCap(mode, carousel)));
        var renderedWidth = Math.min(preferredWidth, usableWidth);
        var candidateWidth;
        var totalContentWidth;
        var underflowWidth;

        while (visibleCount > 1) {
            candidateWidth = Math.floor(
                (usableWidth - (gapPx * Math.max(0, visibleCount - 1))) / visibleCount
            );

            if (candidateWidth >= minimumWidth) {
                renderedWidth = Math.min(preferredWidth, candidateWidth);
                break;
            }

            visibleCount -= 1;
        }

        if (visibleCount === 1) {
            renderedWidth = Math.min(preferredWidth, usableWidth);
        }

        renderedWidth = Math.max(1, renderedWidth);
        totalContentWidth = (renderedWidth * slideCount) + (gapPx * Math.max(0, slideCount - 1));
        underflowWidth = Math.min(trackWidth, totalContentWidth + (gutterPx * 2));

        return {
            preferredWidth: preferredWidth,
            renderedWidth: renderedWidth,
            totalContentWidth: totalContentWidth,
            underflowWidth: underflowWidth,
            usableWidth: usableWidth,
            visibleCount: visibleCount,
        };
    }

    function applyThumbnailLayout(carousel, list, splideInstance, mode) {
        var styles = getComputedStyle(carousel);
        var track = carousel.querySelector('.splide__track');
        var stableWidth;
        var gapPx;
        var gutterPx;
        var thumbnailWidth;
        var mediumWidth;
        var slideCount;
        var layout;
        var isUnderflow;
        var meta = carousel._systemCarouselMeta || {};
        var nextState;
        var isCenterOut = isCenterOutCarousel(carousel);

        if (!track) {
            return;
        }

        gapPx = parseCssLength(resolveCarouselGap(carousel), 24, carousel);
        gutterPx = parseCssLength(styles.getPropertyValue('--system-carousel-thumb-gutter'), 16, carousel);
        thumbnailWidth = parseCssLength(styles.getPropertyValue('--wp--custom--thumbnail-width'), 150, carousel);
        mediumWidth = parseCssLength(styles.getPropertyValue('--wp--custom--medium-width'), 300, carousel);
        slideCount = list.children.length;
        stableWidth = Math.floor(
            carousel.getBoundingClientRect().width ||
            carousel.clientWidth ||
            track.clientWidth ||
            0
        );
        layout = resolveThumbnailLayout(
            stableWidth,
            slideCount,
            mode,
            gapPx,
            gutterPx,
            thumbnailWidth,
            mediumWidth,
            carousel
        );
        isUnderflow = layout.totalContentWidth <= layout.usableWidth + 1;
        nextState = JSON.stringify({
            gapPx: gapPx,
            gutterPx: gutterPx,
            isCenterOut: isCenterOut,
            isUnderflow: isUnderflow,
            stableWidth: stableWidth,
            preferredWidth: layout.preferredWidth,
            renderedWidth: layout.renderedWidth,
            underflowWidth: layout.underflowWidth,
            visibleCount: layout.visibleCount,
        });

        if (meta.lastThumbnailState === nextState) {
            return;
        }

        carousel.style.setProperty('--system-carousel-thumb-preferred-width', layout.preferredWidth + 'px');
        carousel.style.setProperty('--system-carousel-thumb-rendered-width', layout.renderedWidth + 'px');
        carousel.style.setProperty('--system-carousel-thumb-width', layout.renderedWidth + 'px');
        carousel.style.setProperty('--system-carousel-underflow-width', layout.underflowWidth + 'px');
        carousel.classList.toggle('is-thumbs-underflow', isUnderflow);

        splideInstance.options = {
            autoWidth: false,
            fixedWidth: layout.renderedWidth + 'px',
            rewind: false,
            focus: 0,
            perMove: 1,
            trimSpace: 'move',
            omitEnd: true,
            gap: gapPx + 'px',
            padding: {
                left: gutterPx + 'px',
                right: gutterPx + 'px',
            },
        };

        meta.lastThumbnailState = nextState;
        carousel._systemCarouselMeta = meta;
    }

    function scheduleThumbnailLayout(carousel, callback) {
        var meta = carousel._systemCarouselMeta || {};

        if (meta.frameId) {
            return;
        }

        meta.frameId = window.requestAnimationFrame(function () {
            meta.frameId = 0;
            callback();
        });

        carousel._systemCarouselMeta = meta;
    }

    function observeCarouselSize(carousel, callback) {
        var meta = carousel._systemCarouselMeta || {};
        var observeTarget = carousel.closest('.system-carousel-wrapper') || carousel.parentElement || carousel;

        if (typeof ResizeObserver === 'undefined') {
            meta.onResize = function () {
                scheduleThumbnailLayout(carousel, callback);
            };

            window.addEventListener('resize', meta.onResize);
            carousel._systemCarouselMeta = meta;
            return;
        }

        meta.resizeObserver = new ResizeObserver(function () {
            scheduleThumbnailLayout(carousel, callback);
        });
        meta.resizeObserver.observe(observeTarget);
        carousel._systemCarouselMeta = meta;
    }

    function updateNavigationState(carousel, splideInstance, prevLink, nextLink) {
        var atStart = splideInstance.index <= 0;
        var atEnd = splideInstance.index >= splideInstance.Components.Controller.getEnd();
        var rewindDisabled = splideInstance.options.rewind === false;

        prevLink.setAttribute('aria-controls', carousel.id);
        nextLink.setAttribute('aria-controls', carousel.id);
        prevLink.setAttribute('aria-label', 'Previous slide');
        nextLink.setAttribute('aria-label', 'Next slide');

        if (!rewindDisabled) {
            prevLink.removeAttribute('aria-disabled');
            nextLink.removeAttribute('aria-disabled');
            prevLink.removeAttribute('tabindex');
            nextLink.removeAttribute('tabindex');
            return;
        }

        if (atStart) {
            prevLink.setAttribute('aria-disabled', 'true');
            prevLink.setAttribute('tabindex', '-1');
        } else {
            prevLink.removeAttribute('aria-disabled');
            prevLink.removeAttribute('tabindex');
        }

        if (atEnd) {
            nextLink.setAttribute('aria-disabled', 'true');
            nextLink.setAttribute('tabindex', '-1');
        } else {
            nextLink.removeAttribute('aria-disabled');
            nextLink.removeAttribute('tabindex');
        }
    }

    function bindNavigation(carousel, splideInstance) {
        var wrapper = carousel.closest('.system-carousel-wrapper');
        var navGroup;
        var prevButton;
        var nextButton;
        var prevLink;
        var nextLink;

        if (!wrapper) {
            return;
        }

        navGroup = Array.from(wrapper.children).find(function (child) {
            return child.classList && child.classList.contains('system-carousel-nav-buttons');
        });

        if (!navGroup) {
            return;
        }

        prevButton = navGroup.querySelector('.carousel-prev');
        nextButton = navGroup.querySelector('.carousel-next');

        if (!prevButton || !nextButton) {
            return;
        }

        prevLink = prevButton.querySelector('.wp-block-button__link') || prevButton;
        nextLink = nextButton.querySelector('.wp-block-button__link') || nextButton;

        if (!prevLink.dataset.systemCarouselBound) {
            prevLink.addEventListener('click', function (event) {
                if (prevLink.getAttribute('aria-disabled') === 'true') {
                    event.preventDefault();
                    return;
                }

                event.preventDefault();
                splideInstance.go('<');
            });
            prevLink.dataset.systemCarouselBound = 'true';
        }

        if (!nextLink.dataset.systemCarouselBound) {
            nextLink.addEventListener('click', function (event) {
                if (nextLink.getAttribute('aria-disabled') === 'true') {
                    event.preventDefault();
                    return;
                }

                event.preventDefault();
                splideInstance.go('>');
            });
            nextLink.dataset.systemCarouselBound = 'true';
        }

        updateNavigationState(carousel, splideInstance, prevLink, nextLink);
        splideInstance.on('mounted moved updated refreshed', function () {
            updateNavigationState(carousel, splideInstance, prevLink, nextLink);
        });
    }

    function initializeCarousel(carousel) {
        var source;
        var slides;
        var thumbMode;
        var justification;
        var sliderGap;
        var carouselType;
        var markup;
        var images;
        var splideOptions;
        var splideInstance;

        if (
            carousel.dataset.systemCarouselReady === 'true' ||
            carousel.classList.contains('is-system-carousel-mounted')
        ) {
            return;
        }

        if (!carousel.id) {
            carousel.id = createCarouselId();
        }

        source = getDirectSlideContainer(carousel);
        slides = getDirectSlides(source.container);

        if (!slides.length) {
            return;
        }

        thumbMode = detectThumbnailMode(slides);
        applyThumbnailModeClasses(carousel, thumbMode);

        justification = resolveBlockJustification(carousel, carousel.closest('.system-carousel-wrapper'));
        carousel.style.setProperty('--system-carousel-content-justify', justification);

        sliderGap = resolveCarouselGap(carousel);
        carouselType = detectCarouselType(carousel, source.isList);
        markup = buildSplideMarkup(carousel, source.container, slides, source.isList);
        images = carousel.querySelectorAll('img');

        carousel.dataset.systemCarouselReady = 'true';
        carousel.classList.add('splide');

        if (carouselType.isThumbnailCarousel) {
            carousel.classList.add('is-system-thumbnail-carousel');
        }

        images.forEach(function (image) {
            normalizeThemePlaceholderImage(image);
        });

        splideOptions = createBaseSplideOptions(carouselType, sliderGap);

        if (carouselType.isThumbnailCarousel) {
            splideOptions.autoWidth = true;
            splideOptions.rewind = false;
            splideOptions.focus = 0;
            splideOptions.perMove = 1;
            splideOptions.trimSpace = 'move';
            splideOptions.omitEnd = true;
            splideOptions.padding = {
                left: getComputedStyle(carousel).getPropertyValue('--system-carousel-thumb-gutter').trim() || '1rem',
                right: getComputedStyle(carousel).getPropertyValue('--system-carousel-thumb-gutter').trim() || '1rem',
            };
        }

        splideInstance = new Splide(carousel, splideOptions);
        splideInstance.mount();

        carousel.classList.add('is-initialized', 'is-system-carousel-mounted');

        if (carouselType.isThumbnailCarousel) {
            applyThumbnailLayout(carousel, markup.list, splideInstance, thumbMode);
            observeCarouselSize(carousel, function () {
                applyThumbnailLayout(carousel, markup.list, splideInstance, thumbMode);
            });

            images.forEach(function (image) {
                if (!image.complete) {
                    image.addEventListener('load', function () {
                        scheduleThumbnailLayout(carousel, function () {
                            applyThumbnailLayout(carousel, markup.list, splideInstance, thumbMode);
                        });
                    }, { once: true });
                }
            });
        }

        bindNavigation(carousel, splideInstance);
        window.systemCarousels[carousel.id] = splideInstance;
    }

    function initializeAllCarousels(scope) {
        (scope || document).querySelectorAll(carouselSelector).forEach(function (carousel) {
            initializeCarousel(carousel);
        });
    }

    window.systemstrapInitCarousels = initializeAllCarousels;
    initializeAllCarousels(document);
});
