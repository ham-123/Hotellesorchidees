@extends('layouts.orchideeslayouts')

@section('title', 'Chambre Classique')

@section('content')
    <!-- Section de la bannière de la page -->
    <div class="full-row overlay-secondery-opacity-65 bg-img-5" id="page-banner">
        <div class="container">
            <div class="row py-80">
                <div class="col-sm-6">
                    <h1 class="banner-title text-white">Chambre Classique</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="pages-link">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li>/</li>
                        <li><a href="{{ url('/chambres') }}">Chambres</a></li>
                        <li>/</li>
                        <li>Chambre Classique</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section de la bannière de la page -->

    <!-- Début de la vue détaillée de la chambre classique -->
    <section class="full-row bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/chambres/1.jpg') }}" alt="Chambre Classique" class="img-fluid mb-4">
                </div>
                <div class="col-md-6">
                    <h1 class="mb-4">Chambre Classique</h1>
                    <p>Nombre de chambres: <strong>7</strong></p>
                    <h3 class="mb-3">Tarifs (TVA et taxes de séjour incluses):</h3>
                    <ul class="list-group mb-4">
                        <li class="list-group-item">Une personne avec petit-déjeuner: <strong>63,500</strong></li>
                        <li class="list-group-item">Une personne sans petit-déjeuner: <strong>58,500</strong></li>
                        <li class="list-group-item">Deux personnes avec petit-déjeuner: <strong>73,500</strong></li>
                        <li class="list-group-item">Deux personnes sans petit-déjeuner: <strong>63,500</strong></li>
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
    <!-- Fin de la vue détaillée de la chambre classique -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('date_arrivee').setAttribute('min', today);
        document.getElementById('date_arrivee').setAttribute('value', today);

        const tarifs = {
            '1_person_avec_petit_dejeuner': 63500,
            '1_person_sans_petit_dejeuner': 58500,
            '2_persons_avec_petit_dejeuner': 73500,
            '2_persons_sans_petit_dejeuner': 63500
        };

        function genererNumeroReservation() {
            var timestamp = new Date().getTime();
            return 'RES-' + timestamp;
        }

        function calculerMontantTotal() {
            const nombrePersonnes = document.getElementById('nombre_personnes').value;
            const optionPetitDejeuner = document.getElementById('option_petit_dejeuner').value;
            const dateArrivee = new Date(document.getElementById('date_arrivee').value);
            const dateDepart = new Date(document.getElementById('date_depart').value);
            const nombreNuits = Math.max(Math.ceil((dateDepart - dateArrivee) / (1000 * 60 * 60 * 24)), 0);
            const key = `${nombrePersonnes}_person${nombrePersonnes > 1 ? 's' : ''}_${optionPetitDejeuner}`;
            const prixParNuit = tarifs[key] || 0;
            const montantTotal = prixParNuit * nombreNuits;
            
            document.getElementById('nombre_nuits').value = nombreNuits;
            document.getElementById('montant_total').value = montantTotal;
        }

        document.getElementById('nombre_personnes').addEventListener('change', calculerMontantTotal);
        document.getElementById('option_petit_dejeuner').addEventListener('change', calculerMontantTotal);
        document.getElementById('date_arrivee').addEventListener('change', calculerMontantTotal);
        document.getElementById('date_depart').addEventListener('change', calculerMontantTotal);

        document.getElementById('numero_reservation').value = genererNumeroReservation();

        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('numero_reservation').value = genererNumeroReservation();
        });

        calculerMontantTotal();
    });
</script>
