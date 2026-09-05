/* =========================================================
   NIEUWS & AGENDA — PAGE MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-na-page'
            );


        if (!page) {
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
         * Shared hero already has its own animation.
         * Start below the hero.
         */

        const sections =
            page.querySelectorAll(
                '.ng-na-next, ' +
                '.ng-na-agenda, ' +
                '.ng-na-news, ' +
                '.ng-na-lookback, ' +
                '.ng-na-letter'
            );


        if (!sections.length) {
            return;
        }


        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-na-motion-ready'
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
                                'is-na-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Entrance done:
                             * restore original CSS completely.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-na-motion-ready',
                                        'is-na-visible'
                                    );

                                },
                                1900
                            );

                        }
                    );

                },
                {
                    threshold: .13,

                    rootMargin:
                        '0px 0px -7% 0px'
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


