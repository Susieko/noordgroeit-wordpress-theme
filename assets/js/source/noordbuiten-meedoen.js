/* =========================================================
   NOORDBUITEN — MEEDOEN MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-nbm-page'
            );


        if (
            !page ||
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        page.classList.add(
            'ng-nbm-motion-ready'
        );


        function addReveal(
            element,
            classes,
            delay
        ) {

            if (!element) {
                return;
            }


            classes.forEach(
                function (cls) {

                    element.classList.add(
                        cls
                    );

                }
            );


            if (
                typeof delay === 'number'
            ) {

                element.style.setProperty(
                    '--nbm-delay',
                    delay + 'ms'
                );

            }

        }


        /* =========================================
           INTRO
        ========================================= */

        addReveal(
            page.querySelector(
                '.ng-nbm-intro-copy'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--left'
            ],
            0
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-intro-visual'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--right'
            ],
            120
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-intro-bottom'
            ),
            [
                'ng-nbm-reveal'
            ],
            180
        );


        /* =========================================
           WAAR KRIJG JIJ ZIN VAN?
        ========================================= */

        addReveal(
            page.querySelector(
                '.ng-nbm-pull-heading'
            ),
            [
                'ng-nbm-reveal'
            ],
            0
        );


        page
            .querySelectorAll(
                '.ng-nbm-pull-row'
            )
            .forEach(
                function (row, index) {

                    const copy =
                        row.querySelector(
                            '.ng-nbm-pull-copy'
                        );


                    const image =
                        row.querySelector(
                            '.ng-nbm-pull-image'
                        );


                    const copyDirection =
                        index % 2 === 0
                            ? 'ng-nbm-reveal--left'
                            : 'ng-nbm-reveal--right';


                    const imageDirection =
                        index % 2 === 0
                            ? 'ng-nbm-reveal--right'
                            : 'ng-nbm-reveal--left';


                    addReveal(
                        copy,
                        [
                            'ng-nbm-reveal',
                            copyDirection
                        ],
                        40
                    );


                    addReveal(
                        image,
                        [
                            'ng-nbm-reveal',
                            'ng-nbm-reveal--image',
                            imageDirection
                        ],
                        140
                    );

                }
            );


        addReveal(
            page.querySelector(
                '.ng-nbm-pull-bottom'
            ),
            [
                'ng-nbm-reveal'
            ],
            120
        );


        /* =========================================
           PROBEER HET EENS
        ========================================= */

        addReveal(
            page.querySelector(
                '.ng-nbm-try-photo'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--image',
                'ng-nbm-reveal--left'
            ],
            0
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-try-copy'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--right'
            ],
            120
        );


        page
            .querySelectorAll(
                '.ng-nbm-try-option'
            )
            .forEach(
                function (option, index) {

                    addReveal(
                        option,
                        [
                            'ng-nbm-reveal'
                        ],
                        index * 100
                    );

                }
            );


        addReveal(
            page.querySelector(
                '.ng-nbm-try-bottom'
            ),
            [
                'ng-nbm-reveal'
            ],
            120
        );


        /* =========================================
           KOM EENS KIJKEN
        ========================================= */

        addReveal(
            page.querySelector(
                '.ng-nbm-come-heading'
            ),
            [
                'ng-nbm-reveal'
            ],
            0
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-come-photo'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--image',
                'ng-nbm-reveal--left'
            ],
            80
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-come-invite'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--right'
            ],
            180
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-come-note'
            ),
            [
                'ng-nbm-reveal'
            ],
            240
        );


        page
            .querySelectorAll(
                '.ng-nbm-come-detail'
            )
            .forEach(
                function (detail, index) {

                    addReveal(
                        detail,
                        [
                            'ng-nbm-reveal'
                        ],
                        index * 90
                    );

                }
            );


        /* =========================================
           FINAL CTA
        ========================================= */

        addReveal(
            page.querySelector(
                '.ng-nbm-final-copy'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--left'
            ],
            0
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-final-action'
            ),
            [
                'ng-nbm-reveal',
                'ng-nbm-reveal--right'
            ],
            140
        );


        addReveal(
            page.querySelector(
                '.ng-nbm-final-bottom'
            ),
            [
                'ng-nbm-reveal'
            ],
            220
        );


        /* =========================================
           OBSERVER
        ========================================= */

        const revealItems =
            page.querySelectorAll(
                '.ng-nbm-reveal'
            );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            entry.target.classList.add(
                                'is-visible'
                            );


                            observer.unobserve(
                                entry.target
                            );

                        }
                    );

                },
                {
                    threshold: 0.14,

                    rootMargin:
                        '0px 0px -8% 0px'
                }
            );


        /*
         * Paint the hidden reveal state first, then observe.
         * This also protects the intro items on fast loads.
         */
        window.requestAnimationFrame(
            function () {

                window.requestAnimationFrame(
                    function () {

                        revealItems.forEach(
                            function (item) {

                                observer.observe(
                                    item
                                );

                            }
                        );

                    }
                );

            }
        );

    }
);


