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


