<?php
/**
 * Doe mee
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- =========================================
     HERO — DOE MEE
========================================= -->

<section
    class="ng-inner-hero ng-inner-hero--doe-mee"
    aria-labelledby="ng-doe-mee-hero-title"
>

    <img
        class="ng-inner-hero__image"
        src="<?php echo esc_url(
            get_template_directory_uri()
            . '/assets/images/doe-mee.jpg'
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

            <h1 id="ng-doe-mee-hero-title">
                Doe mee
            </h1>

            <p class="ng-inner-hero__meta">
                Jouw wijk
                <span>Jouw bijdrage</span>
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
     DOE MEE — ER IS MEER DAN ÉÉN INGANG
========================================= -->

<section
    class="ng-dm-entry"
    id="manieren-om-mee-te-doen"
    aria-labelledby="ng-dm-entry-title"
>

    <div class="site-container">

        <div class="ng-dm-entry-layout">


            <!-- COPY -->

            <div class="ng-dm-entry-copy">

                <p class="ng-dm-kicker">
                    Meedoen begint klein
                </p>

                <h2 id="ng-dm-entry-title">
                    Je hoeft hier niet
                    in één hokje te passen.
                </h2>

                <p>
                    Misschien heb je tijd.
                    Misschien een goed idee.
                    Of misschien kun je vanuit je organisatie
                    iets mogelijk maken.
                </p>


                <div class="ng-dm-entry-note">

                    <span aria-hidden="true">
                        ↳
                    </span>

                    <p>
                        Begin gewoon bij
                        <strong>wat jij mee wilt brengen.</strong>
                    </p>

                </div>

            </div>



            <!-- WAYS IN -->

            <div
                class="ng-dm-entry-ways"
                aria-label="Manieren om mee te doen"
            >

                <div
                    class="ng-dm-entry-line"
                    aria-hidden="true"
                ></div>


                <!-- TIME -->

                <a
                    class="ng-dm-way ng-dm-way--time"
                    href="#vrijwilliger"
                >

                    <span class="ng-dm-way-dot">
                        01
                    </span>

                    <div>

                        <small>
                            Ik heb tijd
                        </small>

                        <strong>
                            Ik wil helpen.
                        </strong>

                        <p>
                            Een keer, af en toe
                            of wat vaker.
                        </p>

                    </div>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>



                <!-- IDEA -->

                <a
                    class="ng-dm-way ng-dm-way--idea"
                    href="#idee"
                >

                    <span class="ng-dm-way-dot">
                        02
                    </span>

                    <div>

                        <small>
                            Ik heb iets bedacht
                        </small>

                        <strong>
                            Ik heb een idee.
                        </strong>

                        <p>
                            Voor je straat,
                            buurt of Tilburg-Noord.
                        </p>

                    </div>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>



                <!-- PARTNER -->

                <a
                    class="ng-dm-way ng-dm-way--partner"
                    href="#samenwerken"
                >

                    <span class="ng-dm-way-dot">
                        03
                    </span>

                    <div>

                        <small>
                            Vanuit een organisatie
                        </small>

                        <strong>
                            Ik wil samenwerken.
                        </strong>

                        <p>
                            Met kennis, middelen,
                            netwerk of steun.
                        </p>

                    </div>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>


                <div class="ng-dm-entry-whatever">

                    <span aria-hidden="true">✦</span>

                    <p>
                        Nog geen idee?
                        <strong>Ook prima.</strong>
                    </p>

                </div>


            </div>

        </div>


        <div class="ng-dm-entry-bottom">

            <span></span>

            <p>
                Je hoeft nu nog niet te kiezen wat je voor altijd wilt doen.
            </p>

        </div>

    </div>

</section>

<!-- =========================================
     DOE MEE — VRIJWILLIGER
========================================= -->

<section
    class="ng-dm-volunteer"
    id="vrijwilliger"
    aria-labelledby="ng-dm-volunteer-title"
>

    <div class="site-container">


        <!-- =====================================
             INTRO
        ====================================== -->

        <header class="ng-dm-volunteer-heading">

            <div>

                <p class="ng-dm-kicker">
                    Tijd die iets betekent
                </p>

                <h2 id="ng-dm-volunteer-title">
                    Help mee op een manier
                    die bij jou past.
                </h2>

            </div>


            <p>
                Je hoeft geen vaste functie of jarenlange
                ervaring te hebben. Met een paar uur,
                een praktisch talent of gewoon enthousiasme
                kun je al iets waardevols bijdragen.
            </p>

        </header>



        <!-- =====================================
             PHOTO + COPY
        ====================================== -->

        <div class="ng-dm-volunteer-scene">


            <!-- PHOTO -->

            <figure class="ng-dm-volunteer-photo">

                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                        . '/assets/images/extrahanden.webp'
                    ); ?>"
                    alt="Vrijwilligers werken samen aan een initiatief"
                    loading="lazy"
                    decoding="async"
                >


                <figcaption>

                    <span aria-hidden="true">
                        ↳
                    </span>

                    <p>
                        je hoeft niet alles te kunnen
                        <strong>
                            om iets te kunnen betekenen
                        </strong>
                    </p>

                </figcaption>

            </figure>



            <!-- COPY -->

            <div class="ng-dm-volunteer-copy">

                <p class="ng-dm-volunteer-small">
                    Waar zou jij zin in hebben?
                </p>


                <h3>
                    Soms zijn gewoon
                    twee extra handen genoeg.
                </h3>


                <p>
                    NoordgroeiT zoekt mensen die willen
                    meedenken, organiseren, schrijven,
                    bouwen, communiceren of ergens praktisch
                    bij willen helpen.
                </p>


                <!-- WAYS -->

                <div class="ng-dm-volunteer-ways">


                    <div>
                        <span aria-hidden="true"></span>

                        <p>
                            <small>Meedenken</small>
                            <strong>Ideeën en plannen</strong>
                        </p>
                    </div>


                    <div>
                        <span aria-hidden="true"></span>

                        <p>
                            <small>Doen</small>
                            <strong>Praktisch meehelpen</strong>
                        </p>
                    </div>


                    <div>
                        <span aria-hidden="true"></span>

                        <p>
                            <small>Organiseren</small>
                            <strong>Activiteiten &amp; projecten</strong>
                        </p>
                    </div>


                    <div>
                        <span aria-hidden="true"></span>

                        <p>
                            <small>Vertellen</small>
                            <strong>Tekst &amp; communicatie</strong>
                        </p>
                    </div>


                </div>



                <!-- CTA -->

                <div class="ng-dm-volunteer-action">

                    <a
                        href="<?php echo esc_url(
                            home_url('/vrijwilliger-worden/')
                        ); ?>"
                    >
                        <span>
                            Bekijk vrijwilligerswerk
                        </span>

                        <i aria-hidden="true">
                            →
                        </i>
                    </a>


                    <p>
                        Eenmalig, af en toe
                        of voor langere tijd.
                    </p>

                </div>


            </div>


        </div>



        <!-- =====================================
             BOTTOM THOUGHT
        ====================================== -->

        <div class="ng-dm-volunteer-bottom">

            <p>
                Geen passende rol gezien?
            </p>

            <strong>
                Dan kijken we samen wat wél bij je past.
            </strong>

            <span aria-hidden="true">
                ↗
            </span>

        </div>


    </div>

</section>

<!-- =========================================
     DOE MEE — DEEL JE IDEE
========================================= -->

<section
    class="ng-dm-idea"
    id="idee"
    aria-labelledby="ng-dm-idea-title"
>

    <div class="site-container">

        <div class="ng-dm-idea-layout">


            <!-- =====================================
                 COPY
            ====================================== -->

            <div class="ng-dm-idea-copy">

                <p class="ng-dm-kicker">
                    Iets in je hoofd?
                </p>

                <h2 id="ng-dm-idea-title">
                    Een goed idee hoeft
                    nog niet af te zijn.
                </h2>

                <p>
                    Misschien zie je iets in je straat of buurt
                    dat beter, groener, gezelliger of slimmer kan.
                    Deel het vooral — ook als je nog niet weet
                    hoe je het moet uitvoeren.
                </p>


                <div class="ng-dm-idea-thought">

                    <span aria-hidden="true">
                        “
                    </span>

                    <p>
                        Zou het niet mooi zijn als…
                    </p>

                </div>


                <a
                    class="ng-dm-idea-button"
                    href="<?php echo esc_url(
                        home_url('/deel-je-idee/')
                    ); ?>"
                >
                    <span>
                        Deel je idee
                    </span>

                    <i aria-hidden="true">
                        →
                    </i>
                </a>

            </div>



            <!-- =====================================
                 IDEA VISUAL
            ====================================== -->

            <div
                class="ng-dm-idea-visual"
                aria-hidden="true"
            >


                <!-- loose thought -->

                <div class="ng-dm-idea-paper">

                    <span class="ng-dm-idea-paper-label">
                        eerste gedachte
                    </span>

                    <p>
                        meer plek om
                        elkaar te ontmoeten?
                    </p>

                    <div class="ng-dm-idea-paper-mark">
                        ↓
                    </div>

                </div>



                <!-- growing route -->

                <svg
                    class="ng-dm-idea-route"
                    viewBox="0 0 520 250"
                    preserveAspectRatio="none"
                >
                    <path
                        d="
                            M65 172
                            C145 195 175 86 265 112
                            C347 136 356 65 449 60
                        "
                    />
                </svg>



                <!-- start -->

                <div class="ng-dm-idea-point ng-dm-idea-point--start">

                    <span></span>

                    <small>
                        een gedachte
                    </small>

                </div>



                <!-- middle -->

                <div class="ng-dm-idea-point ng-dm-idea-point--middle">

                    <span></span>

                    <small>
                        samen bekijken
                    </small>

                </div>



                <!-- destination -->

                <div class="ng-dm-idea-grow">

                    <div class="ng-dm-idea-leaves">
                        <i></i>
                        <i></i>
                    </div>

                    <span></span>

                    <strong>
                        misschien groeit
                        hier iets uit
                    </strong>

                </div>


                <!-- tiny side note -->

                <div class="ng-dm-idea-side-note">

                    <span>
                        ↳
                    </span>

                    <p>
                        je hoeft het antwoord
                        <strong>
                            nog niet te hebben
                        </strong>
                    </p>

                </div>


            </div>


        </div>



        <!-- =====================================
             BOTTOM
        ====================================== -->

        <div class="ng-dm-idea-bottom">

            <p>
                NoordgroeiT denkt graag mee over wat een volgende stap kan zijn.
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/deel-je-idee/')
                ); ?>"
            >
                Van gedachte naar mogelijkheid
                <span aria-hidden="true">→</span>
            </a>

        </div>


    </div>

</section>

<!-- =========================================
     DOE MEE — SAMENWERKEN
========================================= -->

<section
    class="ng-dm-collab"
    id="samenwerken"
    aria-labelledby="ng-dm-collab-title"
>

    <div class="site-container">

        <div class="ng-dm-collab-layout">


            <!-- =====================================
                 COPY
            ====================================== -->

            <div class="ng-dm-collab-copy">

                <p class="ng-dm-kicker">
                    Samen komen we verder
                </p>

                <h2 id="ng-dm-collab-title">
                    Goede ideeën groeien
                    sterker samen.
                </h2>

                <p>
                    Ben je betrokken bij een organisatie,
                    fonds, bedrijf of netwerk en wil je iets
                    betekenen voor Tilburg-Noord?
                    Dan kijken we graag wat we samen mogelijk
                    kunnen maken.
                </p>


                <a
                    class="ng-dm-collab-button"
                    href="<?php echo esc_url(
                        home_url('/samenwerken/')
                    ); ?>"
                >
                    <span>
                        Ontdek samenwerken
                    </span>

                    <i aria-hidden="true">
                        →
                    </i>
                </a>


                <div class="ng-dm-collab-note">

                    <span aria-hidden="true">
                        ↳
                    </span>

                    <p>
                        Samenwerken kan groot zijn,
                        <strong>
                            maar ook heel praktisch beginnen.
                        </strong>
                    </p>

                </div>

            </div>



            <!-- =====================================
                 VISUAL
            ====================================== -->

            <div
                class="ng-dm-collab-visual"
                aria-hidden="true"
            >


                <!-- CENTER -->

                <div class="ng-dm-collab-center">

                    <small>
                        samen
                    </small>

                    <strong>
                        maken we
                        iets mogelijk
                    </strong>

                    <span></span>

                </div>



                <!-- CONNECTIONS -->

                <svg
                    class="ng-dm-collab-lines"
                    viewBox="0 0 620 430"
                    preserveAspectRatio="none"
                >

                    <path d="M310 215 C235 160 190 125 125 100" />
                    <path d="M310 215 C400 155 445 135 505 92" />
                    <path d="M310 215 C210 275 165 305 112 330" />
                    <path d="M310 215 C390 285 450 310 520 330" />

                </svg>



                <!-- KNOWLEDGE -->

                <div class="ng-dm-collab-piece ng-dm-collab-piece--knowledge">

                    <span>
                        kennis
                    </span>

                    <strong>
                        Expertise delen
                    </strong>

                </div>



                <!-- NETWORK -->

                <div class="ng-dm-collab-piece ng-dm-collab-piece--network">

                    <span>
                        netwerk
                    </span>

                    <strong>
                        Mensen verbinden
                    </strong>

                </div>



                <!-- MATERIAL -->

                <div class="ng-dm-collab-piece ng-dm-collab-piece--material">

                    <span>
                        middelen
                    </span>

                    <strong>
                        Iets beschikbaar stellen
                    </strong>

                </div>



                <!-- SUPPORT -->

                <div class="ng-dm-collab-piece ng-dm-collab-piece--support">

                    <span>
                        steun
                    </span>

                    <strong>
                        Ruimte geven aan een plan
                    </strong>

                </div>



                <div class="ng-dm-collab-caption">

                    <span>✦</span>

                    <p>
                        iedereen brengt
                        <strong>iets anders mee</strong>
                    </p>

                </div>


            </div>


        </div>



        <!-- =====================================
             BOTTOM
        ====================================== -->

        <div class="ng-dm-collab-bottom">

            <p>
                Voor organisaties, bedrijven, fondsen en lokale partners.
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/samenwerken/')
                ); ?>"
            >
                Bekijk de mogelijkheden
                <span aria-hidden="true">
                    →
                </span>
            </a>

        </div>


    </div>

</section>

<!-- =========================================
     DOE MEE — FINAL CTA
========================================= -->

<section
    class="ng-dm-final"
    aria-labelledby="ng-dm-final-title"
>

    <div class="site-container">

        <div class="ng-dm-final-inner">

            <div class="ng-dm-final-copy">

                <p class="ng-dm-kicker">
                    Begin gewoon ergens
                </p>

                <h2 id="ng-dm-final-title">
                    Welke ingang je ook kiest,
                    je hoeft niet alleen te beginnen.
                </h2>

                <p>
                    Kijk rustig welke manier van meedoen bij jou past.
                    En weet je het nog niet? Dan kun je altijd eerst
                    even contact opnemen.
                </p>

            </div>


            <div
                class="ng-dm-final-links"
                aria-label="Manieren om mee te doen"
            >

                <a
                    href="<?php echo esc_url(
                        home_url('/vrijwilliger-worden/')
                    ); ?>"
                >
                    <span>
                        <small>Ik heb tijd</small>
                        <strong>Vrijwilliger worden</strong>
                    </span>

                    <i aria-hidden="true">→</i>
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    <span>
                        <small>Ik heb een plan</small>
                        <strong>Deel je idee</strong>
                    </span>

                    <i aria-hidden="true">→</i>
                </a>


                <a
                    href="<?php echo esc_url(
                        home_url('/samenwerken/')
                    ); ?>"
                >
                    <span>
                        <small>Ik vertegenwoordig een organisatie</small>
                        <strong>Samenwerken</strong>
                    </span>

                    <i aria-hidden="true">→</i>
                </a>

            </div>

        </div>


        <div class="ng-dm-final-contact">

            <span aria-hidden="true">
                ↳
            </span>

            <p>
                Nog niet zeker wat past?
            </p>

            <a
                href="<?php echo esc_url(
                    home_url('/contact/')
                ); ?>"
            >
                Stuur ons gewoon een bericht
                <span aria-hidden="true">→</span>
            </a>

        </div>

    </div>

</section>

<?php
get_footer();