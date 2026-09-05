<?php
/**
 * Header van het thema.
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
/**
 * NoordgroeiT language switcher.
 * Becomes functional automatically when TranslatePress is active.
 */
$ng_language_switcher = static function ($location = 'desktop') {
    $classes = 'ng-language-switcher ng-language-switcher--' . $location;

    echo '<div class="' . esc_attr($classes) . '"';
    echo ' data-no-translation';
    echo ' aria-label="' . esc_attr__('Kies taal', 'noordgroeit-merged') . '">';

    if (function_exists('trp_custom_language_switcher')) {
        $languages      = trp_custom_language_switcher();
        $current_locale = strtolower(
            str_replace('_', '-', get_locale())
        );
        $position = 0;

        foreach ($languages as $language) {
            if ($position > 0) {
                echo '<span class="ng-language-divider" aria-hidden="true">';
                echo '/';
                echo '</span>';
            }

            $language_code = strtolower(
                str_replace(
                    '_',
                    '-',
                    $language['language_code']
                )
            );

            $short_name = strtoupper(
                $language['short_language_name']
            );

            $is_current =
                $language_code === $current_locale ||
                substr($language_code, 0, 2) ===
                substr($current_locale, 0, 2);

            echo '<a class="ng-language-option';

            if ($is_current) {
                echo ' is-current';
            }

            echo '" href="' . esc_url(
                $language['current_page_url']
            ) . '"';

            if ($is_current) {
                echo ' aria-current="page"';
            }

            echo '>';
            echo esc_html($short_name);
            echo '</a>';

            $position++;
        }
    } else {
        echo '<span class="ng-language-option is-current"';
        echo ' aria-current="page">NL</span>';

        echo '<span class="ng-language-divider"';
        echo ' aria-hidden="true">/</span>';

        echo '<span class="ng-language-option is-disabled"';
        echo ' aria-disabled="true"';
        echo ' title="Engelse versie volgt">EN</span>';
    }

    echo '</div>';
};

?>

<a class="skip-link" href="#main-content">
    <?php esc_html_e('Ga naar de inhoud', 'noordgroeit-merged'); ?>
</a>

<header class="ng-site-header" id="site-header">
    <div class="site-container">

        <div class="ng-header-shell">

            <a
                class="ng-header-logo"
                href="<?php echo esc_url(home_url('/')); ?>"
                aria-label="NoordgroeiT – ga naar de homepage"
            >
<img
    src="<?php echo esc_url(
        get_template_directory_uri() .
        '/assets/images/logo-noordgroeit.png'
    ); ?>"
    alt="NoordgroeiT"
    width="188"
    height="100"
    decoding="async"
>
            </a>

            <button
                class="ng-menu-toggle"
                type="button"
                aria-expanded="false"
                aria-controls="ng-primary-navigation"
            >
                <span class="ng-menu-icon" aria-hidden="true">
                    <span></span>
                    <span></span>
                </span>

                <span>Menu</span>
            </button>

            <nav
                class="ng-primary-navigation"
                id="ng-primary-navigation"
                aria-label="Hoofdnavigatie"
            >
                <ul class="ng-navigation-list">
                    <li class="ng-mobile-home">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Home
                        </a>
                    </li>

                    <!-- Over ons -->
                    <li class="ng-nav-parent">
                        <div class="ng-nav-parent-row">
                            <a href="<?php echo esc_url(home_url('/over-noordgroeit/')); ?>">
                                Over ons
                            </a>

                            <button
                                class="ng-submenu-toggle"
                                type="button"
                                aria-expanded="false"
                                aria-controls="ng-submenu-over"
                                aria-label="Open submenu Over ons"
                            >
                                <span aria-hidden="true"></span>
                            </button>
                        </div>

                        <ul class="ng-submenu" id="ng-submenu-over">
                            <li>
                                <a href="<?php echo esc_url(home_url('/over-noordgroeit/')); ?>">
                                    Over NoordgroeiT
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/team-bestuur/')); ?>">
                                    Team &amp; bestuur
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/financien-transparantie/')); ?>">
                                    Financiën &amp; transparantie
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Initiatieven -->
                    <li class="ng-nav-parent">
                        <div class="ng-nav-parent-row">
                            <a href="<?php echo esc_url(home_url('/initiatieven/')); ?>">
                                Initiatieven
                            </a>
                        </div>
                    </li>

                    <!-- NoordbuiTen -->
                    <li class="ng-nav-parent">
                        <div class="ng-nav-parent-row">
<a
    class="ng-nav-noordbuiten"
    href="<?php echo esc_url(
        home_url('/noordbuiten/')
    ); ?>"
>
    NoordbuiTen
</a>

                            <button
                                class="ng-submenu-toggle"
                                type="button"
                                aria-expanded="false"
                                aria-controls="ng-submenu-noordbuiten"
                                aria-label="Open submenu NoordbuiTen"
                            >
                                <span aria-hidden="true"></span>
                            </button>
                        </div>

                        <ul class="ng-submenu" id="ng-submenu-noordbuiten">
                            <li>
<a href="<?php echo esc_url(
    home_url('/noordbuiten/')
); ?>">
    Over NoordbuiTen
</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/noordbuiten/plekken-projecten/')); ?>">
                                    Plekken &amp; projecten
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/noordbuiten/activiteiten/')); ?>">
                                    Activiteiten
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/noordbuiten/meedoen/')); ?>">
                                    Meedoen bij NoordbuiTen
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/noordbuiten/bezoeken/')); ?>">
                                    Bezoeken
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Nieuws en agenda -->
                    <li class="ng-nav-parent">
                        <div class="ng-nav-parent-row">
                            <a href="<?php echo esc_url(home_url('/nieuws-agenda/')); ?>">
                                Nieuws &amp; agenda
                            </a>
                        </div>
                    </li>

                    <!-- Doe mee -->
                    <li class="ng-nav-parent ng-nav-doe-mee">
                        <div class="ng-nav-parent-row">
                            <a href="<?php echo esc_url(home_url('/doe-mee/')); ?>">
                                Doe mee
                            </a>

                            <button
                                class="ng-submenu-toggle"
                                type="button"
                                aria-expanded="false"
                                aria-controls="ng-submenu-doe-mee"
                                aria-label="Open submenu Doe mee"
                            >
                                <span aria-hidden="true"></span>
                            </button>
                        </div>

                        <ul class="ng-submenu" id="ng-submenu-doe-mee">
                            <li>
                                <a href="<?php echo esc_url(home_url('/doe-mee/')); ?>">
                                    Alle mogelijkheden
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/vrijwilliger-worden/')); ?>">
                                    Vrijwilliger worden
                                </a>
                            </li>
                            <li>
<a href="<?php echo esc_url(
    home_url('/samenwerken/')
); ?>">
    Samenwerken
</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                            Contact
                        </a>
                    </li>

                    <!-- Actions shown inside the smaller mobile menu -->
                    <li class="ng-mobile-support">
                        <a href="<?php echo esc_url(home_url('/steun-noordgroeit/')); ?>">
                            ♥ Steun ons
                        </a>
                    </li>

                    <li class="ng-mobile-vacancies">
                        <a href="<?php echo esc_url(home_url('/vacatures/')); ?>">
                            Vacatures →
                        </a>
                    </li>

                    <li class="ng-mobile-language">
                        <?php $ng_language_switcher('mobile'); ?>
                    </li>
                </ul>
            </nav>

<div class="ng-header-actions">

    <?php $ng_language_switcher('desktop'); ?>

    <a
        class="ng-header-button"
        href="<?php echo esc_url(
            home_url('/vacatures/')
        ); ?>"
    >
        Vacatures
        <span aria-hidden="true">→</span>
    </a>

    <a
        class="ng-support-link ng-support-link--end"
        href="<?php echo esc_url(
            home_url('/steun-noordgroeit/')
        ); ?>"
    >
        <span aria-hidden="true">♥</span>
        Steun ons
    </a>

</div>

        </div>

    </div>
</header>
