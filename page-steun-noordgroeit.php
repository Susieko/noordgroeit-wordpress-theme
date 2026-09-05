<?php
/**
 * Template Name: Steun NoordgroeiT
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images =
    get_template_directory_uri()
    . '/assets/images';

$qr_path =
    get_stylesheet_directory()
    . '/assets/images/donatie-qr.png';

$qr_url =
    get_stylesheet_directory_uri()
    . '/assets/images/donatie-qr.png';
?>

<main
    id="main-content"
    class="ng-support-page"
>


    <!-- =========================================
         HERO
    ========================================== -->

    <section
        class="ng-inner-hero ng-inner-hero--support"
        aria-labelledby="ng-support-hero-title"
    >

        <img
            class="ng-inner-hero__image"
            src="<?php echo esc_url(
                $theme_images . '/steun.JPG'
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


                <h1 id="ng-support-hero-title">
                    Steun NoordgroeiT
                </h1>


                <p class="ng-inner-hero__meta">
                    Samen voor Noord
                    <span>Iedere bijdrage helpt</span>
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
         DONEREN
    ========================================== -->

    <section
        class="ng-support-give"
        aria-labelledby="ng-support-give-title"
    >

        <div class="site-container">

            <div class="ng-support-give-layout">


                <!-- COPY -->

                <div class="ng-support-give-copy">

                    <p class="ng-support-kicker">
                        Geef een idee de ruimte
                    </p>


                    <h2 id="ng-support-give-title">
                        Met een kleine bijdrage
                        kan iets groters beginnen.
                    </h2>


                    <p class="ng-support-give-lead">
                        Met jouw steun kunnen bewonersplannen
                        beginnen, ontmoetingen ontstaan en
                        plekken in Tilburg-Noord verder groeien.
                    </p>


                    <p>
                        Iedere bijdrage helpt NoordgroeiT om
                        mensen, ideeën en mogelijkheden bij
                        elkaar te brengen.
                    </p>


                    <div class="ng-support-give-note">

                        <span aria-hidden="true">
                            ♥
                        </span>

                        <p>
                            Groot of klein:
                            <strong>
                                bedankt dat je Tilburg-Noord
                                helpt groeien.
                            </strong>
                        </p>

                    </div>

                </div>



                <!-- QR -->

                <div class="ng-support-donation">

                    <div class="ng-support-donation-top">

                        <span>
                            Direct steunen
                        </span>

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </div>


                    <div class="ng-support-qr-wrap">

                        <?php if (file_exists($qr_path)) : ?>

                            <img
                                class="ng-support-qr"
                                src="<?php echo esc_url(
                                    $qr_url
                                ); ?>"
                                alt="QR-code om NoordgroeiT te steunen"
                            >

                        <?php else : ?>

                            <div class="ng-support-qr-placeholder">

                                <strong>
                                    QR
                                </strong>

                                <span>
                                    QR-code volgt binnenkort
                                </span>

                            </div>

                        <?php endif; ?>


                        <span
                            class="ng-support-qr-corner
                                   ng-support-qr-corner--one"
                            aria-hidden="true"
                        ></span>

                        <span
                            class="ng-support-qr-corner
                                   ng-support-qr-corner--two"
                            aria-hidden="true"
                        ></span>

                    </div>


                    <div class="ng-support-donation-copy">

                        <small>
                            Scan met je telefoon
                        </small>

                        <strong>
                            Steun NoordgroeiT
                        </strong>

                        <p>
                            Scan de QR-code om direct naar
                            de donatiemogelijkheid te gaan.
                        </p>

                    </div>


                    <div class="ng-support-donation-foot">

                        <span aria-hidden="true">
                            ✦
                        </span>

                        <p>
                            Dankjewel voor je steun.
                        </p>

                    </div>

                </div>


            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>