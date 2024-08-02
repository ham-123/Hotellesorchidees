<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Hôtel Les Orchidées - Un hôtel de luxe offrant des services de qualité supérieure et une expérience inoubliable.">
    <meta name="author" content="Hamid TCHEMOKO A : https://www.linkedin.com/in/hamid-tchemoko-a-509075227/">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="hôtel, luxe, séjour, réservation, chambres, restaurant, services, vacances">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    <meta name="revisit-after" content="7 days">

    <!-- Open Graph Meta Tags (for social media) -->
    <meta property="og:title" content="Hôtel Les Orchidées - Luxe et Confort">
    <meta property="og:description"
        content="Découvrez l'Hôtel Les Orchidées, un lieu de séjour luxueux offrant des chambres confortables, un restaurant gastronomique et des services de qualité supérieure.">
    <meta property="og:image" content="https://www.hotellesorchidees.com/img/bg-image/seo.jpg">
    <meta property="og:url" content="https://www.hotellesorchidees.com">
    <meta property="og:type" content="website">


    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layerslider.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css" id="color-change">
    <link rel="stylesheet" href="css/fontawesome-all-5.2.0.min.css">
    <link rel="stylesheet" href="webfonts/flaticon/flaticon.css">

    <title>@yield('title')</title>


<body>
    <div id="page_wrapper">
        <div class="row">
            <!-- Header 3 Section Start -->
            <header id="header" class="full-row header-3 nav-on-banner">
                <div class="top-header text-white icon-default py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <i class="fas fa-map-marker-alt"></i>
                                <span class="pl-2 text-white">
                                    Boulevard de la Marina, à côté du Palais des Congrès, à une minute de la statue Amazon
                                    <a href="https://maps.google.com/maps/dir//H%C3%B4tel+Les+Orchid%C3%A9es+Boulevard+de+la+Marina+Cotonou/@6.346382,2.4034403,17z/data=!4m5!4m4!1m0!1m2!1m1!1s0x1023545a320e6731:0x520d12fce5c01b2d"
                                       class="text-decoration-underline text-blue" target="_blank">
                                        (voir localisation)
                                    </a>
                                </span>
                            </div>
                            
                            
                            <div class="col-md-5">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center mb-2">
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:contact@hotellesorchidees.com"
                                            class="pl-2 text-white text-decoration-underline">
                                            contact@hotellesorchidees.com
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-phone"></i>
                                        <a href="https://wa.me/22995965990"
                                            class="pl-2 text-white text-decoration-underline" target="_blank">
                                            +229 95 96 59 90
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="navbar-header">
                    <div class="container">
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light w-100">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    <img class="nav-logo" src="img/logo/logo.png" alt="logo">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                                href="{{ url('/') }}">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteNamed('chambres') ? 'active' : '' }}"
                                                href="{{ route('chambres') }}">Chambres</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteNamed('#') ? 'active' : '' }}"
                                                href=#>Appartements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteNamed('restaurant') ? 'active' : '' }}"
                                                href="{{ route('restaurant') }}">Restaurant</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}"
                                                href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-secondery-bg ml-2" href="{{('chambres')}}">Réserver
                                        maintenant</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

            </header>


            @yield('content')</head>



            <!-- Footer Section Start -->
            <footer class="full-row bg-secondery text-white footer-3 py-80" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget get-in-touch icon-primary">
                                <h4 class="widget-title down-line-left text-white">Contactez-nous</h4>
                                <ul>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Boulevard de la Marina, Cotonou
                                        </a>
                                    </li>

                                    <li><a href="mailto:contact@hotellesorchidees.com"><i
                                                class="fas fa-envelope"></i>contact@hotellesorchidees.com</a></li>
                                    <li>
                                        <a href="https://wa.me/22995965990" target="_blank" class="whatsapp-link">
                                            <i class="fab fa-whatsapp"></i> +229 95 96 59 90
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/22961412020" target="_blank" class="whatsapp-link">
                                            <i class="fab fa-whatsapp"></i> +229 61 41 20 20
                                        </a>
                                    </li>
                                    <style>
                                        .whatsapp-link {
                                            display: inline-block;
                                            width: 150px;
                                        }
                                    </style>
                                </ul>
                                <a href="{{ route('chambres') }}" class="btn btn-primary-bg">Réservez maintenant</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget quick-link">
                                <h4 class="widget-title down-line-left text-white">Liens Rapides</h4>
                                <ul>
                                    <li><a class="{{ Request::is('/') ? 'active' : '' }}"
                                            href="{{ url('/') }}">Accueil</a></li>
                                    <li><a class="{{ Route::currentRouteNamed('chambres') ? 'active' : '' }}"
                                            href="{{ route('chambres') }}">Chambres</a></li>
                                    <li><a class="{{ Route::currentRouteNamed('appartements') ? 'active' : '' }}"
                                            href="{{ route('appartements') }}">Appartements</a></li>
                                    <li><a class="{{ Route::currentRouteNamed('restaurant') ? 'active' : '' }}"
                                            href="{{ route('restaurant') }}">Restaurant</a></li>
                                    <li><a class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}"
                                            href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget instagram">
                                <h4 class="widget-title down-line-left text-white">Instagram</h4>
                                <ul>
                                    <li><a href="#"><img src="img/squire/1.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/2.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/3.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/4.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/5.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/6.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/7.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/8.jpg" alt="Image introuvable !"></a>
                                    </li>
                                    <li><a href="#"><img src="img/squire/9.jpg" alt="Image introuvable !"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="m-auto d-table">
                                <ul class="social-media mt-5">
                                    <li><a href="https://www.facebook.com/HotelLesOrchidees"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Fin de la Section du Pied de Page -->

            <!-- Début de la Section des Droits d'Auteur -->
            <div class="full-row copyright-3 py-4 text-white text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"> <span>Droit d'auteur © 2024 Hôtel Les Orchidées. Tous droits
                                réservés</span> </div>
                    </div>
                </div>
            </div>
            <!-- Fin de la Section des Droits d'Auteur -->
            <div class="scroll-to-top"> <a href="#" class="btn-scroll" data-target="body"><i
                        class="fa fa-angle-up" aria-hidden="true"></i><b>Retour en Haut</b></a> </div>
        </div>

        <!-- Wrapper End -->

        <!-- Jquery links -->
        <script src="js/jquery.min.js"></script>
        <script src="js/greensock.js"></script>
        <script src="js/layerslider.transitions.js"></script>
        <script src="js/layerslider.kreaturamedia.jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/common.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/custom.js"></script>




        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginRight = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginRight = "0";
            }
        </script>
</body>

</html>
