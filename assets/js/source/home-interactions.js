/* =========================================================
   HOMEPAGE — MISSIE / VISIE REVEAL
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-manifesto'
            );


        if (!section) {
            return;
        }


        /*
         * Only hide the notes once we know
         * JavaScript is actually working.
         */
        section.classList.add(
            'is-animatable'
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
                                'is-visible'
                            );


                            observer.unobserve(
                                section
                            );

                        }
                    );

                },
                {
                    threshold: .25
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOMEPAGE — DOE MEE JOURNEY
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const stage =
            document.querySelector(
                '.ng-home-join-circle__stage'
            );


        if (!stage) {
            return;
        }


        const coffee =
            stage.querySelector(
                '.ng-home-join-circle__moment--coffee'
            );


        const spark =
            stage.querySelector(
                '.ng-home-join-circle__moment--spark'
            );


        const go =
            stage.querySelector(
                '.ng-home-join-circle__moment--go'
            );


        if (!coffee || !spark || !go) {
            return;
        }


        /*
         * JS exists, so we can safely prepare
         * the animation.
         */

        stage.classList.add(
            'has-join-animation'
        );


        let hasPlayed = false;


        function revealMoment(moment) {

            moment.classList.add(
                'is-join-visible'
            );

        }


        function revealLabel(moment) {

            moment.classList.add(
                'is-label-visible'
            );

        }


        function playJourney() {

            if (hasPlayed) {
                return;
            }


            hasPlayed = true;


            /*
             * Start dot.
             */

            stage.classList.add(
                'is-journey-running'
            );


            /*
             * STOP 1
             * Een rustig gesprek
             */

            window.setTimeout(
                function () {

                    revealMoment(
                        coffee
                    );

                },
                120
            );


            window.setTimeout(
                function () {

                    revealLabel(
                        coffee
                    );

                },
                430
            );


            /*
             * STOP 2
             * Een bijdrage die past
             */

            window.setTimeout(
                function () {

                    revealMoment(
                        spark
                    );

                },
                1180
            );


            window.setTimeout(
                function () {

                    revealLabel(
                        spark
                    );

                },
                1470
            );


            /*
             * STOP 3
             * Duidelijke afspraken
             */

            window.setTimeout(
                function () {

                    revealMoment(
                        go
                    );

                },
                2320
            );


            window.setTimeout(
                function () {

                    revealLabel(
                        go
                    );

                },
                2580
            );

        }


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            playJourney();


                            observer.disconnect();

                        }
                    );

                },
                {
                    threshold: .25
                }
            );


        observer.observe(stage);

    }
);


/* =========================================================
   HOME — MISSIE / VISIE HOVER DRAWERS
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const drawers =
            document.querySelectorAll(
                '.ng-home-origin__drawer'
            );


        if (!drawers.length) {
            return;
        }


        const canHover =
            window.matchMedia(
                '(hover: hover) and (pointer: fine)'
            ).matches;


        drawers.forEach(
            function (drawer) {

                const summary =
                    drawer.querySelector(
                        'summary'
                    );


                /* -----------------------------------------
                   DESKTOP — OPEN ON HOVER
                ----------------------------------------- */

                if (canHover) {

                    drawer.addEventListener(
                        'mouseenter',
                        function () {

                            drawer.open = true;

                        }
                    );


                    drawer.addEventListener(
                        'mouseleave',
                        function () {

                            drawer.open = false;

                        }
                    );


                    /*
                     * Don't let a mouse click immediately
                     * close something that hover just opened.
                     *
                     * Keyboard interaction still works.
                     */

                    if (summary) {

                        summary.addEventListener(
                            'click',
                            function (event) {

                                if (
                                    event.detail > 0
                                ) {
                                    event.preventDefault();
                                }

                            }
                        );

                    }

                }


                /* -----------------------------------------
                   KEYBOARD
                ----------------------------------------- */

                drawer.addEventListener(
                    'focusin',
                    function () {

                        drawer.open = true;

                    }
                );


                drawer.addEventListener(
                    'focusout',
                    function (event) {

                        if (
                            !drawer.contains(
                                event.relatedTarget
                            )
                        ) {
                            drawer.open = false;
                        }

                    }
                );

            }
        );

    }
);


/* =========================================================
   HOME — NOORDBUITEN PHOTO SWITCHER
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const stage =
            document.querySelector(
                '[data-nb-stage]'
            );


        if (!stage) {
            return;
        }


        const buttons =
            Array.from(
                stage.querySelectorAll(
                    '[data-nb-target]'
                )
            );


        const images =
            Array.from(
                stage.querySelectorAll(
                    '[data-nb-image]'
                )
            );


        function showScene(name) {

            images.forEach(
                function (image) {

                    image.classList.toggle(
                        'is-active',
                        image.dataset.nbImage === name
                    );

                }
            );


            buttons.forEach(
                function (button) {

                    const isActive =
                        button.dataset.nbTarget === name;


                    button.classList.toggle(
                        'is-active',
                        isActive
                    );


                    button.setAttribute(
                        'aria-pressed',
                        isActive
                            ? 'true'
                            : 'false'
                    );

                }
            );

        }


        buttons.forEach(
            function (button) {

                button.addEventListener(
                    'mouseenter',
                    function () {

                        showScene(
                            button.dataset.nbTarget
                        );

                    }
                );


                button.addEventListener(
                    'click',
                    function () {

                        showScene(
                            button.dataset.nbTarget
                        );

                    }
                );

            }
        );

    }
);

/* Homepage initiative carousel */
document.addEventListener('DOMContentLoaded', function () {

    const carousels = document.querySelectorAll(
        '[data-initiative-carousel]'
    );

    carousels.forEach(function (carousel) {

        const cards = Array.from(
            carousel.querySelectorAll(
                '[data-initiative-card]'
            )
        );

        const dots = Array.from(
            carousel.querySelectorAll(
                '[data-initiative-dot]'
            )
        );

        const previousButton = carousel.querySelector(
            '[data-initiative-prev]'
        );

        const nextButton = carousel.querySelector(
            '[data-initiative-next]'
        );

        const counter = carousel.querySelector(
            '[data-initiative-current]'
        );

        if (!cards.length) {
            return;
        }


        let activeIndex = 0;

        let touchStartX = 0;
        let touchStartY = 0;


        function normalizeIndex(index) {
            return (
                index + cards.length
            ) % cards.length;
        }


        function renderCarousel() {

            const previousIndex = normalizeIndex(
                activeIndex - 1
            );

            const nextIndex = normalizeIndex(
                activeIndex + 1
            );


            cards.forEach(function (card, index) {

                card.classList.remove(
                    'is-active',
                    'is-prev',
                    'is-next',
                    'is-hidden'
                );


                if (index === activeIndex) {

                    card.classList.add('is-active');

                } else if (index === previousIndex) {

                    card.classList.add('is-prev');

                } else if (index === nextIndex) {

                    card.classList.add('is-next');

                } else {

                    card.classList.add('is-hidden');

                }


                const isActive = index === activeIndex;


                card.setAttribute(
                    'aria-hidden',
                    isActive ? 'false' : 'true'
                );


                /*
                 * Only links in the centre card
                 * should be reachable with Tab.
                 */
                card
                    .querySelectorAll('a')
                    .forEach(function (link) {

                        if (isActive) {

                            link.removeAttribute(
                                'tabindex'
                            );

                        } else {

                            link.setAttribute(
                                'tabindex',
                                '-1'
                            );

                        }

                    });

            });


            dots.forEach(function (dot, index) {

                const isActive = index === activeIndex;

                dot.classList.toggle(
                    'is-active',
                    isActive
                );

                dot.setAttribute(
                    'aria-current',
                    isActive ? 'true' : 'false'
                );

            });


            if (counter) {

                counter.textContent = String(
                    activeIndex + 1
                ).padStart(2, '0');

            }

        }


        function goTo(index) {

            activeIndex = normalizeIndex(index);

            renderCarousel();

        }


        function goNext() {
            goTo(activeIndex + 1);
        }


        function goPrevious() {
            goTo(activeIndex - 1);
        }


        /*
         * Arrow controls
         */

        if (nextButton) {

            nextButton.addEventListener(
                'click',
                goNext
            );

        }


        if (previousButton) {

            previousButton.addEventListener(
                'click',
                goPrevious
            );

        }


        /*
         * Dot navigation
         */

        dots.forEach(function (dot, index) {

            dot.addEventListener(
                'click',
                function () {
                    goTo(index);
                }
            );

        });


        /*
         * Clicking either preview brings
         * that project into the centre.
         */

        cards.forEach(function (card, index) {

            card.addEventListener(
                'click',
                function (event) {

                    if (
                        card.classList.contains(
                            'is-active'
                        )
                    ) {
                        return;
                    }

                    event.preventDefault();

                    goTo(index);

                }
            );

        });


        /*
         * Keyboard navigation
         */

        carousel.addEventListener(
            'keydown',
            function (event) {

                if (event.key === 'ArrowLeft') {

                    event.preventDefault();

                    goPrevious();

                }


                if (event.key === 'ArrowRight') {

                    event.preventDefault();

                    goNext();

                }

            }
        );


        /*
         * Swipe navigation
         */

        carousel.addEventListener(
            'touchstart',
            function (event) {

                const touch =
                    event.changedTouches[0];

                touchStartX =
                    touch.clientX;

                touchStartY =
                    touch.clientY;

            },
            {
                passive: true
            }
        );


        carousel.addEventListener(
            'touchend',
            function (event) {

                const touch =
                    event.changedTouches[0];

                const distanceX =
                    touch.clientX - touchStartX;

                const distanceY =
                    touch.clientY - touchStartY;


                /*
                 * Ignore small movements and
                 * normal vertical scrolling.
                 */

                if (
                    Math.abs(distanceX) < 45 ||
                    Math.abs(distanceX)
                        <= Math.abs(distanceY)
                ) {
                    return;
                }


                if (distanceX < 0) {

                    goNext();

                } else {

                    goPrevious();

                }

            },
            {
                passive: true
            }
        );


        /*
         * Establish initial positions:
         *
         * O & O       NoordwerkTsamen       NoordbuiTen
         * previous       active                next
         */

        renderCarousel();

    });

});

/* Homepage number strip */
document.addEventListener('DOMContentLoaded', function () {
    const strips = document.querySelectorAll('[data-number-strip]');
    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    const formatter = new Intl.NumberFormat('nl-NL');
function formatCounter(counter, value) {

    if (counter.dataset.noGrouping === 'true') {
        return String(value);
    }

    return formatter.format(value);
}
    strips.forEach(function (strip) {
        const counters = strip.querySelectorAll('[data-count]');

        function showFinalNumbers() {
            counters.forEach(function (counter) {
                const target = Number(counter.dataset.count);

                counter.textContent = formatCounter(counter, target);
            });
        }

        function animateCounters() {
            strip.classList.add('is-counting');

            counters.forEach(function (counter) {
                const target = Number(counter.dataset.count);
                const start = Number(counter.dataset.start || 0);
                const duration = 1500;
                let startTime = null;

                function updateNumber(timestamp) {
                    if (!startTime) {
                        startTime = timestamp;
                    }

                    const elapsed = timestamp - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    const eased =
                        1 - Math.pow(1 - progress, 3);

                    const current = Math.round(
                        start + ((target - start) * eased)
                    );

                    counter.textContent =
    formatCounter(counter, current);

                    if (progress < 1) {
                        window.requestAnimationFrame(updateNumber);
                    } else {
counter.textContent =
    formatCounter(counter, target);
                    }
                }

                window.requestAnimationFrame(updateNumber);
            });
        }

        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            showFinalNumbers();
            return;
        }

        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    animateCounters();
                    observer.unobserve(strip);
                });
            },
            {
                threshold: 0.35
            }
        );

        observer.observe(strip);
    });
});

