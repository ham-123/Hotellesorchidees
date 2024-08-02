@extends('layouts.orchideeslayouts')

@section('title', 'Suite avec Vue sur la Piscine')

@section('content')
    <!-- Section de la bannière de la page -->
    <div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
        <div class="container">
            <div class="row py-80">
                <div class="col-sm-6">
                    <h1 class="banner-title text-white">Suite avec Vue sur la Piscine</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="pages-link">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li>/</li>
                        <li><a href="{{ url('/chambres') }}">Chambres</a></li>
                        <li>/</li>
                        <li>Suite avec Vue sur la Piscine</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section de la bannière de la page -->

    <!-- Début de la vue détaillée de la suite avec vue sur la piscine -->
    <section class="full-row bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/chambres/5.jpg') }}" alt="Suite avec Vue sur la Piscine" class="img-fluid mb-4">
                </div>
                <div class="col-md-6">
                    <h1 class="mb-4">Suite avec Vue sur la Piscine</h1>
                    <p>Nombre de chambres: <strong>2</strong></p>
                    <h3 class="mb-3">Tarifs:</h3>
                    <ul class="list-group mb-4">
                        <li class="list-group-item">Une personne avec petit-déjeuner: <strong>215,500</strong></li>
                        <li class="list-group-item">Une personne sans petit-déjeuner: <strong>210,000</strong></li>
                        <li class="list-group-item">Deux personnes avec petit-déjeuner: <strong>225,000</strong></li>
                        <li class="list-group-item">Deux personnes sans petit-déjeuner: <strong>215,000</strong></li>
                        <li class="list-group-item">Trois personnes avec petit-déjeuner: <strong>235,000</strong></li>
                        <li class="list-group-item">Trois personnes sans petit-déjeuner: <strong>220,000</strong></li>
                    </ul>

                    <h1 class="mb-4">Formulaire de réservation</h1>
                    <form action="{{ route('reservation.store') }}" method="POST">
                        @csrf
                                            <div class="form-group">
                            <label for="nom">Nom Prénom</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Numéro de téléphone</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_personnes">Nombre de personnes</label>
                            <select class="form-control" id="nombre_personnes" name="nombre_personnes" required>
                                <option value="1">1 personne</option>
                                <option value="2">2 personnes</option>
                                <option value="3">3 personnes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="option_petit_dejeuner">Option de petit-déjeuner</label>
                            <select class="form-control" id="option_petit_dejeuner" name="option_petit_dejeuner" required>
                                <option value="avec_petit_dejeuner">Avec petit-déjeuner</option>
                                <option value="sans_petit_dejeuner">Sans petit-déjeuner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date_arrivee">Date d'arrivée</label>
                            <input type="date" class="form-control" id="date_arrivee" name="date_arrivee" required>
                        </div>
                        <div class="form-group">
                            <label for="date_depart">Date de départ</label>
                            <input type="date" class="form-control" id="date_depart" name="date_depart" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre_nuits">Nombre de nuits</label>
                            <input type="text" class="form-control" id="nombre_nuits" name="nombre_nuits" readonly>
                        </div>
                        <div class="form-group">
                            <label for="numero_reservation">Numéro de la réservation</label>
                            <input type="text" class="form-control" id="numero_reservation" name="numero_reservation" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="montant_total">Montant total de la réservation</label>
                            <input type="text" class="form-control" id="montant_total" name="montant_total" readonly>
                        </div>
                        <div class="form-group">
                            <label for="notes">Note</label>
                            <textarea class="form-control" id="notes" name="notes"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Réserver maintenant</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la vue détaillée de la suite avec vue sur la piscine -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('date_arrivee').setAttribute('min', today);
        document.getElementById('date_arrivee').setAttribute('value', today);

        const tarifs = {
            '1_person_avec_petit_dejeuner': 215500,
            '1_person_sans_petit_dejeuner': 210000,
            '2_persons_avec_petit_dejeuner': 225000,
            '2_persons_sans_petit_dejeuner': 215000,
            '3_persons_avec_petit_dejeuner': 235000,
            '3_persons_sans_petit_dejeuner': 220000
        };

        function generateReservationNumber() {
            var timestamp = new Date().getTime();
            return 'RES-' + timestamp;
        }

        function calculateTotalAmount() {
            const persons = document.getElementById('nombre_personnes').value;
            const breakfastOption = document.getElementById('option_petit_dejeuner').value;
            const arrivalDate = new Date(document.getElementById('date_arrivee').value);
            const departureDate = new Date(document.getElementById('date_depart').value);
            const nights = Math.max(Math.ceil((departureDate - arrivalDate) / (1000 * 60 * 60 * 24)), 0);
            const key = `${persons}_person${persons > 1 ? 's' : ''}_${breakfastOption}`;
            const pricePerNight = tarifs[key] || 0;
            const totalAmount = pricePerNight * nights;
            
            document.getElementById('nombre_nuits').value = nights;
            document.getElementById('montant_total').value = totalAmount;
        }

        document.getElementById('nombre_personnes').addEventListener('change', calculateTotalAmount);
        document.getElementById('option_petit_dejeuner').addEventListener('change', calculateTotalAmount);
        document.getElementById('date_arrivee').addEventListener('change', calculateTotalAmount);
        document.getElementById('date_depart').addEventListener('change', calculateTotalAmount);

        document.getElementById('numero_reservation').value = generateReservationNumber();

        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('numero_reservation').value = generateReservationNumber();
        });

        calculateTotalAmount();
    });
</script>
