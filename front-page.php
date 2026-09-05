<?php
/**
 * Homepage van NoordgroeiT.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images = get_template_directory_uri() . '/assets/images';
?>

<main id="main-content" class="site-main">
<section class="ng-editorial-hero">

<div class="site-container">

    <div class="ng-editorial-hero-copy">

        <p class="ng-editorial-hero-label">
          NoordgroeiT brengt bewoners, organisaties en ideeën
          samen in Tilburg Noord
        </p>

      <h1>
         <span>Samen veilig</span>
          <span>
            en gezond<span class="ng-editorial-hero-dot">.</span>
          </span>
        </h1>

    </div>

</div>


<figure class="ng-editorial-hero-photo">

    <img
        src="<?php echo esc_url(
            $theme_images . '/hero-noordgroeit.webp'
        ); ?>"
        alt="Bewoners ontmoeten elkaar op een groene plek in Tilburg-Noord"
        width="1672"
        height="941"
        loading="eager"
        fetchpriority="high"
        decoding="async"
    >

</figure>


<div class="ng-hero-corner-mark" aria-hidden="true">

    <span class="ng-hero-corner-shape"></span>

    <span class="ng-hero-corner-seal">

        <span class="ng-hero-corner-heart">
            ♥
        </span>

        <span class="ng-hero-corner-text">
            Samen<br>
            voor Noord
        </span>

    </span>

</div>

    </div>

</section>

<!-- =========================================
     NOORDGROEIT VALUES
========================================= -->

<section
    class="ng-values-strip"
    aria-label="Waar NoordgroeiT voor staat"
>
    <div class="site-container">
<div class="ng-values-direction" aria-hidden="true">

    <span class="ng-values-direction-text">
        Ontdek wat we doen
    </span>

    <span class="ng-values-direction-arrow">
        →
    </span>

</div>

        <div class="ng-values-grid">


                <article class="ng-value-item">

                    <span
                        class="ng-value-icon ng-value-icon--green"
                        aria-hidden="true"
                    >
                        🤝
                    </span>

                    <div>
                        <h2>Samen</h2>

                        <p>
                            We geloven in de kracht van bewoners
                            en de gemeenschap
                        </p>
                    </div>

                </article>


                <article class="ng-value-item">

                    <span
                        class="ng-value-icon ng-value-icon--blue"
                        aria-hidden="true"
                    >
                        🛡️
                    </span>

                    <div>
                        <h2>Veilig</h2>

                        <p>
                            We creëren een omgeving waarin iedereen
                            zich prettig voelt
                        </p>
                    </div>

                </article>


                <article class="ng-value-item">

                    <span
                        class="ng-value-icon ng-value-icon--yellow"
                        aria-hidden="true"
                    >
                        🌱
                    </span>

                    <div>
                        <h2>Gezond</h2>

                        <p>
                            We werken aan een gezonde lichamelijke
                            en mentale toekomst
                        </p>
                    </div>

                </article>


                <article class="ng-value-item">

                    <span
                        class="ng-value-icon ng-value-icon--coral"
                        aria-hidden="true"
                    >
                        ♡
                    </span>

                    <div>
                        <h2>Voor iedereen</h2>

                        <p>
                            We laten niemand buiten staan en geven
                            iedereen ruimte
                        </p>
                    </div>

                </article>

            </div>

        </div>

</section>

<!-- =========================================================
     OVER NOORDGROEIT — COMMUNITY WINDOW
========================================================= -->

<section
    id="over-ons"
    class="ng-home-origin"
>

    <div class="site-container">


        <!-- =========================================
             INTRO
        ========================================== -->

        <header class="ng-home-origin__intro">

            <div>

                <p class="ng-home-origin__eyebrow">
                    Van en voor Tilburg-Noord
                </p>

                <h2>
                    <span>NoordgroeiT...</span>
                    van binnenuit
                </h2>

            </div>


            <p class="ng-home-origin__lead">
                NoordgroeiT is een bewonersinitiatief dat
                Tilburg Noord sterker en mooier maakt
            </p>

        </header>


        <!-- =========================================
             COMMUNITY WINDOW
        ========================================== -->

        <div class="ng-home-origin__visual">


            <!-- LEFT STORY MARKER -->

            <aside class="ng-home-origin__marker">

                <span
                    class="ng-home-origin__marker-line"
                    aria-hidden="true"
                ></span>

                <p>
                    <small>
                        Sinds
                    </small>

                    <strong>
                        2024
                    </strong>
                </p>


                <p>
                    Begonnen door bewoners.
                    Gebouwd met de wijk.
                </p>

            </aside>


            <!-- PHOTO -->

            <div class="ng-home-origin__photo-wrap">

                <figure class="ng-home-origin__photo">

                    <img
                        src="<?php echo esc_url(
                            $theme_images .
                            '/over-ons.webp'
                        ); ?>"
                        alt="Bewoners planten samen een boom in Tilburg-Noord"
                        width="2048"
                        height="1366"
                        loading="lazy"
                        decoding="async"
                    >

                </figure>


                <!-- =================================
                     MISSIE
                ================================== -->

                <details
                    class="
                        ng-home-origin__drawer
                        ng-home-origin__drawer--mission
                    "
                >

                    <summary>

                        <span>

                            <small>
                                Waar we voor staan
                            </small>

                            <strong>
                                Onze missie
                            </strong>

                        </span>


                        <span
                            class="ng-home-origin__drawer-plus"
                            aria-hidden="true"
                        >
                            +
                        </span>

                    </summary>


                    <div class="ng-home-origin__drawer-content">

                        <h3>
                            Bewoners laten meedenken én meedoen
                        </h3>

                        <p>
                            We willen dat bewoners van Tilburg-Noord meer
                            invloed hebben op wat er in hun wijk gebeurt.
                            Samen werken we aan een veilige, groene en
                            gezonde leefomgeving.
                        </p>

                    </div>

                </details>


                <!-- =================================
                     VISIE
                ================================== -->

                <details
                    class="
                        ng-home-origin__drawer
                        ng-home-origin__drawer--vision
                    "
                >

                    <summary>

                        <span>

                            <small>
                                Waar we naartoe groeien
                            </small>

                            <strong>
                                Onze visie
                            </strong>

                        </span>


                        <span
                            class="ng-home-origin__drawer-plus"
                            aria-hidden="true"
                        >
                            +
                        </span>

                    </summary>


                    <div class="ng-home-origin__drawer-content">

                        <h3>
                            Groei gaat over méér dan woningen
                        </h3>

                        <p>
                            We zien een Tilburg-Noord waarin ook vertrouwen,
                            samenhang en welzijn groeien. Een wijk waarin
                            bewoners elkaar kennen en samen invloed hebben
                            op hun leefomgeving.
                        </p>

                    </div>

                </details>

            </div>

        </div>


        <!-- =========================================
             CLOSING STATEMENT
        ========================================== -->

        <footer class="ng-home-origin__footer">

            <p>
                Want Noord is méér dan
                <span>een plek om te wonen.</span>
            </p>


            <a
                class="ng-home-origin__link"
                href="<?php echo esc_url(
                    home_url('/over-noordgroeit/')
                ); ?>"
            >

                <span>

                    <small>
                        Wie we zijn en waarom we dit doen
                    </small>

                    <strong>
                        Lees ons verhaal
                    </strong>

                </span>


                <span
                    class="ng-home-origin__link-arrow"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>

        </footer>


    </div>

</section>


<!-- =========================================
     NOORD IN CIJFERS
========================================= -->

<section
    class="ng-number-strip"
    data-number-strip
    aria-label="NoordgroeiT in cijfers"
>

    <div class="site-container">

        <p class="ng-number-strip-label">
            Noord in beweging
        </p>

        <div class="ng-number-grid">

            <article
                class="ng-number-item"
                aria-label="Gestart door bewoners in 2024"
            >
                <strong>
                     <span
                         aria-hidden="true"
                         data-count="2024"
                         data-start="2000"
                         data-no-grouping="true"
                         >2024</span>
                </strong>

                <p>
                    Gestart door bewoners
                </p>

            </article>


            <article
                class="ng-number-item"
                aria-label="Vier initiatieven"
            >
                <strong>
                    <span
                        aria-hidden="true"
                        data-count="4"
                        data-start="0"
                    >4</span>
                </strong>

                <p>
                    Initiatieven
                </p>
            </article>


            <article
                class="ng-number-item"
                aria-label="51 samenwerkingspartners"
            >
                <strong>
                    <span
                        aria-hidden="true"
                        data-count="51"
                        data-start="0"
                    >51</span>
                </strong>

                <p>
                    Samenwerkingspartners
                </p>
            </article>


            <article
                class="ng-number-item"
                aria-label="35 meedoeners"
            >
                <strong>
                    <span
                        aria-hidden="true"
                        data-count="35"
                        data-start="0"
                    >35</span>
                </strong>

                <p>
                    Meedoeners
                </p>
            </article>

        </div>

    </div>

</section>


<!-- =========================================
     INITIATIVES — CIRCULAR CAROUSEL
========================================= -->

<section
    id="initiatieven"
    class="ng-coverflow-section"
    aria-labelledby="ng-coverflow-title"
>
    <div class="site-container">

        <header class="ng-coverflow-heading">

            <div>
                <p class="ng-field-kicker">
                    Hier krijgt Noord vorm
                </p>

                <h2 id="ng-coverflow-title">
                    Initiatieven in de wijk
                </h2>
            </div>

            <p>
                Van gesprek tot plan. Ontdek waar bewoners
                en partners samen aan werken.
            </p>

        </header>


        <div
            class="ng-coverflow"
            data-initiative-carousel
            tabindex="0"
            aria-label="Initiatieven van NoordgroeiT"
        >

            <div class="ng-coverflow-stage">


                <!-- 01 — NoordwerkTsamen -->

                <article
                    class="ng-coverflow-card is-active"
                    data-initiative-card
                >

                    <img
                        src="<?php echo esc_url(
                            $theme_images .
                            '/initiative-conversation.webp'
                        ); ?>"
                        alt="Bewoners bespreken samen plannen voor Tilburg-Noord"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="ng-coverflow-shade"></div>

                    <div class="ng-coverflow-copy">

                        <p class="ng-coverflow-meta">
                            <span>01</span>
                            Praten én doen
                        </p>

                        <h3>
                            NoordwerkT
                            <br>samen
                        </h3>

                        <p class="ng-coverflow-description">
                            Bewoners, organisaties en professionals
                            brengen vragen, kennis en plannen samen.
                        </p>

                        <a
                            href="<?php echo esc_url(
                                home_url('/initiatieven/')
                            ); ?>"
                            class="ng-coverflow-link"
                        >
                            Bekijk initiatief
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>


                <!-- 02 — NoordbuiTen -->

                <article
                    class="ng-coverflow-card"
                    data-initiative-card
                >

                    <img
                        src="<?php echo esc_url(
                            $theme_images .
                            '/initiative-noordbuiten.jpg'
                        ); ?>"
                        alt="Vrijwilligers werken samen bij NoordbuiTen"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="ng-coverflow-shade"></div>

                    <div class="ng-coverflow-copy">

                        <p class="ng-coverflow-meta">
                            <span>02</span>
                            Groen &amp; ontmoeten
                        </p>

                        <h3>
                            NoordbuiTen
                        </h3>

                        <p class="ng-coverflow-description">
                            Een plek waar groen, ontmoeting,
                            leren en samen maken bij elkaar komen.
                        </p>

                        <a
                            href="<?php echo esc_url(
                                home_url('/noordbuiten/')
                            ); ?>"
                            class="ng-coverflow-link"
                        >
                            Ontdek NoordbuiTen
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>


                <!-- 03 — Heikantse Tuynen -->

                <article
                    class="ng-coverflow-card"
                    data-initiative-card
                >

                    <img
                        src="<?php echo esc_url(
                            $theme_images .
                            '/initiative-tuynen.jpg'
                        ); ?>"
                        alt="Bewoners werken samen aan een groene omgeving"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="ng-coverflow-shade"></div>

                    <div class="ng-coverflow-copy">

                        <p class="ng-coverflow-meta">
                            <span>03</span>
                            Groene stadsrand
                        </p>

                        <h3>
                            Heikantse Tuynen
                        </h3>

                        <p class="ng-coverflow-description">
                            Samen werken aan natuur, gezondheid
                            en een veilige plek om te bewegen en ontdekken.
                        </p>

                        <a
                            href="<?php echo esc_url(
                                home_url('/initiatieven/')
                            ); ?>"
                            class="ng-coverflow-link"
                        >
                            Bekijk initiatief
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>


                <!-- 04 — O & O -->

                <!-- 04 — O & O / Cas de Das -->

<article
    class="ng-coverflow-card"
    data-initiative-card
>

    <img
        src="<?php echo esc_url(
            $theme_images . '/cas-de-das.webp'
        ); ?>"
        alt="Cas de Das, het educatieve figuurtje van het biodiversiteitsprogramma"
        loading="lazy"
        decoding="async"
    >

    <div class="ng-coverflow-shade"></div>

    <div class="ng-coverflow-copy">

        <p class="ng-coverflow-meta">
            <span>04</span>
            Ontdekken &amp; leren
        </p>

        <h3>
            O &amp; O
        </h3>

        <p class="ng-coverflow-description">
            Cas de Das — een educatief programma
            over biodiversiteit.
        </p>

        <span class="ng-coverflow-soon">
            Meer informatie volgt
        </span>

    </div>

</article>

            </div>


            <button
                class="ng-coverflow-arrow ng-coverflow-arrow--prev"
                type="button"
                data-initiative-prev
                aria-label="Vorig initiatief"
            >
                ←
            </button>

            <button
                class="ng-coverflow-arrow ng-coverflow-arrow--next"
                type="button"
                data-initiative-next
                aria-label="Volgend initiatief"
            >
                →
            </button>


            <div class="ng-coverflow-footer">

                <span class="ng-coverflow-counter">
                    <strong data-initiative-current>01</strong>
                    <span>/ 04</span>
                </span>


                <div class="ng-coverflow-dots">

                    <button
                        class="is-active"
                        type="button"
                        data-initiative-dot="0"
                        aria-label="Bekijk NoordwerkTsamen"
                    ></button>

                    <button
                        type="button"
                        data-initiative-dot="1"
                        aria-label="Bekijk NoordbuiTen"
                    ></button>

                    <button
                        type="button"
                        data-initiative-dot="2"
                        aria-label="Bekijk Heikantse Tuynen"
                    ></button>

                    <button
                        type="button"
                        data-initiative-dot="3"
                        aria-label="Bekijk O en O"
                    ></button>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     NOORDBUITEN — EDITORIAL LANDSCAPE
========================================================= -->

<section
    id="noordbuiten-uitgelicht"
    class="ng-home-nb-landscape"
>

    <div class="site-container">


        <!-- =========================================
             INTRO
        ========================================== -->

        <header class="ng-home-nb-landscape__intro">

            <div class="ng-home-nb-landscape__identity">

                <p>
                    Een initiatief van
                    <span>NoordgroeiT</span>
                </p>

                <img
                    src="<?php echo esc_url(
                        $theme_images .
                        '/logo-noordbuiten.webp'
                    ); ?>"
                    alt="NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <div class="ng-home-nb-landscape__copy">

                <p class="ng-home-nb-landscape__location">
                    Moerstraat 23 · Tilburg-Noord
                </p>

                <h2>
                    Een plek die
                    <span>groeit</span>
                    door iedereen die meedoet.
                </h2>

                <p>
                    Bij NoordbuiTen komen groen, ontmoeting en ontwikkeling
                    samen. Bewoners en vrijwilligers tuinieren, bouwen,
                    leren en maken hier gezamenlijk ruimte voor nieuwe ideeën.
                </p>

            </div>

        </header>


        <!-- =========================================
             CHANGING LANDSCAPE
        ========================================== -->

        <div
            class="ng-home-nb-landscape__stage"
            data-nb-stage
        >

            <div class="ng-home-nb-landscape__images">

                <img
                    class="ng-home-nb-landscape__image is-active"
                    data-nb-image="ontmoeten"
                    src="<?php echo esc_url(
                        $theme_images . '/kook.webp'
                    ); ?>"
                    alt="Bewoners ontmoeten elkaar bij NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

                <img
                    class="ng-home-nb-landscape__image"
                    data-nb-image="maken"
                    src="<?php echo esc_url(
                        $theme_images . '/hout.webp'
                    ); ?>"
                    alt="Vrijwilligers bouwen samen bij NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >

                <img
                    class="ng-home-nb-landscape__image"
                    data-nb-image="groeien"
                    src="<?php echo esc_url(
                        $theme_images .
                        '/initiative-noordbuiten.jpg'
                    ); ?>"
                    alt="Vrijwilligers werken samen in het groen"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <span
                class="ng-home-nb-landscape__shade"
                aria-hidden="true"
            ></span>


            <!-- PHOTO SWITCHER -->

            <div class="ng-home-nb-landscape__tabs">

                <button
                    type="button"
                    class="ng-home-nb-landscape__tab is-active"
                    data-nb-target="ontmoeten"
                    aria-pressed="true"
                >
                    <span>01</span>
                    Ontmoeten
                </button>


                <button
                    type="button"
                    class="ng-home-nb-landscape__tab"
                    data-nb-target="maken"
                    aria-pressed="false"
                >
                    <span>02</span>
                    Maken
                </button>


                <button
                    type="button"
                    class="ng-home-nb-landscape__tab"
                    data-nb-target="groeien"
                    aria-pressed="false"
                >
                    <span>03</span>
                    Groeien
                </button>

            </div>


            <!-- LOCATION -->

            <a
                class="ng-home-nb-landscape__route"
                href="https://www.google.com/maps/search/?api=1&query=Moerstraat+23%2C+Tilburg"
                target="_blank"
                rel="noopener noreferrer"
            >

                <span
                    class="ng-home-nb-landscape__route-dot"
                    aria-hidden="true"
                ></span>

                <span>

                    <small>
                        Je vindt ons hier
                    </small>

                    <strong>
                        Moerstraat 23
                    </strong>

                </span>

                <span
                    class="ng-home-nb-landscape__route-arrow"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>

        </div>


        <!-- =========================================
             CLOSING LINE
        ========================================== -->

        <footer class="ng-home-nb-landscape__footer">

            <p>

                <strong>
                    Hier gebeurt het gewoon.
                </strong>

                <span>
                    Een idee wordt een gesprek, een gesprek wordt een plan
                    en samen gaan we aan de slag.
                </span>

            </p>


            <a
                class="ng-home-nb-landscape__destination"
                href="<?php echo esc_url(
                    home_url('/noordbuiten/')
                ); ?>"
            >

                <span>

                    <small>
                        Bekijk de plek en activiteiten
                    </small>

                    <strong>
                        Ontdek NoordbuiTen
                    </strong>

                </span>

                <span aria-hidden="true">
                    →
                </span>

            </a>

        </footer>


    </div>

</section>

<!-- =========================================================
     DOE MEE MET NOORDGROEIT
     CIRCULAR CONVERSATION JOURNEY
========================================================= -->

<section
    id="meedoen"
    class="ng-home-join-circle"
>

    <div class="site-container">


        <!-- =========================================
             INTRO
        ========================================== -->

        <header class="ng-home-join-circle__intro">

            <div>

                <p class="ng-home-join-circle__eyebrow">
                    Doe mee met NoordgroeiT
                </p>

                <h2>
                    Eerst kennismaken.
                    Daarna kijken we samen wat past.
                </h2>

            </div>


            <p class="ng-home-join-circle__lead">
                Je hoeft nog niet precies te weten wat je wilt doen.
                Vertel ons waar je blij van wordt, wat je goed kunt
                en hoeveel tijd je hebt. Dan zoeken we samen naar
                een bijdrage die bij jou past.
            </p>

        </header>


        <!-- =========================================
             CONVERSATION JOURNEY
        ========================================== -->

        <div class="ng-home-join-circle__stage">


            <!-- CIRCLE -->

            <div
                class="ng-home-join-circle__orbit"
                aria-hidden="true"
            >

                <span class="ng-home-join-circle__orbit-inner"></span>

                <span class="ng-home-join-circle__traveller">
                    <span></span>
                </span>

                <span class="ng-home-join-circle__orbit-centre">

                    <small>
                        Gewoon beginnen
                    </small>

                    <strong>
                        Samen kijken<br>
                        wat past.
                    </strong>

                </span>

            </div>


            <!-- =====================================
                 1 — KOFFIE
            ====================================== -->

            <article
                class="
                    ng-home-join-circle__moment
                    ng-home-join-circle__moment--coffee
                    reveal
                "
            >

                <span
                    class="ng-home-join-circle__node"
                    aria-hidden="true"
                ></span>


                <div class="ng-home-join-circle__copy">

                    <h3>
                        Een rustig gesprek
                    </h3>

                    <p>
                        We beginnen met kennismaken. Je kunt vertellen
                        wat je leuk vindt, waar je goed in bent en hoeveel
                        tijd je beschikbaar hebt.
                    </p>

                </div>


                <span
                    class="
                        ng-home-join-circle__tag
                        ng-home-join-circle__tag--coffee
                    "
                >
                    <span aria-hidden="true">
                        ☕
                    </span>

                    Koffie erbij?
                </span>

            </article>


            <!-- =====================================
                 2 — WAAR GA JIJ VAN AAN?
            ====================================== -->

            <article
                class="
                    ng-home-join-circle__moment
                    ng-home-join-circle__moment--spark
                    reveal
                "
            >

                <span
                    class="ng-home-join-circle__node"
                    aria-hidden="true"
                ></span>


                <div class="ng-home-join-circle__copy">

                    <h3>
                        Een bijdrage die past
                    </h3>

                    <p>
                        Samen bekijken we welke activiteit, taak of rol
                        aansluit bij jouw interesses, mogelijkheden
                        en grenzen.
                    </p>

                </div>


                <span
                    class="
                        ng-home-join-circle__tag
                        ng-home-join-circle__tag--spark
                    "
                >
                    <span aria-hidden="true">
                        ✦
                    </span>

                    Waar ga jij van aan?
                </span>

            </article>


            <!-- =====================================
                 3 — ZULLEN WE?
            ====================================== -->

            <article
                class="
                    ng-home-join-circle__moment
                    ng-home-join-circle__moment--go
                    reveal
                "
            >

                <span
                    class="ng-home-join-circle__node"
                    aria-hidden="true"
                ></span>


                <div class="ng-home-join-circle__copy">

                    <h3>
                        Duidelijke afspraken
                    </h3>

                    <p>
                        We spreken af wat je gaat doen, met wie en hoe
                        vaak. Ook zeggen we eerlijk wat er wel en op
                        dit moment nog niet mogelijk is.
                    </p>

                </div>


                <span
                    class="
                        ng-home-join-circle__tag
                        ng-home-join-circle__tag--go
                    "
                >
                    <span aria-hidden="true">
                        ✓
                    </span>

                    Zullen we?
                </span>

            </article>


        </div>

<!-- =========================================================
     VRIJWILLIGERSERVARING
========================================================= -->

<div class="ng-volunteer-spotlight">

    <figure class="ng-volunteer-spotlight__portrait">

        <img
            src="<?php echo esc_url(
                get_template_directory_uri() .
                '/assets/images/susan-vrijwilliger.webp'
            ); ?>"
            alt="Susan, vrijwilliger bij NoordgroeiT"
            loading="lazy"
        >

        <span
            class="ng-volunteer-spotlight__photo-dot"
            aria-hidden="true"
        ></span>

    </figure>


    <div class="ng-volunteer-spotlight__bubble">

        <p class="ng-volunteer-spotlight__eyebrow">
            Een ervaring uit Noord
        </p>


        <blockquote>

            <p>
                Wat ik mooi vind, is dat ideeën hier niet alleen
                besproken worden. Mensen proberen er samen echt
                iets van te maken voor Tilburg-Noord.
            </p>

        </blockquote>


        <footer>

            <strong>
                Susan
            </strong>

            <span>
                Vrijwilliger website &amp; digitale communicatie
            </span>

        </footer>

    </div>

</div>

        <!-- =========================================
             CTA
        ========================================== -->

        <footer class="ng-home-join-circle__cta">

            <div>

                <p>
                    Zin om mee te doen?
                </p>

                <h3>
                    Klaar om kennis te maken?
                </h3>

            </div>


            <div class="ng-home-join-circle__actions">

                <a
                    class="
                        ng-home-join-circle__action
                        ng-home-join-circle__action--primary
                    "
                    href="<?php echo esc_url(
                        home_url('/vacatures/')
                    ); ?>"
                >

                    <span>
                        Vacatures
                    </span>

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>


                <a
                    class="
                        ng-home-join-circle__action
                        ng-home-join-circle__action--secondary
                    "
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >

                    <span>
                        Neem contact op
                    </span>

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

        </footer>


    </div>

</section>


<!-- =========================================================
     WAT SPEELT ER IN NOORD
     EDITORIAL NEWS + AGENDA
========================================================= -->

<section
    id="actualiteit"
    class="ng-home-pulse"
>

    <div class="site-container">


        <!-- =========================================
             INTRO
        ========================================== -->

        <header class="ng-home-pulse__intro">

            <div>

                <p class="ng-home-pulse__eyebrow">
                    Wat speelt er in Noord?
                </p>

                <h2>
                    Nieuws uit de wijk.<br>
                    Activiteiten om bij te zijn.
                </h2>

            </div>


            <p class="ng-home-pulse__lead">
                We delen ontwikkelingen die Tilburg-Noord raken en laten zien
                waar NoordgroeiT, NoordbuiTen en bewoners samen aan werken.
            </p>

        </header>


        <!-- =========================================
             CONTENT
        ========================================== -->

        <div class="ng-home-pulse__layout">


            <!-- =====================================
                 NIEUWS
            ====================================== -->

            <section
                class="ng-home-pulse__news"
                aria-labelledby="ng-home-pulse-news-title"
            >

                <header class="ng-home-pulse__subheading">

    <h3 id="ng-home-pulse-news-title">
        Nieuws uit Noord
    </h3>

    <a
        href="<?php echo esc_url(
            home_url('/nieuws-agenda/')
        ); ?>"
        class="ng-home-pulse__all-news"
    >
        <span>
            Alle nieuws
        </span>

        <span
            class="ng-home-pulse__all-news-arrow"
            aria-hidden="true"
        >
            ↗
        </span>
    </a>

</header>

                <?php

                $news_query = new WP_Query(
                    array(
                        'post_type'           => 'post',
                        'posts_per_page'      => 3,
                        'post_status'         => 'publish',
                        'ignore_sticky_posts' => true,
                    )
                );

                $news_posts = $news_query->posts;

                $fallback_news_images = array(
                    $theme_images . '/over-ons.webp',
                    $theme_images . '/kook.webp',
                    $theme_images . '/impact-planting.webp',
                );

                ?>


                <?php if (!empty($news_posts)) : ?>


                    <!-- =================================
                         FEATURED STORY
                    ================================== -->

                    <?php

                    $lead_post = $news_posts[0];

                    setup_postdata($lead_post);

                    $lead_categories = get_the_category(
                        $lead_post->ID
                    );

                    $lead_category = !empty($lead_categories)
                        ? $lead_categories[0]->name
                        : 'Tilburg-Noord';

                    if (
                        strtolower($lead_category) === 'uncategorized' ||
                        strtolower($lead_category) === 'geen categorie'
                    ) {
                        $lead_category = 'Tilburg-Noord';
                    }

                    ?>


                    <article class="ng-home-pulse__feature reveal">

                        <a
                            href="<?php echo esc_url(
                                get_permalink($lead_post)
                            ); ?>"
                        >

                            <figure class="ng-home-pulse__feature-image">

                                <?php if (
                                    has_post_thumbnail($lead_post)
                                ) : ?>

                                    <?php
                                    echo get_the_post_thumbnail(
                                        $lead_post,
                                        'large',
                                        array(
                                            'loading'  => 'lazy',
                                            'decoding' => 'async',
                                        )
                                    );
                                    ?>

                                <?php else : ?>

                                    <img
                                        src="<?php echo esc_url(
                                            $fallback_news_images[0]
                                        ); ?>"
                                        alt=""
                                        loading="lazy"
                                        decoding="async"
                                    >

                                <?php endif; ?>


                                <span
                                    class="ng-home-pulse__feature-arrow"
                                    aria-hidden="true"
                                >
                                    ↗
                                </span>

                            </figure>


                            <div class="ng-home-pulse__feature-sheet">

                                <div class="ng-home-pulse__meta">

                                    <span>
                                        <?php echo esc_html(
                                            $lead_category
                                        ); ?>
                                    </span>

                                    <time datetime="<?php echo esc_attr(
                                        get_the_date(
                                            'c',
                                            $lead_post
                                        )
                                    ); ?>">
                                        <?php echo esc_html(
                                            get_the_date(
                                                'j F Y',
                                                $lead_post
                                            )
                                        ); ?>
                                    </time>

                                </div>


                                <h4>
                                    <?php echo esc_html(
                                        get_the_title($lead_post)
                                    ); ?>
                                </h4>


                                <p>
                                    <?php
                                    echo esc_html(
                                        wp_trim_words(
                                            get_the_excerpt($lead_post),
                                            20,
                                            '…'
                                        )
                                    );
                                    ?>
                                </p>

                            </div>

                        </a>

                    </article>


                    <!-- =================================
                         SMALLER STORIES
                    ================================== -->

                    <?php if (count($news_posts) > 1) : ?>

                        <div class="ng-home-pulse__secondary">

                            <?php

                            foreach (
                                array_slice($news_posts, 1)
                                as $index => $news_post
                            ) :

                                setup_postdata($news_post);

                                $categories = get_the_category(
                                    $news_post->ID
                                );

                                $category_label =
                                    !empty($categories)
                                    ? $categories[0]->name
                                    : 'Tilburg-Noord';

                                if (
                                    strtolower($category_label)
                                    === 'uncategorized' ||
                                    strtolower($category_label)
                                    === 'geen categorie'
                                ) {
                                    $category_label =
                                        'Tilburg-Noord';
                                }

                                ?>

                                <article
                                    class="ng-home-pulse__story reveal"
                                >

                                    <a
                                        href="<?php echo esc_url(
                                            get_permalink($news_post)
                                        ); ?>"
                                    >

                                        <figure>

                                            <?php if (
                                                has_post_thumbnail(
                                                    $news_post
                                                )
                                            ) : ?>

                                                <?php
                                                echo get_the_post_thumbnail(
                                                    $news_post,
                                                    'medium_large',
                                                    array(
                                                        'loading'  => 'lazy',
                                                        'decoding' => 'async',
                                                    )
                                                );
                                                ?>

                                            <?php else : ?>

                                                <img
                                                    src="<?php echo esc_url(
                                                        $fallback_news_images[
                                                            $index + 1
                                                        ]
                                                    ); ?>"
                                                    alt=""
                                                    loading="lazy"
                                                >

                                            <?php endif; ?>

                                        </figure>


                                        <div>

                                            <p>
                                                <?php echo esc_html(
                                                    $category_label
                                                ); ?>
                                            </p>

                                            <h4>
                                                <?php echo esc_html(
                                                    get_the_title(
                                                        $news_post
                                                    )
                                                ); ?>
                                            </h4>

                                            <span>
                                                Lees verder
                                                <b aria-hidden="true">
                                                    ↗
                                                </b>
                                            </span>

                                        </div>

                                    </a>

                                </article>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>


                    <?php wp_reset_postdata(); ?>


                <?php else : ?>


                    <div class="ng-home-pulse__empty">

                        <span>
                            Binnenkort meer
                        </span>

                        <h4>
                            Het eerste verhaal uit Noord wordt voorbereid.
                        </h4>

                    </div>


                <?php endif; ?>


            </section>


            <!-- =====================================
                 AGENDA
            ====================================== -->

            <aside
                class="ng-home-pulse__agenda"
                aria-labelledby="ng-home-pulse-agenda-title"
            >

                <header>

                    <p>
                        Om bij te zijn
                    </p>

                    <h3 id="ng-home-pulse-agenda-title">
                        Komende<br>
                        activiteiten
                    </h3>

                </header>


                <div class="ng-home-pulse__timeline">


                    <?php

                    $today = current_time('Y-m-d');

                    $agenda_query = new WP_Query(
                        array(
                            'post_type'      => 'agenda_item',
                            'posts_per_page' => 4,
                            'post_status'    => 'publish',
                            'meta_key'       => '_agenda_date',
                            'meta_value'     => $today,
                            'meta_compare'   => '>=',
                            'meta_type'      => 'DATE',
                            'orderby'        => 'meta_value',
                            'order'          => 'ASC',
                        )
                    );

                    ?>


                    <?php if (
                        $agenda_query->have_posts()
                    ) : ?>


                        <?php while (
                            $agenda_query->have_posts()
                        ) :

                            $agenda_query->the_post();

                            $event_date = get_post_meta(
                                get_the_ID(),
                                '_agenda_date',
                                true
                            );

                            $event_time = get_post_meta(
                                get_the_ID(),
                                '_agenda_time',
                                true
                            );

                            $event_location = get_post_meta(
                                get_the_ID(),
                                '_agenda_location',
                                true
                            );

                            $event_timestamp =
                                strtotime($event_date);

                            ?>


                            <a
                                class="ng-home-pulse__event"
                                href="<?php the_permalink(); ?>"
                            >

                                <span
                                    class="ng-home-pulse__event-dot"
                                    aria-hidden="true"
                                ></span>


                                <time datetime="<?php echo esc_attr(
                                    $event_date
                                ); ?>">

                                    <strong>
                                        <?php echo esc_html(
                                            wp_date(
                                                'j',
                                                $event_timestamp
                                            )
                                        ); ?>
                                    </strong>

                                    <span>
                                        <?php echo esc_html(
                                            wp_date(
                                                'M',
                                                $event_timestamp
                                            )
                                        ); ?>
                                    </span>

                                </time>


                                <div>

                                    <h4>
                                        <?php the_title(); ?>
                                    </h4>


                                    <?php if (
                                        $event_time ||
                                        $event_location
                                    ) : ?>

                                        <p>

                                            <?php if (
                                                $event_time
                                            ) : ?>

                                                <span>
                                                    <?php echo esc_html(
                                                        $event_time
                                                    ); ?> uur
                                                </span>

                                            <?php endif; ?>


                                            <?php if (
                                                $event_location
                                            ) : ?>

                                                <span>
                                                    <?php echo esc_html(
                                                        $event_location
                                                    ); ?>
                                                </span>

                                            <?php endif; ?>

                                        </p>

                                    <?php endif; ?>

                                </div>


                                <span
                                    class="ng-home-pulse__event-arrow"
                                    aria-hidden="true"
                                >
                                    ↗
                                </span>

                            </a>


                        <?php endwhile; ?>


                        <?php wp_reset_postdata(); ?>


                    <?php else : ?>


                        <div class="ng-home-pulse__agenda-empty">

                            <span>
                                Nieuwe data volgen
                            </span>

                            <strong>
                                Er staat momenteel niets gepland.
                            </strong>

                        </div>


                    <?php endif; ?>


                </div>


                <a
                    class="ng-home-pulse__agenda-link"
                    href="<?php echo esc_url(
                        home_url('/nieuws-agenda/')
                    ); ?>"
                >

                    <span>

                        <small>
                            Alles op één plek
                        </small>

                        <strong>
                            Bekijk de agenda
                        </strong>

                    </span>

                    <span aria-hidden="true">
                        →
                    </span>

                </a>

            </aside>


        </div>

    </div>

</section>


 <?php
$partner_images = $theme_images . '/partners';

$partner_logos = array(
    array(
        'file'  => 'logo1.png',
        'name'  => 'Gemeente Tilburg',
        'class' => 'is-wide',
    ),
    array(
        'file'  => 'logo4.png',
        'name'  => 'Nationaal Programma Leefbaarheid en Veiligheid',
        'class' => '',
    ),
    array(
        'file'  => 'logo7.png',
        'name'  => 'Vfonds',
        'class' => 'is-small',
    ),
    array(
        'file'  => 'logo8.png',
        'name'  => 'Waterschap De Dommel',
        'class' => 'is-small',
    ),
    array(
        'file'  => 'logo5.jpg',
        'name'  => 'Oranje Fonds',
        'class' => 'is-wide',
    ),
    array(
        'file'  => 'logo6.png',
        'name'  => 'Provincie Noord-Brabant',
        'class' => 'is-wide',
    ),
    array(
        'file'  => 'logo2.jpg',
        'name'  => 'MAN Maakt Mede Mogelijk',
        'class' => 'is-small',
    ),
    array(
        'file'  => 'logo9.png',
        'name'  => 'Wijkraad Stokhasselt',
        'class' => 'is-small',
    ),
);
?>


<section id="partners" class="ng-partner-section">

    <div class="site-container">

        <header class="ng-partner-heading">

            <div>

                <p class="eyebrow">
                    Samenwerking
                </p>

                <h2>
                    Samen komt een idee verder.
                </h2>

            </div>

            <p>
                NoordgroeiT werkt samen met organisaties, fondsen,
                overheden en partners uit de wijk. Ieder brengt iets
                anders mee: kennis, middelen, ervaring of een sterk
                netwerk in Tilburg-Noord.
            </p>

        </header>

    </div>


    <div
        class="ng-partner-marquee"
        aria-label="Organisaties die met NoordgroeiT samenwerken"
    >

        <div class="ng-partner-track">

            <?php for ($copy = 0; $copy < 2; $copy++) : ?>

                <div
                    class="ng-partner-group"
                    <?php if ($copy === 1) : ?>
                        aria-hidden="true"
                    <?php endif; ?>
                >

                    <?php foreach ($partner_logos as $partner) : ?>

                        <figure class="ng-partner-logo <?php
                            echo esc_attr($partner['class']);
                        ?>">

                            <img
                                src="<?php echo esc_url(
                                    $partner_images . '/' .
                                    $partner['file']
                                ); ?>"
                                alt="<?php echo $copy === 0
                                    ? esc_attr($partner['name'])
                                    : '';
                                ?>"
                                loading="lazy"
                                decoding="async"
                            >

                        </figure>

                    <?php endforeach; ?>

                </div>

            <?php endfor; ?>

        </div>

    </div>


    <div class="site-container">

<footer class="ng-partner-footer">

    <p>
        <span aria-hidden="true"></span>

        Hier zie je onze belangrijkste subsidiegevers.
        NoordgroeiT werkt daarnaast samen met nog veel meer
        organisaties en wijkpartners.
    </p>

<a
    class="ng-partner-destination"
    href="<?php echo esc_url(
        home_url('/samenwerken/')
    ); ?>"
>
    <span>
        <small>
            Het volledige netwerk
        </small>

        <strong>
            Bekijk alle partners
        </strong>
    </span>

    <span
        class="ng-partner-destination-arrow"
        aria-hidden="true"
    >
        →
    </span>
</a>

</footer>

    </div>

</section>

<section
    class="support-closing-section"
    aria-labelledby="support-closing-title"
>
    <div class="site-container">

        <div class="support-closing-panel">

            <div class="support-closing-copy">
                <p class="support-closing-label">
                    Steun NoordgroeiT
                </p>

                <h2 id="support-closing-title">
                    Geef een goed idee de ruimte.
                </h2>

                <p class="support-closing-intro">
                    Met jouw bijdrage kunnen bewonersplannen beginnen,
                    ontmoetingen ontstaan en plekken zoals NoordbuiTen
                    verder groeien.
                </p>

                <a
                    class="support-closing-button"
                    href="<?php echo esc_url(
                        home_url('/steun-noordgroeit/')
                    ); ?>"
                >
                    <span>Steun NoordgroeiT</span>
                    <span class="support-closing-arrow" aria-hidden="true">
                        →
                    </span>
                </a>
            </div>

            <div class="support-closing-side">

                <div class="support-closing-stamp" aria-hidden="true">
                    <span>♥</span>
                    <small>Samen<br>voor Noord</small>
                </div>

                <p class="support-closing-side-label">
                    Jouw steun maakt ruimte voor
                </p>

                <ul class="support-closing-list">
                    <li>
                        <span aria-hidden="true">01</span>
                        Bewonersideeën die echt van start gaan
                    </li>

                    <li>
                        <span aria-hidden="true">02</span>
                        Activiteiten waar iedereen aan mee kan doen
                    </li>

                    <li>
                        <span aria-hidden="true">03</span>
                        De verdere ontwikkeling van NoordbuiTen
                    </li>
                </ul>

            </div>

        </div>

    </div>
</section>

</main>



<?php
get_footer();