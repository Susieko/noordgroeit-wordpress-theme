/* =========================================================
   CONTACT — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-contact-main, ' +
                '.ng-contact-noordbuiten'
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
           FORM STAGGER
        ====================================== */

        const form =
            document.querySelector(
                '.ng-contact-form'
            );


        if (form) {

            let step = 0;


            Array.from(
                form.children
            ).forEach(
                function (child) {

                    /*
                     * Ignore the hidden honeypot.
                     */

                    if (
                        child.classList.contains(
                            'ng-contact-honeypot'
                        )
                    ) {
                        return;
                    }


                    /*
                     * Messages have their own reveal.
                     */

                    if (
                        child.classList.contains(
                            'ng-contact-message'
                        )
                    ) {
                        return;
                    }


                    child.classList.add(
                        'is-contact-form-step'
                    );


                    child.style.setProperty(
                        '--contact-step',
                        step
                    );


                    step += 1;

                }
            );

        }


        /* =====================================
           PREPARE SECTIONS
        ====================================== */

        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-contact-motion-ready'
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
                                'is-contact-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Entrance complete:
                             * give control back to normal CSS.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-contact-motion-ready',
                                        'is-contact-visible'
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


