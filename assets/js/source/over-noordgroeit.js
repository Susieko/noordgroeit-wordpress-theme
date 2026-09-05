/* =========================================================
   OVER NOORDGROEIT MOTION — 02 STORY
   Origin + principles
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-over-story-v3'
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
            'is-story-motion-ready'
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
                                'is-story-visible'
                            );


                            observer.disconnect();


                            /*
                             * Temporary entrance state only.
                             * Afterwards the value-card hover
                             * transforms are completely free again.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-story-motion-ready',
                                        'is-story-visible'
                                    );

                                },
                                1750
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
   OVER NOORDGROEIT MOTION — 03 PROCESS
   Trigger existing circular journey
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-over-process'
            );


        const cycle =
            section
                ? section.querySelector(
                    '[data-over-cycle]'
                )
                : null;


        if (!section || !cycle) {
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
         * Progressive enhancement:
         * only hide the later cycle steps once we know
         * JS + IntersectionObserver are available.
         */

        cycle.classList.add(
            'is-animatable'
        );


        section.classList.add(
            'is-process-motion-ready'
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
                                'is-process-visible'
                            );


                            /*
                             * Give the heading a tiny moment first.
                             * Then start the circular story.
                             */

                            window.setTimeout(
                                function () {

                                    cycle.classList.add(
                                        'is-in-view'
                                    );

                                },
                                280
                            );


                            observer.disconnect();


                            /*
                             * Entrance helpers aren't needed forever.
                             * Keep cycle classes because they hold its
                             * final finished state.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-process-motion-ready',
                                        'is-process-visible'
                                    );

                                },
                                4300
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
   OVER NOORDGROEIT MOTION — 04 IDEA CTA
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-over-idea-cta'
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
            'is-idea-motion-ready'
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
                                'is-idea-visible'
                            );


                            observer.disconnect();


                            /*
                             * Release the elements afterwards
                             * so the existing hover animation
                             * on the circle works normally.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-idea-motion-ready',
                                        'is-idea-visible'
                                    );

                                },
                                1600
                            );

                        }
                    );

                },
                {
                    threshold: .16,

                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(section);

    }
);


