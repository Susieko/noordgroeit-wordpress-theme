/* =========================================================
   HOME MOTION — 02 VALUES
   Samen · Veilig · Gezond · Voor iedereen
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const strip =
            document.querySelector(
                '.ng-values-strip'
            );


        if (!strip) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        /*
         * Only hide things after JS is confirmed.
         * If JS fails, everything remains visible.
         */

        strip.classList.add(
            'is-values-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            strip.classList.add(
                                'is-values-visible'
                            );


                            observer.disconnect();

                        }
                    );

                },
                {
                    threshold: .3,
                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(strip);

    }
);


/* =========================================================
   HOME MOTION — 03 OVER NOORDGROEIT
   Community window
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-origin'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-origin-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-origin-visible'
                            );


                            observer.disconnect();


                            /*
                             * Remove temporary entrance classes afterwards.
                             * This keeps Missie / Visie hover transforms free.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-origin-motion-ready',
                                        'is-origin-visible'
                                    );

                                },
                                1800
                            );

                        }
                    );

                },
                {
                    threshold: .16,

                    rootMargin:
                        '0px 0px -7% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 04 INITIATIVES
   Exhibition fan-out
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-coverflow-section'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-initiatives-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-initiatives-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance finished:
                             * hand everything back to the normal
                             * carousel CSS.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-initiatives-motion-ready',
                                        'is-initiatives-visible'
                                    );

                                },
                                1700
                            );

                        }
                    );

                },
                {
                    threshold: .14,

                    rootMargin:
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 05 NOORDBUITEN
   Photographic landscape
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-nb-landscape'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-nb-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-nb-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance is temporary.
                             * Afterwards all hover/click/image-switch
                             * behaviour is completely free again.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nb-motion-ready',
                                        'is-nb-visible'
                                    );

                                },
                                1800
                            );

                        }
                    );

                },
                {
                    threshold: .14,

                    rootMargin:
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 06 DOE MEE
   Start the existing journey on arrival
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-join-circle'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-join-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-join-visible'
                            );


                            observer.disconnect();

                        }
                    );

                },
                {
                    threshold: .18,

                    rootMargin:
                        '0px 0px -8% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 07 ACTUALITEIT
   Editorial newsroom reveal
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-pulse'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-pulse-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-pulse-visible'
                            );


                            observer.disconnect();


                            /*
                             * Remove entrance state afterwards
                             * so all existing hover interactions
                             * remain completely normal.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-pulse-motion-ready',
                                        'is-pulse-visible'
                                    );

                                },
                                1900
                            );

                        }
                    );

                },
                {
                    threshold: .12,

                    rootMargin:
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 08 PARTNERS
   Reveal + start marquee on arrival
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-partner-section'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-partner-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-partner-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance helpers can disappear afterwards.
                             * The marquee keeps its normal own animation.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-partner-motion-ready',
                                        'is-partner-visible'
                                    );

                                },
                                1700
                            );

                        }
                    );

                },
                {
                    threshold: .16,

                    rootMargin:
                        '0px 0px -7% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 09 FINAL SUPPORT CTA
   Final flourish
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.support-closing-section'
            );


        if (!section) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-support-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            section.classList.add(
                                'is-support-visible'
                            );


                            observer.disconnect();


                            /*
                             * Remove entrance helpers afterwards
                             * so normal hover states remain untouched.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-support-motion-ready',
                                        'is-support-visible'
                                    );

                                },
                                1600
                            );

                        }
                    );

                },
                {
                    threshold: .14,

                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(section);

    }
);

/* Homepage scroll reveals */
document.addEventListener('DOMContentLoaded', function () {

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    /*
     * Leave everything naturally visible when motion is disabled
     * or IntersectionObserver is unavailable.
     */
    if (
        reducedMotion ||
        !('IntersectionObserver' in window)
    ) {
        return;
    }


    /*
     * Add reveal behaviour without cluttering the PHP markup
     * with animation classes.
     */
    const revealSelections = [

        /* About NoordgroeiT */
        {
            selector: '.ng-field-intro',
            variant: ''
        },
        {
            selector: '.ng-field-photo',
            variant: 'ng-scroll-reveal--image'
        },
        {
            selector: '.ng-field-purpose',
            variant: ''
        },

        /* Initiatives */
        {
            selector: '.ng-coverflow-heading',
            variant: ''
        },
        {
            selector: '.ng-coverflow',
            variant: 'ng-scroll-reveal--image'
        },
        /* NoordbuiTen */
        {
            selector: '.ng-nb-identity',
            variant: 'ng-scroll-reveal--left'
        },
        {
            selector: '.ng-nb-copy',
            variant: 'ng-scroll-reveal--right'
        },
        {
            selector: '.ng-nb-footer',
            variant: ''
        },

        /* Join section */
        {
            selector: '.join-clean-heading',
            variant: ''
        },
        {
            selector: '.join-reviews-heading',
            variant: ''
        },
        {
            selector: '.join-action',
            variant: ''
        },

        /* News and agenda */
        {
            selector: '.ng-live-heading',
            variant: ''
        },
        {
            selector: '.ng-news-editorial-heading',
            variant: ''
        },
        {
            selector: '.ng-live-agenda',
            variant: 'ng-scroll-reveal--right'
        },

        /* Partners */
        {
            selector: '.ng-partner-heading',
            variant: ''
        },
        {
            selector: '.ng-partner-marquee',
            variant: ''
        },
        {
            selector: '.ng-partner-footer',
            variant: ''
        },

        /* Final support chapter */
        {
            selector: '.support-closing-copy',
            variant: 'ng-scroll-reveal--left'
        },
        {
            selector: '.support-closing-side',
            variant: 'ng-scroll-reveal--right'
        }
    ];


    const preparedElements = new Set();


    function prepareElement(element, variant, delay) {
        if (!element || preparedElements.has(element)) {
            return;
        }

        element.classList.add('ng-scroll-reveal');

        if (variant) {
            element.classList.add(variant);
        }

        element.style.setProperty(
            '--ng-reveal-delay',
            delay + 'ms'
        );

        element.dataset.revealVariant = variant || '';
        element.dataset.revealDelay = delay;

        preparedElements.add(element);
    }


    /*
     * Prepare individual section elements.
     */
    revealSelections.forEach(function (selection) {
        document
            .querySelectorAll(selection.selector)
            .forEach(function (element) {
                prepareElement(
                    element,
                    selection.variant,
                    0
                );
            });
    });


    /*
     * Repeated elements reveal one after another.
     */
    const staggeredGroups = [
        {
            parent: '.ng-nb-gallery',
            children: '.ng-nb-photo',
            variant: 'ng-scroll-reveal--image',
            step: 90
        },
        {
            parent: '.expectation-grid',
            children: '.expectation-card',
            variant: '',
            step: 85
        },
        {
            parent: '.join-reviews-grid',
            children: '.join-review-card',
            variant: '',
            step: 100
        },
        {
            parent: '.ng-news-editorial-list',
            children: '.ng-news-story',
            variant: '',
            step: 90
        }
    ];


    staggeredGroups.forEach(function (groupSettings) {
        document
            .querySelectorAll(groupSettings.parent)
            .forEach(function (group) {

                group
                    .querySelectorAll(groupSettings.children)
                    .forEach(function (element, index) {

                        prepareElement(
                            element,
                            groupSettings.variant,
                            Math.min(
                                index * groupSettings.step,
                                270
                            )
                        );

                    });

            });
    });


    /*
     * Reveal each element once it enters the viewport.
     */
    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                const element = entry.target;
                const delay = parseInt(
                    element.dataset.revealDelay || '0',
                    10
                );

                element.classList.add('is-visible');
                observer.unobserve(element);


                /*
                 * Remove the temporary animation classes afterwards.
                 * This ensures existing hover transforms keep working.
                 */
                window.setTimeout(function () {
                    const variant =
                        element.dataset.revealVariant;

                    element.classList.remove(
                        'ng-scroll-reveal',
                        'is-visible'
                    );

                    if (variant) {
                        element.classList.remove(variant);
                    }

                    element.style.removeProperty(
                        '--ng-reveal-delay'
                    );

                    delete element.dataset.revealVariant;
                    delete element.dataset.revealDelay;

                }, 900 + delay);
            });
        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -8% 0px'
        }
    );


    preparedElements.forEach(function (element) {
        observer.observe(element);
    });

});

