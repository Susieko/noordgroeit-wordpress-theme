<?php
/**
 * Template Name: Vacatures
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images =
    get_template_directory_uri()
    . '/assets/images';


/* =========================================
   CURRENT VACANCIES
========================================= */

$ng_vacancies = new WP_Query([
    'post_type'      => 'vacature',
    'posts_per_page' => -1,
    'post_status'    => 'publish',

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

    'orderby' => 'date',
    'order'   => 'DESC',
]);

$ng_vacancy_count =
    $ng_vacancies->found_posts;

?>

<main
    id="main-content"
    class="ng-vac-page"
>


    <!-- =========================================
         HERO
    ========================================== -->

    <section
        class="ng-inner-hero ng-inner-hero--vacatures"
        aria-labelledby="ng-vac-hero-title"
    >

        <img
            class="ng-inner-hero__image"
            src="<?php echo esc_url(
                $theme_images . '/vacature.webp'
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


                <h1 id="ng-vac-hero-title">
                    Vacatures
                </h1>


                <p class="ng-inner-hero__meta">
                    Vrijwilligerswerk
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
         INTRO
    ========================================== -->

    <section
        class="ng-vac-intro"
        aria-labelledby="ng-vac-intro-title"
    >

        <div class="site-container">

            <div class="ng-vac-intro-layout">


                <div class="ng-vac-intro-copy">

                    <p class="ng-vac-kicker">
                        We zoeken versterking
                    </p>


                    <h2 id="ng-vac-intro-title">
                        Misschien zoeken we
                        precies wat jij meebrengt.
                    </h2>

                </div>



                <div class="ng-vac-intro-side">

                    <p>
                        Bij NoordgroeiT zijn verschillende
                        manieren om je kennis, ervaring of
                        enthousiasme in te zetten voor
                        Tilburg-Noord.
                    </p>


                    <div class="ng-vac-intro-count">

                        <strong>
                            <?php
                            echo esc_html(
                                $ng_vacancy_count
                            );
                            ?>
                        </strong>

                        <span>
                            <?php
                            echo $ng_vacancy_count === 1
                                ? 'openstaande vacature'
                                : 'openstaande vacatures';
                            ?>
                        </span>

                    </div>

                </div>


            </div>

        </div>

    </section>

    <!-- =========================================
     VACATURES — ACTUELE MOGELIJKHEDEN
========================================= -->

<section
    class="ng-vac-list-section"
    aria-labelledby="ng-vac-list-title"
>

    <div class="site-container">


        <header class="ng-vac-list-heading">

            <div>

                <p class="ng-vac-kicker">
                    Actuele mogelijkheden
                </p>

                <h2 id="ng-vac-list-title">
                    Waar zou jij
                    aan willen bijdragen?
                </h2>

            </div>


            <p>
                Van bestuur en communicatie tot organiseren
                en praktisch meewerken. Kijk vooral naar wat
                bij jou past — je hoeft niet alles al te kunnen.
            </p>

        </header>



        <?php if ($ng_vacancies->have_posts()) : ?>


            <div class="ng-vac-list">

                <?php
                $ng_vacancy_index = 0;

                while ($ng_vacancies->have_posts()) :
                    $ng_vacancies->the_post();

                    $ng_vacancy_index++;

                    $hours = get_post_meta(
                        get_the_ID(),
                        '_vacature_hours',
                        true
                    );

                    $location = get_post_meta(
                        get_the_ID(),
                        '_vacature_location',
                        true
                    );

                    $category = get_post_meta(
                        get_the_ID(),
                        '_vacature_category',
                        true
                    );

                    $status = get_post_meta(
                        get_the_ID(),
                        '_vacature_status',
                        true
                    );


                    $category_labels = [
                        'bestuur'       => 'Bestuur',
                        'communicatie'  => 'Communicatie',
                        'organisatie'   => 'Organisatie',
                        'praktisch'     => 'Praktisch',
                        'groen'         => 'Groen',
                        'activiteiten'  => 'Activiteiten',
                    ];

                    $category_label =
                        $category_labels[$category]
                        ?? 'Vrijwilligerswerk';


                    $status_labels = [
                        'open'       => 'Open',
                        'binnenkort' => 'Binnenkort',
                    ];

                    $status_label =
                        $status_labels[$status]
                        ?? 'Open';
                ?>


                    <article class="ng-vac-item">


                        <!-- NUMBER -->

                        <div class="ng-vac-item-number">

                            <?php
                            echo esc_html(
                                sprintf(
                                    '%02d',
                                    $ng_vacancy_index
                                )
                            );
                            ?>

                        </div>



                        <!-- IMAGE -->

                        <a
                            class="ng-vac-item-image"
                            href="<?php the_permalink(); ?>"
                            aria-label="<?php echo esc_attr(
                                sprintf(
                                    'Bekijk vacature %s',
                                    get_the_title()
                                )
                            ); ?>"
                        >

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail(
                                    'large',
                                    [
                                        'loading'  => 'lazy',
                                        'decoding' => 'async',
                                    ]
                                );
                                ?>

                            <?php else : ?>

                                <div class="ng-vac-item-placeholder">

                                    <span aria-hidden="true">
                                        ✦
                                    </span>

                                    <strong>
                                        NoordgroeiT
                                    </strong>

                                </div>

                            <?php endif; ?>


                            <span
                                class="ng-vac-item-status
                                ng-vac-item-status--<?php
                                    echo esc_attr(
                                        $status ?: 'open'
                                    );
                                ?>"
                            >
                                <?php
                                echo esc_html(
                                    $status_label
                                );
                                ?>
                            </span>

                        </a>



                        <!-- CONTENT -->

                        <div class="ng-vac-item-content">


                            <div class="ng-vac-item-top">

                                <span class="ng-vac-item-category">
                                    <?php
                                    echo esc_html(
                                        $category_label
                                    );
                                    ?>
                                </span>


                                <?php if ($location) : ?>

                                    <span class="ng-vac-item-location">
                                        <?php
                                        echo esc_html(
                                            $location
                                        );
                                        ?>
                                    </span>

                                <?php endif; ?>

                            </div>



                            <h3>

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>

                            </h3>



                            <?php if (has_excerpt()) : ?>

                                <p class="ng-vac-item-excerpt">
                                    <?php
                                    echo esc_html(
                                        get_the_excerpt()
                                    );
                                    ?>
                                </p>

                            <?php endif; ?>



                            <div class="ng-vac-item-bottom">


                                <?php if ($hours) : ?>

                                    <div class="ng-vac-item-hours">

                                        <small>
                                            Tijd
                                        </small>

                                        <strong>
                                            <?php
                                            echo esc_html(
                                                $hours
                                            );
                                            ?>
                                        </strong>

                                    </div>

                                <?php endif; ?>



                                <a
                                    class="ng-vac-item-link"
                                    href="<?php the_permalink(); ?>"
                                >

                                    Bekijk vacature

                                    <span aria-hidden="true">
                                        →
                                    </span>

                                </a>


                            </div>


                        </div>


                    </article>


                <?php endwhile; ?>

            </div>


            <?php
            wp_reset_postdata();
            ?>



        <?php else : ?>


            <!-- =====================================
                 EMPTY STATE
            ====================================== -->

            <div class="ng-vac-empty">

                <span
                    class="ng-vac-empty-mark"
                    aria-hidden="true"
                >
                    ✦
                </span>


                <div>

                    <p class="ng-vac-kicker">
                        Op dit moment
                    </p>

                    <h3>
                        Er staan nu geen vacatures open.
                    </h3>

                    <p>
                        Dat betekent niet dat je niets kunt
                        betekenen. Als je iets wilt bijdragen,
                        horen we graag van je.
                    </p>


                    <a
                        href="<?php echo esc_url(
                            home_url(
                                '/vrijwilliger-worden/'
                            )
                        ); ?>"
                    >
                        Ontdek vrijwilligerswerk

                        <span aria-hidden="true">
                            →
                        </span>
                    </a>

                </div>

            </div>


        <?php endif; ?>


    </div>

</section>

<!-- =========================================
     VACATURES — OPEN KENNISMAKING
========================================= -->

<section
    class="ng-vac-final"
    aria-labelledby="ng-vac-final-title"
>

    <div class="site-container">

        <div class="ng-vac-final-layout">


            <div class="ng-vac-final-copy">

                <p class="ng-vac-kicker">
                    Niets gevonden?
                </p>

                <h2 id="ng-vac-final-title">
                    Misschien staat jouw rol
                    gewoon nog niet online.
                </h2>

                <p>
                    Niet iedere bijdrage past meteen in een vacature.
                    Vertel ons waar je goed in bent, wat je leuk vindt
                    of waar je nieuwsgierig naar bent.
                </p>

            </div>



            <div class="ng-vac-final-actions">


                <a
                    class="ng-vac-final-action ng-vac-final-action--primary"
                    href="<?php echo esc_url(
                        home_url('/vrijwilliger-worden/')
                    ); ?>"
                >

                    <span>

                        <small>
                            Ontdek de mogelijkheden
                        </small>

                        <strong>
                            Vrijwilliger worden
                        </strong>

                    </span>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>



                <a
                    class="ng-vac-final-action"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >

                    <span>

                        <small>
                            Gewoon even kennismaken
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



        <div class="ng-vac-final-note">

            <span aria-hidden="true">
                ✦
            </span>

            <p>
                Je hoeft niet te wachten tot
                precies de juiste vacature verschijnt.
            </p>

        </div>


    </div>

</section>

</main>

<?php
get_footer();