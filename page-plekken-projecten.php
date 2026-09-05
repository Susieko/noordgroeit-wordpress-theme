<?php
/**
 * Template Name: NoordbuiTen - Plekken & Projecten
 */

get_header();

$theme_images = get_template_directory_uri() . '/assets/images';
?>

<main id="main-content" class="ng-nbp-page">

<!-- =========================================
     PLEKKEN & PROJECTEN — INTRO
========================================= -->
<section
    class="ng-nbp-intro"
    aria-labelledby="ng-nbp-title"
    data-nbp-intro
>

    <div class="site-container">

        <div class="ng-nbp-intro-layout">


            <!-- COPY -->

            <div class="ng-nbp-intro-copy">

                <p class="ng-nbp-intro-kicker">
                    NoordbuiTen · Plekken &amp; projecten
                </p>

                <h1 id="ng-nbp-title">
                    Een plek die blijft <span>groeien</span>
                </h1>


                <p>
                    Op NoordbuiTen ontstaat steeds meer.
                    Van groen en voedsel tot werkplaatsen,
                    speelruimte en plekken om elkaar te ontmoeten.
                </p>

            </div>



            <!-- VISUAL -->

            <div
                class="ng-nbp-intro-visual"
                aria-hidden="true"
            >

                <div class="ng-nbp-orbit ng-nbp-orbit--outer"></div>
                <div class="ng-nbp-orbit ng-nbp-orbit--inner"></div>


                <div class="ng-nbp-intro-center">

                    <small>
                        NoordbuiTen
                    </small>

                    <strong>
                        de plek
                        groeit
                    </strong>

                </div>


                <div class="ng-nbp-intro-node ng-nbp-intro-node--green">

                    <span></span>

                    <small>
                        groen
                    </small>

                </div>


                <div class="ng-nbp-intro-node ng-nbp-intro-node--build">

                    <span></span>

                    <small>
                        maken
                    </small>

                </div>


                <div class="ng-nbp-intro-node ng-nbp-intro-node--meet">

                    <span></span>

                    <small>
                        ontmoeten
                    </small>

                </div>


                <div class="ng-nbp-intro-node ng-nbp-intro-node--play">

                    <span></span>

                    <small>
                        ontdekken
                    </small>

                </div>

            </div>

        </div>



        <!-- SMALL BOTTOM DETAIL -->

        <div class="ng-nbp-intro-bottom">

            <span aria-hidden="true"></span>

            <p>
                Wat er al is, wat we bouwen en wat nog mag groeien.
            </p>

        </div>

    </div>

</section>



    <!-- =========================================
         TERREIN IN BEWEGING
    ========================================== -->

<section
    class="ng-nbp-progress"
    aria-labelledby="ng-nbp-progress-title"
    data-nbp-reveal
>

        <div class="site-container">


            <!-- INTRO -->

            <header class="ng-nbp-progress-heading">

                <div>

                    <p class="ng-nbp-kicker">
                        Een plek die nog groeit
                    </p>

                    <h2 id="ng-nbp-progress-title">
                        Hier is bijna altijd
                        iets in beweging.
                    </h2>

                </div>


                <div class="ng-nbp-progress-intro">

                    <p>
                        NoordbuiTen wordt stap voor stap opgebouwd
                        met bewoners, vrijwilligers en partners.
                        Sommige onderdelen zijn al volop in gebruik,
                        andere krijgen op dit moment vorm.
                    </p>

                    <p>
                        Juist dat proces hoort bij de plek:
                        samen kijken wat nodig is en het vervolgens
                        ook echt maken.
                    </p>

                </div>

            </header>



            <!-- SITE BOARD -->

            <div class="ng-nbp-board">


                <!-- BIG VISUAL -->

                <figure class="ng-nbp-board-visual">

                    <img
                        src="<?php echo esc_url(
                            $theme_images . '/noordbuitenover.webp'
                        ); ?>"
                        alt="Bewoners en vrijwilligers werken samen op NoordbuiTen"
                        loading="lazy"
                        decoding="async"
                    >


                    <figcaption>

                        <span>
                            Moerstraat 23
                        </span>

                        <strong>
                            Tilburg-Noord
                        </strong>

                    </figcaption>

                </figure>



                <!-- PROJECT STATUS -->

                <div class="ng-nbp-board-info">


                    <div class="ng-nbp-board-top">

                        <span>
                            Stand van de plek
                        </span>

                        <span>
                            groeit mee →
                        </span>

                    </div>



                    <div class="ng-nbp-status-group">

                        <p class="ng-nbp-status-label">
                            <span
                                class="ng-nbp-status-dot ng-nbp-status-dot--here"
                                aria-hidden="true"
                            ></span>

                            Al te zien
                        </p>


                        <ul>

                            <li>
                                <span>Boomgaard</span>

                                <small>
                                    ± 40 fruitbomen
                                </small>
                            </li>


                            <li>
                                <span>Moestuin</span>

                                <small>
                                    klaar om te groeien
                                </small>
                            </li>


                            <li>
                                <span>Speelbos</span>

                                <small>
                                    krijgt steeds meer vorm
                                </small>
                            </li>


                            <li>
                                <span>Bijenstal</span>

                                <small>
                                    twee bijenvolken
                                </small>
                            </li>

                        </ul>

                    </div>



                    <div class="ng-nbp-status-group">

                        <p class="ng-nbp-status-label">

                            <span
                                class="ng-nbp-status-dot ng-nbp-status-dot--building"
                                aria-hidden="true"
                            ></span>

                            In ontwikkeling

                        </p>


                        <ul>

                            <li>
                                <span>
                                    Houtwerkplaats
                                </span>

                                <small>
                                    + metaalhoek
                                </small>
                            </li>


                            <li>
                                <span>
                                    Grote Kas
                                </span>

                                <small>
                                    voorbereiding
                                </small>
                            </li>


                            <li>
                                <span>
                                    Koffie- &amp; informatiepunt
                                </span>

                                <small>
                                    in opbouw
                                </small>
                            </li>


                            <li>
                                <span>
                                    Erf &amp; terras
                                </span>

                                <small>
                                    krijgt vorm
                                </small>
                            </li>

                        </ul>

                    </div>



                    <div class="ng-nbp-board" data-nbp-board>

                        <span aria-hidden="true">
                            ↳
                        </span>

                        <p>
                            En onder de grond ligt zelfs een
                            <strong>waterberging van 100.000 liter.</strong>
                        </p>

                    </div>


                </div>

            </div>



            <!-- BOTTOM ROUTE -->

            <div class="ng-nbp-progress-route">

                <span>
                    AL AANWEZIG
                </span>

                <i aria-hidden="true"></i>

                <span>
                    IN ONTWIKKELING
                </span>

                <i aria-hidden="true"></i>

                <span>
                    BLIJFT GROEIEN
                </span>

            </div>


        </div>

    </section>

<!-- =========================================
     ONDER DE OPPERVLAKTE
========================================= -->

<section
    class="ng-nbp-blueprint"
    aria-labelledby="ng-nbp-blueprint-title"
    data-nbp-reveal
>

    <div class="site-container">

        <header class="ng-nbp-blueprint-heading">

            <div>

                <p class="ng-nbp-blueprint-kicker">
                    Wat je niet meteen ziet
                </p>

                <h2 id="ng-nbp-blueprint-title">
                    Onder de oppervlakte
                    wordt net zo hard gebouwd.
                </h2>

            </div>


            <p>
                Een groot deel van NoordbuiTen zit niet in wat je
                direct op een foto ziet. Achter de schermen wordt
                gewerkt aan voorzieningen die de plek straks
                jarenlang bruikbaar maken.
            </p>

        </header>



        <div class="ng-nbp-blueprint-plan" data-nbp-blueprint>


            <!-- CONNECTIONS -->

<svg
    class="ng-nbp-landscape-line"
    viewBox="0 0 700 90"
    preserveAspectRatio="none"
    aria-hidden="true"
>
    <path
        class="ng-nbp-landscape-line-main"
        d="
            M 20 46
            C 110 46, 150 24, 235 24
            C 320 24, 360 62, 455 62
            C 545 62, 585 32, 680 32
        "
    ></path>
</svg>



            <!-- GROTE KAS -->

            <article class="ng-nbp-plan-item ng-nbp-plan-item--kas">

                <span class="ng-nbp-plan-state">
                    voorbereiding
                </span>

                <strong>
                    Grote Kas
                </strong>

                <p>
                    De voorbereidingen voor de bouw zijn gestart.
                </p>

            </article>



            <!-- KOFFIE -->

            <article class="ng-nbp-plan-item ng-nbp-plan-item--coffee">

                <span class="ng-nbp-plan-state">
                    in opbouw
                </span>

                <strong>
                    Koffie- &amp;<br>
                    informatiepunt
                </strong>

                <p>
                    Met isolatie, elektra en water.
                </p>

            </article>



            <!-- WATER -->

            <article class="ng-nbp-plan-item ng-nbp-plan-item--water">

                <span class="ng-nbp-plan-accent">
                    100.000 L
                </span>

                <strong>
                    Waterberging
                </strong>

                <p>
                    Met daarboven een betonvloer als basis voor
                    een toekomstige ontmoetingsruimte.
                </p>

            </article>



            <!-- WORKSHOP -->

            <article class="ng-nbp-plan-item ng-nbp-plan-item--workshop">

                <span class="ng-nbp-plan-state">
                    aangelegd
                </span>

                <strong>
                    Elektra in de schuur
                </strong>

                <p>
                    Voor de houtwerkplaats en metaalhoek.
                </p>

            </article>



            <!-- CIRCULAR -->

            <article class="ng-nbp-plan-item ng-nbp-plan-item--circular">

                <span class="ng-nbp-plan-state">
                    circulair
                </span>

                <strong>
                    Sanitair &amp; opslag
                </strong>

                <p>
                    De toiletunit wordt opgeknapt en er komt
                    buitenopslag voor circulaire reststromen.
                </p>

            </article>



            <!-- TERRACE -->

            <article class="ng-nbp-plan-item ng-nbp-plan-item--terrace">

                <span class="ng-nbp-plan-state">
                    krijgt vorm
                </span>

                <strong>
                    Erf &amp; terras
                </strong>

                <p>
                    De herbestrating van het erf en het toekomstige
                    terras is grotendeels klaar.
                </p>

            </article>


            <!-- CENTER NOTE -->

            <div class="ng-nbp-plan-center">

                <small>
                    NoordbuiTen
                </small>

                <strong>
                    bouwen aan
                    de basis
                </strong>

            </div>

        </div>



        <footer class="ng-nbp-blueprint-footer">

            <span aria-hidden="true"></span>

            <p>
                Niet alles wat groeit begint boven de grond.
            </p>

        </footer>

    </div>

</section>

<!-- =========================================
     GROEN DAT WORTEL SCHIET
========================================= -->

<section
    class="ng-nbp-landscape"
    aria-labelledby="ng-nbp-landscape-title"
    data-nbp-reveal
>

    <div class="site-container">


        <!-- HEADER -->

        <header class="ng-nbp-landscape-heading">

            <div>

                <p class="ng-nbp-landscape-kicker">
                    Wat hier wortel schiet
                </p>

                <h2 id="ng-nbp-landscape-title">
                    Hier krijgt
                    <span>groen</span>
                    letterlijk wortels.
                </h2>

            </div>


            <p>
                Naast gebouwen en voorzieningen groeit ook het landschap
                van NoordbuiTen mee. Bomen, voedsel, bloemen en bijen
                krijgen stap voor stap een vaste plek op het terrein.
            </p>

        </header>



        <!-- LANDSCAPE -->

<div class="ng-nbp-growth-map" data-nbp-growth>


    <div class="ng-nbp-growth-main">

        <p>
            Boomgaard
        </p>

        <strong>
            <small>ca.</small>
            40
        </strong>

        <span>
            fruitbomen geplant
        </span>

    </div>


    <div
        class="ng-nbp-growth-stem"
        aria-hidden="true"
    >
        <span></span>
    </div>


    <article class="ng-nbp-growth-fact ng-nbp-growth-fact--tree">

        <p>
            Bijzondere boom
        </p>

        <h3>
            De zilverlinde
        </h3>

        <span>
            Geplant als symbool voor de ondertekening
            van het huurcontract.
        </span>

    </article>


    <article class="ng-nbp-growth-fact ng-nbp-growth-fact--bees">

        <p>
            Nieuwe bewoners
        </p>

        <h3>
            Twee bijenvolken
        </h3>

        <span>
            De eerste bijenvolken hebben hun plek
            gevonden in de nieuwe bijenstal.
        </span>

    </article>


    <article class="ng-nbp-growth-fact ng-nbp-growth-fact--garden">

        <p>
            Klaar om te groeien
        </p>

        <h3>
            De moestuin
        </h3>

        <span>
            Aangelegd en klaar voor een nieuw groeiseizoen.
        </span>

    </article>


    <div class="ng-nbp-growth-note">

        <span aria-hidden="true">
            ↳
        </span>

        <p>
            groeien kost tijd
            <strong>— precies zoals het hoort.</strong>
        </p>

    </div>


</div>


        <footer class="ng-nbp-landscape-footer">

            <span aria-hidden="true"></span>

            <p>
                Een plek voor mensen groeit mee met de natuur eromheen.
            </p>

        </footer>

    </div>

</section>

</main>

<?php get_footer(); ?>