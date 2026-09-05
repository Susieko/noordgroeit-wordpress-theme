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


