/* =========================================================
   NOORDBUITEN — BEZOEKEN MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nbv-hero, ' +
                '.ng-nbv-find, ' +
                '.ng-nbv-look, ' +
                '.ng-nbv-end'
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
                    'is-nbv-motion-ready'
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
                                'is-nbv-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Entrance is finished.
                             * Return full control to
                             * the original page CSS.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nbv-motion-ready',
                                        'is-nbv-visible'
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


