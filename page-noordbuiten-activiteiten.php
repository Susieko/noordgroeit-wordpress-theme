<?php
/**
 * Template Name: NoordbuiTen - Activiteiten
 */

get_header();

$theme_images = get_template_directory_uri() . '/assets/images';
?>

<main id="main-content" class="ng-nba-page">


    <!-- =========================================
         ACTIVITEITEN — INTRO
    ========================================== -->

<section
    class="ng-nba-intro ng-nba-intro--moment"
    aria-labelledby="ng-nba-title"
>

    <div class="site-container">

        <div class="ng-nba-moment-layout">


            <!-- COPY -->

            <div class="ng-nba-moment-copy">

                <p class="ng-nba-intro-kicker">
                    NoordbuiTen · Activiteiten
                </p>

                <h1 id="ng-nba-title">
                    Voor ieder wat te doen
                    
                </h1>

                <p>
                    Buiten bezig zijn, iets nieuws leren,
                    mensen ontmoeten of gewoon nieuwsgierig
                    komen kijken. Op NoordbuiTen ontstaat
                    steeds weer iets anders.
                </p>


                <div class="ng-nba-moment-tags">

                    <span>Buiten</span>
                    <span>Ontdekken</span>
                    <span>Ontmoeten</span>
                    <span>Meedoen</span>

                </div>

            </div>



            <!-- VISUAL -->

            <div class="ng-nba-moment-visual">


                <!-- MAIN PHOTO -->

                <figure class="ng-nba-moment-photo">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/koffie.webp'
                        ); ?>"
                        alt="Mensen ontmoeten elkaar tijdens een activiteit bij NoordbuiTen"
                    >

                </figure>


                <!-- SECOND PHOTO -->

                <figure class="ng-nba-moment-photo-small">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/speel.webp'
                        ); ?>"
                        alt=""
                        aria-hidden="true"
                    >

                </figure>


                <!-- LARGE GRAPHIC WORD -->

                <span
                    class="ng-nba-moment-word"
                    aria-hidden="true"
                >
                    DOEN
                </span>


                <!-- CORAL STAMP -->

                <div class="ng-nba-moment-stamp">

                    <span>
                        vandaag
                    </span>

                    <strong>
                        ?
                    </strong>

                </div>


                <!-- LITTLE NOTE -->

                <div class="ng-nba-moment-note">

                    <span aria-hidden="true">↳</span>

                    <p>
                        kijk wat er
                        <strong>ontstaat</strong>
                    </p>

                </div>


            </div>

        </div>



        <div class="ng-nba-intro-bottom">

            <span aria-hidden="true"></span>

            <p>
                Van een kleine activiteit tot een bijzondere dag.
            </p>

        </div>

    </div>

</section>


    <!-- =========================================
         EERSTVOLGENDE ACTIVITEIT
    ========================================== -->

    <section
        class="ng-nba-feature"
        aria-labelledby="ng-nba-feature-title"
    >

        <div class="site-container">


            <header class="ng-nba-feature-heading">

                <div>

                    <p class="ng-nba-feature-kicker">
                        Eerstvolgende activiteit
                    </p>

                    <h2 id="ng-nba-feature-title">
                        Pauwelsdag bij
                        NoordbuiTen.
                    </h2>

                </div>


                <p>
                    Een dag om NoordbuiTen én Landschap Pauwels
                    te ontdekken. Loop binnen, kijk rond en doe mee
                    met wat er op de plek gebeurt.
                </p>

            </header>



            <!-- EVENT -->

            <article class="ng-nba-event">


                <!-- IMAGE -->

                <figure class="ng-nba-event-image">

                    <img
                        src="<?php echo esc_url(
                            $theme_images . '/pauwels.webp'
                        ); ?>"
                        alt="Bezoekers ontmoeten elkaar bij NoordbuiTen"
                        loading="lazy"
                        decoding="async"
                    >


                    <figcaption>
                        NoordbuiTen · Moerstraat 23
                    </figcaption>

                </figure>



                <!-- DATE -->

                <div class="ng-nba-event-date">

                    <span>
                        Zondag
                    </span>

                    <strong>
                        13
                    </strong>

                    <b>
                        SEP
                    </b>

                    <small>
                        2026
                    </small>

                </div>



                <!-- INFO -->

                <div class="ng-nba-event-copy">

                    <div class="ng-nba-event-topline">

                        <span>
                            10:00 — 16:00
                        </span>

                        <span>
                            Gratis · vrije inloop
                        </span>

                    </div>


                    <h3>
                        Ontdek NoordbuiTen
                        tijdens Pauwelsdag
                    </h3>


                    <p>
                        Maak kennis met de plek via verschillende
                        activiteiten, ontdek de omgeving tijdens een
                        wandeling en kom meer te weten over wat er
                        in de stadsrand gebeurt.
                    </p>


                    <ul>

                        <li>
                            kennismakingsactiviteiten
                        </li>

                        <li>
                            wandelen over het Pauwelspad
                        </li>

                        <li>
                            activiteiten voor kinderen
                        </li>

                        <li>
                            informatie over projecten in het gebied
                        </li>

                    </ul>


                    <a
                        class="ng-nba-event-button"
                        href="https://landschappauwels.nl/activiteit/stadsboerderij-noordgroeit/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <span>
                            Bekijk Pauwelsdag
                        </span>

                        <span aria-hidden="true">
                            ↗
                        </span>
                    </a>

                </div>

            </article>



            <!-- LITTLE AFTER-NOTE -->

            <div class="ng-nba-feature-note">

                <span aria-hidden="true">
                    ✦
                </span>

                <p>
                    Niet iedere activiteit hoeft groot te zijn.
                    Soms begint iets gewoon met samen buiten aan de slag gaan.
                </p>

            </div>


        </div>

    </section>

    <!-- =========================================
     DE VERHALENBANK
========================================= -->

<section
    class="ng-nba-stories"
    aria-labelledby="ng-nba-stories-title"
>

    <div class="site-container">


        <!-- INTRO -->

        <header class="ng-nba-stories-heading">

            <div>

                <p class="ng-nba-stories-kicker">
                    Een activiteit in ontwikkeling
                </p>

                <h2 id="ng-nba-stories-title">
                    Een plek waar verhalen
                    blijven hangen.
                </h2>

            </div>


            <p>
                De Verhalenbank moet een plek worden waar bewoners
                elkaar op een vanzelfsprekende manier ontmoeten,
                luisteren en hun eigen verhaal kunnen delen.
            </p>

        </header>



 <!-- =========================================
     VERHALENBANK VISUAL
========================================= -->

<div class="ng-nba-stories-stage">


    <!-- LEFT QUOTE -->

<div class="ng-nba-story-voice ng-nba-story-voice--left">

    <span class="ng-nba-story-quote" aria-hidden="true">
        “
    </span>

    <p>
        Wat speelt er bij
        jou in de buurt?
    </p>

<!-- LEFT -->
<svg
    class="ng-nba-story-tail"
    viewBox="0 0 180 80"
    preserveAspectRatio="none"
    aria-hidden="true"
>
    <path d="M5 18 C70 8 125 22 175 68" />
</svg>

</div>



    <!-- CENTER IMAGE -->

    <figure class="ng-nba-story-visual">

        <img
            src="<?php echo esc_url(
                get_template_directory_uri()
                . '/assets/images/activiteit.webp'
            ); ?>"
            alt="Twee bewoners in gesprek onder de zilverlinde"
            loading="lazy"
            decoding="async"
        >

        <figcaption>

            <small>
                Straks op het terras
            </small>

            <strong>
                onder de zilverlinde
            </strong>

            <span aria-hidden="true"></span>

        </figcaption>

    </figure>



    <!-- RIGHT QUOTE -->

<div class="ng-nba-story-voice ng-nba-story-voice--right">

    <span class="ng-nba-story-quote" aria-hidden="true">
        ”
    </span>

    <p>
        Misschien herken
        ik iets in jouw
        verhaal.
    </p>

<!-- RIGHT -->
<svg
    class="ng-nba-story-tail"
    viewBox="0 0 180 80"
    preserveAspectRatio="none"
    aria-hidden="true"
>
    <path d="M5 68 C58 45 110 12 175 18" />
</svg>

</div>


</div>

</section>

<!-- =========================================
     CAS DE DAS
========================================= -->

<section
    class="ng-nba-cas"
    aria-labelledby="ng-nba-cas-title"
>

    <div class="site-container">


        <div class="ng-nba-cas-layout">


            <!-- COPY -->

            <div class="ng-nba-cas-copy">

                <p class="ng-nba-cas-kicker">
                    Activiteit in ontwikkeling
                </p>


                <h2 id="ng-nba-cas-title">
                    Op pad met
                    Cas de Das.
                </h2>


                <p>
                    Een nieuw verhaal en spelidee voor kinderen,
                    waarin Cas de Das hen meeneemt door NoordbuiTen
                    en laat kijken naar de natuur en omgeving
                    om hen heen.
                </p>


                <div class="ng-nba-cas-status">

                    <span aria-hidden="true"></span>

                    <p>
                        Het verhaal en de precieze activiteit
                        worden nog ontwikkeld.
                    </p>

                </div>

            </div>



<!-- =========================================
     CAS STORY TRAIL
========================================= -->

<div class="ng-nba-cas-adventure">


    <!-- ORGANIC GROUND -->

    <div
        class="ng-nba-cas-ground"
        aria-hidden="true"
    ></div>



    <!-- TRAIL -->

    <svg
        class="ng-nba-cas-trail"
        viewBox="0 0 700 500"
        preserveAspectRatio="none"
        aria-hidden="true"
    >
        <path
            d="
                M70 365
                C145 330 130 205 220 165
                C300 128 350 162 381 222
                C410 278 472 300 527 264
                C588 224 566 130 642 90
            "
        />
    </svg>



    <!-- KIJK -->

    <div class="ng-nba-cas-marker ng-nba-cas-marker--look">

        <span aria-hidden="true">
            ◉
        </span>

        <strong>
            Kijk
        </strong>

    </div>



    <!-- ONTDEK -->

    <div class="ng-nba-cas-marker ng-nba-cas-marker--discover">

        <span aria-hidden="true">
            ✦
        </span>

        <strong>
            Ontdek
        </strong>

    </div>



    <!-- DENK -->

    <div class="ng-nba-cas-marker ng-nba-cas-marker--think">

        <span aria-hidden="true">
            ◌
        </span>

        <strong>
            Denk
        </strong>

    </div>



    <!-- CAS -->

    <figure class="ng-nba-cas-figure">

        <img
            src="<?php echo esc_url(
                get_template_directory_uri()
                . '/assets/images/cas.webp'
            ); ?>"
            alt="Cas de Das"
            loading="lazy"
            decoding="async"
        >

    </figure>



    <!-- NOTE -->

    <div class="ng-nba-cas-whisper">

        <span aria-hidden="true">
            ↳
        </span>

        <p>
            Cas neemt je
            <strong>mee op avontuur</strong>
        </p>

    </div>



    <!-- PAW PRINTS -->

    <div
        class="ng-nba-cas-footprints ng-nba-cas-footprints--one"
        aria-hidden="true"
    >
        <i></i>
        <i></i>
        <i></i>
    </div>


    <div
        class="ng-nba-cas-footprints ng-nba-cas-footprints--two"
        aria-hidden="true"
    >
        <i></i>
        <i></i>
        <i></i>
    </div>


    <!-- LITTLE PLANTS -->

    <span
        class="ng-nba-cas-sprout ng-nba-cas-sprout--one"
        aria-hidden="true"
    >
        ❧
    </span>

    <span
        class="ng-nba-cas-sprout ng-nba-cas-sprout--two"
        aria-hidden="true"
    >
        ❧
    </span>


</div>



        <!-- BOTTOM -->

        <div class="ng-nba-cas-bottom">

            <p>
                Het idee wordt verder uitgewerkt als activiteit
                rondom natuur- en omgevingsbewustzijn voor kinderen.
            </p>

            <span>
                Binnenkort meer
            </span>

        </div>


    </div>

</section>

<!-- =========================================
     EEN JAAR OP NOORDBUITEN
========================================= -->

<section
    class="ng-nba-year"
    aria-labelledby="ng-nba-year-title"
>

    <div class="site-container">


        <!-- HEADING -->

        <header class="ng-nba-year-heading">

            <div>

                <p class="ng-nba-year-kicker">
                    Door het jaar heen
                </p>

                <h2 id="ng-nba-year-title">
                    Kleine momenten,    
                    <span>grote dagen</span>
                </h2>

            </div>


            <p>
                Op NoordbuiTen gebeurt van alles.
                Sommige activiteiten zijn groot en gepland,
                andere ontstaan gewoon doordat mensen samen
                iets willen doen.
            </p>

        </header>



        <!-- ACTIVITY TRAIL -->

        <div class="ng-nba-year-trail">


            <!-- CENTRAL ROUTE -->

            <div
                class="ng-nba-year-line"
                aria-hidden="true"
            ></div>



            <!-- ROMMELMARKT -->

            <article
                class="ng-nba-year-moment
                       ng-nba-year-moment--market"
            >

                <span class="ng-nba-year-marker"></span>

                <p>
                    Terugblik
                </p>

                <h3>
                    Rommelmarkt
                </h3>

                <span class="ng-nba-year-desc">
                    Zelfs met wat regen
                    werd het een gezellige dag.
                </span>

            </article>



            <!-- BOOMPLANTDAG -->

            <article
                class="ng-nba-year-moment
                       ng-nba-year-moment--trees"
            >

                <span class="ng-nba-year-marker"></span>

                <p>
                    Samen buiten
                </p>

                <h3>
                    Boomplantdag
                </h3>

                <span class="ng-nba-year-desc">
                    Bewoners, kinderen en partners
                    zetten samen iets nieuws neer.
                </span>

            </article>



            <!-- BIODIVERSITEIT -->

            <article
                class="ng-nba-year-moment
                       ng-nba-year-moment--bio"
            >

                <span class="ng-nba-year-marker"></span>

                <p>
                    Voor kinderen
                </p>

                <h3>
                    Biodiversiteit
                </h3>

                <span class="ng-nba-year-desc">
                    Buiten ontdekken wat er
                    allemaal leeft en groeit.
                </span>

            </article>



            <!-- NL DOET -->

            <article
                class="ng-nba-year-moment
                       ng-nba-year-moment--nldoet"
            >

                <span class="ng-nba-year-marker"></span>

                <p>
                    Handen uit de mouwen
                </p>

                <h3>
                    NL Doet
                </h3>

                <span class="ng-nba-year-desc">
                    Samen aanpakken wat de
                    plek op dat moment nodig heeft.
                </span>

            </article>



            <!-- MUZIEK & KLIMAAT -->

            <article
                class="ng-nba-year-moment
                       ng-nba-year-moment--music"
            >

                <span class="ng-nba-year-marker"></span>

                <p>
                    Ontmoeten &amp; ontdekken
                </p>

                <h3>
                    Muziek &amp; klimaat
                </h3>

                <span class="ng-nba-year-desc">
                    Muziek, kinderen en gesprekken
                    over natuur en klimaat.
                </span>

            </article>



            <!-- LITTLE VISUAL NOTE -->

            <div class="ng-nba-year-note">

                <span aria-hidden="true">
                    ↳
                </span>

                <p>
                    en tussendoor?
                    <strong>
                        gebeurt er ook genoeg.
                    </strong>
                </p>

            </div>


        </div>



        <!-- BOTTOM -->

        <footer class="ng-nba-year-footer">

            <p>
                Nieuwe activiteiten worden toegevoegd
                zodra plannen concreet worden.
            </p>


            <a
                href="<?php echo esc_url(
                    home_url('/nieuws-agenda/#agenda')
                ); ?>"
            >
                Bekijk de actuele agenda

                <span aria-hidden="true">
                    →
                </span>
            </a>

        </footer>


    </div>

</section>


</main>

<?php get_footer(); ?>