<!DOCTYPE html>
<html>

<head>
    <title>PROXYDOC</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Included Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100' rel='stylesheet' type='text/css'>
    <!-- Materialize CSS -->

    <!-- CSS Files comes here -->
    <link href="{{ asset('css/grid12.css') }}" rel="stylesheet" media="screen"> <!-- Grid System -->
    <link href="{{ asset('css/james_typography.css') }}" rel="stylesheet" media="screen">
    <!-- James Framework - TYPOGRAPHY -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="screen"> <!-- Main CSS file -->
    <link href="{{ asset('css/color_scheme_light.css') }}" rel="stylesheet" media="screen">
    <!-- Color scheme (dark/light)-->
    <link href="{{ asset('css/colors/color_palette_lime.css') }}" rel="stylesheet" media="screen">
    <!-- Color palette -->
    <link href="{{ asset('css/rapid-icons.css') }} " rel="stylesheet" media="screen"> <!-- James Framework - ICONS -->
    <link href="{{ asset('css/js_styles/jquery.maximage.min.css') }}" rel="stylesheet" media="screen">
    <!-- MaxImage background image slideshow -->
    <link href="{{ asset('css/responsivity.css') }}" rel="stylesheet" media="screen"> <!-- Responsive Fixes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('js/sweetalert/sweetalert.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Modernizer and IE specyfic files -->
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <style>
        #loader-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }

        .input-field select {
            display: block;
        }

        .input-field input[type="number"] {
            width: 100%;
        }

        /* Centrage général */
        .align-center {
            text-align: center;
        }

        /* Slogan */
        .slogan {
            color: #ffffff;
            font-size: 32px;
            margin-top: 15px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        /* Compteur */
        .countdown {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: flex-start;
            /* aligné à gauche par défaut */
            margin: 20px auto;
            max-width: 100%;
        }

        .countdown_part {
            background: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            color: #E60012;
            flex: 1 1 100px;
            min-width: 80px;
            box-sizing: border-box;
        }

        .countdown_part .number {
            display: block;
            font-size: 28px;
            font-weight: bold;
        }

        .countdown_part .label {
            font-size: 14px;
            text-transform: uppercase;
        }

        /* Texte sous le timer */
        .slogan-text {
            color: #ffffff;
            margin-top: 10px;
            font-size: 16px;
            line-height: 1.5;
        }

        /* Bouton Newsletter */
        .newsletter_form {
            margin-top: 20px;
        }

        .newsletter_form a.subscribe-submit {
            background-color: #E60012;
            color: #ffffff;
            /* padding: 12px 25px; */
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .newsletter_form a.subscribe-submit:hover {
            background-color: #b3000d;
        }

        /* Responsive : sur mobile */
        @media (max-width: 768px) {
            .countdown {
                justify-content: center;
                /* sur mobile, centrer */
            }

            .countdown_part {
                flex: 1 1 45%;
                min-width: 45%;
            }

            .slogan {
                font-size: 24px;
            }

            .countdown_part .number {
                font-size: 22px;
            }

            .countdown_part .label {
                font-size: 12px;
            }
        }

        .slogan {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            font-size: 36px;
            line-height: 1.3;
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .slogan {
                font-size: 24px;
            }
        }


        /* .number {
            display: block;
            font-size: 28px;
            font-weight: bold;
        }

        .label {
            font-size: 14px;
            text-transform: uppercase;
        } */
    </style>

</head>

<body>
    <div id="preloader_container">
        <!-- Overlay -->
        <div id="loader-overlay"
            style="display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 191, 243, 0.3);
    z-index: 9998;">
        </div>

        <!-- Spinner -->
        <div id="loader"
            style="display: none;
    position: fixed;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Preloader Screen -->
        <header class="preloader_header">
            <div class="preloader_loader">
                <svg class="preloader_inner" width="60px" height="60px" viewBox="0 0 80 80">
                    <path class="preloader_loader_circlebg"
                        d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" />
                    <path id="preloader_loader_circle" class="preloader_loader_circle"
                        d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" />
                </svg>
            </div>
        </header>
        <!-- //Preloader Screen -->


        <!-- Fullscreen homepage -->
        <section class="hero_fullscreen newsletter timer mockups background_solid">
            <!-- You can edit classes of this section to control the content that i displayed and backgrounds of this section, more info in documentation. -->


            <!-- Logo and navigation -->
            <div class="container top_bar">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="{{ asset('images/log.png') }}" width="150" alt="logo" class="logo" />
                        <nav class="navigation_desktop">
                            <ul>
                                {{-- <li>
                                    <a href="#more_info" id="more_info_btn"
                                        class="btn-flat waves-effect waves-light">Découvrir</a>

                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- //Logo and navigation -->


            <!-- Main content -->
            <div class="container" id="main_content">
                <div class="content_container row">

                    <!-- Slogan -->
                    <div class="col-12 text-center">
                        <h2 class="slogan">
                            L'application ProxyDoc<br>arrive très bientôt !
                        </h2>
                    </div>

                    <!-- Timer -->
                    <div class="col-12">
                        <div id="countdown" class="countdown">
                            <div class="countdown_part">
                                <span class="number days">00</span>
                                <span class="label timeRefDays">jours</span>
                            </div>
                            <div class="countdown_part">
                                <span class="number hours">00</span>
                                <span class="label timeRefHours">heures</span>
                            </div>
                            <div class="countdown_part">
                                <span class="number minutes">00</span>
                                <span class="label timeRefMinutes">minutes</span>
                            </div>
                            <div class="countdown_part">
                                <span class="number seconds">00</span>
                                <span class="label timeRefSeconds">secondes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Message affiché à la fin du countdown -->
                    <div class="col-12 text-center">
                        <div id="launch-message" style="display: none;">
                            <h3>L'application ProxyDoc est maintenant disponible !</h3>
                        </div>
                    </div>

                    <!-- Texte sous le timer -->
                    <div class="col-12 text-center">
                        <h6 class="slogan-text">
                            Pour être informé de notre lancement et découvrir nos services e-santé innovants,<br
                                class="hidden-xs">
                            inscrivez-vous ci-dessous.
                        </h6>
                    </div>

                    <!-- Bouton Newsletter -->
                    <div class="col-12 text-center">
                        <div class="newsletter_form">
                            <a href="#more_info"
                                class="btn waves-effect waves-light subscribe-submit">Inscrivez-vous</a>
                        </div>
                    </div>

                </div>
            </div>


            {{-- <div class="container align-center" id="main_content">
                <div class="content_container row justify-content-center text-center">

                    <!-- Slogan -->
                    <div class="col-12">
                        <h2 class="slogan">
                            L'application ProxyDoc<br>arrive très bientôt !
                        </h2>
                    </div>

                    <!-- Timer -->
                    <div class="col-12">
                        <div id="countdown" class="countdown">
                            <div class="countdown_part">
                                <span class="number days">00</span>
                                <span class="label timeRefDays">jours</span>
                            </div>
                            <div class="countdown_part">
                                <span class="number hours">00</span>
                                <span class="label timeRefHours">heures</span>
                            </div>
                            <div class="countdown_part">
                                <span class="number minutes">00</span>
                                <span class="label timeRefMinutes">minutes</span>
                            </div>
                            <div class="countdown_part">
                                <span class="number seconds">00</span>
                                <span class="label timeRefSeconds">secondes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Message affiché à la fin du countdown -->
                    <div class="col-12">
                        <div id="launch-message" style="display: none;">
                            <h3>L'application ProxyDoc est maintenant disponible !</h3>
                        </div>
                    </div>

                    <!-- Texte sous le timer -->
                    <div class="col-12">
                        <h6 class="slogan-text">
                            Pour être informé de notre lancement et découvrir nos services e-santé innovants,<br
                                class="hidden-xs">
                            inscrivez-vous ci-dessous.
                        </h6>
                    </div>

                    <!-- Bouton Newsletter -->
                    <div class="col-12">
                        <div class="newsletter_form">
                            <a href="#more_info"
                                class="btn waves-effect waves-light subscribe-submit">Inscrivez-vous</a>
                        </div>
                    </div>

                </div>
            </div> --}}

            <!-- //Main content -->


            <!-- Mockups (put class="mockups" in Homepage section if you want mockups to be shown)-->
            <!-- /Mockup 1-->
            <div class="mockup mockup-right mockup-animation1">
                <img src="images/mok.png" alt="logo" />
            </div>
            <!-- //Mockup 1-->



            <!-- Social Icons -->
            <div class="container ">
                <div class="social_icons_container align-left">
                    <div class="social_icons">
                        <ul>
                            <li>
                                <div data-icon="&#xe282;" class="social_icon twitter_icon"
                                    onclick="location.href='#'">
                                </div>
                            </li>
                            <li>
                                <div data-icon="&#xe281;" class="social_icon facebook_icon"
                                    onclick="location.href='#'">
                                </div>
                            </li>
                            <li>
                                <div data-icon="&#xe279;" class="social_icon linkdin_icon"
                                    onclick="location.href='#'">
                                </div>
                            </li>
                            <li>
                                <div data-icon="&#xe27f;" class="social_icon dribbble_icon"
                                    onclick="location.href='#'">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //Social Icons -->



        </section><!-- //Homepage -->


        <!-- More info -->
        <section id="more_info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <h3>À propos de ProxyDoc</h3>
                        <p>ProxyDoc Sarl est une entreprise congolaise spécialisée dans l’e-santé. Grâce à son
                            application mobile intuitive, elle place le patient au cœur du système de soin en
                            démocratisant l’accès aux services médicaux : consultations en ligne, livraison de
                            médicaments et assistance médicale personnalisée.</p>

                        <ul class="icon_list">
                            <li>
                                <div data-icon="&#xe1ab;" class="icon_small float-left"></div>
                                <h6>ProxyChem – Livraison rapide de médicaments certifiés</h6>
                            </li>
                            <li>
                                <div data-icon="&#xe1d7;" class="icon_small float-left"></div>
                                <h6>ProxyChat – Consultations médicales instantanées via chat</h6>
                            </li>
                            <li>
                                <div data-icon="&#xe027;" class="icon_small float-left"></div>
                                <h6>ProxyGency – Coordination et accompagnement personnalisé</h6>
                            </li>
                            <li>
                                <div data-icon="&#xe0b8;" class="icon_small float-left"></div>
                                <h6>Plateforme multilingue et sécurisée</h6>
                            </li>
                        </ul>


                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                        <!-- Contact Form Section -->
                        <h3>Inscrivez-vous dès maintenant</h3>
                        <p>
                            Restez informé du lancement de l’application ProxyDoc et découvrez nos services innovants en
                            e-santé.
                            Laissez-nous vos coordonnées via ce formulaire ou écrivez-nous à l’adresse :
                            <a href="mailto:contact@proxydoc.cd">contact@proxydoc.org</a>.
                        </p>


                        <form action="{{ route('contact.send') }}" id="contacte-form" method="POST">
                            @csrf
                            <div class="contact_form">

                                <!-- Nom -->
                                <div class="input-field">
                                    <input id="name" type="text" name="name" required>
                                    <label for="name">Votre nom</label>
                                </div>

                                <!-- Email -->
                                <div class="input-field">
                                    <input id="email" type="email" name="email" required>
                                    <label for="email">Adresse e-mail</label>
                                </div>

                                <!-- Téléphone -->
                                <div class="input-field">
                                    <input id="phone" type="text" name="phone" required>
                                    <label for="phone">Téléphone</label>
                                </div>
                                <div class="input-field">
                                    <input id="sexe" type="text" name="sexe" required>
                                    <label for="phone">Sexe (Homme,Femme ou Autre)</label>
                                </div>


                                <div class="input-field">
                                    <input id="age" type="text" name="age" required>
                                    <label for="phone">Âge</label>
                                </div>

                            </div>

                            <button class="btn waves-effect waves-light red" type="submit" name="action">
                                Envoyer
                            </button>
                        </form>



                        <div id="message">
                            <div id="alert"></div>
                        </div>

                        <!-- //Contact Form Section -->


                    </div>
                </div>
        </section><!-- //More info -->


    </div><!-- //preloader -->


    <!-- JavaScript plugins comes here -->
    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script> <!-- jQuery -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script> <!-- jQuery easing -->
    <script src="{{ asset('js/jquery.scrollTo.js') }}"></script> <!-- Scroll to -->
    <script src="{{ asset('js/jquery.cycle.all.min.js') }}"></script> <!-- jQuery cycle -->
    <script src="{{ asset('js/jquery.form.js') }} "></script> <!-- jQuery form -->
    <script src="{{ asset('js/jquery.maximage.min.js') }}"></script> <!-- MaxImage background image slideshow -->
    <script src="{{ asset('js/materialize.js') }}"></script> <!-- Materialize -->
    <script src="{{ asset('js/classie.js') }}"></script> <!-- Class helper function -->
    <script src="{{ asset('js/pathLoader.js') }}"></script> <!-- Preloader Loading Animation -->
    <script src="{{ asset('js/preloader.js') }}"></script> <!-- Preloader -->
    <script src="{{ asset('js/count_down.js') }}"></script> <!-- Count Down Timer -->
    <script src="{{ asset('js/happy.js') }}"></script> <!-- Newsletter form validation -->
    <script src="{{ asset('js/happy.methods.js') }}"></script> <!-- Newsletter form validation -->
    <script src="{{ asset('js/retina.js') }}"></script> <!-- Retina.js - support for HiDPI Displays -->
    <script src="{{ asset('js/main.js') }}"></script> <!-- Main Js file -->
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Show message after newsletter form submit -->
    <script type="text/javascript">
        $('document').ready(function() {

            $("#countdown").countdown({
                date: "09/30/2025 23:59:59",
                format: "on"
            }, function() {
                $("#countdown").hide();
                $("#launch-message").fadeIn();
            });




        });
        $('document').ready(function() {

            // loader
            function showLoader() {
                $("#loader-overlay").fadeIn(100);
                $("#loader").fadeIn(100);
            }

            function hideLoader() {
                $("#loader-overlay").fadeOut(100);
                $("#loader").fadeOut(100);
            }

            function validateEmail(email) {
                let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            function validatePhone(phone) {
                let regex = /^\+?[0-9]{9,15}$/;
                return regex.test(phone);
            }

            $("#contacte-form").on("submit", function(e) {
                e.preventDefault(); // ➡️ bloque le rechargement

                let $submitBtn = $(this).find("button[type='submit']");
                $submitBtn.prop("disabled", true);
                showLoader();

                let name = $("input[name='name']").val().trim();
                let email = $("input[name='email']").val().trim();
                let phone = $("input[name='phone']").val().trim();
                let sexe = $("select[name='sexe']").val();
                let age = $("input[name='age']").val().trim();

                // validations JS
                if (name === "" || name.length > 255) {
                    swal({
                        title: "Erreur",
                        text: "Veuillez saisir un nom (max 255 caractères).",
                        icon: "error",
                        button: "OK",
                    });
                    hideLoader();
                    $submitBtn.prop("disabled", false);
                    return;
                }

                if (email === "" || !validateEmail(email) || email.length > 255) {
                    swal({
                        title: "Erreur",
                        text: "Adresse e-mail invalide ou trop longue.",
                        icon: "error",
                        button: "OK",
                    });
                    hideLoader();
                    $submitBtn.prop("disabled", false);
                    return;
                }

                if (phone === "" || !validatePhone(phone) || phone.length > 20) {
                    swal({
                        title: "Erreur",
                        text: "Le numéro de téléphone est obligatoire et doit être au format valide (9 à 15 chiffres, éventuellement précédé de +).",
                        icon: "error",
                        button: "OK",
                    });
                    hideLoader();
                    $submitBtn.prop("disabled", false);
                    return;
                }

                if (sexe === "" && !["Homme", "Femme", "Autre"].includes(sexe)) {
                    swal({
                        title: "Erreur",
                        text: "Sexe invalide. (Homme, Femme, Autre)",
                        icon: "error",
                        button: "OK",
                    });
                    hideLoader();
                    $submitBtn.prop("disabled", false);
                    return;
                }

                if (age !== "") {
                    if (isNaN(age) || age < 17 || age > 120) {
                        swal({
                            title: "Erreur",
                            text: "Âge invalide (17-120).",
                            icon: "error",
                            button: "OK",
                        });
                        hideLoader();
                        $submitBtn.prop("disabled", false);
                        return;
                    }
                }

                $.ajax({
                    url: "{{ route('contact.send') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: name,
                        email: email,
                        phone: phone,
                        sexe: sexe,
                        age: age
                    }
                }).done(function(response) {
                    swal({
                        title: response.message,
                        icon: 'success'
                    });
                    $("#contacte-form")[0].reset();
                }).fail(function(xhr) {
                    console.error(xhr);

                    let errorMsg = xhr.responseJSON?.message || "Erreur lors de l'envoi.";
                    swal({
                        title: "Erreur",
                        text: errorMsg,
                        icon: "error",
                        button: "OK",
                    });

                    if (xhr.status === 422) {
                        let json = xhr.responseJSON;
                        if (json.errors) {
                            $.each(json.errors, function(field, messages) {
                                $.each(messages, function(i, msg) {
                                    swal({
                                        title: "Erreur",
                                        text: msg,
                                        icon: "error",
                                        button: "OK",
                                    });
                                });
                            });
                        }
                    }

                }).always(function() {
                    hideLoader();
                    $submitBtn.prop("disabled", false);
                });
            });
        });
    </script>


</body>

</html>
