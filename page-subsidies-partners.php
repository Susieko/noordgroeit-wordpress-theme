<?php
/**
 * Template Name: Samenwerken
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images =
    get_template_directory_uri()
    . '/assets/images';
?>

<main
    id="main-content"
    class="ng-collab-page"
>


    <!-- =========================================
         HERO — SAMENWERKEN
    ========================================== -->

    <section
        class="ng-inner-hero ng-inner-hero--collab"
        aria-labelledby="ng-collab-hero-title"
    >

        <img
            class="ng-inner-hero__image"
            src="<?php echo esc_url(
                $theme_images
                . '/initiative-noordbuiten.jpg'
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


                <h1 id="ng-collab-hero-title">
                    Samenwerken
                </h1>


                <p class="ng-inner-hero__meta">
                    Kennis delen
                    <span>Samen mogelijk maken</span>
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
         INTRO — IEDEREEN BRENGT IETS ANDERS
    ========================================== -->

    <section
        class="ng-collab-intro"
        aria-labelledby="ng-collab-intro-title"
    >

        <div class="site-container">

            <div class="ng-collab-intro-layout">


                <!-- COPY -->

                <div class="ng-collab-intro-copy">

                    <p class="ng-collab-kicker">
                        Samen komt een idee verder
                    </p>


                    <h2 id="ng-collab-intro-title">
                        Samenwerken begint
                        niet altijd met geld.
                    </h2>


                    <p class="ng-collab-intro-lead">
                        Soms is kennis precies wat een initiatief
                        nodig heeft. Soms een netwerk, materiaal,
                        ruimte of financiële ondersteuning.
                    </p>


                    <p>
                        NoordgroeiT brengt bewoners, initiatieven
                        en organisaties bij elkaar om te kijken
                        wat er samen mogelijk is voor Tilburg-Noord.
                    </p>


                    <div class="ng-collab-intro-note">

                        <span aria-hidden="true">
                            ↳
                        </span>

                        <p>
                            Geen standaard samenwerkingspakket.
                            <strong>
                                We kijken wat bij elkaar past.
                            </strong>
                        </p>

                    </div>

                </div>



                <!-- CONTRIBUTIONS -->

                <div class="ng-collab-contributions">


                    <div class="ng-collab-contributions-top">

                        <span>
                            Wat zou jij kunnen meebrengen?
                        </span>

                        <span aria-hidden="true">
                            ✦
                        </span>

                    </div>



                    <div class="ng-collab-contribution">

                        <span class="ng-collab-contribution-number">
                            01
                        </span>

                        <div>

                            <small>
                                Kennis &amp; ervaring
                            </small>

                            <strong>
                                Denk mee vanuit jouw expertise.
                            </strong>

                            <p>
                                Professionele kennis kan een lokaal
                                idee net die stap verder helpen.
                            </p>

                        </div>

                    </div>



                    <div class="ng-collab-contribution">

                        <span class="ng-collab-contribution-number">
                            02
                        </span>

                        <div>

                            <small>
                                Mensen &amp; netwerk
                            </small>

                            <strong>
                                Breng de juiste mensen bij elkaar.
                            </strong>

                            <p>
                                Een waardevolle verbinding kan soms
                                belangrijker zijn dan een budget.
                            </p>

                        </div>

                    </div>



                    <div class="ng-collab-contribution">

                        <span class="ng-collab-contribution-number">
                            03
                        </span>

                        <div>

                            <small>
                                Ruimte &amp; middelen
                            </small>

                            <strong>
                                Maak iets praktisch mogelijk.
                            </strong>

                            <p>
                                Denk aan materialen, faciliteiten,
                                een locatie of andere ondersteuning.
                            </p>

                        </div>

                    </div>



                    <div class="ng-collab-contribution">

                        <span class="ng-collab-contribution-number">
                            04
                        </span>

                        <div>

                            <small>
                                Financiële steun
                            </small>

                            <strong>
                                Geef een goed plan ruimte om te groeien.
                            </strong>

                            <p>
                                Bijvoorbeeld via subsidie,
                                sponsoring of andere financiering.
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section>

<!-- =========================================
     SAMENWERKEN — VIER INGANGEN
========================================= -->

<section
    class="ng-collab-paths"
    aria-labelledby="ng-collab-paths-title"
>
    <div class="site-container">


        <!-- =====================================
             HEADING
        ====================================== -->

        <header class="ng-collab-paths-heading">

            <div>

                <p class="ng-collab-kicker">
                    Vier ingangen, geen vaste vorm
                </p>

                <h2 id="ng-collab-paths-title">
                    Je hoeft geen groot fonds
                    te zijn om iets te betekenen.
                </h2>

            </div>


            <p>
                Een goede samenwerking begint niet
                bij de grootte van een organisatie,
                maar bij wat je kunt bijdragen
                en wat er in Tilburg-Noord nodig is.
            </p>

        </header>



        <!-- =====================================
             ROUTE
        ====================================== -->

        <div class="ng-collab-paths-route">


            <!-- vertical route -->

            <div
                class="ng-collab-paths-line"
                aria-hidden="true"
            >
                <span></span>
            </div>



            <!-- 01 -->

            <article
                class="
                    ng-collab-path
                    ng-collab-path--left
                "
            >

                <div class="ng-collab-path-card">

                    <small>
                        Lokaal betrokken
                    </small>

                    <h3>
                        Ondernemer of bedrijf
                    </h3>

                    <p>
                        Misschien kun je materiaal,
                        expertise, mensen, ruimte
                        of praktische ondersteuning bieden.
                    </p>

                    <div class="ng-collab-path-tags">

                        <span>Kennis</span>
                        <span>Materiaal</span>
                        <span>Faciliteiten</span>

                    </div>

                </div>


                <div class="ng-collab-path-node">

                    <span>
                        01
                    </span>

                </div>


                <div class="ng-collab-path-empty"></div>

            </article>



            <!-- 02 -->

            <article
                class="
                    ng-collab-path
                    ng-collab-path--right
                "
            >

                <div class="ng-collab-path-empty"></div>


                <div class="ng-collab-path-node">

                    <span>
                        02
                    </span>

                </div>


                <div class="ng-collab-path-card">

                    <small>
                        Samen voor de wijk
                    </small>

                    <h3>
                        Maatschappelijke organisatie
                    </h3>

                    <p>
                        Werk samen rond bewoners,
                        gezondheid, natuur, ontmoeting,
                        leren of andere thema’s in de wijk.
                    </p>

                    <div class="ng-collab-path-tags">

                        <span>Expertise</span>
                        <span>Bereik</span>
                        <span>Samenwerking</span>

                    </div>

                </div>

            </article>



            <!-- 03 -->

            <article
                class="
                    ng-collab-path
                    ng-collab-path--left
                "
            >

                <div class="ng-collab-path-card">

                    <small>
                        Ruimte voor ideeën
                    </small>

                    <h3>
                        Fonds of financier
                    </h3>

                    <p>
                        Help een initiatief vooruit
                        met financiële ruimte of door
                        mee te denken over mogelijkheden.
                    </p>

                    <div class="ng-collab-path-tags">

                        <span>Subsidie</span>
                        <span>Financiering</span>
                        <span>Advies</span>

                    </div>

                </div>


                <div class="ng-collab-path-node">

                    <span>
                        03
                    </span>

                </div>


                <div class="ng-collab-path-empty"></div>

            </article>



            <!-- 04 -->

            <article
                class="
                    ng-collab-path
                    ng-collab-path--right
                "
            >

                <div class="ng-collab-path-empty"></div>


                <div class="ng-collab-path-node">

                    <span>
                        04
                    </span>

                </div>


                <div class="ng-collab-path-card">

                    <small>
                        Verbinden &amp; mogelijk maken
                    </small>

                    <h3>
                        Overheid of netwerkpartner
                    </h3>

                    <p>
                        Soms helpt vooral een verbinding,
                        toegang tot kennis of het samenbrengen
                        van verschillende partijen.
                    </p>

                    <div class="ng-collab-path-tags">

                        <span>Netwerk</span>
                        <span>Kennis</span>
                        <span>Verbinding</span>

                    </div>

                </div>

            </article>


        </div>



        <!-- =====================================
             CLOSING NOTE
        ====================================== -->

        <div class="ng-collab-paths-bottom">

            <span aria-hidden="true">
                ↳
            </span>

            <p>
                Staat jouw organisatie hier niet letterlijk tussen?
                <strong>
                    Dat hoeft samenwerking niet uit te sluiten.
                </strong>
            </p>

        </div>


    </div>
</section>


<!-- =========================================
     SAMENWERKEN — PARTNER PROOF
========================================= -->

<?php

$collab_partner_images =
    get_template_directory_uri()
    . '/assets/images/partners';

$collab_partner_dir =
    get_template_directory()
    . '/assets/images/partners';


$collab_partner_groups = [

    [
        'title'       => 'Subsidiegevers & fondsen',
        'description' => 'Zij maken NoordbuiTen financieel mogelijk.',
        'partners'    => [
            ['name' => 'Gemeente Tilburg', 'file' => 'logo1.png'],
            ['name' => 'MOM maakt mede mogelijk', 'file' => 'logo2.jpg'],
            ['name' => 'Noordraad Heikant-Quirijnstok', 'file' => 'logo3.png'],
            ['name' => 'Nationaal Programma Leefbaarheid en Veiligheid', 'file' => 'logo4.png'],
            ['name' => 'Oranje Fonds', 'file' => 'logo5.jpg'],
            ['name' => 'Provincie Noord-Brabant', 'file' => 'logo6.png'],
            ['name' => 'Vfonds', 'file' => 'logo7.png'],
            ['name' => 'Waterschap De Dommel', 'file' => 'logo8.png'],
            ['name' => 'Wijkraad Stokhasselt', 'file' => 'logo9.png'],
        ],
    ],

    [
        'title'       => 'Sponsors',
        'description' => 'Bedrijven en particulieren die meebouwen met geld, materiaal of inzet.',
        'partners'    => [
            ['name' => 'Broeren Civil Solutions', 'file' => 'Broeren.png'],
            ['name' => 'Dutsch Workwear', 'file' => 'Dutsch workwear.png'],
            ['name' => 'EDDA Glas Handel B.V.', 'file' => 'Eddaglas.png'],
            ['name' => 'GroenRijk Tilburg', 'file' => 'Groenrijk.png'],
            ['name' => 'Gubbels', 'file' => 'Gubbels.png'],
            ['name' => 'HMS', 'file' => 'HMS.png'],
            ['name' => 'Jan Verhoeven BV', 'file' => 'Janverschuuren.png'],
            ['name' => 'Loxam', 'file' => 'Loxam.png'],
            ['name' => 'Van Riel Groep', 'file' => 'vanriel.png'],
            ['name' => 'Oculus', 'file' => 'Oculus.png'],
            ['name' => 'Paulownia Cultures', 'file' => 'Pauwlonia.png'],
            ['name' => 'Van der Weegen', 'file' => 'vanderweegen.png'],
            ['name' => 'WVS', 'file' => 'WvS.png'],
        ],
    ],

    [
        'title'       => 'Wijk- & buurtpartners',
        'description' => 'Organisaties die dicht bij huis actief zijn in Tilburg Noord.',
        'partners'    => [
            ['name' => 'Beter Stokhasselt', 'file' => null],
            ['name' => 'De Kern', 'file' => 'Deken.png'],
            ['name' => 'Enexis Netbeheer', 'file' => 'Enexis.png'],
            ['name' => 'Groen Xtra', 'file' => 'GroenXtra.png'],
            ['name' => 'Landschap Pauwels', 'file' => 'Landschappauwels.png'],
            ['name' => 'Mensi', 'file' => 'Menss.png'],
            ['name' => 'Noordvoerders', 'file' => 'Noordvoerders.png'],
            ['name' => 'Het Ronde Tafelhuis', 'file' => 'Rondetafelhuis.png'],
            ['name' => 'Studio Noord', 'file' => null],
            ['name' => 'TenneT', 'file' => 'Tennet.png'],
            ['name' => 'Tijdloos Tuinen', 'file' => 'Tijdloostuinen.png'],
            ['name' => 'Voor Gelijke Kansen', 'file' => 'Tilburgnoordwest.png'],
            ['name' => 'WIJ West', 'file' => 'Wijwest.png'],
            ['name' => 'WonenBreburg', 'file' => 'Wonenbreburg.png'],
        ],
    ],

    [
        'title'       => 'Branche- & stadspartners',
        'description' => 'Organisaties die vanuit de stad of hun vakgebied meewerken aan NoordbuiTen.',
        'partners'    => [
            ['name' => 'Avans Hogeschool', 'file' => 'avans.png'],
            ['name' => 'Beursvloer Tilburg', 'file' => 'Beursvloertilburg.png'],
            ['name' => 'ContourdeTwern', 'file' => 'contourdetwern.png'],
            ['name' => 'De Baane & De Steegen', 'file' => null],
            ['name' => 'Diamant Groep', 'file' => 'Diamantgroep.png'],
            ['name' => 'Fontys', 'file' => 'Fontys.png'],
            ['name' => 'Groen013', 'file' => null],
            ['name' => 'Groeituin 013', 'file' => null],
            ['name' => 'IVN Natuureducatie', 'file' => 'ivn.png'],
            ['name' => 'LSA', 'file' => 'LSA.png'],
            ['name' => 'Mooizo Goedzo', 'file' => 'mooizogoedzo.png'],
            ['name' => 'Natuurmuseum Brabant', 'file' => 'natuurmuseum-brabant.png'],
            ['name' => 'On Stage / Buspartner', 'file' => 'Ondernemenmetjebuurt.png'],
            ['name' => 'Prospects at Work Tilburg', 'file' => 'PAWT.png'],
            ['name' => 'Refugee Team', 'file' => 'Refugeeteam.png'],
            ['name' => 'R-Newt Kids & Jongeren', 'file' => 'R-newtkids.png'],
            ['name' => 'Stadsnieuws Tilburg', 'file' => 'Stadsnieuws.png'],
            ['name' => 'Universiteit van Tilburg', 'file' => null],
            ['name' => 'Vrijwilligers Tilburg', 'file' => 'Vrijwilligerstilburg.png'],
            ['name' => 'Yuverta', 'file' => 'Yuverta.png'],
        ],
    ],

];

$total_partner_count = 0;

foreach ($collab_partner_groups as $group) {
    $total_partner_count += count($group['partners']);
}
?>

<section
    id="netwerk"
    class="ng-collab-proof"
    aria-labelledby="ng-collab-proof-title"
>   
    <div class="site-container">

        <div class="ng-collab-proof-heading">
            <div>
                <p class="ng-collab-kicker">
                    We doen dit al samen
                </p>

                <h2 id="ng-collab-proof-title">
                    Je hoeft niet als eerste
                    aan te kloppen.
                </h2>
            </div>

            <div class="ng-collab-proof-copy">
                <p>
                    NoordgroeiT werkt al samen met verschillende
                    organisaties, fondsen, sponsoren en partners
                    uit de wijk en de stad.
                </p>

                <div class="ng-collab-proof-stats">
                    <span><?php echo esc_html($total_partner_count); ?> partners</span>
                    <span>4 groepen</span>
                </div>
            </div>
        </div>

        <div class="ng-collab-proof-groups">

            <?php foreach ($collab_partner_groups as $group) : ?>
                <section class="ng-collab-proof-group-block">
                    <div class="ng-collab-proof-group-head">
                        <div>
                            <h3><?php echo esc_html($group['title']); ?></h3>
                            <p><?php echo esc_html($group['description']); ?></p>
                        </div>

                        <span class="ng-collab-proof-count">
                            <?php echo esc_html(count($group['partners'])); ?>
                        </span>
                    </div>

                    <div class="ng-collab-proof-grid">
                        <?php foreach ($group['partners'] as $partner) : ?>
                            <?php
                            $partner_logo_path =
                                $partner['file']
                                    ? $collab_partner_dir
                                        . '/'
                                        . $partner['file']
                                    : '';

                            $partner_has_logo =
                                $partner_logo_path
                                && is_file($partner_logo_path);
                            ?>

                            <div
                                class="ng-collab-proof-card<?php
                                    echo $partner_has_logo
                                        ? ''
                                        : ' ng-collab-proof-card--fallback';
                                ?>"
                            >
                                <?php if ($partner_has_logo) : ?>
                                    <img
                                        src="<?php echo esc_url(
                                            $collab_partner_images
                                            . '/'
                                            . $partner['file']
                                        ); ?>"
                                        alt="<?php echo esc_attr(
                                            $partner['name']
                                        ); ?>"
                                        loading="lazy"
                                        decoding="async"
                                    >
                                <?php else : ?>
                                    <span class="ng-collab-proof-fallback">
                                        <?php echo esc_html(
                                            $partner['name']
                                        ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>

        </div>

        <div class="ng-collab-proof-bottom">
            <span aria-hidden="true">↳</span>
            <p>
                Iedere samenwerking ziet er anders uit.
                <strong>Dat is juist de bedoeling.</strong>
            </p>
        </div>

    </div>
</section>

<!-- =========================================
     SAMENWERKEN — FINAL CTA
========================================= -->

<section
    class="ng-collab-final"
    aria-labelledby="ng-collab-final-title"
>

    <div class="site-container">

        <div class="ng-collab-final-inner">


            <!-- COPY -->

            <div class="ng-collab-final-copy">

                <p class="ng-collab-kicker">
                    Zullen we eens kijken?
                </p>

                <h2 id="ng-collab-final-title">
                    Misschien kunnen we
                    samen iets mogelijk maken.
                </h2>

                <p>
                    Heb je een idee voor samenwerking,
                    kun je iets bijdragen of wil je eerst
                    gewoon verkennen wat er mogelijk is?
                    Neem gerust contact op.
                </p>

            </div>



            <!-- ACTIONS -->

            <div class="ng-collab-final-actions">


                <a
                    class="ng-collab-final-primary"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >

                    <span>

                        <small>
                            Begin met een gesprek
                        </small>

                        <strong>
                            Neem contact op
                        </strong>

                    </span>

                    <i aria-hidden="true">
                        →
                    </i>

                </a>


<a
    class="ng-collab-final-secondary"
    href="<?php echo esc_url(
        home_url('/initiatieven/')
    ); ?>"
>
    <span>
        <small>
            Eerst verder kijken
        </small>

        <strong>
            Bekijk onze initiatieven
        </strong>
    </span>

    <i aria-hidden="true">
        →
    </i>
</a>


            </div>


        </div>



        <!-- SMALL CLOSING LINE -->

        <div class="ng-collab-final-bottom">

            <span aria-hidden="true">
                ↳
            </span>

            <p>
                Een samenwerking hoeft niet groot te beginnen.
                <strong>
                    Een eerste gesprek is genoeg.
                </strong>
            </p>

        </div>


    </div>

</section>

</main>

<?php get_footer(); ?>