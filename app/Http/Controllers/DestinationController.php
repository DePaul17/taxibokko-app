<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\Hash;

class DestinationController extends Controller
{
    public function form_gestionTrajet()
    {
        $users = Destination::paginate(3);
        return view('gestionTrajet', [
                'users' => $users
        ]);
    }

    public function traitement_trajet(Request $request)
    {
        $request->validate([
            'depart' => 'required|unique:destinations,depart',
            'arrivee' => 'required|unique:destinations,arrivee',
        ]);
        $trajet = new Destination();
        $trajet->depart = $request->input('depart');
        $trajet->arrivee = $request->input('arrivee');
        $trajet->save();

        return redirect('/gestionTrajet')->with('message', 'trajet a été créé avec succès!');
    }

    public function destroy($id)
    {
        $element = Destination::findOrFail($id);
        $element->delete();
        return redirect()->back()->with('success', 'Le trajet a été supprimé avec succès');
    }
}

?>