<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chauffeur;
use Illuminate\Support\Facades\Hash;

class ChauffeurController extends Controller
{

    public function form_registerDriver()
    {
        return view('registerDriver');
    }

    public function form_loginDriver()
    {
        return view('loginDriver');
    }

    public function form_gestionChauffeur()
    {
        $users = Chauffeur::paginate(3);
        return view('gestionChauffeur', [
                'users' => $users
        ]);
    }

    public function traitement_registerDriver(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'marque' => 'required',
            'plaque' => 'required',
            'email' => 'email|required|unique:chauffeurs',
            'password' => 'required|min:8',
        ]);
        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->input('nom');
        $chauffeur->prenom = $request->input('prenom');
        $chauffeur->marque = $request->input('marque');
        $chauffeur->plaque = $request->input('plaque');
        $chauffeur->email = $request->input('email');
        $chauffeur->password = bcrypt($request->input('password'));
        $chauffeur->save();

        return redirect('/registerDriver')->with('message', 'Votre compte a été créé avec succès!');
    }

    public function traitement_loginDriver(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8',
        ]);
        $chauffeur = Chauffeur::where('email', $request->input('email'))->first();
        if($chauffeur){
            if(Hash::check($request->input('password'), $chauffeur->password)){
                $request->session()->put('chauffeur', $chauffeur);
                return redirect('/taxibokko');
            }else{
                return back()->with('message', 'Identifiant ou mot de passe incorect!');
            }
        }else{
            return back()->with('message', 'Désolé aucun compte trouvé pour cette adresse!');
        }
    }

    public function destroy($id)
    {
        $element = Chauffeur::findOrFail($id);
        $element->delete();
        return redirect()->back()->with('success', 'Le chauffeur a été supprimé avec succès');
    }
}

?>