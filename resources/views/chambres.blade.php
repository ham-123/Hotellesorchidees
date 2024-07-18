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
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/1.jpg" alt="Chambre à réserver"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Chambre Classique</a></h5>
                                    <span>Lit double</span>
                                </div>
                                <p>Cubilia luctus cursus augue vivamus parturient porta ultr cursus fermentum laoreet.
                                    Venenatis nostra consectetuer.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                                <div class="room-size">12 X 15 pieds carrés</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <div class="h5 per-night text-secondery">80$<small> / Nuit</small></div>
                            <a href="#" class="btn btn-primary">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/2.jpg" alt="Booking Room"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Chambre Double</a></h5>
                                    <span>Lit double</span>
                                </div>
                                <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen laoreet.
                                    Venenatis nostra consectetuer.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                                <div class="room-size">12 X 15 Sqft</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <div class="h5 per-night text-secondery">$150<small> / Night</small></div>
                            <a href="#" class="btn btn-primary">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="room-thumb-list-1 hover_zoom bg-white mb-4 shadow">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="overflow_hidden"><img src="img/chambres/3.jpg" alt="Booking Room"></div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-7">
                        <div class="py-3 h-100">
                            <div class="room-info">
                                <div class="down-line-left mb-3">
                                    <h5 class="title"><a class="text-secondery" href="#">Suite 2 Pièces</a></h5>
                                    <span>Lit double</span>
                                </div>
                                <p>Cubilia luctus cursus augue augue vivamus parturient porta ultr cursus fermen
                                    laoreet. Venenatis nostra consectetuer.</p>
                                <ul class="facility-icon">
                                    <li><i class="flaticon-tv"></i></li>
                                    <li><i class="flaticon-wifi"></i></li>
                                </ul>
                                <div class="room-size">12 X 15 Sqft</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="for-booking">
                            <div class="h5 per-night text-secondery">$200<small> / Night</small></div>
                            <a href="#" class="btn btn-primary">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la vue liste des chambres -->
@endsection
