/* =========================================================
   NOORDWERKTSAMEN — PAGE MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nwt-about, ' +
                '.ng-nwt-voices, ' +
                '.ng-nwt-dialogue, ' +
                '.ng-nwt-harvest, ' +
                '.ng-nwt-final'
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
                    'is-nwt-motion-ready'
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
                                'is-nwt-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * After the entrance is complete,
                             * remove our animation state completely.
                             *
                             * This restores normal hover behaviour and
                             * prevents permanent transform wars.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nwt-motion-ready',
                                        'is-nwt-visible'
                                    );

                                },
                                2300
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


        sections.forEach(
            function (section) {

                observer.observe(
                    section
                );

            }
        );

    }
);


