<?php
/**
 * Template for Heikantse Tuynen
 */

get_header();
?>

<main
    id="main-content"
    class="ng-ht-page"
>


    <!-- =========================================
         HERO
    ========================================== -->

    <section
        class="ng-inner-hero ng-inner-hero--heikantse"
        aria-labelledby="ng-ht-hero-title"
    >

        <img
            class="ng-inner-hero__image"
            src="<?php echo esc_url(
                get_stylesheet_directory_uri()
                . '/assets/images/heikantsetuynen.jpeg'
            ); ?>"
            alt=""
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


                <h1 id="ng-ht-hero-title">
                    Heikantse Tuynen
                </h1>


                <p class="ng-inner-hero__meta">
                    Visie voor
                    <span>de stadsrand</span>
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
         DE VISIE
    ========================================== -->

    <section
        class="ng-ht-vision"
        aria-labelledby="ng-ht-vision-title"
    >

        <div class="site-container">

            <div class="ng-ht-vision-layout">


                <!-- COPY -->

                <div class="ng-ht-vision-copy">

                    <div class="ng-ht-vision-meta">

                        <span>
                            Heikantse Tuynen
                        </span>

                        <i></i>

                        <small>
                            01
                        </small>

                    </div>


                    <p class="ng-ht-vision-kicker">
                        Een groene stadsrand
                    </p>


                    <h2 id="ng-ht-vision-title">
                        Ruimte voor natuur,
                        ontmoeting en
                        <span class="ng-green-word">
                            groei.
                        </span>
                    </h2>


                    <p class="ng-ht-vision-lead">
                        Heikantse Tuynen is een visie voor een
                        veilige en gezonde stadsrand waar groen,
                        bewegen, spelen en ontdekken samenkomen.
                    </p>


                    <p class="ng-ht-vision-text">
                        De gedachte is om ruimte te maken voor
                        toegankelijk groen, natuurherstel en plekken
                        waar jong en oud kunnen wandelen, leren,
                        ontmoeten en actief buiten zijn.
                    </p>

                </div>



                <!-- VISION FIELD -->

                <div class="ng-ht-vision-field">

                    <div class="ng-ht-vision-field-top">

                        <span>
                            In de visie
                        </span>

                        <small>
                            06 richtingen
                        </small>

                    </div>


                    <div class="ng-ht-vision-centre">

                        <small>
                            Heikantse
                        </small>

                        <strong>
                            Tuynen
                        </strong>

                        <span></span>

                    </div>


                    <span class="ng-ht-vision-word ng-ht-vision-word--1">
                        Stadslandbouw
                    </span>

                    <span class="ng-ht-vision-word ng-ht-vision-word--2">
                        Natuurherstel
                    </span>

                    <span class="ng-ht-vision-word ng-ht-vision-word--3">
                        Ontmoeting
                    </span>

                    <span class="ng-ht-vision-word ng-ht-vision-word--4">
                        Spelen
                    </span>

                    <span class="ng-ht-vision-word ng-ht-vision-word--5">
                        Leren
                    </span>

                    <span class="ng-ht-vision-word ng-ht-vision-word--6">
                        Bewegen
                    </span>

                </div>


            </div>

        </div>

    </section>



    <!-- =========================================
         STATUS / COMING SOON
    ========================================== -->

    <section
        class="ng-ht-status"
        aria-labelledby="ng-ht-status-title"
    >

        <div class="site-container">

            <div class="ng-ht-status-layout">


                <div class="ng-ht-status-copy">

                    <p class="ng-ht-status-kicker">
                        Status
                    </p>


                    <h2 id="ng-ht-status-title">
                        Deze pagina
                        <span class="ng-green-word">
                            groeit
                        </span>
                        mee met het plan.
                    </h2>


                    <p>
                        Heikantse Tuynen is nog in ontwikkeling.
                        Zodra er meer duidelijk is over de verdere
                        invulling, samenwerking, participatie en
                        vervolgstappen, vind je de updates hier.
                    </p>


                    <div class="ng-ht-status-actions">

                        <a
                            class="ng-ht-status-button"
                            href="<?php echo esc_url(
                                home_url('/contact/')
                            ); ?>"
                        >
                            <span>
                                Ik wil meer weten
                            </span>

                            <span
                                class="ng-ht-status-button-arrow"
                                aria-hidden="true"
                            >
                                ↗
                            </span>
                        </a>


                        <a
                            class="ng-ht-status-back"
                            href="<?php echo esc_url(
                                home_url('/initiatieven/')
                            ); ?>"
                        >
                            Terug naar initiatieven
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </div>



                <div class="ng-ht-status-card">

                    <div class="ng-ht-status-card-top">

                        <span></span>

                        <small>
                            Projectstatus
                        </small>

                    </div>


                    <strong>
                        In ontwikkeling
                    </strong>


                    <p>
                        Meer informatie volgt zodra de volgende
                        stappen verder zijn uitgewerkt.
                    </p>


                    <div class="ng-ht-status-line">

                        <span>
                            Visie
                        </span>

                        <i></i>

                        <span>
                            Uitwerking
                        </span>

                        <i></i>

                        <span>
                            Vervolg
                        </span>

                    </div>

                </div>


            </div>

        </div>

    </section>


</main>

<?php
get_footer();