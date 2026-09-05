<?php
/**
 * Single Agenda Item
 */

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();

        $agenda_datum = get_post_meta(
            get_the_ID(),
            '_agenda_date',
            true
        );

        $agenda_tijd = get_post_meta(
            get_the_ID(),
            '_agenda_time',
            true
        );

        $agenda_locatie = get_post_meta(
            get_the_ID(),
            '_agenda_location',
            true
        );

        $agenda_timestamp = $agenda_datum
            ? strtotime($agenda_datum)
            : false;
?>

<main id="main-content" class="ng-single-agenda">


    <!-- =========================================
         HERO
    ========================================== -->

    <section class="ng-agenda-hero">

        <div class="site-container">

            <a
                class="ng-agenda-back"
                href="<?php echo esc_url(
                    home_url('/nieuws-agenda/#agenda')
                ); ?>"
            >
                <span aria-hidden="true">←</span>
                Terug naar de agenda
            </a>


            <div class="ng-agenda-hero-layout">


                <!-- COPY -->

                <div class="ng-agenda-hero-copy">

                    <p class="ng-agenda-kicker">
                        Agenda · Tilburg-Noord
                    </p>

                    <h1>
                        <?php the_title(); ?>
                    </h1>


                    <?php if (has_excerpt()) : ?>

                        <p class="ng-agenda-intro">
                            <?php echo esc_html(
                                get_the_excerpt()
                            ); ?>
                        </p>

                    <?php endif; ?>


                    <div class="ng-agenda-hero-detail">

                        <span aria-hidden="true"></span>

                        <p>
                            Een moment om elkaar te ontmoeten,
                            mee te doen en Tilburg-Noord
                            te ontdekken.
                        </p>

                    </div>

                </div>



                <!-- DATE CARD -->

                <aside class="ng-agenda-date-card">

                    <span class="ng-agenda-date-label">
                        Wanneer?
                    </span>


                    <?php if ($agenda_timestamp) : ?>

                        <div class="ng-agenda-date">

                            <strong>
                                <?php echo esc_html(
                                    wp_date(
                                        'd',
                                        $agenda_timestamp
                                    )
                                ); ?>
                            </strong>

                            <div>

                                <span>
                                    <?php echo esc_html(
                                        wp_date(
                                            'F',
                                            $agenda_timestamp
                                        )
                                    ); ?>
                                </span>

                                <small>
                                    <?php echo esc_html(
                                        wp_date(
                                            'Y',
                                            $agenda_timestamp
                                        )
                                    ); ?>
                                </small>

                            </div>

                        </div>

                    <?php endif; ?>


                    <div class="ng-agenda-date-rule"></div>


                    <?php if ($agenda_tijd) : ?>

                        <div class="ng-agenda-date-meta">

                            <small>
                                Tijd
                            </small>

                            <strong>
                                <?php echo esc_html(
                                    $agenda_tijd
                                ); ?>
                            </strong>

                        </div>

                    <?php endif; ?>


                    <?php if ($agenda_locatie) : ?>

                        <div class="ng-agenda-date-meta">

                            <small>
                                Locatie
                            </small>

                            <strong>
                                <?php echo esc_html(
                                    $agenda_locatie
                                ); ?>
                            </strong>

                        </div>

                    <?php endif; ?>

                </aside>


            </div>

        </div>

    </section>



    <!-- =========================================
         FEATURED IMAGE
    ========================================== -->

    <?php if (has_post_thumbnail()) : ?>

        <section class="ng-agenda-visual">

            <div class="site-container">

                <figure class="ng-agenda-photo">

                    <?php
                    the_post_thumbnail(
                        'full',
                        [
                            'loading'  => 'eager',
                            'decoding' => 'async',
                        ]
                    );
                    ?>

                    <figcaption>

                        <span aria-hidden="true">
                            ↳
                        </span>

                        <p>
                            <?php echo esc_html(
                                $agenda_locatie
                                    ?: 'Tilburg-Noord'
                            ); ?>
                        </p>

                    </figcaption>

                </figure>

            </div>

        </section>

    <?php endif; ?>



    <!-- =========================================
         CONTENT
    ========================================== -->

    <section class="ng-agenda-content">

        <div class="site-container">

            <div class="ng-agenda-content-layout">


                <!-- ARTICLE -->

                <article class="ng-agenda-article">

                    <p class="ng-agenda-section-kicker">
                        Over deze activiteit
                    </p>

                    <div class="ng-agenda-entry">
                        <?php the_content(); ?>
                    </div>

                </article>



                <!-- PRACTICAL -->

                <aside class="ng-agenda-practical">

                    <p class="ng-agenda-practical-kicker">
                        Even op een rij
                    </p>

                    <h2>
                        Praktische informatie
                    </h2>


                    <div class="ng-agenda-practical-list">


                        <?php if ($agenda_timestamp) : ?>

                            <div>

                                <small>
                                    Datum
                                </small>

                                <strong>
                                    <?php echo esc_html(
                                        wp_date(
                                            'j F Y',
                                            $agenda_timestamp
                                        )
                                    ); ?>
                                </strong>

                            </div>

                        <?php endif; ?>


                        <?php if ($agenda_tijd) : ?>

                            <div>

                                <small>
                                    Tijd
                                </small>

                                <strong>
                                    <?php echo esc_html(
                                        $agenda_tijd
                                    ); ?>
                                </strong>

                            </div>

                        <?php endif; ?>


                        <?php if ($agenda_locatie) : ?>

                            <div>

                                <small>
                                    Locatie
                                </small>

                                <strong>
                                    <?php echo esc_html(
                                        $agenda_locatie
                                    ); ?>
                                </strong>

                            </div>

                        <?php endif; ?>


                    </div>


                    <a
                        href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>"
                        class="ng-agenda-contact"
                    >
                        <span>
                            Vraag iets over deze activiteit
                        </span>

                        <i aria-hidden="true">
                            ↗
                        </i>
                    </a>

                </aside>


            </div>

        </div>

    </section>



    <!-- =========================================
         NEXT / BACK
    ========================================== -->

    <section class="ng-agenda-end">

        <div class="site-container">

            <div class="ng-agenda-end-inner">

                <div>

                    <p>
                        Nog meer te doen?
                    </p>

                    <h2>
                        Bekijk wat er nog
                        op de agenda staat.
                    </h2>

                </div>


                <a
                    href="<?php echo esc_url(
                        home_url('/nieuws-agenda/#agenda')
                    ); ?>"
                >
                    <span>
                        Terug naar de agenda
                    </span>

                    <i aria-hidden="true">
                        →
                    </i>
                </a>

            </div>

        </div>

    </section>

</main>

<?php
    endwhile;
endif;

get_footer();