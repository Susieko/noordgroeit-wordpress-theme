<?php
/**
 * Team & Bestuur
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="main-content" class="ng-team-page">

    <!-- =========================================
         HERO — TEAM & BESTUUR
    ========================================== -->

    <section
        class="ng-team-hero"
        aria-labelledby="ng-team-hero-title"
    >

        <div class="site-container">

            <div class="ng-team-hero-layout">

                <div class="ng-team-hero-copy">

                    <p class="ng-team-hero-kicker">
                        Team &amp; Bestuur
                    </p>

                    <h1 id="ng-team-hero-title">
                        De mensen achter
                        <span>NoordgroeiT</span>
                    </h1>

                    <p class="ng-team-hero-intro">
                        NoordgroeiT wordt gedragen door bewoners en betrokken
                        mensen die zich inzetten voor Tilburg-Noord.
                    </p>

                </div>


                <div
                    class="ng-team-hero-visual"
                    aria-hidden="true"
                >

                    <div class="ng-team-hero-orbit">

                        <span class="ng-team-person ng-team-person--1">
                            <i></i>
                        </span>

                        <span class="ng-team-person ng-team-person--2">
                            <i></i>
                        </span>

                        <span class="ng-team-person ng-team-person--3">
                            <i></i>
                        </span>

                        <span class="ng-team-person ng-team-person--4">
                            <i></i>
                        </span>

                        <div class="ng-team-hero-center">
                            <span>Samen</span>
                            <strong>voor Noord</strong>
                        </div>

                    </div>


                    <p class="ng-team-hero-note">
                        bewoners · bestuur · vrijwilligers
                    </p>

                </div>

            </div>


            <div class="ng-team-hero-footer">

                <span aria-hidden="true"></span>

                <p>
                    Mensen verbinden ideeën met de wijk.
                </p>

            </div>

        </div>

    </section>

<!-- =========================================================
     DE MENSEN ACHTER NOORDGROEIT
========================================================= -->

<section class="ng-team-people-v2">

    <div class="site-container">


        <!-- =================================================
             INTRO
        ================================================== -->

        <header class="ng-team-people-v2-heading">

            <div>

                <p class="ng-team-people-v2-kicker">
                    De mensen achter NoordgroeiT
                </p>

                <h2>
                    Verschillende rollen.
                    Eén betrokken team.
                </h2>

            </div>


            <p>
                Achter <span class="ng-brand-word">NoordgroeiT</span>
                staan bestuursleden, een kernteam, adviseurs en
                veel vrijwilligers die ieder op hun eigen manier
                bijdragen aan Tilburg-Noord.
            </p>

        </header>



        <?php
        $ng_team_fallback = [
            'bestuur' => [
                [
                    'name' => 'Yvonne Visser',
                    'role' => 'Voorzitter',
                    'description' => 'Verbindt mensen en ideeën en bewaakt samen met het bestuur de koers van NoordgroeiT.',
                    'note' => '',
                    'photo' => '',
                ],
                [
                    'name' => 'Fred Driessen',
                    'role' => 'Penningmeester',
                    'description' => 'Houdt zicht op de financiële basis en helpt plannen op een verantwoorde manier mogelijk te maken.',
                    'note' => '',
                    'photo' => '',
                ],
                [
                    'name' => 'Nora van Griensven',
                    'role' => 'Secretaris',
                    'description' => 'Ondersteunt het bestuur op strategisch, organisatorisch en administratief gebied en vormt een schakel met de rest van de organisatie.',
                    'note' => '',
                    'photo' => '',
                ],
            ],
            'kernteam' => [
                [
                    'name' => 'Pim Roijakkers',
                    'role' => 'Vrijwilligerscoördinatie',
                    'description' => 'Coördineert bewoners en vrijwilligers en ondersteunt de dagelijkse organisatie.',
                    'note' => '',
                    'photo' => '',
                ],
                [
                    'name' => 'Gilbert van Dongen',
                    'role' => 'Groen & uitvoering',
                    'description' => 'Draagt verantwoordelijkheid voor het groen, inclusief de kas, en ondersteunt waar nodig bij bouwwerkzaamheden.',
                    'note' => '',
                    'photo' => '',
                ],
                [
                    'name' => 'Herman Brand',
                    'role' => 'Creatief organisator',
                    'description' => 'Werkt aan innovatie, duurzaamheid, circulariteit en verbinding met het bedrijfscluster.',
                    'note' => '',
                    'photo' => '',
                ],
                [
                    'name' => 'Jule Geeris',
                    'role' => 'Projectcoördinatie',
                    'description' => 'Werkt aan projecten, communicatie, fondsen en subsidies.',
                    'note' => '',
                    'photo' => '',
                ],
            ],
            'adviseurs' => [
                [
                    'name' => 'Herman Brand',
                    'role' => '',
                    'description' => '',
                    'note' => 'tevens kernteam',
                    'photo' => '',
                ],
                [
                    'name' => 'Simon van den Biggelaar',
                    'role' => '',
                    'description' => '',
                    'note' => '',
                    'photo' => '',
                ],
                [
                    'name' => 'Wieke Bout',
                    'role' => '',
                    'description' => '',
                    'note' => '',
                    'photo' => '',
                ],
            ],
        ];

        $ng_get_team_members = static function ($group_slug, $fallback) {

            $posts = get_posts([
                'post_type'      => 'team_member',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'orderby'        => [
                    'menu_order' => 'ASC',
                    'title'      => 'ASC',
                ],
                'tax_query'      => [
                    [
                        'taxonomy' => 'team_group',
                        'field'    => 'slug',
                        'terms'    => $group_slug,
                    ],
                ],
            ]);

            if (!$posts) {
                return $fallback;
            }

            return array_map(
                static function ($post) {

                    $description = trim(
                        wp_strip_all_tags(
                            strip_shortcodes(
                                $post->post_content
                            )
                        )
                    );

                    return [
                        'name' => get_the_title($post),
                        'role' => get_post_meta(
                            $post->ID,
                            '_noordgroeit_team_role',
                            true
                        ),
                        'description' => $description,
                        'note' => get_post_meta(
                            $post->ID,
                            '_noordgroeit_team_note',
                            true
                        ),
                        'photo' => get_the_post_thumbnail_url(
                            $post,
                            'medium_large'
                        ) ?: '',
                    ];
                },
                $posts
            );
        };

        $ng_team_initials = static function ($name) {

            $parts = preg_split(
                '/\\s+/',
                trim($name)
            );

            if (!$parts) {
                return '';
            }

            $first = $parts[0];
            $last  = $parts[count($parts) - 1];

            return strtoupper(
                substr($first, 0, 1)
                . substr($last, 0, 1)
            );
        };

        $ng_board_members = $ng_get_team_members(
            'bestuur',
            $ng_team_fallback['bestuur']
        );

        $ng_core_members = $ng_get_team_members(
            'kernteam',
            $ng_team_fallback['kernteam']
        );

        $ng_advisors = $ng_get_team_members(
            'adviseurs',
            $ng_team_fallback['adviseurs']
        );
        ?>

        <!-- =================================================
             01 — BESTUUR
        ================================================== -->

        <div class="ng-team-people-group">

            <header class="ng-team-people-group-heading">

                <div>
                    <span>01</span>
                    <p>Bestuur</p>
                </div>

                <p>
                    Bewaakt de koers en de organisatorische
                    basis van NoordgroeiT.
                </p>

            </header>

            <div class="ng-team-people-v2-grid">

                <?php foreach ($ng_board_members as $index => $member) : ?>

                    <article
                        class="ng-team-profile<?php echo $index % 2 ? ' ng-team-profile--coral' : ''; ?>"
                    >

                        <div class="ng-team-profile-portrait">

                            <?php if ($member['photo']) : ?>

                                <img
                                    class="ng-team-profile-image"
                                    src="<?php echo esc_url($member['photo']); ?>"
                                    alt="<?php echo esc_attr($member['name']); ?>"
                                >

                            <?php else : ?>

                                <span
                                    class="ng-team-profile-initials"
                                    aria-hidden="true"
                                >
                                    <?php echo esc_html(
                                        $ng_team_initials($member['name'])
                                    ); ?>
                                </span>

                                <small class="ng-team-profile-photo-note">
                                    Foto volgt
                                </small>

                            <?php endif; ?>

                        </div>

                        <div class="ng-team-profile-copy">

                            <div class="ng-team-profile-top">

                                <span>
                                    <?php echo esc_html(
                                        str_pad(
                                            (string) ($index + 1),
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        )
                                    ); ?>
                                </span>

                                <?php if ($member['role']) : ?>
                                    <p>
                                        <?php echo esc_html($member['role']); ?>
                                    </p>
                                <?php endif; ?>

                            </div>

                            <h3>
                                <?php echo esc_html($member['name']); ?>
                            </h3>

                            <?php if ($member['description']) : ?>
                                <p>
                                    <?php echo esc_html(
                                        $member['description']
                                    ); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>


        <!-- =================================================
             02 — KERNTEAM
        ================================================== -->

        <div class="ng-team-people-group">

            <header class="ng-team-people-group-heading">

                <div>
                    <span>02</span>
                    <p>Kernteam</p>
                </div>

                <p>
                    Dagelijkse coördinatie en uitvoering,
                    met een belangrijke rol binnen NoordbuiTen.
                </p>

            </header>

            <div class="ng-team-people-v2-grid">

                <?php foreach ($ng_core_members as $index => $member) : ?>

                    <article
                        class="ng-team-profile<?php echo $index % 2 === 0 ? ' ng-team-profile--coral' : ''; ?>"
                    >

                        <div class="ng-team-profile-portrait">

                            <?php if ($member['photo']) : ?>

                                <img
                                    class="ng-team-profile-image"
                                    src="<?php echo esc_url($member['photo']); ?>"
                                    alt="<?php echo esc_attr($member['name']); ?>"
                                >

                            <?php else : ?>

                                <span
                                    class="ng-team-profile-initials"
                                    aria-hidden="true"
                                >
                                    <?php echo esc_html(
                                        $ng_team_initials($member['name'])
                                    ); ?>
                                </span>

                                <small class="ng-team-profile-photo-note">
                                    Foto volgt
                                </small>

                            <?php endif; ?>

                        </div>

                        <div class="ng-team-profile-copy">

                            <div class="ng-team-profile-top">

                                <span>
                                    <?php echo esc_html(
                                        str_pad(
                                            (string) ($index + 1),
                                            2,
                                            '0',
                                            STR_PAD_LEFT
                                        )
                                    ); ?>
                                </span>

                                <?php if ($member['role']) : ?>
                                    <p>
                                        <?php echo esc_html($member['role']); ?>
                                    </p>
                                <?php endif; ?>

                            </div>

                            <h3>
                                <?php echo esc_html($member['name']); ?>
                            </h3>

                            <?php if ($member['description']) : ?>
                                <p>
                                    <?php echo esc_html(
                                        $member['description']
                                    ); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>


        <!-- =================================================
             03 — ADVISEURS
        ================================================== -->

        <div class="ng-team-advisors">

            <header class="ng-team-advisors-heading">

                <div>

                    <span>03</span>

                    <div>
                        <p>Adviseurs</p>
                        <small>
                            Denken vanuit hun kennis en ervaring mee.
                        </small>
                    </div>

                </div>

            </header>

            <div class="ng-team-advisor-list">

                <?php foreach ($ng_advisors as $member) : ?>

                    <div class="ng-team-advisor">

                        <span aria-hidden="true">
                            <?php echo esc_html(
                                $ng_team_initials($member['name'])
                            ); ?>
                        </span>

                        <div>

                            <strong>
                                <?php echo esc_html($member['name']); ?>
                            </strong>

                            <?php if ($member['note']) : ?>
                                <small>
                                    <?php echo esc_html($member['note']); ?>
                                </small>
                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>


        <!-- =================================================
             ALLE VRIJWILLIGERS
        ================================================== -->

        <aside class="ng-team-volunteer-thanks">

            <div class="ng-team-volunteer-thanks-mark" aria-hidden="true">

                <span>♥</span>

            </div>


            <div class="ng-team-volunteer-thanks-copy">

                <p class="ng-team-volunteer-thanks-kicker">
                    En al die andere helpende handen
                </p>

                <h3>
                    Zonder vrijwilligers geen NoordgroeiT.
                </h3>

                <p>
                    Naast de mensen die je hierboven ziet,
                    zetten veel andere vrijwilligers zich in voor
                    NoordgroeiT en NoordbuiTen. Van groen en
                    klussen tot activiteiten, ontvangst,
                    communicatie en praktische ondersteuning.
                    Niet iedereen staat met naam en foto op deze
                    pagina, maar iedere bijdrage telt.
                </p>

            </div>


            <div class="ng-team-volunteer-thanks-note">

                <span>
                    Dankjewel
                </span>

                <strong>
                    aan iedereen die meedoet.
                </strong>

            </div>

        </aside>



        <!-- =================================================
             END DETAIL
        ================================================== -->

        <footer class="ng-team-people-v2-footer">

            <span aria-hidden="true"></span>

            <p>
                Mensen met verschillende kennis, ervaring en
                ideeën — verbonden door Tilburg-Noord.
            </p>

        </footer>


    </div>

</section>

<!-- =========================================
     HOE WE SAMENWERKEN — VISUAL FLOW
========================================== -->

<section
    class="ng-team-collab"
    aria-labelledby="ng-team-collab-title"
>

    <div class="site-container">

        <header class="ng-team-collab-heading">

            <div>

                <p class="ng-team-collab-kicker">
                    Hoe we samenwerken
                </p>

                <h2 id="ng-team-collab-title">
                    Iedereen draagt iets anders bij.
                    Samen houden we
                    <span class="ng-brand-word">NoordgroeiT</span>
                    in beweging.
                </h2>

            </div>

            <p>
                Een goed idee komt verder wanneer verschillende mensen
                hun kennis, tijd en mogelijkheden bij elkaar brengen.
            </p>

        </header>


<div
    class="ng-team-collab-track"
    data-team-collab
>

    <!-- ROUTE -->

    <svg
        class="ng-team-collab-track-line"
        viewBox="0 0 1000 120"
        preserveAspectRatio="none"
        aria-hidden="true"
    >

        <path
            class="ng-team-collab-track-guide"
            d="M 85 60 C 290 25, 350 95, 500 60 C 650 25, 710 95, 915 60"
        />

        <path
            class="ng-team-collab-track-live"
            pathLength="1"
            d="M 85 60 C 290 25, 350 95, 500 60 C 650 25, 710 95, 915 60"
        />

    </svg>


    <!-- 01 -->

    <article class="ng-team-collab-station ng-team-collab-station--1">

        <div class="ng-team-collab-node">

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <circle cx="24" cy="24" r="15"></circle>
                <path d="M29 18 26 26l-7 3 3-7z"></path>
            </svg>

        </div>

        <div class="ng-team-collab-station-copy">

            <div class="ng-team-collab-meta">
                <span>01</span>
                <p>Bestuur</p>
            </div>

            <h3>
                Geeft richting
            </h3>

            <p>
                Bewaakt de koers en helpt keuzes
                zorgvuldig af te wegen.
            </p>

        </div>

    </article>


    <!-- 02 -->

    <article class="ng-team-collab-station ng-team-collab-station--2">

        <div class="ng-team-collab-node">

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <path d="M14 17 24 24 34 16"></path>
                <path d="M24 24 33 34"></path>

                <circle cx="14" cy="17" r="3"></circle>
                <circle cx="24" cy="24" r="3"></circle>
                <circle cx="34" cy="16" r="3"></circle>
                <circle cx="33" cy="34" r="3"></circle>
            </svg>

        </div>

        <div class="ng-team-collab-station-copy">

            <div class="ng-team-collab-meta">
                <span>02</span>
                <p>Team</p>
            </div>

            <h3>
                Verbindt mensen &amp; plannen
            </h3>

            <p>
                Brengt ideeën, ondersteuning en
                de juiste mensen bij elkaar.
            </p>

        </div>

    </article>


    <!-- 03 -->

    <article class="ng-team-collab-station ng-team-collab-station--3">

        <div class="ng-team-collab-node">

            <svg viewBox="0 0 48 48" aria-hidden="true">
                <path d="M24 37V22"></path>
                <path d="M24 24C17 24 13 20 13 14c7 0 11 4 11 10Z"></path>
                <path d="M24 28c7 0 12-4 12-11-8 0-12 4-12 11Z"></path>
            </svg>

        </div>

        <div class="ng-team-collab-station-copy">

            <div class="ng-team-collab-meta">
                <span>03</span>
                <p>Vrijwilligers</p>
            </div>

            <h3>
                Brengen het tot leven
            </h3>

            <p>
                Zetten tijd, talent en energie om in
                iets wat je terugziet in de wijk.
            </p>

        </div>

    </article>

</div>


        <div class="ng-team-collab-end">

            <span></span>

            <p>
                Zo groeit een idee van samen denken naar samen doen.
            </p>

        </div>

    </div>

</section>

<!-- =========================================
     CTA — MENSEN DIE MEEDOEN
========================================== -->

<section
    class="ng-team-join-v2"
    aria-labelledby="ng-team-join-v2-title"
>

    <div class="site-container">

        <div class="ng-team-join-v2-layout">


            <!-- COPY -->

            <div class="ng-team-join-v2-copy">

                <p class="ng-team-join-v2-kicker">
                    Ook iets bijdragen?
                </p>

                <h2 id="ng-team-join-v2-title">
                    <span class="ng-brand-word">NoordgroeiT</span>
                    groeit door mensen die meedoen.
                </h2>

                <p>
                    Je hoeft geen bestuurslid te zijn om iets voor
                    Tilburg-Noord te betekenen. Soms begint bijdragen
                    gewoon met iets kleins.
                </p>

            </div>


            <!-- VISUAL -->

            <div class="ng-team-join-v2-visual">

                <div class="ng-team-join-v2-option ng-team-join-v2-option--1">
                    <span>01</span>
                    <strong>Een paar uur</strong>
                    <small>tijd</small>
                </div>

                <div class="ng-team-join-v2-option ng-team-join-v2-option--2">
                    <span>02</span>
                    <strong>Een goed idee</strong>
                    <small>initiatief</small>
                </div>

                <div class="ng-team-join-v2-option ng-team-join-v2-option--3">
                    <span>03</span>
                    <strong>Een talent</strong>
                    <small>kennis</small>
                </div>


                <svg
                    class="ng-team-join-v2-lines"
                    viewBox="0 0 420 320"
                    aria-hidden="true"
                >

                    <path d="M75 60 C155 75 165 145 220 160"></path>

                    <path d="M360 72 C290 90 285 135 220 160"></path>

                    <path d="M90 265 C145 235 170 195 220 160"></path>

                </svg>


                <a
                    class="ng-team-join-v2-center"
                    href="<?php echo esc_url(
                        home_url('/doe-mee/')
                    ); ?>"
                >

                    <span>
                        Misschien
                    </span>

                    <strong>
                        iets voor jou?
                    </strong>

                    <i aria-hidden="true">
                        ↗
                    </i>

                </a>

            </div>

        </div>


        <div class="ng-team-join-v2-bottom">

            <span aria-hidden="true"></span>

            <p>
                Groot of klein — iedere bijdrage kan iets in beweging zetten.
            </p>

        </div>

    </div>

</section>

</main>

<?php
get_footer();