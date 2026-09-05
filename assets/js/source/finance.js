/* =========================================================
   FINANCE MOTION — 01 HERO
   Dossier entrance
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const hero =
            document.querySelector(
                '.ng-finance-hero-v2'
            );


        if (!hero) {
            return;
        }


        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        if (reducedMotion) {
            return;
        }


        /*
         * Progressive enhancement:
         * everything is visible normally.
         *
         * Only after JS is confirmed do we prepare
         * the entrance state.
         */

        hero.classList.add(
            'is-finance-hero-motion-ready'
        );


        /*
         * Give the browser one painted frame
         * in the prepared state.
         */

        requestAnimationFrame(
            function () {

                requestAnimationFrame(
                    function () {

                        hero.classList.add(
                            'is-finance-hero-visible'
                        );

                    }
                );

            }
        );


        /*
         * Entrance finished.
         *
         * Remove all temporary hero motion classes so
         * the existing dossier hover transforms and
         * button interactions are completely free again.
         */

        window.setTimeout(
            function () {

                hero.classList.remove(
                    'is-finance-hero-motion-ready',
                    'is-finance-hero-visible'
                );

            },
            1700
        );

    }
);


/* =========================================================
   FINANCE MOTION — 02 JOURNEY
   Middelen → inzet → resultaat
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-finance-journey'
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


        /*
         * Progressive enhancement:
         * nothing is hidden unless JS + observer both work.
         */

        section.classList.add(
            'is-finance-journey-motion-ready'
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
                                'is-finance-journey-visible'
                            );


                            observer.disconnect();


                            /*
                             * Release all temporary entrance rules
                             * once the story has finished.
                             *
                             * This gives the original paper hover
                             * effects full control again.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-finance-journey-motion-ready',
                                        'is-finance-journey-visible'
                                    );

                                },
                                2300
                            );

                        }
                    );

                },
                {
                    threshold: .16,

                    rootMargin:
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   FINANCE MOTION — 03 ARCHIVE
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-finance-archive'
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
            'is-archive-motion-ready'
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
                                'is-archive-visible'
                            );


                            observer.disconnect();


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-archive-motion-ready',
                                        'is-archive-visible'
                                    );

                                },
                                1600
                            );

                        }
                    );

                },
                {
                    threshold: .12,

                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   FINANCE MOTION — 05 QUESTION CTA
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-finance-question'
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
            'is-question-motion-ready'
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
                                'is-question-visible'
                            );


                            observer.disconnect();


                            /*
                             * Release entrance styles once finished,
                             * leaving the existing card / ? / button
                             * hover behaviour completely untouched.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-question-motion-ready',
                                        'is-question-visible'
                                    );

                                },
                                1800
                            );

                        }
                    );

                },
                {
                    threshold: .18,

                    rootMargin:
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);

/* Finance archive tabs */
document.addEventListener('DOMContentLoaded', function () {

    document
        .querySelectorAll('[data-archive-folder]')
        .forEach(function (folder) {

            const tabs =
                folder.querySelectorAll('[data-archive-tab]');

            const panels =
                folder.querySelectorAll('[data-archive-panel]');


            tabs.forEach(function (tab) {

                tab.addEventListener('click', function () {

                    const target =
                        tab.getAttribute('data-archive-tab');


                    tabs.forEach(function (otherTab) {

                        const active =
                            otherTab === tab;

                        otherTab.classList.toggle(
                            'is-active',
                            active
                        );

                        otherTab.setAttribute(
                            'aria-selected',
                            active ? 'true' : 'false'
                        );

                    });


                    panels.forEach(function (panel) {

                        const active =
                            panel.getAttribute(
                                'data-archive-panel'
                            ) === target;


                        if (!active) {
                            panel.hidden = true;

                            panel.classList.remove(
                                'is-switching'
                            );

                            return;
                        }


                        panel.hidden = false;

                        panel.classList.remove(
                            'is-switching'
                        );


                        void panel.offsetWidth;


                        panel.classList.add(
                            'is-switching'
                        );

                    });

                });

            });

        });

});

