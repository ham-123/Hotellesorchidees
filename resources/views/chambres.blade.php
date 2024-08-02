@extends('layouts.orchideeslayouts')

@section('title', 'Chambres')

@section('content')
    <!-- Section de la bannière de la page -->
    <div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
        <div class="container">
            <div class="row py-80">
                <div class="col-sm-6">
                    <h1 class="banner-title text-white">Chambres</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="pages-link">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li>/</li>
                        <li>Chambres</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section de la bannière de la page -->

    <!-- Début de la vue liste des chambres -->
    <section class="full-row bg-white">
        <div class="container">
            <!-- Chambre Classique -->
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/1.jpg" alt="Chambre Classique"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Chambre Classique</a></h5>
                                    <span>Lit double</span>
                                    <span>7 Chambres disponibles</span>
                                </div>
                                <p>La Chambre Classique offre un confort simple avec un lit double et toutes les commodités de base pour un séjour agréable.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <a href="{{Route('chambres.classique')}}" class="btn btn-primary">Réserver </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambre Standard -->
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/2.jpg" alt="Chambre Standard"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Chambre Standard</a></h5>
                                    <span>Lit double</span>
                                    <span>11 Chambres disponibles</span>
                                </div>
                                <p>Profitez de plus d'espace et de confort dans nos Chambres Standard, idéales pour les séjours prolongés.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <a href="{{Route('chambres.standard')}}" class="btn btn-primary">Réserver </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambre Prestige de Luxe -->
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/3.jpg" alt="Chambre Prestige de Luxe"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Chambre Prestige de Luxe</a></h5>
                                    <span>Lit double</span>
                                    <span>12 Chambres disponibles</span>
                                </div>
                                <p>Nos Chambres Prestige de Luxe vous offrent une expérience de luxe avec des équipements haut de gamme pour un séjour mémorable.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <a href="{{Route('chambres.prestige-de-luxe')}}" class="btn btn-primary">Réserver </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambre Prestige Vue sur la Mer -->
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/4.jpg" alt="Chambre Prestige Vue sur la Mer"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Chambre Prestige Vue sur la Mer</a></h5>
                                    <span>Lit double</span>
                                    <span>7 Chambres disponibles</span>
                                </div>
                                <p>Réveillez-vous avec une vue imprenable sur la mer dans nos Chambres Prestige Vue sur la Mer, parfaites pour une escapade relaxante.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <a href="{{Route('chambres.prestige-vue-sur-la-mer')}}" class="btn btn-primary">Réserver </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Suite avec Vue sur la Piscine -->
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/5.jpg" alt="Suite avec Vue sur la Piscine"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Suite avec Vue sur la Piscine</a></h5>
                                    <span>Lit double</span>
                                    <span>2 Chambres disponibles</span>
                                </div>
                                <p>Détendez-vous dans notre Suite avec Vue sur la Piscine, offrant un cadre luxueux et des vues magnifiques sur la piscine.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <a href="{{Route('chambres.suite-vue-sur-la-piscine')}}" class="btn btn-primary">Réserver </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
