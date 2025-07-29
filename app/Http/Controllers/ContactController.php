<?php
namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1️⃣ Validation des champs
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255||unique:contacts,email',
            'phone' => [
                'required',
                'regex:/^\+?[0-9]{9,15}$/',
                'max:20',
                'unique:contacts,phone',
            ],
            // 'sexe'  => 'nullable|in:Homme,Femme,homme,femme,Autre',
            'age'   => 'nullable|integer|min:0|max:120',

        ], [
            'email.unique'  => 'Cet e-mail est déjà enregistré. Veuillez en utiliser un autre.',
               'phone.unique'  => 'Ce numéro de téléphone est déjà enregistré. Veuillez en utiliser un autre.',
            'phone.regex'   => 'Le numéro de téléphone doit contenir uniquement des chiffres (9 à 15) et peut commencer par +.',
            // 'sexe.required' => 'Le champ sexe est obligatoire.',
        ]);

        // 2️⃣ Enregistrement des informations en base de données
        $contact = contact::create([
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'phone'   => $validated['phone'] ?? null,
            'sexe'    => $validated['sexe'] ?? null,
            'age'     => $validated['age'] ?? null,
            'message' => $validated['message'] ?? null,
        ]);

        // 3️⃣ Préparer le texte du mail
        $emailText = "Nouveau formulaire ProxyDoc\n\n"
            . "Nom : {$contact->name}\n"
            . "Email : {$contact->email}\n"
            . "Téléphone : {$contact->phone}\n"
            . "Sexe : {$contact->sexe}\n"
            . "Âge : {$contact->age}\n";

        // 4️⃣ Envoi du mail à l'adresse de contact ProxyDoc
        Mail::raw($emailText, function ($message) {
            $message->to('s.masimango@proxydoc.org')
                ->subject('Nouveau message via le formulaire ProxyDoc');
        });

        // 5️⃣ Réponse JSON pour indiquer que tout s'est bien passé
        return response()->json([
            'message' => 'Votre inscription a bien été enregistrée. Nous vous tiendrons informé du lancement de ProxyDoc.',
        ]);
    }
}
