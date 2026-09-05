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


