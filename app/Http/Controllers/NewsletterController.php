<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
  public function subscribe(Request $request)
{
    // 1️⃣ Validation du champ email (doit être présent et au format email)
    $request->validate([
        'email' => 'required|email'
    ]);

    // 2️⃣ Vérifier si l'email est déjà inscrit
    $existing = newsletter::where('email', $request->email)->first();

    if ($existing) {
        // Si l'email existe déjà, renvoyer une réponse appropriée
        return response()->json([
            'message' => 'Cet e-mail est déjà inscrit à la newsletter.'
        ], 409);
    }

    // 3️⃣ Créer un nouvel enregistrement dans la table newsletters
    newsletter::create([
        'email' => $request->email
    ]);

    // 4️⃣ Retourner un message JSON de confirmation
    return response()->json([
        'message' => 'Merci pour votre inscription !'
    ]);
}
}
