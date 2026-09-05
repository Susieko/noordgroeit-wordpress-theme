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


