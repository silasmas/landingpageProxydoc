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

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .countdown_part {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            min-width: 80px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .countdown_part .number {
            display: block;
            font-size: 36px;
            font-weight: bold;
            color: #00BFF3;
        }

        .countdown_part .label {
            display: block;
            font-size: 14px;
            color: #333333;
        }

        #launch-message {
            text-align: center;
            color: #00BFF3;
            margin-top: 30px;
            font-size: 24px;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div id="preloader_container">
        <!-- Overlay -->
        <div id="loader-overlay"
            style="
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 191, 243, 0.3);
    z-index: 9998;
">
        </div>

        <!-- Spinner -->
        <div id="loader"
            style="
    display: none;
    position: fixed;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
">
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
            <div class="container align-left" id="main_content">
                <div class="content_container row">


                    <!-- Headline (put class="headline" in Homepage section if you want slogan to be shown)-->
                    <h2 class="slogan">
                        L'application ProxyDoc<br>arrive très bientôt !
                    </h2>
                    <!-- Timer (put class="timer" in Homepage section if you want timer to be shown)-->
                    {{-- <div id="countdown" class="countdown">
                        <div class="countdown_part first">
                            <h1 class="days">00</h1>
                            <p class="timeRefDays">days</p>
                        </div>
                        <div class="countdown_part">
                            <h1 class="hours">00</h1>
                            <p class="timeRefHours">hours</p>
                        </div>
                        <div class="countdown_part">
                            <h1 class="minutes">00</h1>
                            <p class="timeRefMinutes">minutes</p>
                        </div>
                        <div class="countdown_part last">
                            <h1 class="seconds">00</h1>
                            <p class="timeRefSeconds">seconds</p>
                        </div>
                    </div> --}}
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

                    <!-- Message affiché à la fin du countdown -->
                    <div id="launch-message" style="display: none;">
                        <h3>L'application ProxyDoc est maintenant disponible !</h3>
                    </div>

                    <!-- //Timer -->


                    <h6>
                        Pour être informé de notre lancement et découvrir nos services e-santé innovants,<br
                            class="hidden-xs">
                        inscrivez-vous ci-dessous.
                    </h6>

                    <!-- Newsletter Form (put class="newsletter" in Homepage section if you want newsletter form to be shown)-->
                    <div class="newsletter_form">
                        <a href="#more_info" class="btn waves-effect waves-light subscribe-submit">Inscrivez-vous</a>
                        {{-- <form method="POST" action="{{ route('newsletter.subscribe') }}" id="subscribe-form">
                            @csrf
                            <div class="input-field">
                                <div data-icon="&#xe563;" class="prefix"></div>
                                <input id="email" type="email" name="email" class="validate" required>
                                <label for="email">Adresse e-mail</label>
                            </div>
                            <button class="btn waves-effect waves-light subscribe-submit" type="submit" name="action"
                                id="subscribe-form-submit">
                                S'inscrire
                            </button>
                        </form> --}}
                        <div id="preview"></div>
                    </div>

                    <!-- //Newsletter form -->


                </div>
            </div>
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
                            <a href="mailto:contact@proxydoc.cd">contact@proxydoc.cd</a>.
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
                                    <label for="phone">Sexe</label>
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
                date: "10/30/2025 23:59:59", // change la date ici si besoin
                format: "on"
            }, function() {
                $("#countdown").hide();
                $("#launch-message").fadeIn();
            });
        });
        $('document').ready(function() {
            // 1.1 Configuration de Toastr
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
                e.preventDefault();
                let $submitBtn = $(this).find("button[type='submit']");
                $submitBtn.prop("disabled", true);
                showLoader();

                let name = $("input[name='name']").val().trim();
                let email = $("input[name='email']").val().trim();
                let phone = $("input[name='phone']").val().trim();
                let sexe = $("select[name='sexe']").val();
                let age = $("input[name='age']").val().trim();

                // Vérification front
                // Validation JS → même logique que Laravel
                if (name === "" || name.length > 255) {
                    swal({
                        title: "Erreur",
                        text: "Veuillez saisir un nom (max 255 caractères).",
                        icon: "error",
                        button: "OK",
                    });
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
                        text: "Sexe invalide.(Homme, Femme, Autre)",
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
                            text: "Äge invalide (18-120).",
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
                    console.log(response)
                    swal({
                        title: response.message,
                        icon: 'success'
                    });
                    $("#contacte-form")[0].reset();
                }).fail(function(xhr) {
                    swal({
                        title: "Erreur",
                        text: xhr.responseJSON?.message || "Erreur lors de l'envoi.",
                        icon: "error",
                        button: "OK",
                    });


                    console.error(xhr);
                    // Vérifier si c’est une erreur validation Laravel
                    // Gestion erreurs 422
                    if (xhr.status === 422) {
                        let json = xhr.responseJSON;

                        // Afficher d'abord le message général s'il existe
                        if (json.message) {
                            swal({
                                title: "Erreur",
                                text: json.message,
                                icon: "error",
                                button: "OK",
                            });

                        }

                        // Puis détailler chaque champ si présent
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

                    } else {
                        let errorMsg = xhr.responseJSON?.message || "Erreur lors de l'envoi.";

                        swal({
                            title: "Erreur",
                            text: errorMsg,
                            icon: "error",
                            button: "OK",
                        });
                    }
                }).always(function() {
                    // ➡️ Cache le loader
                    hideLoader();
                    $submitBtn.prop("disabled", false);
                });
            });

            function validateEmail(email) {
                let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

        });
    </script>


</body>

</html>
