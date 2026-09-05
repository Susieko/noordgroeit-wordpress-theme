<?php
/**
 * Template Name: Contact
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$theme_images =
    get_template_directory_uri()
    . '/assets/images';

$contact_status = isset($_GET['contact-status'])
    ? sanitize_key(wp_unslash($_GET['contact-status']))
    : '';
?>

<main
    id="main-content"
    class="ng-contact-page"
>


    <!-- =========================================
         HERO — CONTACT
    ========================================== -->

    <section
        class="ng-inner-hero ng-inner-hero--contact"
        aria-labelledby="ng-contact-hero-title"
    >

        <img
            class="ng-inner-hero__image"
            src="<?php echo esc_url(
                $theme_images . '/koffie.webp'
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


                <h1 id="ng-contact-hero-title">
                    Contact
                </h1>


                <p class="ng-inner-hero__meta">
                    NoordgroeiT
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
         CONTACT
    ========================================== -->

    <section
        class="ng-contact-main"
        aria-labelledby="ng-contact-title"
    >

        <div class="site-container">


            <!-- HEADING -->

            <header class="ng-contact-heading">

                <div>

                    <p class="ng-contact-kicker">
                        Neem contact op
                    </p>

                    <h2 id="ng-contact-title">
                        Waar kunnen we
                        je mee helpen?
                    </h2>

                </div>


                <p>
                    Heb je een vraag, een idee voor de wijk
                    of wil je iets samen met NoordgroeiT doen?
                    Stuur ons gerust een bericht.
                </p>

            </header>



            <!-- =====================================
                 CONTACT LAYOUT
            ====================================== -->

            <div class="ng-contact-layout">


                <!-- LEFT -->

                <aside class="ng-contact-info">


                    <div class="ng-contact-info-intro">

                        <span
                            class="ng-contact-info-mark"
                            aria-hidden="true"
                        >
                            ↳
                        </span>

                        <p>
                            Je hoeft je vraag niet perfect
                            te formuleren.
                            <strong>
                                Een eerste berichtje is genoeg.
                            </strong>
                        </p>

                    </div>



                    <div class="ng-contact-info-list">


                        <div class="ng-contact-info-row">

                            <small>
                                E-mail
                            </small>

                            <a href="mailto:contact@noordgroeit.nl">
                                contact@noordgroeit.nl
                            </a>

                        </div>



                        <div class="ng-contact-info-row">

                            <small>
                                Organisatie
                            </small>

                            <strong>
                                Stichting NoordgroeiT
                            </strong>

                            <span>
                                Tilburg-Noord
                            </span>

                        </div>



                        <div class="ng-contact-info-row">

                            <small>
                                Kamer van Koophandel
                            </small>

                            <strong>
                                90773950
                            </strong>

                        </div>


                    </div>


                    <div class="ng-contact-side-note">

                        <span></span>

                        <p>
                            Voor bewoners, organisaties,
                            partners en iedereen met een goed idee.
                        </p>

                    </div>


                </aside>



                <!-- =====================================
                     FORM
                ====================================== -->

                <div class="ng-contact-form-wrap">


                    <?php if (
                        $contact_status === 'success'
                    ) : ?>

                        <div
                            class="ng-contact-message ng-contact-message--success"
                            role="status"
                        >
                            <span aria-hidden="true">✓</span>

                            <div>
                                <strong>
                                    Bericht verzonden.
                                </strong>

                                <p>
                                    Bedankt! NoordgroeiT heeft
                                    je bericht ontvangen.
                                </p>
                            </div>
                        </div>

                    <?php elseif (
                        $contact_status === 'error'
                    ) : ?>

                        <div
                            class="ng-contact-message ng-contact-message--error"
                            role="alert"
                        >
                            <span aria-hidden="true">!</span>

                            <div>
                                <strong>
                                    Dat ging niet helemaal goed.
                                </strong>

                                <p>
                                    Controleer je gegevens
                                    en probeer het opnieuw.
                                </p>
                            </div>
                        </div>

                    <?php endif; ?>



                    <form
                        class="ng-contact-form"
                        action="<?php echo esc_url(
                            admin_url('admin-post.php')
                        ); ?>"
                        method="post"
                    >

                        <input
                            type="hidden"
                            name="action"
                            value="ng_submit_contact"
                        >


                        <?php wp_nonce_field(
                            'ng_contact_form',
                            'ng_contact_nonce'
                        ); ?>


                        <!-- HONEYPOT -->

                        <div
                            class="ng-contact-honeypot"
                            aria-hidden="true"
                        >
                            <label>
                                Bedrijf
                                <input
                                    type="text"
                                    name="contact_company"
                                    tabindex="-1"
                                    autocomplete="off"
                                >
                            </label>
                        </div>



                        <!-- NAME + EMAIL -->

                        <div class="ng-contact-form-row">


                            <div class="ng-contact-field">

                                <label for="ng-contact-name">
                                    Naam
                                </label>

                                <input
                                    id="ng-contact-name"
                                    name="contact_name"
                                    type="text"
                                    autocomplete="name"
                                    placeholder="Jouw naam"
                                    required
                                >

                            </div>



                            <div class="ng-contact-field">

                                <label for="ng-contact-email">
                                    E-mailadres
                                </label>

                                <input
                                    id="ng-contact-email"
                                    name="contact_email"
                                    type="email"
                                    autocomplete="email"
                                    placeholder="jouw@email.nl"
                                    required
                                >

                            </div>


                        </div>



                        <!-- SUBJECT -->

                        <div class="ng-contact-field">

                            <label for="ng-contact-topic">
                                Waar gaat het over?
                            </label>

                            <select
                                id="ng-contact-topic"
                                name="contact_topic"
                                required
                            >

                                <option
                                    value=""
                                    selected
                                    disabled
                                >
                                    Kies een onderwerp
                                </option>

                                <option value="Algemene vraag">
                                    Algemene vraag
                                </option>

                                <option value="Idee voor de wijk">
                                    Idee voor de wijk
                                </option>

                                <option value="Vrijwilligerswerk">
                                    Vrijwilligerswerk
                                </option>

                                <option value="Samenwerking">
                                    Samenwerking
                                </option>

                                <option value="NoordbuiTen">
                                    NoordbuiTen
                                </option>

                                <option value="Anders">
                                    Anders
                                </option>

                            </select>

                        </div>



                        <!-- MESSAGE -->

                        <div class="ng-contact-field">

                            <label for="ng-contact-message">
                                Bericht
                            </label>

                            <textarea
                                id="ng-contact-message"
                                name="contact_message"
                                rows="7"
                                placeholder="Vertel gerust waar we je mee kunnen helpen..."
                                required
                            ></textarea>

                        </div>



                        <!-- SUBMIT -->

                        <div class="ng-contact-form-bottom">

                            <p>
                                We gebruiken je gegevens alleen
                                om op je bericht te reageren.
                            </p>


                            <button
                                class="ng-contact-submit"
                                type="submit"
                            >

                                <span>
                                    Verstuur bericht
                                </span>

                                <i aria-hidden="true">
                                    →
                                </i>

                            </button>

                        </div>


                    </form>


                </div>


            </div>


        </div>

    </section>



    <!-- =========================================
         NOORDBUITEN CONTACT
    ========================================== -->

    <section class="ng-contact-noordbuiten">

        <div class="site-container">

            <div class="ng-contact-noordbuiten-inner">


                <div>

                    <p class="ng-contact-kicker">
                        Vraag over NoordbuiTen?
                    </p>

                    <h2>
                        Dan kun je ook rechtstreeks
                        bij NoordbuiTen terecht.
                    </h2>

                </div>


                <div class="ng-contact-noordbuiten-action">

                    <p>
                        Voor vragen over de plek,
                        activiteiten of een bezoek.
                    </p>


                    <a
                        href="mailto:noordbuiten@gmail.com"
                    >
                        <span>
                            Mail NoordbuiTen
                        </span>

                        <i aria-hidden="true">
                            ↗
                        </i>
                    </a>

                </div>


            </div>


            <div class="ng-contact-noordbuiten-bottom">

                <span aria-hidden="true">
                    ↳
                </span>

                <p>
                    Moerstraat 23 · Tilburg-Noord
                </p>

            </div>


        </div>

    </section>


</main>

<?php get_footer(); ?>