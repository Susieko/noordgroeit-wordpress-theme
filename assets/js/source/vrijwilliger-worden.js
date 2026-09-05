/* =========================================================
   VRIJWILLIGER WORDEN — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-vol-page'
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
         * Shared inner hero already has its own
         * entrance animation.
         */

        const sections =
            page.querySelectorAll(
                '.ng-vol-intro, ' +
                '.ng-vw-possibilities, ' +
                '.ng-vol-open, ' +
                '.ng-vol-story, ' +
                '.ng-vol-final'
            );


        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-vol-motion-ready'
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
                                'is-vol-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Once the entrance has played,
                             * remove motion classes so the
                             * original CSS owns everything again.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-vol-motion-ready',
                                        'is-vol-visible'
                                    );

                                },
                                1800
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


