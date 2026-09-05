/* =========================================================
   NOORDBUITEN ACTIVITEITEN — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nba-intro, ' +
                '.ng-nba-feature, ' +
                '.ng-nba-stories, ' +
                '.ng-nba-cas, ' +
                '.ng-nba-year'
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
                    'is-nba-motion-ready'
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
                                'is-nba-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nba-motion-ready',
                                        'is-nba-visible'
                                    );

                                },
                                2000
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


