<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trajet;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class TrajetController extends Controller
{
    public function traitement_new_trajet(Request $request)
    {
        $request->validate([
            'departure' => 'required',
            'arrival' => 'required',
            'client_id' => 'required',
        ]);
        //$client = Client::find($request->input('client_id'));
        $trajet = new Trajet();
        $trajet->departure = $request->input('departure');
        $trajet->arrival = $request->input('arrival');
        $trajet->client_id = $request->input('client_id');
        $trajet->save();

        return redirect('/accueil')->with('message', 'Votre compte a été créé avec succès!');
    }
}

?>