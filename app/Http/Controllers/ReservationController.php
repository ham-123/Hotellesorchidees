<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'nombre_personnes' => 'required|integer',
            'option_petit_dejeuner' => 'required|string',
            'date_arrivee' => 'required|date',
            'date_depart' => 'required|date',
            'email' => 'required|email',
            'notes' => 'nullable|string',
        ]);

        // Envoyer un email de réservation
        Mail::to('reservation@hotellesorchidees.com')->send(new ReservationMail($validated));

        return back()->with('success', 'Votre réservation a été envoyée avec succès!');
    }
}
