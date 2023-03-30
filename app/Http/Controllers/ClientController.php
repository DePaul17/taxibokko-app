<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{

    public function form_welcome()
    {
        return view('welcome');
    }

    public function form_register()
    {
        return view('register');
    }

    public function form_login()
    {
        return view('login');
    }

    public function form_gestionClient()
    {
        $users = Client::paginate(3);
        return view('gestionClient', [
                'users' => $users
        ]); 
    }

    public function traitement_register(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|min:9|unique:clients',
            'email' => 'email|required|unique:clients',
            'password' => 'required|min:8',
        ]);
        $client = new Client();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->telephone = $request->input('telephone');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->save();

        return redirect('/register')->with('message', 'Votre compte a été créé avec succès!');
    }

    public function form_taxibokko()
    {
        return view('taxibokko');
    }

    public function traitement_login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8',
        ]);
        $client = Client::where('email', $request->input('email'))->first();
        if($client){
            if(Hash::check($request->input('password'), $client->password)){
                $request->session()->put('client', $client);
                return redirect('/accueil');
            }else{
                return back()->with('message', 'Identifiant ou mot de passe incorect!');
            }
        }else{
            return back()->with('message', 'Désolé aucun compte trouvé pour cette adresse!');
        }
    }

    public function destroy($id)
    {
        $element = Client::findOrFail($id);
        $element->delete();
        return redirect()->back()->with('success', 'Le client a été supprimé avec succès');
    }

    public function form_update_user(Request $user)
    {
        return view('update_user', compact("user"));
    }

    public function editUser(Request $request, $user)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "telephone" => "required",
            "email" => "required",
            "password" => "required",
        ]);
    
        $user->editUser([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "password" => $request->password,
        ]);
    
        return redirect()->back()->with('success', 'Client mis à jour avec succès!');
    }

    public function form_accueil()
    {
        return view('accueil');
    }
}

?>