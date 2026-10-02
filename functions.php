<?php
/**
 * Functies voor het NoordgroeiT + NoordbuiTen thema.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Basisfuncties van het thema.
 */
function noordgroeit_merged_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 120,
            'width'       => 360,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __('Hoofdnavigatie', 'noordgroeit-merged'),
            'footer'  => __('Footernavigatie', 'noordgroeit-merged'),
        )
    );
}
add_action('after_setup_theme', 'noordgroeit_merged_setup');

/**
 * CSS en JavaScript laden.
 */
function noordgroeit_merged_assets()
{
    $theme_version = wp_get_theme()->get('Version');

    /*
     * Homepage uses its dedicated stylesheet.
     * Inner pages use the generated theme stylesheet.
     */
    if (is_front_page()) {

        $home_css =
            get_stylesheet_directory()
            . '/assets/css/pages/home.css';

        wp_enqueue_style(
            'noordgroeit-home',
            get_stylesheet_directory_uri()
            . '/assets/css/pages/home.css',
            array(),
            file_exists($home_css)
                ? filemtime($home_css)
                : $theme_version
        );

    } else {

        wp_enqueue_style(
            'noordgroeit-merged-style',
            get_stylesheet_uri(),
            array(),
            $theme_version
        );
    }

    wp_enqueue_script(
        'noordgroeit-merged-script',
        get_template_directory_uri()
        . '/assets/js/site.js',
        array(),
        $theme_version,
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'noordgroeit_merged_assets'
);
/**
 * Fallback-paginamenu wanneer er geen hoofdnavigatie is toegewezen.
 */
function noordgroeit_merged_menu_fallback()
{
    ?>
    <ul id="primary-menu" class="primary-menu">
        <li class="menu-item">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php esc_html_e('Home', 'noordgroeit-merged'); ?>
            </a>
        </li>

        <?php
        wp_list_pages(
            array(
                'title_li' => '',
                'depth'    => 1,
            )
        );
        ?>
    </ul>
    <?php
}

/* =========================================================
   Agenda-items
   ========================================================= */

function noordgroeit_register_agenda_items() {
    $labels = array(
        'name'               => 'Agenda',
        'singular_name'      => 'Activiteit',
        'menu_name'          => 'Agenda',
        'add_new'            => 'Nieuwe activiteit',
        'add_new_item'       => 'Nieuwe activiteit toevoegen',
        'edit_item'          => 'Activiteit bewerken',
        'new_item'           => 'Nieuwe activiteit',
        'view_item'          => 'Activiteit bekijken',
        'search_items'       => 'Activiteiten zoeken',
        'not_found'          => 'Geen activiteiten gevonden',
        'not_found_in_trash' => 'Geen activiteiten in de prullenbak',
    );

    register_post_type(
        'agenda_item',
        array(
            'labels'        => $labels,
            'public'        => true,
            'show_in_rest'  => true,
            'menu_icon'     => 'dashicons-calendar-alt',
            'menu_position' => 6,
            'supports'      => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            ),
            'rewrite'       => array(
                'slug' => 'activiteit',
            ),
            'has_archive'   => false,
        )
    );
}
add_action('init', 'noordgroeit_register_agenda_items');


/* =========================================================
   Gegevens van een activiteit
   ========================================================= */

function noordgroeit_add_agenda_metabox() {
    add_meta_box(
        'noordgroeit_agenda_details',
        'Datum en locatie',
        'noordgroeit_agenda_metabox_content',
        'agenda_item',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'noordgroeit_add_agenda_metabox');


function noordgroeit_agenda_metabox_content($post) {
    wp_nonce_field(
        'noordgroeit_save_agenda_details',
        'noordgroeit_agenda_nonce'
    );

    $date     = get_post_meta($post->ID, '_agenda_date', true);
    $time     = get_post_meta($post->ID, '_agenda_time', true);
    $location = get_post_meta($post->ID, '_agenda_location', true);
    ?>

    <p>
        <label for="agenda_date">
            <strong>Datum</strong>
        </label>
    </p>

    <p>
        <input
            type="date"
            id="agenda_date"
            name="agenda_date"
            value="<?php echo esc_attr($date); ?>"
            style="width: 100%;"
        >
    </p>

    <p>
        <label for="agenda_time">
            <strong>Tijd</strong>
        </label>
    </p>

    <p>
        <input
            type="time"
            id="agenda_time"
            name="agenda_time"
            value="<?php echo esc_attr($time); ?>"
            style="width: 100%;"
        >
    </p>

    <p>
        <label for="agenda_location">
            <strong>Locatie</strong>
        </label>
    </p>

    <p>
        <input
            type="text"
            id="agenda_location"
            name="agenda_location"
            value="<?php echo esc_attr($location); ?>"
            placeholder="Bijvoorbeeld Moerstraat 23"
            style="width: 100%;"
        >
    </p>

    <?php
}


function noordgroeit_save_agenda_details($post_id) {
    if (
        ! isset($_POST['noordgroeit_agenda_nonce']) ||
        ! wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['noordgroeit_agenda_nonce'])
            ),
            'noordgroeit_save_agenda_details'
        )
    ) {
        return;
    }

    if (
        defined('DOING_AUTOSAVE') &&
        DOING_AUTOSAVE
    ) {
        return;
    }

    if (
        ! current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $date = isset($_POST['agenda_date'])
        ? sanitize_text_field(wp_unslash($_POST['agenda_date']))
        : '';

    $time = isset($_POST['agenda_time'])
        ? sanitize_text_field(wp_unslash($_POST['agenda_time']))
        : '';

    $location = isset($_POST['agenda_location'])
        ? sanitize_text_field(wp_unslash($_POST['agenda_location']))
        : '';

    if (
        $date &&
        preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)
    ) {
        update_post_meta($post_id, '_agenda_date', $date);
    } else {
        delete_post_meta($post_id, '_agenda_date');
    }

    if (
        $time &&
        preg_match('/^\d{2}:\d{2}$/', $time)
    ) {
        update_post_meta($post_id, '_agenda_time', $time);
    } else {
        delete_post_meta($post_id, '_agenda_time');
    }

    if ($location) {
        update_post_meta(
            $post_id,
            '_agenda_location',
            $location
        );
    } else {
        delete_post_meta(
            $post_id,
            '_agenda_location'
        );
    }
}
add_action(
    'save_post_agenda_item',
    'noordgroeit_save_agenda_details'
);

/* =========================================================
   ADMIN — RENAME POSTS TO NIEUWS
========================================================= */

function noordgroeit_rename_posts_to_news() {

    global $menu;
    global $submenu;

    if (isset($menu[5])) {
        $menu[5][0] = 'Nieuws';
    }

    if (isset($submenu['edit.php'])) {

        $submenu['edit.php'][5][0]  = 'Alle nieuwsberichten';
        $submenu['edit.php'][10][0] = 'Nieuw nieuwsbericht';
    }
}

add_action(
    'admin_menu',
    'noordgroeit_rename_posts_to_news'
);


function noordgroeit_news_post_labels() {

    global $wp_post_types;

    if (!isset($wp_post_types['post'])) {
        return;
    }

    $labels = $wp_post_types['post']->labels;

    $labels->name               = 'Nieuws';
    $labels->singular_name      = 'Nieuwsbericht';
    $labels->add_new            = 'Nieuw bericht';
    $labels->add_new_item       = 'Nieuw nieuwsbericht';
    $labels->edit_item          = 'Nieuwsbericht bewerken';
    $labels->new_item           = 'Nieuw nieuwsbericht';
    $labels->view_item          = 'Nieuwsbericht bekijken';
    $labels->search_items       = 'Nieuws zoeken';
    $labels->not_found          = 'Geen nieuws gevonden';
    $labels->not_found_in_trash = 'Geen nieuws in de prullenbak';
    $labels->all_items          = 'Alle nieuwsberichten';
}

add_action(
    'init',
    'noordgroeit_news_post_labels'
);



/* =========================================================
   VACATURES — CUSTOM POST TYPE
========================================================= */

function noordgroeit_register_vacatures() {

    $labels = [
        'name'               => 'Vacatures',
        'singular_name'      => 'Vacature',
        'menu_name'          => 'Vacatures',
        'name_admin_bar'     => 'Vacature',
        'add_new'            => 'Nieuwe vacature',
        'add_new_item'       => 'Nieuwe vacature toevoegen',
        'new_item'           => 'Nieuwe vacature',
        'edit_item'          => 'Vacature bewerken',
        'view_item'          => 'Vacature bekijken',
        'all_items'          => 'Alle vacatures',
        'search_items'       => 'Vacatures zoeken',
        'not_found'          => 'Geen vacatures gevonden',
        'not_found_in_trash' => 'Geen vacatures in de prullenbak',
    ];


    register_post_type(
        'vacature',
        [
            'labels' => $labels,

            'public' => true,

            /*
             * We use page-vacatures.php for /vacatures/
             */
            'has_archive' => false,

            'show_ui'      => true,
            'show_in_menu' => true,
            'show_in_rest' => true,

            'menu_icon' => 'dashicons-groups',

            'rewrite' => [
                'slug'       => 'vacatures',
                'with_front' => false,
            ],

            'supports' => [
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'revisions',
            ],
        ]
    );
}

add_action(
    'init',
    'noordgroeit_register_vacatures'
);


/* =========================================================
   TEAMLEDEN — CONTENT MODEL
========================================================= */

function noordgroeit_register_team_members() {

    $labels = [
        'name'               => 'Teamleden',
        'singular_name'      => 'Teamlid',
        'menu_name'          => 'Teamleden',
        'name_admin_bar'     => 'Teamlid',
        'add_new'            => 'Nieuw teamlid',
        'add_new_item'       => 'Nieuw teamlid toevoegen',
        'new_item'           => 'Nieuw teamlid',
        'edit_item'          => 'Teamlid bewerken',
        'view_item'          => 'Teamlid bekijken',
        'all_items'          => 'Alle teamleden',
        'search_items'       => 'Teamleden zoeken',
        'not_found'          => 'Geen teamleden gevonden',
        'not_found_in_trash' => 'Geen teamleden in de prullenbak',
    ];

    register_post_type(
        'team_member',
        [
            'labels'             => $labels,
            'public'             => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'publicly_queryable' => false,
            'exclude_from_search'=> true,
            'menu_icon'          => 'dashicons-groups',
            'supports'           => [
                'title',
                'editor',
                'thumbnail',
                'page-attributes',
                'revisions',
            ],
        ]
    );

    register_taxonomy(
        'team_group',
        ['team_member'],
        [
            'labels' => [
                'name'          => 'Teamgroepen',
                'singular_name' => 'Teamgroep',
                'search_items'  => 'Teamgroepen zoeken',
                'all_items'     => 'Alle teamgroepen',
                'edit_item'     => 'Teamgroep bewerken',
                'update_item'   => 'Teamgroep bijwerken',
                'add_new_item'  => 'Nieuwe teamgroep toevoegen',
                'new_item_name' => 'Naam nieuwe teamgroep',
                'menu_name'     => 'Teamgroepen',
            ],
            'public'            => false,
            'show_ui'           => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'hierarchical'      => true,
            'rewrite'           => false,
        ]
    );
}

add_action(
    'init',
    'noordgroeit_register_team_members'
);


function noordgroeit_add_team_member_metabox() {

    add_meta_box(
        'noordgroeit_team_member_details',
        'Teamdetails',
        'noordgroeit_team_member_metabox_content',
        'team_member',
        'normal',
        'default'
    );
}

add_action(
    'add_meta_boxes',
    'noordgroeit_add_team_member_metabox'
);


function noordgroeit_team_member_metabox_content($post) {

    wp_nonce_field(
        'noordgroeit_save_team_member_details',
        'noordgroeit_team_member_nonce'
    );

    $role = get_post_meta(
        $post->ID,
        '_noordgroeit_team_role',
        true
    );

    $note = get_post_meta(
        $post->ID,
        '_noordgroeit_team_note',
        true
    );
    ?>

    <p>
        <label for="noordgroeit-team-role">
            <strong>Rol / functie</strong>
        </label>
    </p>

    <p>
        <input
            id="noordgroeit-team-role"
            name="noordgroeit_team_role"
            type="text"
            value="<?php echo esc_attr($role); ?>"
            class="widefat"
            placeholder="Bijvoorbeeld: Voorzitter"
        >
    </p>

    <p>
        <label for="noordgroeit-team-note">
            <strong>Korte notitie</strong>
        </label>
    </p>

    <p>
        <input
            id="noordgroeit-team-note"
            name="noordgroeit_team_note"
            type="text"
            value="<?php echo esc_attr($note); ?>"
            class="widefat"
            placeholder="Bijvoorbeeld: tevens kernteam"
        >
    </p>

    <p>
        <small>
            Gebruik de inhoudseditor voor de korte omschrijving,
            de uitgelichte afbeelding voor de foto en
            'Volgorde' bij Pagina-attributen voor de sortering.
        </small>
    </p>

    <?php
}


function noordgroeit_save_team_member_details($post_id) {

    if (
        !isset($_POST['noordgroeit_team_member_nonce'])
        || !wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['noordgroeit_team_member_nonce']
                )
            ),
            'noordgroeit_save_team_member_details'
        )
    ) {
        return;
    }

    if (
        defined('DOING_AUTOSAVE')
        && DOING_AUTOSAVE
    ) {
        return;
    }

    if (
        get_post_type($post_id) !== 'team_member'
        || !current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $role = isset($_POST['noordgroeit_team_role'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['noordgroeit_team_role']
            )
        )
        : '';

    $note = isset($_POST['noordgroeit_team_note'])
        ? sanitize_text_field(
            wp_unslash(
                $_POST['noordgroeit_team_note']
            )
        )
        : '';

    update_post_meta(
        $post_id,
        '_noordgroeit_team_role',
        $role
    );

    update_post_meta(
        $post_id,
        '_noordgroeit_team_note',
        $note
    );
}

add_action(
    'save_post_team_member',
    'noordgroeit_save_team_member_details'
);

/* =========================================================
   GLOBAL RESPONSIVE CSS
========================================================= */

function noordgroeit_responsive_styles() {

    $responsive_css =
        get_stylesheet_directory()
        . '/assets/css/responsive.css';

    wp_enqueue_style(
        'noordgroeit-responsive',
        get_stylesheet_directory_uri()
        . '/assets/css/responsive.css',
        [],
        file_exists($responsive_css)
            ? filemtime($responsive_css)
            : null
    );
}

add_action(
    'wp_enqueue_scripts',
    'noordgroeit_responsive_styles',
    100
);

/* =========================================================
   SEO — META DESCRIPTION
========================================================= */

function noordgroeit_meta_description() {

    if (is_front_page()) {

        $description =
            'NoordgroeiT verbindt bewoners, initiatieven en organisaties '
            . 'in Tilburg-Noord. Ontdek projecten, activiteiten en manieren '
            . 'om mee te doen.';

        echo "\n<meta name=\"description\" content=\""
            . esc_attr($description)
            . "\">\n";
    }

}

add_action(
    'wp_head',
    'noordgroeit_meta_description',
    5
);

/* =========================================================
   CONTACT FORM — SUBMIT HANDLER
========================================================= */

function noordgroeit_handle_contact_form() {

    $contact_url = home_url('/contact/');

    /*
     * Only accept POST requests.
     */
    if (
        ! isset($_SERVER['REQUEST_METHOD']) ||
        $_SERVER['REQUEST_METHOD'] !== 'POST'
    ) {
        wp_safe_redirect(
            add_query_arg(
                'contact-status',
                'error',
                $contact_url
            )
        );
        exit;
    }


    /*
     * Verify nonce.
     */
    if (
        ! isset($_POST['ng_contact_nonce']) ||
        ! wp_verify_nonce(
            sanitize_text_field(
                wp_unslash(
                    $_POST['ng_contact_nonce']
                )
            ),
            'ng_contact_form'
        )
    ) {
        wp_safe_redirect(
            add_query_arg(
                'contact-status',
                'error',
                $contact_url
            )
        );
        exit;
    }


    /*
     * Honeypot.
     * Bots get a fake success response.
     */
    if (
        ! empty($_POST['contact_company'])
    ) {
        wp_safe_redirect(
            add_query_arg(
                'contact-status',
                'success',
                $contact_url
            )
        );
        exit;
    }


    /*
     * Sanitize submitted fields.
     */
    $name = isset($_POST['contact_name'])
        ? sanitize_text_field(
            wp_unslash($_POST['contact_name'])
        )
        : '';

    $email = isset($_POST['contact_email'])
        ? sanitize_email(
            wp_unslash($_POST['contact_email'])
        )
        : '';

    $topic = isset($_POST['contact_topic'])
        ? sanitize_text_field(
            wp_unslash($_POST['contact_topic'])
        )
        : '';

    $message = isset($_POST['contact_message'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['contact_message'])
        )
        : '';


    /*
     * Only allow the subjects that exist
     * in our form.
     */
    $allowed_topics = [
        'Algemene vraag',
        'Idee voor de wijk',
        'Vrijwilligerswerk',
        'Samenwerking',
        'NoordbuiTen',
        'Anders',
    ];


    /*
     * Validate required fields.
     */
    if (
        $name === '' ||
        ! is_email($email) ||
        $message === '' ||
        ! in_array(
            $topic,
            $allowed_topics,
            true
        )
    ) {
        wp_safe_redirect(
            add_query_arg(
                'contact-status',
                'error',
                $contact_url
            )
        );
        exit;
    }


    /*
     * Email.
     */
    $to = 'contact@noordgroeit.nl';

    $subject = sprintf(
        '[NoordgroeiT website] %s — %s',
        $topic,
        $name
    );

    $body =
        "Nieuw bericht via noordgroeit.nl\n\n" .
        "Naam: {$name}\n" .
        "E-mail: {$email}\n" .
        "Onderwerp: {$topic}\n\n" .
        "Bericht:\n{$message}\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];


    /*
     * Send.
     */
    $sent = wp_mail(
        $to,
        $subject,
        $body,
        $headers
    );


    /*
     * Return visitor to the contact page.
     */
    wp_safe_redirect(
        add_query_arg(
            'contact-status',
            $sent ? 'success' : 'error',
            $contact_url
        )
    );

    exit;
}


add_action(
    'admin_post_ng_submit_contact',
    'noordgroeit_handle_contact_form'
);

add_action(
    'admin_post_nopriv_ng_submit_contact',
    'noordgroeit_handle_contact_form'
);