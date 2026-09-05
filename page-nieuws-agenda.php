<?php
/**
 * Template Name: Nieuws & Agenda
 */

get_header();
?>

<main id="main-content" class="ng-na-page">
    
<!-- =========================================
     HERO — NIEUWS & AGENDA
========================================= -->

<section
    class="ng-inner-hero ng-inner-hero--news-agenda"
    aria-labelledby="ng-na-hero-title"
>

    <img
        class="ng-inner-hero__image"
        src="<?php echo esc_url(
            get_template_directory_uri()
            . '/assets/images/initiative-conversation.webp'
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


            <h1 id="ng-na-hero-title">
                Nieuws &amp; agenda
            </h1>


            <p class="ng-inner-hero__meta">
                Tilburg-Noord
                <span>NoordgroeiT</span>
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
         EERSTVOLGENDE ACTIVITEIT
    ========================================== -->

    <section
        class="ng-na-next"
        id="agenda"
        aria-labelledby="ng-na-next-title"
    >

        <div class="site-container">


            <header class="ng-na-next-heading">

                <div>

                    <p class="ng-na-next-kicker">
                        Eerst op de agenda
                    </p>

                    <h2 id="ng-na-next-title">
                        Dit komt eraan.
                    </h2>

                </div>


                <p>
                    Zin om ergens bij aan te sluiten?
                    Dit is de eerstvolgende activiteit die op de planning staat.
                </p>

            </header>



            <!-- FEATURE -->

            <article class="ng-na-feature">


                <!-- IMAGE -->

                <figure class="ng-na-feature-image">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/pauwels.webp'
                        ); ?>"
                        alt="Mensen ontmoeten elkaar bij NoordbuiTen"
                        loading="lazy"
                        decoding="async"
                    >


                    <div class="ng-na-feature-date">

                        <strong>
                            13
                        </strong>

                        <span>
                            sep
                        </span>

                    </div>

                </figure>



                <!-- INFO -->

                <div class="ng-na-feature-copy">

                    <p class="ng-na-feature-type">
                        NoordbuiTen
                    </p>

                    <h3>
                        Pauwelsdag
                    </h3>


                    <p class="ng-na-feature-intro">
                        Een dag om NoordbuiTen en de omgeving
                        te ontdekken, mensen te ontmoeten
                        en mee te doen aan verschillende activiteiten.
                    </p>



                    <div class="ng-na-feature-meta">


                        <div>

                            <small>
                                Wanneer
                            </small>

                            <strong>
                                Zondag 13 september
                            </strong>

                            <span>
                                10.00 – 16.00 uur
                            </span>

                        </div>


                        <div>

                            <small>
                                Waar
                            </small>

                            <strong>
                                NoordbuiTen
                            </strong>

                            <span>
                                Moerstraat 23
                            </span>

                        </div>


                        <div>

                            <small>
                                Toegang
                            </small>

                            <strong>
                                Vrij toegankelijk
                            </strong>

                            <span>
                                Kom gewoon langs
                            </span>

                        </div>


                    </div>



                    <div class="ng-na-feature-bottom">

                        <p>
                            Kennismaken, wandelen, activiteiten voor kinderen
                            en meer ontdekken over wat er in het gebied gebeurt.
                        </p>


                        <a
                            href="https://landschappauwels.nl/activiteit/stadsboerderij-noordgroeit/"
                            class="ng-na-feature-button"
                        >
                            <span>
                                Bekijk de activiteit
                            </span>

                            <i aria-hidden="true">
                                →
                            </i>
                        </a>

                    </div>


                </div>


            </article>


        </div>

    </section>

    <!-- =========================================
     AGENDA
========================================= -->

<section
    class="ng-na-agenda"
    aria-labelledby="ng-na-agenda-title"
>

    <div class="site-container">


        <!-- HEADING -->

        <header class="ng-na-agenda-heading">

            <div>

                <p class="ng-na-agenda-kicker">
                    Agenda
                </p>

                <h2 id="ng-na-agenda-title">
                    Wat staat er
                    op de planning?
                </h2>

            </div>


            <p>
                Hier verzamelen we activiteiten, bijeenkomsten
                en momenten waarbij je kunt aansluiten.
            </p>

        </header>



 <?php

$today = current_time('Y-m-d');

$agenda_query = new WP_Query([
    'post_type'      => 'agenda_item',
    'posts_per_page' => 6,
    'post_status'    => 'publish',

    'meta_key'       => '_agenda_date',
    'meta_value'     => $today,
    'meta_compare'   => '>=',
    'meta_type'      => 'DATE',

    'orderby'        => 'meta_value',
    'order'          => 'ASC',
]);

?>


<?php if ($agenda_query->have_posts()) : ?>


    <div class="ng-na-agenda-list">


        <?php

        $current_month = '';

        while ($agenda_query->have_posts()) :

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

            $event_timestamp = strtotime($event_date);

            $event_month = wp_date(
                'F Y',
                $event_timestamp
            );

        ?>


            <?php if ($event_month !== $current_month) : ?>

                <?php $current_month = $event_month; ?>

                <div class="ng-na-agenda-month">

                    <span>
                        <?php echo esc_html(
                            wp_date(
                                'F',
                                $event_timestamp
                            )
                        ); ?>
                    </span>

                    <small>
                        <?php echo esc_html(
                            wp_date(
                                'Y',
                                $event_timestamp
                            )
                        ); ?>
                    </small>

                </div>

            <?php endif; ?>



            <article class="ng-na-agenda-row">


                <!-- DATE -->

                <div class="ng-na-agenda-date">

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
                                'D',
                                $event_timestamp
                            )
                        ); ?>
                    </span>

                </div>



                <!-- EVENT -->

                <div class="ng-na-agenda-event">

                    <small>
                        Agenda
                    </small>

                    <h3>
                        <?php the_title(); ?>
                    </h3>

                    <?php if (has_excerpt()) : ?>

                        <p>
                            <?php echo esc_html(
                                wp_trim_words(
                                    get_the_excerpt(),
                                    22,
                                    '…'
                                )
                            ); ?>
                        </p>

                    <?php endif; ?>

                </div>



                <!-- META -->

                <div class="ng-na-agenda-meta">


                    <?php if ($event_time) : ?>

                        <div>

                            <small>
                                Tijd
                            </small>

                            <strong>
                                <?php echo esc_html(
                                    $event_time
                                ); ?>
                            </strong>

                        </div>

                    <?php endif; ?>



                    <?php if ($event_location) : ?>

                        <div>

                            <small>
                                Locatie
                            </small>

                            <strong>
                                <?php echo esc_html(
                                    $event_location
                                ); ?>
                            </strong>

                        </div>

                    <?php endif; ?>


                </div>



                <a
                    class="ng-na-agenda-arrow"
                    href="<?php the_permalink(); ?>"
                    aria-label="<?php echo esc_attr(
                        'Bekijk ' . get_the_title()
                    ); ?>"
                >
                    <span aria-hidden="true">
                        →
                    </span>
                </a>


            </article>


        <?php endwhile; ?>


    </div>


<?php else : ?>


    <div class="ng-na-agenda-coming">

        <span class="ng-na-agenda-coming-mark">
            +
        </span>

        <div>

            <small>
                Binnenkort meer
            </small>

            <p>
                Er staan momenteel nog geen nieuwe
                activiteiten gepland.
            </p>

        </div>

        <span class="ng-na-agenda-coming-line"></span>

    </div>


<?php endif; ?>


<?php wp_reset_postdata(); ?>

</section>

<!-- =========================================
     NIEUWS UIT NOORD
========================================= -->

<section
    class="ng-na-news"
    id="nieuws"
    aria-labelledby="ng-na-news-title"
>

    <div class="site-container">


        <!-- =====================================
             HEADING
        ====================================== -->

        <header class="ng-na-news-heading">

            <div>

                <p class="ng-na-news-kicker">
                    Nieuws uit Noord
                </p>

                <h2 id="ng-na-news-title">
                    Dit gebeurde er
                    in Noord.
                </h2>

            </div>


            <p>
                Verhalen, ontwikkelingen en kleine momenten
                uit Tilburg-Noord en de initiatieven
                van NoordgroeiT.
            </p>

        </header>



        <?php

        /* =========================================
           LATEST NEWS POSTS
        ========================================= */

        $ng_news_query = new WP_Query([
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
            'orderby'             => 'date',
            'order'               => 'DESC',
        ]);

        $ng_news_posts = $ng_news_query->posts;

        ?>



        <?php if (!empty($ng_news_posts)) : ?>


            <div
                class="ng-na-news-layout
                <?php
                echo count($ng_news_posts) === 1
                    ? 'ng-na-news-layout--single'
                    : '';
                ?>"
            >


                <!-- =====================================
                     LEAD STORY
                ====================================== -->

                <?php

                $lead_post    = $ng_news_posts[0];
                $lead_post_id = $lead_post->ID;

                $lead_excerpt = get_the_excerpt(
                    $lead_post_id
                );

                ?>


                <article class="ng-na-news-lead">


                    <!-- IMAGE -->

                    <a
                        class="ng-na-news-lead-image"
                        href="<?php echo esc_url(
                            get_permalink($lead_post_id)
                        ); ?>"
                        aria-label="<?php echo esc_attr(
                            get_the_title($lead_post_id)
                        ); ?>"
                    >


                        <?php if (
                            has_post_thumbnail($lead_post_id)
                        ) : ?>


                            <?php

                            echo get_the_post_thumbnail(
                                $lead_post_id,
                                'large',
                                [
                                    'loading'  => 'lazy',
                                    'decoding' => 'async',
                                ]
                            );

                            ?>


                        <?php else : ?>


                            <div class="ng-na-news-no-image">

                                <span aria-hidden="true">
                                    ↗
                                </span>

                                <small>
                                    Nieuws uit Noord
                                </small>

                            </div>


                        <?php endif; ?>


                    </a>



                    <!-- COPY -->

                    <div class="ng-na-news-lead-copy">


                        <div class="ng-na-news-meta">

                            <span>
                                <?php
                                echo esc_html(
                                    get_the_date(
                                        'j F Y',
                                        $lead_post_id
                                    )
                                );
                                ?>
                            </span>


                            <i aria-hidden="true"></i>


                            <span>
                                Nieuws
                            </span>

                        </div>



                        <h3>

                            <a
                                href="<?php echo esc_url(
                                    get_permalink(
                                        $lead_post_id
                                    )
                                ); ?>"
                            >
                                <?php
                                echo esc_html(
                                    get_the_title(
                                        $lead_post_id
                                    )
                                );
                                ?>
                            </a>

                        </h3>



                        <?php if ($lead_excerpt) : ?>

                            <p>
                                <?php
                                echo esc_html(
                                    wp_trim_words(
                                        $lead_excerpt,
                                        24,
                                        '…'
                                    )
                                );
                                ?>
                            </p>

                        <?php endif; ?>



                        <a
                            class="ng-na-news-read"
                            href="<?php echo esc_url(
                                get_permalink(
                                    $lead_post_id
                                )
                            ); ?>"
                        >

                            <span>
                                Lees het verhaal
                            </span>

                            <i aria-hidden="true">
                                →
                            </i>

                        </a>


                    </div>


                </article>



                <!-- =====================================
                     SMALL STORIES
                ====================================== -->

                <?php if (
                    count($ng_news_posts) > 1
                ) : ?>


                    <div class="ng-na-news-side">


                        <?php

                        foreach (
                            array_slice(
                                $ng_news_posts,
                                1
                            )
                            as $small_post
                        ) :

                            $small_post_id =
                                $small_post->ID;

                            $small_excerpt =
                                get_the_excerpt(
                                    $small_post_id
                                );

                        ?>


                            <article class="ng-na-news-small">


                                <!-- IMAGE -->

                                <a
                                    class="ng-na-news-small-image"
                                    href="<?php echo esc_url(
                                        get_permalink(
                                            $small_post_id
                                        )
                                    ); ?>"
                                    aria-label="<?php echo esc_attr(
                                        get_the_title(
                                            $small_post_id
                                        )
                                    ); ?>"
                                >


                                    <?php if (
                                        has_post_thumbnail(
                                            $small_post_id
                                        )
                                    ) : ?>


                                        <?php

                                        echo get_the_post_thumbnail(
                                            $small_post_id,
                                            'medium_large',
                                            [
                                                'loading'  => 'lazy',
                                                'decoding' => 'async',
                                            ]
                                        );

                                        ?>


                                    <?php else : ?>


                                        <div class="ng-na-news-no-image">

                                            <span aria-hidden="true">
                                                ↗
                                            </span>

                                        </div>


                                    <?php endif; ?>


                                </a>



                                <!-- COPY -->

                                <div class="ng-na-news-small-copy">


                                    <div class="ng-na-news-meta">

                                        <span>
                                            <?php
                                            echo esc_html(
                                                get_the_date(
                                                    'j F Y',
                                                    $small_post_id
                                                )
                                            );
                                            ?>
                                        </span>

                                    </div>



                                    <h3>

                                        <a
                                            href="<?php echo esc_url(
                                                get_permalink(
                                                    $small_post_id
                                                )
                                            ); ?>"
                                        >
                                            <?php
                                            echo esc_html(
                                                get_the_title(
                                                    $small_post_id
                                                )
                                            );
                                            ?>
                                        </a>

                                    </h3>



                                    <?php if (
                                        $small_excerpt
                                    ) : ?>

                                        <p>
                                            <?php
                                            echo esc_html(
                                                wp_trim_words(
                                                    $small_excerpt,
                                                    15,
                                                    '…'
                                                )
                                            );
                                            ?>
                                        </p>

                                    <?php endif; ?>



                                    <a
                                        class="ng-na-news-small-arrow"
                                        href="<?php echo esc_url(
                                            get_permalink(
                                                $small_post_id
                                            )
                                        ); ?>"
                                        aria-label="<?php echo esc_attr(
                                            'Lees '
                                            . get_the_title(
                                                $small_post_id
                                            )
                                        ); ?>"
                                    >
                                        <span aria-hidden="true">
                                            →
                                        </span>
                                    </a>


                                </div>


                            </article>


                        <?php endforeach; ?>


                    </div>


                <?php endif; ?>


            </div>



        <?php else : ?>


            <!-- =====================================
                 NO NEWS YET
            ====================================== -->

            <div class="ng-na-news-empty">

                <span aria-hidden="true">
                    ↳
                </span>


                <div>

                    <strong>
                        Hier komen de verhalen uit Noord.
                    </strong>

                    <p>
                        Zodra er nieuwe berichten zijn,
                        verschijnen ze hier automatisch.
                    </p>

                </div>


            </div>


        <?php endif; ?>



        <?php

        /*
         * If WordPress has a page configured as
         * the Posts page, show an "all news" link.
         */

        $ng_posts_page_id = get_option(
            'page_for_posts'
        );

        ?>



        <?php if ($ng_posts_page_id) : ?>


            <div class="ng-na-news-bottom">

                <p>
                    Meer verhalen uit Tilburg-Noord ontdekken?
                </p>


                <a
                    href="<?php echo esc_url(
                        get_permalink(
                            $ng_posts_page_id
                        )
                    ); ?>"
                >
                    Bekijk al het nieuws

                    <span aria-hidden="true">
                        →
                    </span>
                </a>

            </div>


        <?php endif; ?>


        <?php
        wp_reset_postdata();
        ?>


    </div>

</section>

<!-- =========================================
     TERUGBLIK
========================================= -->

<section
    class="ng-na-lookback"
    aria-labelledby="ng-na-lookback-title"
>

    <div class="site-container">


        <!-- HEADING -->

        <header class="ng-na-lookback-heading">

            <div>

                <p class="ng-na-lookback-kicker">
                    Terugblik
                </p>

                <h2 id="ng-na-lookback-title">
                    Dit gebeurde
                    er al.
                </h2>

            </div>


            <p>
                Sommige momenten zijn alweer voorbij,
                maar geven wel een mooi beeld van wat er
                in Noord gebeurt.
            </p>

        </header>



        <?php

        $today = current_time('Y-m-d');

        $lookback_query = new WP_Query([
            'post_type'      => 'agenda_item',
            'posts_per_page' => 3,
            'post_status'    => 'publish',

            'meta_key'       => '_agenda_date',
            'meta_value'     => $today,
            'meta_compare'   => '<',
            'meta_type'      => 'DATE',

            'orderby'        => 'meta_value',
            'order'          => 'DESC',
        ]);

        ?>


        <?php if ($lookback_query->have_posts()) : ?>


            <div class="ng-na-lookback-gallery">


                <?php

                $lookback_index = 0;

                while ($lookback_query->have_posts()) :

                    $lookback_query->the_post();

                    $event_date = get_post_meta(
                        get_the_ID(),
                        '_agenda_date',
                        true
                    );

                    $event_timestamp = strtotime(
                        $event_date
                    );

                    $lookback_index++;

                ?>


                    <article
                        class="
                            ng-na-lookback-item
                            ng-na-lookback-item--<?php
                            echo esc_attr($lookback_index);
                            ?>
                        "
                    >


                        <!-- IMAGE -->

                        <a
                            class="ng-na-lookback-image"
                            href="<?php the_permalink(); ?>"
                            aria-label="<?php echo esc_attr(
                                get_the_title()
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


                                <div class="ng-na-lookback-placeholder">

                                    <span aria-hidden="true">
                                        ↗
                                    </span>

                                    <small>
                                        Terugblik
                                    </small>

                                </div>


                            <?php endif; ?>


                        </a>



                        <!-- COPY -->

                        <div class="ng-na-lookback-copy">


                            <div class="ng-na-lookback-date">

                                <?php if ($event_timestamp) : ?>

                                    <span>
                                        <?php echo esc_html(
                                            wp_date(
                                                'j F Y',
                                                $event_timestamp
                                            )
                                        ); ?>
                                    </span>

                                <?php endif; ?>

                            </div>


                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>


                            <?php if (has_excerpt()) : ?>

                                <p>
                                    <?php
                                    echo esc_html(
                                        wp_trim_words(
                                            get_the_excerpt(),
                                            17,
                                            '…'
                                        )
                                    );
                                    ?>
                                </p>

                            <?php endif; ?>


                            <a
                                class="ng-na-lookback-read"
                                href="<?php the_permalink(); ?>"
                            >
                                Bekijk de terugblik

                                <span aria-hidden="true">
                                    →
                                </span>
                            </a>


                        </div>


                    </article>


                <?php endwhile; ?>


            </div>


        <?php else : ?>


            <div class="ng-na-lookback-empty">

                <span aria-hidden="true">
                    ↳
                </span>

                <p>
                    Zodra er activiteiten zijn geweest,
                    verschijnen ze hier als terugblik.
                </p>

            </div>


        <?php endif; ?>


        <?php wp_reset_postdata(); ?>


    </div>

</section>

<!-- =========================================
     NIEUWS & AGENDA — NIEUWSBRIEF
========================================= -->

<section
    class="ng-na-letter"
    aria-labelledby="ng-na-letter-title"
>

    <div class="site-container">

        <div class="ng-na-letter-inner">


            <!-- COPY -->

            <div class="ng-na-letter-copy">

                <p class="ng-na-letter-kicker">
                    Blijf op de hoogte
                </p>

                <h2 id="ng-na-letter-title">
                    Blijf een beetje bij.
                </h2>

                <p>
                    Ontvang af en toe nieuws over wat er groeit,
                    gebeurt en aankomt in Tilburg-Noord.
                </p>

            </div>



            <!-- ACTION -->

            <div class="ng-na-letter-action">

                <div
                    class="ng-na-letter-icon"
                    aria-hidden="true"
                >
                    <span>
                        ↗
                    </span>
                </div>


                <a
                    class="ng-na-letter-button"
                    href="<?php echo esc_url(
                        home_url('/nieuwsbrief/')
                    ); ?>"
                >
                    <span>
                        Naar de nieuwsbrief
                    </span>

                    <i aria-hidden="true">
                        →
                    </i>
                </a>


                <p>
                    Geen dagelijkse mailbox-chaos —
                    gewoon af en toe iets uit Noord.
                </p>

            </div>


        </div>



        <!-- SMALL BOTTOM DETAIL -->

        <div class="ng-na-letter-bottom">

            <span aria-hidden="true">
                ↳
            </span>

            <p>
                nieuws, activiteiten en ontwikkelingen uit de wijk
            </p>

        </div>

    </div>

</section>

</main>

<?php get_footer(); ?>