<?php
/**
 * Initiatieven
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="ng-init-page">

    <!-- =========================================
     INITIATIEVEN — HERO
========================================== -->

<section
    class="ng-inner-hero ng-inner-hero--initiatieven"
    aria-labelledby="ng-init-hero-title"
>

    <img
        class="ng-inner-hero__image"
        src="<?php echo esc_url(
            get_template_directory_uri()
            . '/assets/images/for-website.webp'
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

            <h1 id="ng-init-hero-title">
                Initiatieven
            </h1>

            <p class="ng-inner-hero__meta">
                Ideeën uit
                <span>Tilburg-Noord</span>
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
     UITGELICHT INITIATIEF — NOORDBUITEN
========================================== -->

<section
    class="ng-init-feature"
    id="initiatieven-overzicht"
    aria-labelledby="ng-init-feature-title"
>

    <div class="site-container">

        <header class="ng-init-feature-heading">

            <div>

                <p class="ng-init-feature-kicker">
                    Uitgelicht initiatief
                </p>

                <h2 id="ng-init-feature-title">
                    Een plek waar groen,
                    ontmoeting en ideeën samenkomen.
                </h2>

            </div>


            <p>
                NoordbuiTen groeit samen met bewoners uit tot een plek
                voor natuur, ontmoeting, gezondheid en ontwikkeling
                in Tilburg-Noord.
            </p>

        </header>


        <!-- =====================================
             VISUAL SPREAD
        ====================================== -->

        <article class="ng-init-feature-spread">


            <!-- IMAGE -->

            <div class="ng-init-feature-image">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri()
                        . '/assets/images/noordbuiten.webp'
                    ); ?>"
                    alt="NoordbuiTen in Tilburg-Noord"
                    loading="lazy"
                    decoding="async"
                >


                <div class="ng-init-feature-image-tag">

                    <span aria-hidden="true"></span>

                    <p>
                        Tilburg-Noord
                    </p>

                </div>

            </div>


            <!-- NUMBER RAIL -->

            <div
                class="ng-init-feature-rail"
                aria-hidden="true"
            >

                <span>
                    01
                </span>

                <i></i>

                <p>
                    UITGELICHT
                </p>

            </div>


            <!-- CONTENT PANEL -->

            <div class="ng-init-feature-panel">

                <div class="ng-init-feature-panel-top">

                    <div>

                        <span>
                            NoordbuiTen
                        </span>

                        <small>
                            In ontwikkeling
                        </small>

                    </div>


                    <span
                        class="ng-init-feature-symbol"
                        aria-hidden="true"
                    >
                        ✦
                    </span>

                </div>


                <h3>
                    Een groene wijkoase
                    waar iedereen mee kan doen.
                </h3>


                <p>
                    NoordbuiTen wordt een plek waar bewoners samen
                    kunnen tuinieren, leren, bewegen, ontmoeten en
                    genieten van de natuur.
                </p>


                <!-- THEMES -->

                <div class="ng-init-feature-themes">

                    <div>
                        <span>01</span>
                        <strong>Groen</strong>
                        <small>Natuur &amp; biodiversiteit</small>
                    </div>

                    <div>
                        <span>02</span>
                        <strong>Gezond</strong>
                        <small>Bewegen &amp; buiten zijn</small>
                    </div>

                    <div>
                        <span>03</span>
                        <strong>Samen</strong>
                        <small>Ontmoeten &amp; leren</small>
                    </div>

                </div>


                <!-- ACTION -->

                <a
                    class="ng-init-feature-button"
                    href="<?php echo esc_url(
                        home_url('/noordbuiten/')
                    ); ?>"
                >

                    <span>
                        Ontdek NoordbuiTen
                    </span>

                    <span
                        class="ng-init-feature-button-arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                </a>

            </div>

        </article>


        <!-- BOTTOM DETAIL -->

        <div class="ng-init-feature-bottom">

            <span aria-hidden="true"></span>

            <p>
                Een initiatief van
                <span class="ng-brand-word">NoordgroeiT</span>
                voor en met Tilburg-Noord.
            </p>

        </div>

    </div>

</section>


<!-- =========================================
     NOORDWERKTSAMEN — CLEAN EDITORIAL
========================================== -->

<section
    class="ng-nwt-clean"
    aria-labelledby="ng-nwt-clean-title"
>

    <div class="site-container">

        <div class="ng-nwt-clean-layout">


            <!-- =================================
                 COPY
            ================================== -->

            <div class="ng-nwt-clean-copy">


                <div class="ng-nwt-clean-meta">

                    <span>
                        NoordwerkTsamen
                    </span>

                    <i aria-hidden="true"></i>

                    <small>
                        02
                    </small>

                </div>
                    <p class="ng-nwt-clean-label">
                         Doorlopende buurt- en wijkgesprekken
                    </p>

                    <h2 id="ng-nwt-clean-title">
                         Goede ideeën beginnen
                          met elkaar spreken
                    </h2>
<br>

                <p class="ng-nwt-clean-intro">
                    Bewoners ontmoeten elkaar, delen ervaringen
                    en ideeën en onderzoeken samen wat Tilburg-Noord
                    nodig heeft. De gesprekken keren terug, zodat
                    contact en samenwerking kunnen blijven groeien
                </p>


                <!-- SIMPLE FLOW -->

                <div
                    class="ng-nwt-clean-flow"
                    aria-label="Van luisteren naar samen onderzoeken"
                >

                    <span>
                        Luisteren
                    </span>

                    <i aria-hidden="true"></i>

                    <span>
                        Delen
                    </span>

                    <i aria-hidden="true"></i>

                    <span>
                        Samen onderzoeken
                    </span>

                </div>


                <!-- RELATION -->

                <p class="ng-nwt-clean-relation">
                    <span>Bewoners</span>
                    <i aria-hidden="true">↔</i>
                    <span>gemeente</span>
                </p>


                <!-- CTA -->

                <a
                    class="ng-nwt-clean-button"
                    href="<?php echo esc_url(
                        home_url(
                            '/noordwerktsamen/'
                        )
                    ); ?>"
                >

                    <span>
                        Ontdek NoordwerkTsamen
                    </span>

                    <span
                        class="ng-nwt-clean-button-arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                </a>

            </div>



            <!-- =================================
                 IMAGE
            ================================== -->

            <div class="ng-nwt-clean-visual">

                <figure class="ng-nwt-clean-photo">

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri()
                            . '/assets/images/noordwerktsamen.jpg'
                        ); ?>"
                        alt="Bewoners in gesprek tijdens NoordwerkTsamen"
                        loading="lazy"
                        decoding="async"
                    >


                    <figcaption>

                        <span>
                            Gesprek in de wijk
                        </span>

                        <strong>
                            Wat speelt er in jouw buurt?
                        </strong>

                    </figcaption>

                </figure>

            </div>

        </div>
        <!-- BOTTOM DETAIL -->

<div class="ng-nwt-clean-bottom">

    <span aria-hidden="true"></span>

    <p>
        Een initiatief van
        <span class="ng-brand-word">NoordgroeiT</span>
        voor en met bewoners van Tilburg-Noord.
    </p>

</div>

    </div>
    

</section>

<!-- =========================================
     HEIKANTSE TUYNEN — CLEAN EDITORIAL
========================================== -->

<section
    class="ng-ht-clean"
    aria-labelledby="ng-ht-clean-title"
>

    <div class="site-container">

        <div class="ng-ht-clean-layout">


            <!-- =================================
                 IMAGE
            ================================== -->

            <div class="ng-ht-clean-visual">

                <figure class="ng-ht-clean-photo">

                    <img
                        src="<?php echo esc_url(
                            get_stylesheet_directory_uri()
                            . '/assets/images/heikantsetuynen.jpeg'
                        ); ?>"
                        alt="Ontmoeting en activiteit bij Heikantse Tuynen"
                        loading="lazy"
                        decoding="async"
                    >


                    <figcaption>

                        <span>
                            Plek in de wijk
                        </span>

                        <strong>
                            Samen groeien
                            begint met
                            elkaar ontmoeten.
                        </strong>

                    </figcaption>

                </figure>

            </div>



            <!-- =================================
                 COPY
            ================================== -->

            <div class="ng-ht-clean-copy">


                <div class="ng-ht-clean-meta">

                    <span>
                        Heikantse Tuynen
                    </span>

                    <i aria-hidden="true"></i>

                    <small>
                        03
                    </small>

                </div>


                <p class="ng-ht-clean-label">
                    Groen en ontmoeting
                </p>


                <h2 id="ng-ht-clean-title">
                    Een groene plek
                    die groeit door
                    de mensen eromheen.
                </h2>
<br>

                <h3>
                    Niet alleen een tuin,
                        maar een plek om samen te zijn.
                </h3>


                <p class="ng-ht-clean-intro">
                    De Heikantse Tuynen brengen buurtbewoners
                    samen in een groene omgeving. Hier is ruimte
                    voor ontmoeting, ideeën en kleine initiatieven
                    die samen de plek verder laten groeien.
                </p>


                <div
                    class="ng-ht-clean-flow"
                    aria-label="Kern van Heikantse Tuynen"
                >

                    <span>
                        Groen
                    </span>

                    <i aria-hidden="true"></i>

                    <span>
                        Ontmoeting
                    </span>

                    <i aria-hidden="true"></i>

                    <span>
                        Buurtkracht
                    </span>

                </div>


                <a
                    class="ng-ht-clean-button"
                    href="<?php echo esc_url(
                        home_url(
                            '/noordbuiten/heikantse-tuynen/'
                        )
                    ); ?>"
                >

                    <span>
                        Ontdek Heikantse Tuynen
                    </span>

                    <span
                        class="ng-ht-clean-button-arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                    

                </a>

            </div>
<!-- BOTTOM DETAIL -->

<div class="ng-ht-clean-bottom">

    <span aria-hidden="true"></span>

    <p>
        Een initiatief van
        <span class="ng-brand-word">NoordgroeiT</span>
        voor een groene, gezonde en verbonden plek
        in Tilburg-Noord.
    </p>

</div>
        </div>

    </div>

</section>

<!-- =========================================
     VAN IDEE NAAR INITIATIEF
========================================== -->

<section
    class="ng-init-growth"
    aria-labelledby="ng-init-growth-title"
>

    <div class="site-container">

        <!-- HEADING -->

        <header class="ng-init-growth-heading">

            <div>

                <p class="ng-init-growth-kicker">
                    Van idee naar initiatief
                </p>

                <h2 id="ng-init-growth-title">
                    Een goed idee hoeft
                    nog niet af te zijn.
                </h2>

            </div>

            <p>
                <span class="ng-brand-word">NoordgroeiT</span>
                denkt mee, brengt mensen bij elkaar en helpt om
                van een eerste gedachte een haalbare volgende stap te maken.
            </p>

        </header>


        <!-- =====================================
             GROWTH PATH
        ====================================== -->

<div
    class="ng-init-rise"
    data-init-rise
>

    <!-- THE GROWING ROUTE -->

<svg
    class="ng-init-rise-route"
    viewBox="0 0 1000 500"
    preserveAspectRatio="none"
    aria-hidden="true"
>
    <path
        class="ng-init-rise-guide"
        d="
            M 32 259
            C 145 250, 220 220, 302 204
            C 410 185, 500 155, 592 139
            C 720 115, 825 80, 968 54
        "
    />

    <path
        class="ng-init-rise-live"
        pathLength="1"
        d="
            M 32 259
            C 145 250, 220 220, 302 204
            C 410 185, 500 155, 592 139
            C 720 115, 825 80, 968 54
        "
    />
</svg>


    <!-- 01 -->

    <article class="ng-init-rise-step ng-init-rise-step--1">

        <div class="ng-init-rise-node">
            <span></span>

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <path d="M24 37V26"></path>
                <path d="M24 28c-7 0-11-4-11-10 7 0 11 4 11 10Z"></path>
            </svg>
        </div>

        <div class="ng-init-rise-copy">

            <span class="ng-init-rise-number">01</span>

            <small>Kennismaken</small>

            <h3>We luisteren</h3>

            <p>
                We beginnen met jouw idee, vraag of wens
                voor de wijk.
            </p>

        </div>

    </article>


    <!-- 02 -->

    <article class="ng-init-rise-step ng-init-rise-step--2">

        <div class="ng-init-rise-node">
            <span></span>

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <circle cx="17" cy="22" r="5"></circle>
                <circle cx="31" cy="18" r="5"></circle>
                <path d="M22 21 26 20"></path>
                <path d="M24 37V27"></path>
            </svg>
        </div>

        <div class="ng-init-rise-copy">

            <span class="ng-init-rise-number">02</span>

            <small>Samenbrengen</small>

            <h3>We verbinden</h3>

            <p>
                We zoeken mensen en organisaties
                die kunnen aansluiten.
            </p>

        </div>

    </article>


    <!-- 03 -->

    <article class="ng-init-rise-step ng-init-rise-step--3">

        <div class="ng-init-rise-node">
            <span></span>

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <path d="M24 39V22"></path>
                <path d="M24 28c-8 0-12-5-12-11 8 0 12 5 12 11Z"></path>
                <path d="M24 31c8 0 13-5 13-12-8 0-13 5-13 12Z"></path>
            </svg>
        </div>

        <div class="ng-init-rise-copy">

            <span class="ng-init-rise-number">03</span>

            <small>Ontwikkelen</small>

            <h3>We bouwen verder</h3>

            <p>
                Het idee krijgt vorm, richting
                en een haalbare volgende stap.
            </p>

        </div>

    </article>


    <!-- 04 -->

    <article class="ng-init-rise-step ng-init-rise-step--4">

        <div class="ng-init-rise-node">
            <span></span>

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <path d="M24 40V20"></path>
                <path d="M24 27c-7 0-11-4-11-10 7 0 11 4 11 10Z"></path>
                <path d="M24 30c8 0 13-5 13-12-8 0-13 5-13 12Z"></path>
                <circle cx="24" cy="11" r="4"></circle>
            </svg>
        </div>

        <div class="ng-init-rise-copy">

            <span class="ng-init-rise-number">04</span>

            <small>Uitvoeren</small>

            <h3>We maken beweging</h3>

            <p>
                Het initiatief wordt zichtbaar
                in Tilburg-Noord.
            </p>

        </div>

    </article>

</div>


        <!-- BOTTOM CTA -->

        <div class="ng-init-growth-footer">

            <p>
                Heb jij een idee voor Tilburg-Noord?
                Je hoeft nog geen volledig plan te hebben.
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/contact/#idee')
                ); ?>"
            >
                Vertel ons jouw idee

                <span aria-hidden="true">
                    ↗
                </span>
            </a>

        </div>

    </div>

</section>

<!-- =========================================
     INITIATIEVEN — JOUW IDEE
========================================== -->

<section
    class="ng-init-idea"
    aria-labelledby="ng-init-idea-title"
>

    <div class="site-container">

        <div class="ng-init-idea-layout">


            <!-- COPY -->

            <div class="ng-init-idea-copy">

                <p class="ng-init-idea-kicker">
                    Jouw idee voor de wijk
                </p>

                <h2 id="ng-init-idea-title">
                    Zie jij iets dat
                    Tilburg-Noord beter kan maken?
                </h2>

                <p>
                    Je hoeft nog geen uitgewerkt plan te hebben.
                    Vertel ons wat je ziet, mist of graag zou willen
                    veranderen. <span class="ng-brand-word">NoordgroeiT</span>
                    kijkt graag met je mee.
                </p>


                <div class="ng-init-idea-actions">

                    <a
                        class="ng-init-idea-button"
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        <span>
                            Deel jouw idee
                        </span>

                        <span
                            class="ng-init-idea-button-arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>
                    </a>


                    <a
                        class="ng-init-idea-secondary"
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        Eerst kennismaken
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>


            <!-- VISUAL NOTE -->

            <div class="ng-init-idea-visual">

                <div class="ng-init-idea-paper">

                    <span
                        class="ng-init-idea-pin"
                        aria-hidden="true"
                    ></span>


                    <div class="ng-init-idea-paper-top">

                        <span>
                            Idee uit Tilburg-Noord
                        </span>

                        <small>
                            # ?
                        </small>

                    </div>


                    <p class="ng-init-idea-question">
                        Wat zou jij graag
                        anders zien in de wijk?
                    </p>


                    <div
                        class="ng-init-idea-lines"
                        aria-hidden="true"
                    >
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>


                    <div class="ng-init-idea-prompts">

                        <span>
                            Iets groener?
                        </span>

                        <span>
                            Meer ontmoeting?
                        </span>

                        <span>
                            Een nieuwe activiteit?
                        </span>

                    </div>


                    <div class="ng-init-idea-paper-footer">

                        <span>
                            Geen volledig plan nodig
                        </span>

                        <strong aria-hidden="true">
                            ✦
                        </strong>

                    </div>

                </div>


                <div
                    class="ng-init-idea-note"
                    aria-hidden="true"
                >
                    <span></span>

                    <p>
                        het mag beginnen
                        <strong>met één gedachte</strong>
                    </p>
                </div>

            </div>

        </div>


        <!-- BOTTOM ROUTE -->

        <div
            class="ng-init-idea-route"
            aria-hidden="true"
        >
            <span>ZIEN</span>

            <i></i>

            <span>DELEN</span>

            <i></i>

            <span>SAMEN KIJKEN</span>
        </div>

    </div>

</section>


</main>

<?php
get_footer();