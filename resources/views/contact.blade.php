@extends('layouts.orchideeslayouts')

@section('title', 'Contacts')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
        <div class="container">
            <div class="row py-80">
                <div class="col-sm-6">
                    <h1 class="banner-title text-white">Contact</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="pages-link">
                        <li><a href="{{ Route('accueil') }}">Accueil</a></li>
                        <li>/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <section class="full-row bg-white pb-0">
        <div class="full-row bg-gray p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="map-hotel">
                            <div class="text-center mt-2">
                                <h4>Hôtel</h4>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.367907047891!2d2.4008653753126925!3d6.346381993643439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023545a320e6731%3A0x520d12fce5c01b2d!2zSMO0dGVsIExlcyBPcmNoaWTDqWVz!5e0!3m2!1sfr!2sbj!4v1721059453964!5m2!1sfr!2sbj" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="full-row bg-white pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-secondery contact-info">
                        <h2 class="down-line-left title mb-5">Infos de Contact</h2>
                        <div class="text-block-4 mb-4">
                            <h5>Adresse</h5>
                            <p>Boulevard de la Marina, Cotonou</p>
                        </div>
                        <div class="text-block-4 mb-4">
                            <h5>Envoyez-nous un message</h5>
                            <span>contact@hotellesorchidees.com </span>
                            <span>reservation@hotellesorchidees.com</span>
                        </div>
                        <div class="text-block-4">
                            <h5>Appelez-nous</h5>
                            <span>(+229) 61 41 20 20</span>
                            <span>(+229) 95 96 59 90</span>
                        </div>
                        <ul class="social-media-3">
                            <li><a href="#"></a></li>
                        </ul>
                        <ul class="social-media-3 mt-5 clearfix">
                            <li><a href="https://www.facebook.com/HotelLesOrchidees"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form-1 contact_page">
                        <div class="main-title-area mb-5">
                            <h2 class="title mb-3">Entrer en Contact</h2>
                            <span class="subtext text-secondary">Envoyez-nous un message ici</span>
                        </div>
                        @if (session('success'))
                            <div id="success" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div id="error" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form id="" class="form-style-1 pb-4" action="{{ route('send.email') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="firstname" placeholder="Votre Nom"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Votre Email"
                                            type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="Objet"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" cols="30" rows="6" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="send" class="btn btn-primary-bg mt-3">Envoyer le
                                        Message</button>
                                </div>
                                <div class="col-md-12">
                                    <div class="error-handel">
                                        @if (session('success'))
                                            <div id="success" class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div id="error" class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Section Start -->
@endsection
