/* =========================================================
   NOORDBUITEN — PAGE MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nb-story, ' +
                '.ng-nb-grow, ' +
                '.ng-nb-life, ' +
                '.ng-nb-alive, ' +
                '.ng-nb-wednesday, ' +
                '.ng-nb-together'
            );


        if (!sections.length) {
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


        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-nb-motion-ready'
                );

            }
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            const section =
                                entry.target;


                            section.classList.add(
                                'is-nb-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Restore normal hover/transform behaviour
                             * after entrance sequence.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nb-motion-ready',
                                        'is-nb-visible'
                                    );

                                },
                                2300
                            );

                        }
                    );

                },
                {
                    threshold: .13,

                    rootMargin:
                        '0px 0px -6% 0px'
                }
            );


        /*
         * Paint the motion-ready state before observing.
         * This prevents an already-visible first section
         * from skipping its entrance transition.
         */
        window.requestAnimationFrame(
            function () {

                window.requestAnimationFrame(
                    function () {

                        sections.forEach(
                            function (section) {

                                observer.observe(
                                    section
                                );

                            }
                        );

                    }
                );

            }
        );

    }
);


document.addEventListener(
    'DOMContentLoaded',
    function () {

        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        const revealGroups = [

            document.querySelector(
                '[data-nbp-intro]'
            ),

            ...document.querySelectorAll(
                '[data-nbp-reveal]'
            ),

            document.querySelector(
                '[data-nbp-board]'
            ),

            document.querySelector(
                '[data-nbp-blueprint]'
            ),

            document.querySelector(
                '[data-nbp-growth]'
            )

        ].filter(Boolean);


        if (!revealGroups.length) {
            return;
        }


        revealGroups.forEach(
            function (item) {

                if (reducedMotion) {

                    item.classList.add(
                        'is-in-view'
                    );

                    return;
                }


                item.classList.add(
                    'is-animatable'
                );


                if (
                    !('IntersectionObserver' in window)
                ) {

                    item.classList.add(
                        'is-in-view'
                    );

                    return;
                }


                const observer =
                    new IntersectionObserver(
                        function (entries) {

                            entries.forEach(
                                function (entry) {

                                    if (!entry.isIntersecting) {
                                        return;
                                    }


                                    item.classList.add(
                                        'is-in-view'
                                    );


                                    observer.unobserve(
                                        item
                                    );

                                }
                            );

                        },
                        {
                            threshold: 0.22,

                            rootMargin:
                                '0px 0px -8% 0px'
                        }
                    );


                observer.observe(
                    item
                );

            }
        );

    }
);


