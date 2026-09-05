<?php
/**
 * Template Name: Vrijwilliger worden
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
    class="ng-vol-page"
>


    <!-- =========================================
         HERO — VRIJWILLIGER WORDEN
    ========================================== -->

    <section
        class="ng-inner-hero ng-inner-hero--volunteer"
        aria-labelledby="ng-vol-hero-title"
    >

        <img
            class="ng-inner-hero__image"
            src="<?php echo esc_url(
                $theme_images . '/vrijwilliger.webp'
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


                <h1 id="ng-vol-hero-title">
                    Vrijwilliger worden
                </h1>


                <p class="ng-inner-hero__meta">
                    Jouw tijd
                    <span>Jouw talent</span>
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
         INTRO — EERST KIJKEN WAT PAST
    ========================================== -->

    <section
        class="ng-vol-intro"
        aria-labelledby="ng-vol-intro-title"
    >

        <div class="site-container">

            <div class="ng-vol-intro-layout">


                <!-- LEFT -->

                <div class="ng-vol-intro-copy">

                    <p class="ng-vol-kicker">
                        Geen standaard vrijwilliger
                    </p>


                    <h2 id="ng-vol-intro-title">
                        Eerst kijken naar jou.
                        Daarna naar de rol.
                    </h2>


                    <p class="ng-vol-intro-lead">
                        Vrijwilligerswerk hoeft niet te beginnen
                        bij een vacature of vaste functietitel.
                        Vertel waar je energie van krijgt,
                        wat je kunt en hoeveel tijd je hebt.
                    </p>


                    <p>
                        Vanuit daar kijken we samen waar je iets
                        kunt betekenen binnen
                        <span class="ng-brand-word">NoordgroeiT</span>,
                        NoordbuiTen of een van de initiatieven.
                    </p>

                </div>



                <!-- RIGHT -->

                <div class="ng-vol-fit">


                    <div class="ng-vol-fit-heading">

                        <span aria-hidden="true">
                            ↳
                        </span>

                        <p>
                            We beginnen meestal met
                            drie simpele vragen.
                        </p>

                    </div>



                    <div class="ng-vol-fit-list">


                        <div class="ng-vol-fit-row">

                            <span class="ng-vol-fit-number">
                                01
                            </span>

                            <div>

                                <small>
                                    Waar krijg je energie van?
                                </small>

                                <strong>
                                    Wat vind je leuk om te doen?
                                </strong>

                            </div>

                        </div>



                        <div class="ng-vol-fit-row">

                            <span class="ng-vol-fit-number">
                                02
                            </span>

                            <div>

                                <small>
                                    Wat breng je mee?
                                </small>

                                <strong>
                                    Kennis, ervaring of gewoon enthousiasme.
                                </strong>

                            </div>

                        </div>



                        <div class="ng-vol-fit-row">

                            <span class="ng-vol-fit-number">
                                03
                            </span>

                            <div>

                                <small>
                                    Wat past in je leven?
                                </small>

                                <strong>
                                    Eenmalig, af en toe of juist wat vaker.
                                </strong>

                            </div>

                        </div>


                    </div>



                    <div class="ng-vol-fit-foot">

                        <span></span>

                        <p>
                            Geen perfect antwoord nodig.
                            <strong>
                                Kennismaken is genoeg.
                            </strong>
                        </p>

                    </div>


                </div>


            </div>

        </div>

    </section>

    <!-- =========================================
     VRIJWILLIGER — OPENSTAANDE VACATURES
========================================= -->

<?php

$ng_vol_vacancies = new WP_Query([
    'post_type'      => 'vacature',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',

    'meta_query' => [
        'relation' => 'OR',

        [
            'key'     => '_vacature_status',
            'value'   => 'gesloten',
            'compare' => '!=',
        ],

        [
            'key'     => '_vacature_status',
            'compare' => 'NOT EXISTS',
        ],
    ],
]);

$ng_vol_category_labels = [
    'bestuur'        => 'Bestuur',
    'communicatie'   => 'Communicatie',
    'organisatie'    => 'Organisatie',
    'praktisch'      => 'Praktisch',
    'groen'          => 'Groen',
    'activiteiten'   => 'Activiteiten',
    'overig'         => 'Vrijwilligerswerk',
];

?>

<!-- =========================================
     VRIJWILLIGER — MANIEREN OM BIJ TE DRAGEN
========================================= -->

<section
    class="ng-vw-possibilities"
    aria-labelledby="ng-vw-possibilities-title"
>
    <div class="site-container">


        <!-- HEADING -->

        <header class="ng-vw-possibilities-heading">

            <div>

                <p class="ng-vw-possibilities-kicker">
                    Iedereen brengt iets anders mee
                </p>

                <h2 id="ng-vw-possibilities-title">
                    Waar zou jij iets in
                    willen betekenen?
                </h2>

            </div>


            <p>
                Je hoeft niet precies in een vacature te passen.
                Soms zoeken we iemand voor een concrete rol,
                soms ontstaat een bijdrage gewoon vanuit wat
                iemand kan en leuk vindt.
            </p>

        </header>



        <!-- DIRECTIONS -->

        <div class="ng-vw-possibilities-grid">


            <article class="ng-vw-possibility">

                <span class="ng-vw-possibility-number">
                    01
                </span>

                <div>

                    <small>
                        Communicatie &amp; digitaal
                    </small>

                    <h3>
                        Zorgen dat mensen
                        ons weten te vinden.
                    </h3>

                    <p>
                        Website, sociale media, schrijven,
                        fotografie en andere manieren om
                        zichtbaar te maken wat er gebeurt.
                    </p>

                </div>

            </article>



            <article class="ng-vw-possibility">

                <span class="ng-vw-possibility-number">
                    02
                </span>

                <div>

                    <small>
                        Activiteiten &amp; ontmoeting
                    </small>

                    <h3>
                        Mensen bij elkaar
                        brengen.
                    </h3>

                    <p>
                        Helpen organiseren, bezoekers ontvangen,
                        ondersteunen bij activiteiten of gewoon
                        zorgen dat mensen zich welkom voelen.
                    </p>

                </div>

            </article>



            <article class="ng-vw-possibility">

                <span class="ng-vw-possibility-number">
                    03
                </span>

                <div>

                    <small>
                        Groen &amp; praktisch
                    </small>

                    <h3>
                        Met je handen
                        iets bijdragen.
                    </h3>

                    <p>
                        Buiten werken, bouwen, klussen,
                        onderhouden of ergens praktisch
                        bijspringen waar dat nodig is.
                    </p>

                </div>

            </article>



            <article class="ng-vw-possibility">

                <span class="ng-vw-possibility-number">
                    04
                </span>

                <div>

                    <small>
                        Organisatie &amp; bestuur
                    </small>

                    <h3>
                        Achter de schermen
                        meehelpen.
                    </h3>

                    <p>
                        Meedenken, plannen, administratie,
                        coördinatie of jouw kennis inzetten
                        om de organisatie sterker te maken.
                    </p>

                </div>

            </article>


        </div>



        <!-- BOTTOM -->

        <div class="ng-vw-possibilities-bottom">

            <div>

                <span aria-hidden="true">
                    ✦
                </span>

                <p>
                    Soms hebben we wél een concrete rol openstaan.
                    Die vind je allemaal op één plek.
                </p>

            </div>


            <a
                class="ng-vw-possibilities-button"
                href="<?php echo esc_url(
                    home_url('/vacatures/')
                ); ?>"
            >
                <span>
                    Bekijk openstaande vacatures
                </span>

                <i aria-hidden="true">
                    →
                </i>
            </a>

        </div>


        <div class="ng-vw-possibilities-note">

            <span aria-hidden="true">
                ↳
            </span>

            <p>
                Niets gevonden dat bij je past?
                <a href="<?php echo esc_url(
                    home_url('/contact/')
                ); ?>">
                    Neem gerust contact op
                </a>
                — soms ontstaat een rol juist vanuit een gesprek.
            </p>

        </div>


    </div>
</section>

<!-- =========================================
     VRIJWILLIGER — OPEN KENNISMAKING
========================================= -->

<section
    class="ng-vol-open"
    aria-labelledby="ng-vol-open-title"
>

    <div class="site-container">

        <div class="ng-vol-open-layout">


            <!-- IMAGE -->

            <figure class="ng-vol-open-photo">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                        . '/assets/images/initiative-conversation.webp'
                    ); ?>"
                    alt=""
                    loading="lazy"
                    decoding="async"
                >

                <figcaption>
                    <span aria-hidden="true">↳</span>

                    <p>
                        Soms ontstaat een rol
                        <strong>
                            pas tijdens het gesprek.
                        </strong>
                    </p>
                </figcaption>

            </figure>



            <!-- COPY -->

            <div class="ng-vol-open-copy">

                <p class="ng-vol-kicker">
                    Niets gevonden?
                </p>


                <h2 id="ng-vol-open-title">
                    Misschien staat jouw rol
                    gewoon nog niet online.
                </h2>


                <p class="ng-vol-open-lead">
                    Een vacature is niet de enige manier
                    om bij NoordgroeiT aan te sluiten.
                </p>


                <p>
                    Heb je kennis, ervaring of een talent
                    waarvan je denkt dat het iets kan betekenen
                    voor Tilburg-Noord? Laat van je horen.
                    Dan kijken we samen waar jouw bijdrage
                    zou kunnen passen.
                </p>



                <div class="ng-vol-open-prompts">

                    <div>
                        <small>Je kunt bijvoorbeeld zeggen</small>

                        <strong>
                            “Hier ben ik goed in.”
                        </strong>
                    </div>


                    <div>
                        <small>Of gewoon</small>

                        <strong>
                            “Dit lijkt me leuk.”
                        </strong>
                    </div>


                    <div>
                        <small>En zelfs</small>

                        <strong>
                            “Ik weet nog niet precies wat.”
                        </strong>
                    </div>

                </div>



                <div class="ng-vol-open-action">

                    <a
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                    >
                        <span>
                            Maak kennis met ons
                        </span>

                        <i aria-hidden="true">
                            →
                        </i>
                    </a>


                    <p>
                        Een eerste berichtje
                        is genoeg.
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>

<!-- =========================================
     VRIJWILLIGER — VERHAAL
========================================= -->

<section
    class="ng-vol-story"
    aria-labelledby="ng-vol-story-title"
>

    <div class="site-container">

        <div class="ng-vol-story-layout">


            <!-- LEFT -->

            <div class="ng-vol-story-intro">

                <p class="ng-vol-kicker">
                    Vrijwilligers vertellen
                </p>

                <h2 id="ng-vol-story-title">
                    Uiteindelijk draait het
                    om mensen die iets willen bijdragen.
                </h2>

                <p>
                    Iedereen komt met een andere achtergrond,
                    interesse of hoeveelheid tijd.
                    Juist die verschillen maken NoordgroeiT sterker.
                </p>

            </div>



            <!-- QUOTE -->

            <article class="ng-vol-story-quote">

                <span
                    class="ng-vol-story-mark"
                    aria-hidden="true"
                >
                    “
                </span>


                <blockquote>

                    <p>
                        Wat ik mooi vind, is dat ideeën hier niet
                        alleen besproken worden. Mensen proberen
                        er samen echt iets van te maken voor
                        Tilburg-Noord.
                    </p>

                </blockquote>


                <footer>

                    <div>
                        <strong>
                            Susan
                        </strong>

                        <span>
                            Vrijwilliger website &amp;
                            digitale communicatie
                        </span>
                    </div>


                    <span
                        class="ng-vol-story-arrow"
                        aria-hidden="true"
                    >
                        ↗
                    </span>

                </footer>


                <div
                    class="ng-vol-story-line"
                    aria-hidden="true"
                ></div>

            </article>


        </div>



        <!-- FOOT -->

        <div class="ng-vol-story-foot">

            <span aria-hidden="true">
                ✦
            </span>

            <p>
                Geen twee vrijwilligers hoeven
                precies hetzelfde te doen.
            </p>

        </div>


    </div>

</section>

<!-- =========================================
     VRIJWILLIGER — FINAL CTA
========================================= -->

<section
    class="ng-vol-final"
    aria-labelledby="ng-vol-final-title"
>

    <div class="site-container">

        <div class="ng-vol-final-inner">


            <div class="ng-vol-final-copy">

                <p class="ng-vol-kicker">
                    Zin om iets te betekenen?
                </p>

                <h2 id="ng-vol-final-title">
                    Misschien begint het
                    gewoon met één bericht.
                </h2>

                <p>
                    Bekijk wat er nu openstaat of neem contact op.
                    Dan kijken we samen wat bij jou past.
                </p>

            </div>



            <div class="ng-vol-final-actions">


                <a
                    class="ng-vol-final-action ng-vol-final-action--primary"
                    href="<?php echo esc_url(
                        get_post_type_archive_link('vacature')
                    ); ?>"
                >

                    <span>

                        <small>
                            Bekijk wat we zoeken
                        </small>

                        <strong>
                            Openstaande vacatures
                        </strong>

                    </span>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>



                <a
                    class="ng-vol-final-action"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >

                    <span>

                        <small>
                            Eerst even kennismaken
                        </small>

                        <strong>
                            Neem contact op
                        </strong>

                    </span>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>


            </div>


        </div>



        <div class="ng-vol-final-bottom">

            <span aria-hidden="true">
                ↳
            </span>

            <p>
                Je hoeft nog niet precies te weten
                welke rol bij je past.
            </p>

        </div>


    </div>

</section>

    </main>

<?php get_footer(); ?>