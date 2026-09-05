<?php
/**
 * NoordbuiTen
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images =
    get_template_directory_uri()
    . '/assets/images';
?>

<main
    id="main-content"
    class="ng-nb-page"
>

    <!-- =========================================
         HERO — NOORDBUITEN
    ========================================== -->

<section
    class="ng-inner-hero ng-inner-hero--noordbuiten"
    aria-labelledby="ng-nb-hero-title"
>

    <img
        class="ng-inner-hero__image"
        src="<?php echo esc_url(
            get_template_directory_uri()
            . '/assets/images/noordbuiten.webp'
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

            <h1 id="ng-nb-hero-title">
                NoordbuiTen
            </h1>

            <p class="ng-inner-hero__meta">
                Moerstraat 23
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
     WAT IS NOORDBUITEN?
========================================== -->

<section
    class="ng-nb-story"
    aria-labelledby="ng-nb-story-title"
>

    <div class="site-container">


        <!-- INTRO -->

        <header class="ng-nb-story__heading">

            <div>

                <p class="ng-nb-story__kicker">
                    Wat is NoordbuiTen?
                </p>

                <h2 id="ng-nb-story-title">
                    Een plek waar buiten zijn
                    <span>meer betekent.</span>
                </h2>

            </div>


            <div class="ng-nb-story__intro">

                <p>
                    NoordbuiTen is de groene ontmoetingsplek van
                    NoordgroeiT aan de Moerstraat. Een plek waar
                    bewoners samen werken aan natuur, voedsel,
                    gezondheid en ontmoeting.
                </p>

                <p>
                    Het terrein groeit stap voor stap uit tot een
                    plek om te tuinieren, leren, maken, bewegen,
                    spelen en simpelweg samen buiten te zijn.
                </p>

            </div>

        </header>



        <!-- VISUAL -->

        <div class="ng-nb-story__visual">


            <figure class="ng-nb-story__photo">

                <img
                    src="<?php echo esc_url(
                        get_stylesheet_directory_uri()
                        . '/assets/images/initiative-noordbuiten.jpg'
                    ); ?>"
                    alt="Overzicht van NoordbuiTen aan de Moerstraat in Tilburg-Noord"
                    loading="lazy"
                    decoding="async"
                >

            </figure>



            <!-- THEMES -->

            <span
                class="ng-nb-story__marker
                       ng-nb-story__marker--nature"
            >
                <span></span>
                Natuur
            </span>


            <span
                class="ng-nb-story__marker
                       ng-nb-story__marker--food"
            >
                <span></span>
                Voedsel
            </span>


            <span
                class="ng-nb-story__marker
                       ng-nb-story__marker--meet"
            >
                <span></span>
                Ontmoeten
            </span>


            <span
                class="ng-nb-story__marker
                       ng-nb-story__marker--learn"
            >
                <span></span>
                Leren
            </span>


            <span
                class="ng-nb-story__marker
                       ng-nb-story__marker--move"
            >
                <span></span>
                Bewegen
            </span>



            <!-- LOCATION -->

            <div class="ng-nb-story__location">

                <span
                    class="ng-nb-story__location-dot"
                    aria-hidden="true"
                ></span>

                <div>

                    <small>
                        Je vindt ons hier
                    </small>

                    <strong>
                        Moerstraat 23 · Tilburg-Noord
                    </strong>

                </div>

            </div>


        </div>



        <!-- SMALL STORY ROUTE -->

        <div
            class="ng-nb-story__route"
            aria-label="Waar NoordbuiTen ruimte voor biedt"
        >

            <span>BUITEN ZIJN</span>

            <i></i>

            <span>SAMEN DOEN</span>

            <i></i>

            <span>LEREN</span>

            <i></i>

            <span>GROEIEN</span>

        </div>


    </div>

</section>

<!-- =========================================
     DE PLEK GROEIT
========================================= -->

<section
    class="ng-nb-grow"
    aria-labelledby="ng-nb-grow-title"
>

    <div class="site-container">


        <!-- HEADER -->

        <header class="ng-nb-grow-heading">

            <div>

                <p class="ng-nb-grow-kicker">
                    Er gebeurt steeds meer
                </p>

                <h2 id="ng-nb-grow-title">
                    De plek groeit
                    <span>stap voor stap.</span>
                </h2>

            </div>


            <p>
                NoordbuiTen wordt samen met bewoners en vrijwilligers
                opgebouwd. Sommige plekken zijn al in gebruik,
                andere krijgen steeds meer vorm.
            </p>

        </header>



        <!-- PROJECT 01 -->

        <article class="ng-nb-grow-item">

            <figure class="ng-nb-grow-image">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/hout.jpg'
                    ); ?>"
                    alt="Werkzaamheden bij de houtwerkplaats van NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

                <span class="ng-nb-grow-status">
                    In ontwikkeling
                </span>

            </figure>


            <div class="ng-nb-grow-copy">

                <span class="ng-nb-grow-number">
                    01
                </span>

                <p class="ng-nb-grow-label">
                    Maken & leren
                </p>

                <h3>
                    Houtwerkplaats
                </h3>

                <p>
                    In en rond de schuur ontstaat ruimte om samen
                    te bouwen, repareren en nieuwe vaardigheden
                    te leren.
                </p>

                <span class="ng-nb-grow-line" aria-hidden="true"></span>

            </div>

        </article>



        <!-- PROJECT 02 -->

        <article class="ng-nb-grow-item ng-nb-grow-item--reverse">

            <figure class="ng-nb-grow-image">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/kook.webp'
                    ); ?>"
                    alt="Voedsel en tuinieren bij NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

                <span class="ng-nb-grow-status">
                    Groeit verder
                </span>

            </figure>


            <div class="ng-nb-grow-copy">

                <span class="ng-nb-grow-number">
                    02
                </span>

                <p class="ng-nb-grow-label">
                    Voedsel & groen
                </p>

                <h3>
                    Tuin en voedsel
                </h3>

                <p>
                    De moestuin, boomgaard en toekomstige kas maken
                    ruimte voor lokaal voedsel, biodiversiteit,
                    leren en samen buiten bezig zijn.
                </p>

                <span class="ng-nb-grow-line" aria-hidden="true"></span>

            </div>

        </article>



        <!-- PROJECT 03 -->

        <article class="ng-nb-grow-item">

            <figure class="ng-nb-grow-image">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/speel.webp'
                    ); ?>"
                    alt="Speel- en leeromgeving bij NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

                <span class="ng-nb-grow-status">
                    Voor jong & oud
                </span>

            </figure>


            <div class="ng-nb-grow-copy">

                <span class="ng-nb-grow-number">
                    03
                </span>

                <p class="ng-nb-grow-label">
                    Spelen & ontdekken
                </p>

                <h3>
                    Ruimte om te spelen
                </h3>

                <p>
                    Kinderen krijgen steeds meer ruimte om buiten
                    te spelen, bouwen, ontdekken en van de natuur
                    te leren.
                </p>

                <span class="ng-nb-grow-line" aria-hidden="true"></span>

            </div>

        </article>



        <!-- FOOTER LINK -->

        <footer class="ng-nb-grow-footer">

            <p>
                En dit is nog maar een deel van wat er op de plek gebeurt.
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/noordbuiten/plekken-projecten/')
                ); ?>"
            >
                <span>
                    Bekijk alle plekken & projecten
                </span>

                <span aria-hidden="true">
                    ↗
                </span>
            </a>

        </footer>


    </div>

</section>

<!-- =========================================
     NOORDBUITEN LEEFT
========================================= -->

<section
    class="ng-nb-alive"
    aria-labelledby="ng-nb-alive-title"
>

    <div class="site-container">

        <header class="ng-nb-alive-heading">

            <p class="ng-nb-alive-kicker">
                NoordbuiTen leeft
            </p>

            <div class="ng-nb-alive-heading-row">

                <h2 id="ng-nb-alive-title">
                    Je ontdekt de plek
                    door er gewoon te zijn.
                </h2>

                <p>
                    Soms kom je helpen. Soms voor koffie.
                    Soms leer je iets nieuws en soms blijf je
                    gewoon even hangen.
                </p>

            </div>

        </header>



        <div class="ng-nb-alive-stage">


            <!-- decorative wandering route -->

            <svg
                class="ng-nb-alive-route"
                viewBox="0 0 1100 700"
                preserveAspectRatio="none"
                aria-hidden="true"
            >
                <path
                    d="
                        M80 420
                        C170 220 320 190 425 310
                        C520 420 625 540 745 420
                        C865 300 900 190 1030 245
                    "
                />
            </svg>



            <!-- MAIN IMAGE -->

            <figure class="ng-nb-alive-photo">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/ontmoeten.webp'
                    ); ?>"
                    alt="Bewoners ontmoeten elkaar bij NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

                <figcaption>
                    Moerstraat 23 · Tilburg-Noord
                </figcaption>

            </figure>



            <!-- FLOATING ACTIVITY NOTES -->

            <article class="ng-nb-alive-note ng-nb-alive-note--meet">

                <span class="ng-nb-alive-dot"></span>

                <p class="ng-nb-alive-label">
                    Ontmoeten
                </p>

                <h3>
                    Koffie, een praatje,
                    even blijven hangen.
                </h3>

            </article>



            <article class="ng-nb-alive-note ng-nb-alive-note--make">

                <span class="ng-nb-alive-dot"></span>

                <p class="ng-nb-alive-label">
                    Maken
                </p>

                <h3>
                    Samen bouwen,
                    repareren en aanpakken.
                </h3>

            </article>



            <article class="ng-nb-alive-note ng-nb-alive-note--learn">

                <span class="ng-nb-alive-dot"></span>

                <p class="ng-nb-alive-label">
                    Leren
                </p>

                <h3>
                    Kennis delen door
                    het gewoon te doen.
                </h3>

            </article>



            <article class="ng-nb-alive-note ng-nb-alive-note--play">

                <span class="ng-nb-alive-dot"></span>

                <p class="ng-nb-alive-label">
                    Spelen
                </p>

                <h3>
                    Buiten ontdekken,
                    bewegen en vies worden.
                </h3>

            </article>



            <!-- HANDWRITTEN-STYLE NOTE -->

            <div class="ng-nb-alive-message">

                <span aria-hidden="true">
                    ↳
                </span>

                <p>
                    je hoeft hier niet
                    <strong>met een plan</strong>
                    binnen te komen
                </p>

            </div>

        </div>



        <footer class="ng-nb-alive-footer">

            <p>
                Nieuwsgierig? Kom eens kijken wat er op dat moment gebeurt.
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/noordbuiten/activiteiten/')
                ); ?>"
            >
                Bekijk wat er te doen is

                <span aria-hidden="true">
                    ↗
                </span>
            </a>

        </footer>

    </div>

</section>


<!-- =========================================
     SAMEN MAKEN WE DE PLEK
========================================= -->

<section
    class="ng-nb-together"
    aria-labelledby="ng-nb-together-title"
>

    <div class="site-container">

        <div class="ng-nb-together-top">


            <!-- BIG WORD -->

            <div
                class="ng-nb-together-word"
                aria-hidden="true"
            >
                SAMEN
            </div>



            <!-- COPY -->

            <div class="ng-nb-together-copy">

                <p class="ng-nb-together-kicker">
                    Samen aan de slag
                </p>

                <h2 id="ng-nb-together-title">
                    De plek groeit omdat
                    mensen hun handen uit
                    de mouwen steken.
                </h2>

                <p>
                    Op NoordbuiTen wordt verspreid over de week gewerkt
                    aan alles wat de plek nodig heeft. Soms in de tuin,
                    soms aan een bouwwerk en soms door iets voor te
                    bereiden of samen een nieuw idee uit te werken.
                </p>

                <a
                    class="ng-nb-together-button"
                    href="<?php echo esc_url(
                        home_url('/noordbuiten/meedoen/')
                    ); ?>"
                >
                    <span>Ook een keer meehelpen?</span>
                    <span aria-hidden="true">↗</span>
                </a>

            </div>

        </div>



        <!-- WHAT HAPPENS -->

        <div class="ng-nb-together-strip">

            <div class="ng-nb-together-strip-intro">

                <span aria-hidden="true">✦</span>

                <p>
                    Waar mensen zoal
                    <strong>mee bezig zijn</strong>
                </p>

            </div>


            <div class="ng-nb-together-things">

                <span>
                    <i aria-hidden="true">🌱</i>
                    Groen & tuin
                </span>

                <span>
                    <i aria-hidden="true">🔨</i>
                    Bouwen & maken
                </span>

                <span>
                    <i aria-hidden="true">✦</i>
                    Voorbereiden
                </span>

                <span>
                    <i aria-hidden="true">☕</i>
                    Ontmoeten
                </span>

            </div>

        </div>



        <!-- LITTLE PRACTICAL NOTE -->

        <div class="ng-nb-together-bottom">

            <p>
                <strong>Geen vaste openingstijden.</strong>
                Wil je komen helpen of eerst eens kennismaken?
                Neem even contact op, dan kijken we samen wat past.
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/contact/')
                ); ?>"
            >
                Neem contact op
                <span aria-hidden="true">→</span>
            </a>

        </div>

    </div>

</section>

</main>

<?php
get_footer();