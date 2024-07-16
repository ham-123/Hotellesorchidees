<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Assurez-vous d'avoir créé cette classe Mail

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Envoyer l'email

        try {
            Mail::to('hamidtchemoko9@gmail.com')->send(new ContactFormMail($validatedData));

            return back()->with('success', 'Votre message a été envoyé avec succès!');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de l\'envoi de l\'e-mail. Veuillez réessayer plus tard.');
        }
    }
}
