<?php
/**
 * Standaardtemplate voor pagina's en berichten.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="site-main">
    <div class="site-container content-area">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('content-entry'); ?>>

                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <section class="content-entry">
                <h1>Niets gevonden</h1>
                <p>Deze pagina bevat momenteel nog geen inhoud.</p>
            </section>

        <?php endif; ?>

    </div>
</main>

<?php
get_footer();