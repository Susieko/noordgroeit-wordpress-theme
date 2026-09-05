<?php
/**
 * Footer
 *
 * @package NoordgroeiT
 */

$footer_images = get_template_directory_uri() . '/assets/images';
?>

<footer class="site-footer">

    <div class="site-container">

        <div class="footer-main">

            <div class="footer-identity">

                <a
                    class="footer-logo"
                    href="<?php echo esc_url(home_url('/')); ?>"
                    aria-label="Ga naar de homepage van NoordgroeiT"
                >
                    <img
                        src="<?php echo esc_url(
                            $footer_images . '/logo-noordgroeit.png'
                        ); ?>"
                        alt="NoordgroeiT"
                        loading="lazy"
                        decoding="async"
                    >
                </a>

                <p>
                    NoordgroeiT verbindt bewoners, organisaties en ideeën
                    die Tilburg-Noord groener, gezonder, veiliger en
                    sterker maken.
                </p>

                <p class="footer-organisation-note">
                    NoordgroeiT is de stichting. NoordbuiTen is een
                    initiatief van NoordgroeiT.
                </p>

            </div>


            <nav
                class="footer-column"
                aria-labelledby="footer-discover-title"
            >
                <h2 id="footer-discover-title">Ontdek</h2>

                <ul>
                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/over-noordgroeit/')
                        ); ?>">
                            Over NoordgroeiT
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/initiatieven/')
                        ); ?>">
                            Onze initiatieven
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/nieuws-agenda/')
                        ); ?>">
                            Nieuws
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/nieuws-agenda/#agenda')
                        ); ?>">
                            Agenda
                        </a>
                    </li>
                </ul>
            </nav>


            <nav
                class="footer-column"
                aria-labelledby="footer-participate-title"
            >
                <h2 id="footer-participate-title">Doe mee</h2>

                <ul>
                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/doe-mee/')
                        ); ?>">
                            Meedoen
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/vacatures/')
                        ); ?>">
                            Vacatures
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/samenwerken/')
                        ); ?>">
                            Samenwerken
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(
                            home_url('/contact/')
                        ); ?>">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>


            <div class="footer-column footer-newsletter">

                     <h2>
                         Blijf op de hoogte
                     </h2>

                     <p>
                         Ontvang af en toe nieuws over initiatieven,
                         activiteiten en ontwikkelingen in Tilburg-Noord.
                     </p>


                    <div class="footer-newsletter-form">
                         <?php
                         echo do_shortcode(
                         '[mailpoet_form id="1"]'
                          );
                         ?>
                    </div>


     <p class="footer-newsletter-privacy">
        Afmelden kan op ieder moment.
    </p>

            </div>

        </div>


        <div class="footer-noordbuiten">

            <div class="footer-noordbuiten-logo">
                <img
                    src="<?php echo esc_url(
                        $footer_images . '/logo-noordbuiten.png'
                    ); ?>"
                    alt="NoordbuiTen"
                    loading="lazy"
                    decoding="async"
                >
            </div>

            <div class="footer-noordbuiten-copy">
                <p class="footer-small-label">
                    Een initiatief van NoordgroeiT
                </p>

                <h2>
                    Groen, ontmoeting en ontwikkeling
                </h2>

                <a
                    href="<?php echo esc_url(
                        home_url('/noordbuiten/')
                    ); ?>"
                >
                    Ontdek NoordbuiTen
                    <span aria-hidden="true">→</span>
                </a>
            </div>

        </div>


        <div class="footer-bottom">

            <p>
                &copy;
                <?php echo esc_html(wp_date('Y')); ?>
                Stichting NoordgroeiT
            </p>

            <p>
                Samen veilig en gezond in Tilburg Noord
            </p>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>