@extends('layouts.orchideeslayouts')

@section('title')
    Bienvenue
@endsection


@section('content')
    <div class="full-row p-0">
        <div id="slider" class="overflow_hidden" style="width:1200px;height:100vh;margin:0 auto;margin-bottom: 0px;">

            <!-- Diapositive 1-->
            <div class="ls-slide"
                data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
                <img width="1920" height="1080" src="img/slider/1.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
                    class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:1100px; font-family:Montserrat; font-size:60px; line-height:80px; top:300px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                    Profiter du confort et d'une décoration moderne pleine de vie.</p>
                <p style="font-weight:400; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:40px; line-height:80px; top:450px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                    Chambre - suite VIP à partir de 70.000 CFA.</p>
                </a>
            </div>

            <!-- Diapositive 2-->
            <div class="ls-slide"
                data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
                <img width="1920" height="1080" src="img/slider/2.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
                    class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:800; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:1000px; font-family:Montserrat; font-size:60px; line-height:80px; top:300px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                    Laissez-vous séduire par le savoureux menu de notre chef </p>
                <p style="font-weight:400; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:40px; line-height:80px; top:450px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                    Africain - Européen
                </p>
            </div>

            <!-- Diapositive 3-->
            <div class="ls-slide"
                data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
                <img width="1920" height="1080" src="img/slider/3.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
                    class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:800; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:1000px; font-family:Montserrat; font-size:60px; line-height:80px; top:300px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                    Des suites luxueuses dans un décor de sable et de pureté.</p>
                <p style="font-weight:400; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                </p>
            </div>

            <!-- Diapositive 4-->
            <div class="ls-slide"
                data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
                <img width="1920" height="1080" src="img/slider/4.jpg" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;"
                    class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:800; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:1000px; font-family:Montserrat; font-size:60px; line-height:80px; top:300px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                    Profitez de notre piscine à débordement avec vue panoramique..</p>
                <p style="font-weight:400; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;"
                    class="ls-l text-white"
                    data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">
                </p>
            </div>
        </div>
    </div>

    <!--Début de la section de recherche de propriété -->
    <div class="full-row property-search-form-1 shadow py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="w-100" action="#" method="post">
                        <div class="row">
                            <div id="datepairExample" class="col-lg-4 col-sm-6">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label class="text-dark">Date d'arrivée</label>
                                        <input type="text" name="date1" class="date start form-control"
                                            placeholder="MM/DD/YYYY">
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label class="text-dark">Date de départ</label>
                                        <input type="text" name="date2" class="date end form-control"
                                            placeholder="MM/DD/YYYY">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-2 col-sm-6">
                                <label class="text-dark">Chambres</label>
                                <div class="quantity">
                                    <input type="number" class="form-control" min="1" max="50" step="1"
                                        value="1">
                                </div>
                            </div>
                            <div class="form-group col-lg-2 col-sm-6">
                                <label class="text-dark">Personnes</label>
                                <div class="quantity">
                                    <input type="number" class="form-control" min="1" max="50"
                                        step="1" value="1">
                                </div>
                            </div>
                            <div class="form-group col-lg-2 col-sm-6">
                                <label class="text-dark">Type de chambre</label>
                                <select class="selectpicker form-control">
                                    <option value="classique">Chambre Classique : 16m²</option>
                                    <option value="standard">Chambre Standard : 17m²</option>
                                    <option value="prestige_de_luxe">Chambre Prestige de Luxe : 18m²</option>
                                    <option value="prestige_vue_sur_mer">Chambre Prestige Vue sur Mer : 20m²</option>
                                    <option value="suite_vue_sur_piscine">Suite Vue sur Piscine : 102m²</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-2 col-sm-6">
                                <button class="btn btn-primary-bg w-100 mt-30">Vérifier </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Fin de la section Recherche de propriété-->

    <!-- Section Début de Nos Salons -->
    <section class="full-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title-area text-center">
                        <h2 class="title left-right-line mb-4">Hôtel</h2>
                    </div>
                    <span style="font-size: 13px" class="subtext text-secondary text-center mb-3 box-width">Nos chambres
                        tout équipées à votre disposition</span>

                </div>
            </div>
            <div class="row">
                <!-- Chambre Classique -->
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="room-size upper-place-bottom-right">12 X 15 Sqft</div>
                            <div class="overflow_hidden"><img src="img/chambres/1.jpg" alt="Chambre Classique"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary"
                                        href="{{ route('chambres.classique') }}">Chambre Classique</a></h6>
                                <span>Lit double</span>
                            </div>
                            <a href="{{ route('chambres.classique') }}" class="btn btn-primary float-right">Réserver
                                </a>
                        </div>
                    </div>
                </div>

                <!-- Chambre Standard -->
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/chambres/2.jpg" alt="Chambre Standard"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary"
                                        href="{{ route('chambres.standard') }}">Chambre Standard</a></h6>
                                <span>Lit double</span>
                            </div>
                            <a href="{{ route('chambres.standard') }}" class="btn btn-primary float-right">Réserver
                                </a>
                        </div>
                    </div>
                </div>

                <!-- Chambre Prestige de Luxe -->
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/chambres/3.jpg" alt="Chambre Prestige de Luxe">
                            </div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary"
                                        href="{{ route('chambres.prestige-de-luxe') }}">Chambre Prestige de Luxe</a></h6>
                                <span>Lit double</span>
                            </div>
                            <a href="{{ route('chambres.prestige-de-luxe') }}"
                                class="btn btn-primary float-right">Réserver </a>
                        </div>
                    </div>
                </div>

                <!-- Chambre Prestige Vue sur la Mer -->
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/chambres/4.jpg"
                                    alt="Chambre Prestige Vue sur la Mer"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary"
                                        href="{{ route('chambres.prestige-vue-sur-la-mer') }}">Chambre Prestige Vue sur la
                                        Mer</a></h6>
                                <span>Lit double</span>
                            </div>
                            <a href="{{ route('chambres.prestige-vue-sur-la-mer') }}"
                                class="btn btn-primary float-right">Réserver </a>
                        </div>
                    </div>
                </div>

                <!-- Suite avec Vue sur la Piscine -->
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/chambres/5.jpg"
                                    alt="Suite avec Vue sur la Piscine"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary"
                                        href="{{ route('chambres.suite-vue-sur-la-piscine') }}">Suite avec Vue sur la
                                        Piscine</a></h6>
                                <span>Lit double</span>
                            </div>
                            <a href="{{ route('chambres.suite-vue-sur-la-piscine') }}"
                                class="btn btn-primary float-right">Réserver </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Nouvelle ligne pour la section "Appartements" -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title-area text-center">
                        <h2 class="title left-right-line mb-4">Appartements</h2>
                    </div>
                    <span style="font-size: 13px" class="subtext text-secondary text-center mb-5 box-width">Nos
                        appartements tout équipés à votre disposition</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4 shadow">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/Appartements/1.jpg" alt="Booking Room"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary" href="#">Studio</a></h6>
                                <span>Lit double</span>
                            </div>
                            <div class="h5 per-night text-secondary">$80<small>/Nuit</small></div>
                            <a href="#" class="btn btn-primary float-right">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4 shadow">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/Appartements/2.jpg" alt="Booking Room"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary" href="#">Suite 2 Pièces</a></h6>
                                <span>Lit double</span>
                            </div>
                            <div class="h5 per-night text-secondary">$120<small>/Nuit</small></div>
                            <a href="#" class="btn btn-primary float-right">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="room-thumb-grid-1 hover_zoom bg-white mb-4 shadow">
                        <div class="thumb-top position-relative">
                            <ul class="facility-icon upper-place-bottom-left">
                                <li><i class="flaticon-hot-tea"></i></li>
                                <li><i class="flaticon-tv"></i></li>
                                <li><i class="flaticon-wifi"></i></li>
                            </ul>
                            <div class="overflow_hidden"><img src="img/Appartements/3.jpg" alt="Booking Room"></div>
                        </div>
                        <div class="room-info p-4">
                            <div class="down-line-left mb-3">
                                <h6 class="title"><a class="text-secondary" href="#">Suite 3 Pièces</a></h6>
                                <span>Lit double</span>
                            </div>
                            <div class="h5 per-night text-secondary">$150<small>/Nuit</small></div>
                            <a href="#" class="btn btn-primary float-right">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Fin de Nos Salons -->


    <div class="full-row py-5 bg-primary text-center">
        <div class="container">
            <div class="fact-counter">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="count wow item m-auto d-table py-3" data-wow-duration="300ms">
                            <div class="h2 text-black"><span class="count-num" data-speed="3000"
                                    data-stop="104">0</span></div>
                            <span class="h5 text-black fw-5">Chambres</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="count wow item m-auto d-table py-3" data-wow-duration="300ms">
                            <div class="h2 text-black"><span class="count-num" data-speed="3000" data-stop="20">0</span>
                            </div>
                            <span class="h5 text-black fw-5">Suite</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="count wow item m-auto d-table py-3" data-wow-duration="200ms">
                            <div class="h2 text-black"><span class="count-num" data-speed="3000"
                                    data-stop="852">0</span></div>
                            <span class="h5 text-black fw-5">Clients Satisfaits</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="count wow item m-auto d-table py-3" data-wow-duration="300ms">
                            <div class="h2 text-black"><span class="count-num" data-speed="3000" data-stop="2">0</span>
                            </div>
                            <span class="h5 text-black fw-5">Site</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section des Réalisations Fin -->

    <!-- Section "Nos Services" Début -->
    <section class="full-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title-area text-center">
                        <h2 class="title left-right-line mb-3">Nos Services</h2>
                    </div>
                    <span class="subtext text-secondary text-center mb-5 box-width">À travers la rue de l'ordinaire</span>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="service-item-2 mb-4 bg-white">
                        <i class="flaticon-bed"></i> <!-- Icon updated for accommodation -->
                        <a class="service-link" href="service-details.html">
                            <h5 class="text-secondery">Hébergement (Chambres et Suites)</h5>
                        </a>
                        <p>Nous proposons diverses chambres et suites confortables pour votre séjour.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-6">
                    <div class="service-item-2 mb-4 bg-white">
                        <i class="flaticon-conference"></i> <!-- Icon updated for meetings -->
                        <a class="service-link" href="service-details.html">
                            <h5 class="text-secondery">Salle de Réunion et Conférence</h5>
                        </a>
                        <p>Grande salle adaptée pour des réunions et conférences professionnelles.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-6">
                    <div class="service-item-2 mb-4 bg-white">
                        <i class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view"></i>
                        <a class="service-link" href="service-details.html">
                            <h5 class="text-secondery">Restauration</h5>
                        </a>
                        <p>Notre restaurant offre une sélection de plats locaux délicieux.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-6">
                    <div class="service-item-2 mb-4 bg-white">
                        <i class="flaticon-swimming-figure"></i>
                        <a class="service-link" href="service-details.html">
                            <h5 class="text-secondery">Piscine</h5>
                        </a>
                        <p>Piscine de haute qualité pour des moments de détente et des événements aquatiques.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-6">
                    <div class="service-item-2 mb-4 bg-white">
                        <i class="flaticon-bar"></i> <!-- Icon updated for bar -->
                        <a class="service-link" href="service-details.html">
                            <h5 class="text-secondery">Bar</h5>
                        </a>
                        <p>Un bar agréable pour profiter de boissons rafraîchissantes et de cocktails.</p>
                    </div>
                </div>
    
                <div class="col-xl-4 col-md-6">
                    <div class="service-item-2 mb-4 bg-white">
                        <i class="flaticon-car"></i> <!-- Icon for car rental -->
                        <a class="service-link" href="service-details.html">
                            <h5 class="text-secondery">Location de Voitures (À venir)</h5>
                        </a>
                        <p>Service de location de voitures pour faciliter vos déplacements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section "Nos Services" Fin -->

    <!-- Section "Nos Installations" Début -->
    <section class="full-row bg-secondery">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="facility py-20">
                        <div class="main-title-area mb-3">
                            <h2 class="title right-line text-white">Nos Installations</h2>
                        </div>
                        <p>Découvrez un monde de confort et de luxe à notre hôtel. Que ce soit en sirotant un cocktail
                            rafraîchissant au bar de notre piscine ensoleillée, en savourant des moments de tranquillité sur
                            notre terrasse panoramique offrant une vue imprenable, ou en explorant nos autres installations
                            sophistiquées telles que notre centre de bien-être et nos espaces de détente, chaque moment
                            passé ici est conçu pour vous offrir une expérience mémorable. Profitez de chaque instant et
                            laissez-vous choyer dans un cadre où le service impeccable rencontre le raffinement du design
                            contemporain</p>

                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="facility-item-1 py-20"> <i class="flaticon-dish"></i>
                                <h5 class="mt-4">Petit-déjeuner Ouvert</h5>
                                <p>Nous ouvrons le petit-déjeuner pour nos clients spéciaux ou ceux qui réservent notre
                                    chambre spéciale. Veuillez vérifier l'option petit-déjeuner lors de la réservation.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="facility-item-1 py-20"> <i class="flaticon-wireless-connection"></i>
                                <h5 class="mt-4">Facilité Wifi Gratuite</h5>
                                <p>Tous nos clients et les personnes séjournant dans nos chambres bénéficient de la
                                    connexion wifi gratuite.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="facility-item-1 py-20"> <i class="flaticon-taxi"></i>
                                <h5 class="mt-4">Navette</h5>
                                <p>Les touristes bénéficient du service de ramassage et de dépôt s'ils le souhaitent.
                                    Veuillez cocher l'option et indiquer votre date d'arrivée.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section "Nos Installations" Fin -->

    <!-- Section Contact Début -->
    <section class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form-3">
                        <div class="main-title-area">
                            <h2 class="title right-line mb-3">Contactez-nous</h2>
                        </div>
                        <span class="subtext text-secondary mb-5">Pour aller plus loin</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form-3">
                        <form class="form-style-1" action="{{ route('send.email') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstname" placeholder="Nom"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Adresse Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Objet">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary-bg mt-3">Envoyer le message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 mt-xs-50">
                    <div class="icon-block-1 mb-5">
                        <i class="fas fa-map-marker-alt"></i>
                        <h6>Adresse du bureau</h6>
                        <span>Boulevard de la Marina, Cotonou</span>
                    </div>
                    <div class="icon-block-1 mb-5">
                        <i class="fas fa-envelope"></i>
                        <h6>Adresse Email</h6>
                        <span>reservation@hotellesorchidees.com</span>
                        <span>contact@hotellesorchidees.com</span>
                    </div>
                    <div class="icon-block-1">
                        <i class="fas fa-phone mr-1"></i>
                        <h6>Numéro de téléphone</h6>
                        <span>+229 95 96 59 90</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section Contact Fin -->

    <!-- Section Galerie d'Images Début -->
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="image-gallery owl-carousel mt-5">
                <div class="item">
                    <a href="img/width/1.jpg" class="img_view" data-fancybox="gallery">
                        <div class="overlay-secondery-opacity-65">
                            <span class="text-primary xy-center"><i class="fa fa-plus"></i></span>
                            <img src="img/width/1.jpg" alt="image" />
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="img/width/2.jpg" class="img_view" data-fancybox="gallery">
                        <div class="overlay-secondery-opacity-65">
                            <span class="text-primary xy-center"><i class="fa fa-plus"></i></span>
                            <img src="img/width/2.jpg" alt="image" />
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="img/width/3.jpg" class="img_view" data-fancybox="gallery">
                        <div class="overlay-secondery-opacity-65">
                            <span class="text-primary xy-center"><i class="fa fa-plus"></i></span>
                            <img src="img/width/3.jpg" alt="image" />
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="img/width/4.jpg" class="img_view" data-fancybox="gallery">
                        <div class="overlay-secondery-opacity-65">
                            <span class="text-primary xy-center"><i class="fa fa-plus"></i></span>
                            <img src="img/width/4.jpg" alt="image" />
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="img/width/5.jpg" class="img_view" data-fancybox="gallery">
                        <div class="overlay-secondery-opacity-65">
                            <span class="text-primary xy-center"><i class="fa fa-plus"></i></span>
                            <img src="img/width/5.jpg" alt="image" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Galerie d'Images Fin -->
@endsection
