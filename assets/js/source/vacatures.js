/* =========================================================
   VACATURES — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-vac-intro, ' +
                '.ng-vac-list-section, ' +
                '.ng-vac-final'
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


        /* =====================================
           DYNAMIC VACANCY STAGGER
        ====================================== */

        document
            .querySelectorAll(
                '.ng-vac-item'
            )
            .forEach(
                function (item, index) {

                    item.style.setProperty(
                        '--vac-index',
                        index
                    );

                }
            );


        /* =====================================
           PREPARE
        ====================================== */

        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-vac-motion-ready'
                );

            }
        );


        /* =====================================
           OBSERVER
        ====================================== */

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
                                'is-vac-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Entrance complete.
                             * Restore original styles fully.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-vac-motion-ready',
                                        'is-vac-visible'
                                    );

                                },
                                1900
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


