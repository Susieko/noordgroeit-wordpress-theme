<?php
/**
 * Over NoordgroeiT
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images = get_template_directory_uri() . '/assets/images';
?>

<main id="main-content" class="ng-over-page">

    <!-- =========================================
         HERO — OVER NOORDGROEIT
    ========================================== -->

<section
    class="ng-inner-hero ng-inner-hero--over"
    aria-labelledby="ng-over-hero-title"
>

    <img
        class="ng-inner-hero__image"
        src="<?php echo esc_url(
            get_template_directory_uri()
            . '/assets/images/visie.webp'
        ); ?>"
        alt=""
        aria-hidden="true"
        fetchpriority="high"
        decoding="async"
    >

    <div
        class="ng-inner-hero__overlay"
        aria-hidden="true"
    ></div>


    <div class="site-container">

        <div class="ng-inner-hero__copy">

            <div
                class="ng-inner-hero__detail"
                aria-hidden="true"
            >
                <span></span>
                <i></i>
            </div>

            <h1 id="ng-over-hero-title">
                Over ons
            </h1>

            <p class="ng-inner-hero__meta">
                Stichting
                <span>NoordgroeiT</span>
            </p>

        </div>

    </div>


    <div
        class="ng-inner-hero__scroll"
        aria-hidden="true"
    >
        ↓
    </div>

</section>

    <!-- =========================================
     HET VERHAAL VAN NOORDGROEIT
========================================== -->

<section
    id="verhaal"
    class="ng-over-story-v3"
    aria-labelledby="ng-over-story-title"
>

    <div class="site-container">

        <!-- INTRO -->

        <div class="ng-over-story-v3-intro">

            <div class="ng-over-story-v3-heading">

<p class="ng-over-story-v3-badge">
    Wie we zijn
</p>

<h2 id="ng-over-story-title">
    <span class="ng-brand-word">NoordgroeiT</span>
    is ontstaan vanuit een simpel idee:
    de buurt samen tot bloei laten komen 
</h2>

            </div>


<div class="ng-over-story-v3-copy">

    <p>
        Bewoners die elkaar kennen en betrokken zijn bij hun eigen
        leefomgeving, bouwen mee aan een aantrekkelijk Tilburg Noord
    </p>

    <p>
        Noord groeit met 5.000 extra woningen. Daarom vinden we het
        belangrijk dat bewoners meegroeien in het gesprek over een
        toekomstbestendige wijk
    </p>

    <div class="ng-over-story-v3-date">

        <span aria-hidden="true"></span>

        <small>Sinds</small>

        <strong>07.07.2024</strong>

        <p>begonnen door bewoners</p>

    </div>

</div>
        </div>


        <!-- KERNWAARDEN -->

        <div class="ng-over-values">

            <article class="ng-over-value" tabindex="0">

                <div class="ng-over-value-top">



                    <span
                        class="ng-over-value-icon"
                        aria-hidden="true"
                    >
                        ✦
                    </span>

                </div>

                <h3>
                    Zeggenschap
                    <span>&amp; groen</span>
                </h3>

                <p>
                    Bewoners hebben invloed op hun eigen leefomgeving
                    en denken mee over wat Noord nodig heeft
                </p>

            </article>


            <article class="ng-over-value" tabindex="0">

                <div class="ng-over-value-top">


                    <span
                        class="ng-over-value-icon"
                        aria-hidden="true"
                    >
                        ↔
                    </span>

                </div>

                <h3>
                    Verbinding
                </h3>

                <p>
                    We brengen bewoners, ideeën en organisaties bij elkaar
                    zodat samenwerking kan ontstaan
                </p>

            </article>


            <article class="ng-over-value" tabindex="0">

                <div class="ng-over-value-top">


                    <span
                        class="ng-over-value-icon"
                        aria-hidden="true"
                    >
                        ♡
                    </span>

                </div>

                <h3>
                    Gezondheid
                </h3>

                <p>
                    Een veilige, groene en gezonde wijk waarin mensen
                    prettig kunnen wonen, ontmoeten en leven
                </p>

            </article>

        </div>


        <div
            class="ng-over-values-footer"
            aria-hidden="true"
        >

            <span></span>

            <p>
                Samen veilig en gezond
            </p>

            <span></span>

        </div>

    </div>

</section>

<!-- =========================================
     HOE WE EEN IDEE TOT BLOEI BRENGEN
========================================== -->

<section
    class="ng-over-process"
    aria-labelledby="ng-over-process-title"
>

    <div class="site-container">

        <header class="ng-over-process-heading">

            <div>

                <p class="ng-over-process-kicker">
                    Zo werken we
                </p>

                <h2 id="ng-over-process-title">
                    Van een eerste idee
                    <span>naar iets dat echt kan groeien</span>
                </h2>

            </div>

            <p>
                Een idee hoeft nog niet helemaal af te zijn.
                We kijken samen wat er nodig is om de volgende
                stap te kunnen zetten
            </p>

        </header>


        <!-- =====================================
             ANIMATED PROCESS CYCLE
        ====================================== -->

        <div
            class="ng-over-cycle"
            data-over-cycle
        >

            <!-- CIRCLE -->

            <div
                class="ng-over-cycle-visual"
                aria-hidden="true"
            >

                <svg
                    viewBox="0 0 320 320"
                    class="ng-over-cycle-svg"
                >

                    <circle
                        class="ng-over-cycle-guide"
                        cx="160"
                        cy="160"
                        r="112"
                    />

                    <circle
                        class="ng-over-cycle-route"
                        cx="160"
                        cy="160"
                        r="112"
                        pathLength="100"
                    />


                    <!-- 01 — TOP -->

                    <g class="ng-over-cycle-node ng-over-cycle-node--1">

                        <circle
                            class="ng-over-cycle-node-ring"
                            cx="160"
                            cy="48"
                            r="8"
                        />

                        <circle
                            class="ng-over-cycle-node-core"
                            cx="160"
                            cy="48"
                            r="3"
                        />

                    </g>


                    <!-- 02 — RIGHT -->

                    <g class="ng-over-cycle-node ng-over-cycle-node--2">

                        <circle
                            class="ng-over-cycle-node-ring"
                            cx="272"
                            cy="160"
                            r="8"
                        />

                        <circle
                            class="ng-over-cycle-node-core"
                            cx="272"
                            cy="160"
                            r="3"
                        />

                    </g>


                    <!-- 03 — BOTTOM -->

                    <g class="ng-over-cycle-node ng-over-cycle-node--3">

                        <circle
                            class="ng-over-cycle-node-ring"
                            cx="160"
                            cy="272"
                            r="8"
                        />

                        <circle
                            class="ng-over-cycle-node-core"
                            cx="160"
                            cy="272"
                            r="3"
                        />

                    </g>


                    <!-- 04 — LEFT -->

                    <g class="ng-over-cycle-node ng-over-cycle-node--4">

                        <circle
                            class="ng-over-cycle-node-ring"
                            cx="48"
                            cy="160"
                            r="8"
                        />

                        <circle
                            class="ng-over-cycle-node-core"
                            cx="48"
                            cy="160"
                            r="3"
                        />

                    </g>

                </svg>


                <div class="ng-over-cycle-center">

                    <span>
                        Van idee
                    </span>

                    <strong>
                        naar groei
                    </strong>

                </div>

            </div>


            <!-- 01 -->

            <article class="ng-over-cycle-step ng-over-cycle-step--1">

                <span class="ng-over-cycle-number">
                    01
                </span>

                <h3>
                    Eerste gesprek
                </h3>

                <p>
                    Vertel wat er leeft in jouw buurt
                    of welk idee je hebt
                </p>

            </article>


            <!-- 02 -->

            <article class="ng-over-cycle-step ng-over-cycle-step--2">

                <span class="ng-over-cycle-number">
                    02
                </span>

                <h3>
                    Samen onderzoeken
                </h3>

                <p>
                    We kijken samen wat er nodig is,
                    wat mogelijk is en waar kansen liggen
                </p>

            </article>


            <!-- 03 -->

            <article class="ng-over-cycle-step ng-over-cycle-step--3">

                <span class="ng-over-cycle-number">
                    03
                </span>

                <h3>
                    Mensen verbinden
                </h3>

                <p>
                    We zoeken bewoners, kennis en partners
                    die kunnen helpen om verder te komen
                </p>

            </article>


            <!-- 04 -->

            <article class="ng-over-cycle-step ng-over-cycle-step--4">

                <span class="ng-over-cycle-number">
                    04
                </span>

                <h3>
                    Doen
                </h3>

                <p>
                    Samen brengen we het idee in beweging
                    en kijken we wat er in de praktijk werkt
                </p>

            </article>

        </div>


        <footer class="ng-over-process-footer">

            <span>
                Idee
            </span>

            <i aria-hidden="true">→</i>

            <span>
                Samenwerking
            </span>

            <i aria-hidden="true">→</i>

            <strong>
                Groei
            </strong>

        </footer>

    </div>

</section>

<!-- =========================================
     CTA — DEEL JE IDEE
========================================== -->

<section
    class="ng-over-idea-cta"
    aria-labelledby="ng-over-idea-title"
>

    <div class="site-container">

        <div class="ng-over-idea-layout">

            <div class="ng-over-idea-copy">

                <p class="ng-over-idea-kicker">
                    Heb je een idee?
                </p>

                <h2 id="ng-over-idea-title">
                    Iets voor jouw straat,
                    buurt of Tilburg-Noord?
                </h2>

                <p>
                    Je idee hoeft nog niet helemaal uitgewerkt te zijn.
                    Vertel ons wat je ziet, mist of graag zou willen veranderen.
                    Dan kijken we samen wat een volgende stap kan zijn
                </p>

            </div>


            <div class="ng-over-idea-action">

    <div class="ng-over-idea-route">

        <span class="ng-over-idea-route-dot"></span>

        <p>
            Een eerste idee
            <strong>is genoeg</strong>
        </p>

        <span class="ng-over-idea-route-line"></span>

    </div>


    <a
        class="ng-over-idea-circle"
        href="<?php echo esc_url(
            home_url('/contact/')
        ); ?>"
    >

        <span class="ng-over-idea-circle-small">
            Start hier
        </span>

        <strong>
            Deel je
            <br>
            buurtidee
        </strong>

        <span
            class="ng-over-idea-circle-arrow"
            aria-hidden="true"
        >
            ↗
        </span>

    </a>

            </div>

        </div>

    </div>

</section>

</main>

<?php
get_footer();