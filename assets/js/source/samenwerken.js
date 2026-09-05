/* =========================================================
   SAMENWERKEN — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-collab-page'
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


        /* =====================================
           STAGGER VALUES
        ====================================== */

        page
            .querySelectorAll(
                '.ng-collab-contribution'
            )
            .forEach(
                function (item, index) {

                    item.style.setProperty(
                        '--collab-delay',
                        (index * 90) + 'ms'
                    );

                }
            );


        page
            .querySelectorAll(
                '.ng-collab-for-item, .ng-collab-path'
            )
            .forEach(
                function (item, index) {

                    item.style.setProperty(
                        '--collab-delay',
                        (index * 95) + 'ms'
                    );

                }
            );


        /* =====================================
           MAIN SECTIONS
        ====================================== */

        const sections =
            page.querySelectorAll(
                '.ng-collab-intro, ' +
                '.ng-collab-bridge, ' +
                '.ng-collab-for, ' +
                '.ng-collab-paths, ' +
                '.ng-collab-proof, ' +
                '.ng-collab-final'
            );


        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-collab-motion-ready'
                );

            }
        );


        const sectionObserver =
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
                                'is-collab-visible'
                            );


                            sectionObserver.unobserve(
                                section
                            );


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-collab-motion-ready',
                                        'is-collab-visible'
                                    );

                                },
                                1900
                            );

                        }
                    );

                },
                {
                    threshold: .12,

                    rootMargin:
                        '0px 0px -7% 0px'
                }
            );


        /*
         * Paint the motion-ready state before observing.
         * This prevents the intro from landing immediately
         * in its final state on a fast page load.
         */
        window.requestAnimationFrame(
            function () {

                window.requestAnimationFrame(
                    function () {

                        sections.forEach(
                            function (section) {

                                sectionObserver.observe(
                                    section
                                );

                            }
                        );

                    }
                );

            }
        );


        /* =====================================
           PARTNER CATEGORIES

           Each group waits until it actually
           enters the viewport. We do NOT fire
           all 57 logos when the dark section starts.
        ====================================== */

        const partnerGroups =
            page.querySelectorAll(
                '.ng-collab-proof-group-block'
            );


        partnerGroups.forEach(
            function (group) {

                group.classList.add(
                    'is-collab-group-ready'
                );


                group
                    .querySelectorAll(
                        '.ng-collab-proof-card'
                    )
                    .forEach(
                        function (card, index) {

                            /*
                             * Keep the total stagger compact.
                             * Even the largest group won't take
                             * forever to appear.
                             */

                            const delay =
                                Math.min(
                                    index * 42,
                                    620
                                );


                            card.style.setProperty(
                                '--collab-card-delay',
                                delay + 'ms'
                            );

                        }
                    );

            }
        );


        const groupObserver =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            const group =
                                entry.target;


                            group.classList.add(
                                'is-collab-group-visible'
                            );


                            groupObserver.unobserve(
                                group
                            );


                            window.setTimeout(
                                function () {

                                    group.classList.remove(
                                        'is-collab-group-ready',
                                        'is-collab-group-visible'
                                    );

                                },
                                1300
                            );

                        }
                    );

                },
                {
                    threshold: .08,

                    rootMargin:
                        '0px 0px -8% 0px'
                }
            );


        partnerGroups.forEach(
            function (group) {

                groupObserver.observe(
                    group
                );

            }
        );

    }
);

/* -----------------------------------------------------
   ESCAPE
----------------------------------------------------- */

window.addEventListener(
    'keydown',
    function (event) {

        if (
            event.key !== 'Escape' &&
            event.key !== 'Esc'
        ) {
            return;
        }

        closeSubmenus();
        closeMobileMenu();

        if (toggle) {
            toggle.focus();
        }
    },
    true
);