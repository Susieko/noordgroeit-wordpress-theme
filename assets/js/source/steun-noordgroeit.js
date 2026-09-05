/* =========================================================
   STEUN NOORDGROEIT — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-support-give'
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


                            observer.unobserve(
                                section
                            );


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-support-motion-ready',
                                        'is-support-visible'
                                    );

                                },
                                1900
                            );

                        }
                    );

                },
                {
                    /*
                     * IMPORTANT:
                     * Don't trigger merely because the
                     * section peeks underneath the hero.
                     *
                     * It now waits until you've actually
                     * scrolled into the donation section.
                     */

                    threshold: 0.01,

                    rootMargin:
                        '0px 0px -65% 0px'
                }
            );


        observer.observe(section);

    }
);


