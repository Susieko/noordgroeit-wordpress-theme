'use strict';

document.documentElement.classList.add('js');

/* =========================================================
   SITE HEADER
   Main menu, submenus and scrolled state
========================================================= */

document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.ng-site-header');

    if (!header) {
        return;
    }

    const toggle = header.querySelector('.ng-menu-toggle');
    const navigation = header.querySelector('.ng-primary-navigation');
    const submenuButtons = header.querySelectorAll('.ng-submenu-toggle');

    function closeSubmenus(exceptItem) {
        header.querySelectorAll('.ng-nav-parent.submenu-is-open')
            .forEach(function (item) {
                if (item === exceptItem) {
                    return;
                }

                item.classList.remove('submenu-is-open');

                const button = item.querySelector('.ng-submenu-toggle');

                if (button) {
                    button.setAttribute('aria-expanded', 'false');
                }
            });
    }

    function setMobileMenu(open) {
        if (!toggle) {
            return;
        }

        header.classList.toggle('menu-is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        document.body.classList.toggle('ng-menu-open', open);

        if (!open) {
            closeSubmenus();
        }
    }

    submenuButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const parent = button.closest('.ng-nav-parent');

            if (!parent) {
                return;
            }

            const willOpen =
                !parent.classList.contains('submenu-is-open');

            closeSubmenus(parent);

            parent.classList.toggle(
                'submenu-is-open',
                willOpen
            );

            button.setAttribute(
                'aria-expanded',
                willOpen ? 'true' : 'false'
            );
        });
    });

    if (toggle && navigation) {
        toggle.addEventListener('click', function () {
            setMobileMenu(
                !header.classList.contains('menu-is-open')
            );
        });

        navigation.addEventListener('click', function (event) {
            if (
                window.innerWidth <= 1180 &&
                event.target.closest('a')
            ) {
                setMobileMenu(false);
            }
        });
    }

    document.addEventListener('click', function (event) {
        if (!header.contains(event.target)) {
            closeSubmenus();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key !== 'Escape') {
            return;
        }

        const menuWasOpen =
            header.classList.contains('menu-is-open');

        setMobileMenu(false);
        closeSubmenus();

        if (menuWasOpen && toggle) {
            toggle.focus();
        }
    });

    function updateHeader() {
        header.classList.toggle(
            'is-scrolled',
            window.scrollY > 32
        );
    }

    updateHeader();

    window.addEventListener(
        'scroll',
        updateHeader,
        {
            passive: true
        }
    );

    window.addEventListener('resize', function () {
        if (window.innerWidth > 1180) {
            setMobileMenu(false);
            closeSubmenus();
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {

    const cycles =
        document.querySelectorAll(
            '[data-over-cycle]'
        );


    if (!cycles.length) {
        return;
    }


    const reducedMotion =
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;


    cycles.forEach(function (cycle) {

        /*
         * Reduced motion:
         * just show the completed state.
         */
        if (reducedMotion) {
            return;
        }


        /*
         * Only now do we hide the later steps.
         * That way the content can never disappear
         * if JavaScript fails.
         */
        cycle.classList.add(
            'is-animatable'
        );


        if (
            !('IntersectionObserver' in window)
        ) {
            cycle.classList.add(
                'is-in-view'
            );

            return;
        }


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            cycle.classList.add(
                                'is-in-view'
                            );


                            observer.unobserve(
                                cycle
                            );

                        }
                    );

                },
                {
                    threshold: 0.35,

                    rootMargin:
                        '0px 0px -10% 0px'
                }
            );


        observer.observe(cycle);

    });

});


document.addEventListener('DOMContentLoaded', function () {

    const flows =
        document.querySelectorAll(
            '[data-team-collab]'
        );


    if (!flows.length) {
        return;
    }


    const reducedMotion =
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;


    flows.forEach(function (flow) {

        if (reducedMotion) {
            return;
        }


        flow.classList.add(
            'is-animatable'
        );


        if (
            !('IntersectionObserver' in window)
        ) {
            flow.classList.add(
                'is-in-view'
            );

            return;
        }


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            flow.classList.add(
                                'is-in-view'
                            );


                            observer.unobserve(
                                flow
                            );

                        }
                    );

                },
                {
                    threshold: 0.3
                }
            );


        observer.observe(flow);

    });

});


document.addEventListener('DOMContentLoaded', function () {

    const ledgers =
        document.querySelectorAll(
            '[data-finance-ledger]'
        );


    if (!ledgers.length) {
        return;
    }


    ledgers.forEach(function (ledger) {

        ledger.classList.add(
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


                            ledger.classList.add(
                                'is-in-view'
                            );


                            observer.unobserve(
                                ledger
                            );

                        }
                    );

                },
                {
                    threshold: .25
                }
            );


        observer.observe(
            ledger
        );

    });

});


document.addEventListener('DOMContentLoaded', function () {

    const sections =
        document.querySelectorAll(
            '[data-init-rise]'
        );


    sections.forEach(function (section) {

        if (
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches
        ) {
            section.classList.add('is-in-view');

            return;
        }


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
                                'is-in-view'
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

    });

});


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

/* =========================================================
   HOME MOTION — 02 VALUES
   Samen · Veilig · Gezond · Voor iedereen
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const strip =
            document.querySelector(
                '.ng-values-strip'
            );


        if (!strip) {
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
         * Only hide things after JS is confirmed.
         * If JS fails, everything remains visible.
         */

        strip.classList.add(
            'is-values-motion-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            strip.classList.add(
                                'is-values-visible'
                            );


                            observer.disconnect();

                        }
                    );

                },
                {
                    threshold: .3,
                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(strip);

    }
);


/* =========================================================
   HOME MOTION — 03 OVER NOORDGROEIT
   Community window
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-origin'
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
            'is-origin-motion-ready'
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
                                'is-origin-visible'
                            );


                            observer.disconnect();


                            /*
                             * Remove temporary entrance classes afterwards.
                             * This keeps Missie / Visie hover transforms free.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-origin-motion-ready',
                                        'is-origin-visible'
                                    );

                                },
                                1800
                            );

                        }
                    );

                },
                {
                    threshold: .16,

                    rootMargin:
                        '0px 0px -7% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 04 INITIATIVES
   Exhibition fan-out
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-coverflow-section'
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
            'is-initiatives-motion-ready'
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
                                'is-initiatives-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance finished:
                             * hand everything back to the normal
                             * carousel CSS.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-initiatives-motion-ready',
                                        'is-initiatives-visible'
                                    );

                                },
                                1700
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
   HOME MOTION — 05 NOORDBUITEN
   Photographic landscape
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-nb-landscape'
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
            'is-nb-motion-ready'
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
                                'is-nb-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance is temporary.
                             * Afterwards all hover/click/image-switch
                             * behaviour is completely free again.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nb-motion-ready',
                                        'is-nb-visible'
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
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 06 DOE MEE
   Start the existing journey on arrival
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-join-circle'
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
            'is-join-motion-ready'
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
                                'is-join-visible'
                            );


                            observer.disconnect();

                        }
                    );

                },
                {
                    threshold: .18,

                    rootMargin:
                        '0px 0px -8% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 07 ACTUALITEIT
   Editorial newsroom reveal
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-home-pulse'
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
            'is-pulse-motion-ready'
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
                                'is-pulse-visible'
                            );


                            observer.disconnect();


                            /*
                             * Remove entrance state afterwards
                             * so all existing hover interactions
                             * remain completely normal.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-pulse-motion-ready',
                                        'is-pulse-visible'
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
                        '0px 0px -6% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 08 PARTNERS
   Reveal + start marquee on arrival
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-partner-section'
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
            'is-partner-motion-ready'
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
                                'is-partner-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance helpers can disappear afterwards.
                             * The marquee keeps its normal own animation.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-partner-motion-ready',
                                        'is-partner-visible'
                                    );

                                },
                                1700
                            );

                        }
                    );

                },
                {
                    threshold: .16,

                    rootMargin:
                        '0px 0px -7% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   HOME MOTION — 09 FINAL SUPPORT CTA
   Final flourish
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.support-closing-section'
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


                            observer.disconnect();


                            /*
                             * Remove entrance helpers afterwards
                             * so normal hover states remain untouched.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-support-motion-ready',
                                        'is-support-visible'
                                    );

                                },
                                1600
                            );

                        }
                    );

                },
                {
                    threshold: .14,

                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(section);

    }
);

/* Homepage scroll reveals */
document.addEventListener('DOMContentLoaded', function () {

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    /*
     * Leave everything naturally visible when motion is disabled
     * or IntersectionObserver is unavailable.
     */
    if (
        reducedMotion ||
        !('IntersectionObserver' in window)
    ) {
        return;
    }


    /*
     * Add reveal behaviour without cluttering the PHP markup
     * with animation classes.
     */
    const revealSelections = [

        /* About NoordgroeiT */
        {
            selector: '.ng-field-intro',
            variant: ''
        },
        {
            selector: '.ng-field-photo',
            variant: 'ng-scroll-reveal--image'
        },
        {
            selector: '.ng-field-purpose',
            variant: ''
        },

        /* Initiatives */
        {
            selector: '.ng-coverflow-heading',
            variant: ''
        },
        {
            selector: '.ng-coverflow',
            variant: 'ng-scroll-reveal--image'
        },
        /* NoordbuiTen */
        {
            selector: '.ng-nb-identity',
            variant: 'ng-scroll-reveal--left'
        },
        {
            selector: '.ng-nb-copy',
            variant: 'ng-scroll-reveal--right'
        },
        {
            selector: '.ng-nb-footer',
            variant: ''
        },

        /* Join section */
        {
            selector: '.join-clean-heading',
            variant: ''
        },
        {
            selector: '.join-reviews-heading',
            variant: ''
        },
        {
            selector: '.join-action',
            variant: ''
        },

        /* News and agenda */
        {
            selector: '.ng-live-heading',
            variant: ''
        },
        {
            selector: '.ng-news-editorial-heading',
            variant: ''
        },
        {
            selector: '.ng-live-agenda',
            variant: 'ng-scroll-reveal--right'
        },

        /* Partners */
        {
            selector: '.ng-partner-heading',
            variant: ''
        },
        {
            selector: '.ng-partner-marquee',
            variant: ''
        },
        {
            selector: '.ng-partner-footer',
            variant: ''
        },

        /* Final support chapter */
        {
            selector: '.support-closing-copy',
            variant: 'ng-scroll-reveal--left'
        },
        {
            selector: '.support-closing-side',
            variant: 'ng-scroll-reveal--right'
        }
    ];


    const preparedElements = new Set();


    function prepareElement(element, variant, delay) {
        if (!element || preparedElements.has(element)) {
            return;
        }

        element.classList.add('ng-scroll-reveal');

        if (variant) {
            element.classList.add(variant);
        }

        element.style.setProperty(
            '--ng-reveal-delay',
            delay + 'ms'
        );

        element.dataset.revealVariant = variant || '';
        element.dataset.revealDelay = delay;

        preparedElements.add(element);
    }


    /*
     * Prepare individual section elements.
     */
    revealSelections.forEach(function (selection) {
        document
            .querySelectorAll(selection.selector)
            .forEach(function (element) {
                prepareElement(
                    element,
                    selection.variant,
                    0
                );
            });
    });


    /*
     * Repeated elements reveal one after another.
     */
    const staggeredGroups = [
        {
            parent: '.ng-nb-gallery',
            children: '.ng-nb-photo',
            variant: 'ng-scroll-reveal--image',
            step: 90
        },
        {
            parent: '.expectation-grid',
            children: '.expectation-card',
            variant: '',
            step: 85
        },
        {
            parent: '.join-reviews-grid',
            children: '.join-review-card',
            variant: '',
            step: 100
        },
        {
            parent: '.ng-news-editorial-list',
            children: '.ng-news-story',
            variant: '',
            step: 90
        }
    ];


    staggeredGroups.forEach(function (groupSettings) {
        document
            .querySelectorAll(groupSettings.parent)
            .forEach(function (group) {

                group
                    .querySelectorAll(groupSettings.children)
                    .forEach(function (element, index) {

                        prepareElement(
                            element,
                            groupSettings.variant,
                            Math.min(
                                index * groupSettings.step,
                                270
                            )
                        );

                    });

            });
    });


    /*
     * Reveal each element once it enters the viewport.
     */
    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                const element = entry.target;
                const delay = parseInt(
                    element.dataset.revealDelay || '0',
                    10
                );

                element.classList.add('is-visible');
                observer.unobserve(element);


                /*
                 * Remove the temporary animation classes afterwards.
                 * This ensures existing hover transforms keep working.
                 */
                window.setTimeout(function () {
                    const variant =
                        element.dataset.revealVariant;

                    element.classList.remove(
                        'ng-scroll-reveal',
                        'is-visible'
                    );

                    if (variant) {
                        element.classList.remove(variant);
                    }

                    element.style.removeProperty(
                        '--ng-reveal-delay'
                    );

                    delete element.dataset.revealVariant;
                    delete element.dataset.revealDelay;

                }, 900 + delay);
            });
        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -8% 0px'
        }
    );


    preparedElements.forEach(function (element) {
        observer.observe(element);
    });

});

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


/* =========================================================
   TEAM & BESTUUR MOTION — 02 PEOPLE
   Bestuur → Kernteam → Adviseurs → Vrijwilligers
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-team-people-v2'
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
            'is-team-people-motion-ready'
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
                                'is-team-people-visible'
                            );


                            observer.disconnect();


                            /*
                             * Release hover transforms afterwards.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-team-people-motion-ready',
                                        'is-team-people-visible'
                                    );

                                },
                                2400
                            );

                        }
                    );

                },
                {
                    threshold: .08,

                    rootMargin:
                        '0px 0px -3% 0px'
                }
            );


        observer.observe(section);

    }
);


/* =========================================================
   TEAM & BESTUUR MOTION — 03 COLLABORATION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-team-collab'
            );


        if (!section) {
            return;
        }


        const track =
            section.querySelector(
                '.ng-team-collab-track'
            );


        if (!track) {
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


        track.classList.add(
            'is-animatable'
        );


        section.classList.add(
            'is-collab-motion-ready'
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
                                'is-collab-visible'
                            );


                            window.setTimeout(
                                function () {

                                    track.classList.add(
                                        'is-in-view'
                                    );

                                },
                                220
                            );


                            observer.disconnect();


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-collab-motion-ready',
                                        'is-collab-visible'
                                    );

                                },
                                2800
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
   TEAM & BESTUUR MOTION — 04 CTA
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-team-join-v2'
            );


        if (
            !section ||
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches ||
            !('IntersectionObserver' in window)
        ) {
            return;
        }


        section.classList.add(
            'is-team-join-ready'
        );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    if (!entries[0].isIntersecting) {
                        return;
                    }


                    section.classList.add(
                        'is-team-join-visible'
                    );


                    observer.disconnect();


                    window.setTimeout(
                        function () {

                            section.classList.remove(
                                'is-team-join-ready',
                                'is-team-join-visible'
                            );

                        },
                        1500
                    );

                },
                {
                    threshold: .15,

                    rootMargin:
                        '0px 0px -5% 0px'
                }
            );


        observer.observe(section);

    }
);


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

/* =========================================================
   INITIATIEVEN MOTION — 01 FEATURED NOORDBUITEN
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-init-feature'
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
         * Progressive enhancement.
         * The section remains completely visible if JS fails.
         */

        section.classList.add(
            'is-init-feature-motion-ready'
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
                                'is-init-feature-visible'
                            );


                            observer.disconnect();


                            /*
                             * Entrance done.
                             * Release all temporary states so
                             * the existing image/button hover
                             * interactions have full control.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-init-feature-motion-ready',
                                        'is-init-feature-visible'
                                    );

                                },
                                2300
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
   INITIATIEVEN MOTION — HEIKANTSE TUYNEN
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-ht-clean'
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
         * Nothing is hidden unless JS is available.
         */

        section.classList.add(
            'is-ht-motion-ready'
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
                                'is-ht-visible'
                            );


                            observer.disconnect();


                            /*
                             * Release temporary entrance states.
                             * Existing hover effects take over normally.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-ht-motion-ready',
                                        'is-ht-visible'
                                    );

                                },
                                2100
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
   INITIATIEVEN MOTION — NOORDWERKTSAMEN
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-nwt-clean'
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
            'is-nwt-motion-ready'
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
                                'is-nwt-visible'
                            );


                            observer.disconnect();


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nwt-motion-ready',
                                        'is-nwt-visible'
                                    );

                                },
                                2100
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
   INITIATIEVEN MOTION — FINAL IDEA CTA
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const section =
            document.querySelector(
                '.ng-init-idea'
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


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-idea-motion-ready',
                                        'is-idea-visible'
                                    );

                                },
                                2500
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


/* =========================================================
   NOORDBUITEN — PAGE MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nb-story, ' +
                '.ng-nb-grow, ' +
                '.ng-nb-life, ' +
                '.ng-nb-alive, ' +
                '.ng-nb-wednesday, ' +
                '.ng-nb-together'
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
                    'is-nb-motion-ready'
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
                                'is-nb-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Restore normal hover/transform behaviour
                             * after entrance sequence.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nb-motion-ready',
                                        'is-nb-visible'
                                    );

                                },
                                2300
                            );

                        }
                    );

                },
                {
                    threshold: .13,

                    rootMargin:
                        '0px 0px -6% 0px'
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


document.addEventListener(
    'DOMContentLoaded',
    function () {

        const reducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        const revealGroups = [

            document.querySelector(
                '[data-nbp-intro]'
            ),

            ...document.querySelectorAll(
                '[data-nbp-reveal]'
            ),

            document.querySelector(
                '[data-nbp-board]'
            ),

            document.querySelector(
                '[data-nbp-blueprint]'
            ),

            document.querySelector(
                '[data-nbp-growth]'
            )

        ].filter(Boolean);


        if (!revealGroups.length) {
            return;
        }


        revealGroups.forEach(
            function (item) {

                if (reducedMotion) {

                    item.classList.add(
                        'is-in-view'
                    );

                    return;
                }


                item.classList.add(
                    'is-animatable'
                );


                if (
                    !('IntersectionObserver' in window)
                ) {

                    item.classList.add(
                        'is-in-view'
                    );

                    return;
                }


                const observer =
                    new IntersectionObserver(
                        function (entries) {

                            entries.forEach(
                                function (entry) {

                                    if (!entry.isIntersecting) {
                                        return;
                                    }


                                    item.classList.add(
                                        'is-in-view'
                                    );


                                    observer.unobserve(
                                        item
                                    );

                                }
                            );

                        },
                        {
                            threshold: 0.22,

                            rootMargin:
                                '0px 0px -8% 0px'
                        }
                    );


                observer.observe(
                    item
                );

            }
        );

    }
);


/* =========================================================
   NOORDBUITEN ACTIVITEITEN — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nba-intro, ' +
                '.ng-nba-feature, ' +
                '.ng-nba-stories, ' +
                '.ng-nba-cas, ' +
                '.ng-nba-year'
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
                    'is-nba-motion-ready'
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
                                'is-nba-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nba-motion-ready',
                                        'is-nba-visible'
                                    );

                                },
                                2000
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


/* =========================================================
   NOORDBUITEN — BEZOEKEN MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const sections =
            document.querySelectorAll(
                '.ng-nbv-hero, ' +
                '.ng-nbv-find, ' +
                '.ng-nbv-look, ' +
                '.ng-nbv-end'
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
                    'is-nbv-motion-ready'
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
                                'is-nbv-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Entrance is finished.
                             * Return full control to
                             * the original page CSS.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-nbv-motion-ready',
                                        'is-nbv-visible'
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


/* =========================================================
   SINGLE AGENDA + NEWS — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-single-agenda, .ng-single-news'
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


        page.classList.add(
            'is-single-motion-ready'
        );


        /*
         * Hero begins immediately.
         */

        window.requestAnimationFrame(
            function () {

                page.classList.add(
                    'is-single-visible'
                );

            }
        );


        /*
         * Remove entrance classes once everything
         * has finished so normal CSS/hover states
         * fully take over again.
         */

        window.setTimeout(
            function () {

                page.classList.remove(
                    'is-single-motion-ready',
                    'is-single-visible'
                );

            },
            2100
        );

    }
);


/* =========================================================
   NIEUWS & AGENDA — PAGE MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-na-page'
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


        /*
         * Shared hero already has its own animation.
         * Start below the hero.
         */

        const sections =
            page.querySelectorAll(
                '.ng-na-next, ' +
                '.ng-na-agenda, ' +
                '.ng-na-news, ' +
                '.ng-na-lookback, ' +
                '.ng-na-letter'
            );


        if (!sections.length) {
            return;
        }


        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-na-motion-ready'
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
                                'is-na-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Entrance done:
                             * restore original CSS completely.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-na-motion-ready',
                                        'is-na-visible'
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


/* =========================================================
   VRIJWILLIGER WORDEN — MOTION
========================================================= */

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const page =
            document.querySelector(
                '.ng-vol-page'
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


        /*
         * Shared inner hero already has its own
         * entrance animation.
         */

        const sections =
            page.querySelectorAll(
                '.ng-vol-intro, ' +
                '.ng-vw-possibilities, ' +
                '.ng-vol-open, ' +
                '.ng-vol-story, ' +
                '.ng-vol-final'
            );


        sections.forEach(
            function (section) {

                section.classList.add(
                    'is-vol-motion-ready'
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
                                'is-vol-visible'
                            );


                            observer.unobserve(
                                section
                            );


                            /*
                             * Once the entrance has played,
                             * remove motion classes so the
                             * original CSS owns everything again.
                             */

                            window.setTimeout(
                                function () {

                                    section.classList.remove(
                                        'is-vol-motion-ready',
                                        'is-vol-visible'
                                    );

                                },
                                1800
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