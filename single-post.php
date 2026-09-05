<?php
/**
 * Single News Post
 */

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();

        $word_count = str_word_count(
            wp_strip_all_tags(get_the_content())
        );

        $reading_time = max(
            1,
            (int) ceil($word_count / 200)
        );

        $news_date = get_the_date('j F Y');
?>

<main id="main-content" class="ng-single-news">


    <!-- =========================================
         HERO
    ========================================== -->

    <section class="ng-news-hero">

        <div class="site-container">


            <a
                class="ng-news-back"
                href="<?php echo esc_url(
                    home_url('/nieuws-agenda/')
                ); ?>"
            >
                <span aria-hidden="true">←</span>
                Terug naar Nieuws &amp; agenda
            </a>


            <div class="ng-news-hero-layout">


                <div class="ng-news-hero-copy">

                    <div class="ng-news-meta">

                        <span>
                            Nieuws uit Noord
                        </span>

                        <i aria-hidden="true"></i>

                        <time datetime="<?php echo esc_attr(
                            get_the_date('c')
                        ); ?>">
                            <?php echo esc_html($news_date); ?>
                        </time>

                        <i aria-hidden="true"></i>

                        <span>
                            <?php
                            echo esc_html(
                                $reading_time . ' min. lezen'
                            );
                            ?>
                        </span>

                    </div>


                    <h1>
                        <?php the_title(); ?>
                    </h1>


                    <?php if (has_excerpt()) : ?>

                        <p class="ng-news-intro">
                            <?php echo esc_html(
                                get_the_excerpt()
                            ); ?>
                        </p>

                    <?php endif; ?>

                </div>



                <div class="ng-news-hero-note">

                    <span aria-hidden="true">
                        ✦
                    </span>

                    <p>
                        Verhalen, ontwikkelingen en kleine
                        momenten uit Tilburg-Noord.
                    </p>

                </div>


            </div>

        </div>

    </section>



    <!-- =========================================
         FEATURED IMAGE
    ========================================== -->

    <?php if (has_post_thumbnail()) : ?>

        <section class="ng-news-visual">

            <div class="site-container">

                <figure class="ng-news-photo">

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
                            Tilburg-Noord
                        </p>

                    </figcaption>

                </figure>

            </div>

        </section>

    <?php endif; ?>



    <!-- =========================================
         ARTICLE
    ========================================== -->

    <section class="ng-news-body">

        <div class="site-container">

            <div class="ng-news-body-layout">


                <aside class="ng-news-body-marker">

                    <span>
                        Nieuws
                    </span>

                    <i></i>

                </aside>


                <article class="ng-news-entry">

                    <?php the_content(); ?>

                </article>


            </div>

        </div>

    </section>



    <!-- =========================================
         RELATED NEWS
    ========================================== -->

    <?php
    $related_news = new WP_Query(
        [
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'post__not_in'        => [get_the_ID()],
            'tag'                 => 'nieuws',
            'ignore_sticky_posts' => true,
        ]
    );
    ?>


    <?php if ($related_news->have_posts()) : ?>

        <section class="ng-news-related">

            <div class="site-container">


                <header class="ng-news-related-heading">

                    <div>

                        <p>
                            Verder lezen
                        </p>

                        <h2>
                            Meer nieuws uit
                            <span>Tilburg-Noord.</span>
                        </h2>

                    </div>


                    <a
                        href="<?php echo esc_url(
                            home_url('/nieuws-agenda/')
                        ); ?>"
                    >
                        Al het nieuws
                        <span aria-hidden="true">→</span>
                    </a>

                </header>



                <div class="ng-news-related-grid">

                    <?php
                    while ($related_news->have_posts()) :
                        $related_news->the_post();
                    ?>

                        <article class="ng-news-related-card">


                            <a
                                class="ng-news-related-image"
                                href="<?php the_permalink(); ?>"
                            >

                                <?php if (has_post_thumbnail()) : ?>

                                    <?php
                                    the_post_thumbnail(
                                        'large',
                                        [
                                            'loading' => 'lazy',
                                        ]
                                    );
                                    ?>

                                <?php else : ?>

                                    <div
                                        class="ng-news-related-placeholder"
                                        aria-hidden="true"
                                    >
                                        NG
                                    </div>

                                <?php endif; ?>

                            </a>


                            <div class="ng-news-related-meta">

                                <time>
                                    <?php echo esc_html(
                                        get_the_date('j M Y')
                                    ); ?>
                                </time>

                                <i aria-hidden="true"></i>

                                <span>
                                    Nieuws
                                </span>

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
                                            18,
                                            '…'
                                        )
                                    );
                                    ?>
                                </p>

                            <?php endif; ?>


                            <a
                                href="<?php the_permalink(); ?>"
                                class="ng-news-related-link"
                            >
                                Lees verder
                                <span aria-hidden="true">↗</span>
                            </a>


                        </article>

                    <?php endwhile; ?>

                </div>


            </div>

        </section>

    <?php endif; ?>


    <?php wp_reset_postdata(); ?>



    <!-- =========================================
         END
    ========================================== -->

    <section class="ng-news-end">

        <div class="site-container">

            <div class="ng-news-end-inner">

                <div>

                    <p>
                        Blijf op de hoogte
                    </p>

                    <h2>
                        Er gebeurt meer
                        in Noord.
                    </h2>

                </div>


                <a
                    href="<?php echo esc_url(
                        home_url('/nieuws-agenda/')
                    ); ?>"
                >
                    <span>
                        Terug naar Nieuws &amp; agenda
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