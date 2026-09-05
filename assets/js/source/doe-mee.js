/* =========================================================
   DOE MEE — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-dm-entry, ' +
                '.ng-dm-volunteer, ' +
                '.ng-dm-idea, ' +
                '.ng-dm-collab, ' +
                '.ng-dm-final'
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
                    'is-dm-motion-ready'
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
                                'is-dm-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Motion finished.
                             * Give control back to original CSS.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-dm-motion-ready',
                                        'is-dm-visible'
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


