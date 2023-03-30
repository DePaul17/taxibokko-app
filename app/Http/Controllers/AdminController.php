<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function form_admin()
    {
        return view('admin');
    }

    public function form_management()
    {
        return view('management');
    }

    public function traitement_admin(Request $request){
        $request->validate([
            'email'=>'email|required',
            'password'=>'required|min:8',
        ]);
        
        $admin = Admin::where('email', $request->input('email'))->first();
        
        if ($admin) {
            if ($admin->password === hash('sha1', $request->input('password'))) {
                $request->session()->put('admins', $admin);
                Auth::login($admin);
                return redirect('/management');
            } else {
                return back()->with('message', 'Identifiant ou mot de passe incorrect!');
            }
        } else {
            return back()->with('message', 'Désolé aucun compte administrateur trouvé pour cette adresse!'); 
        }        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/welcome');
    }

    /*
        public function traitement_admin(Request $request) {
            // Valider les champs d'entrée
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);
        
            // Tenter de connecter l'utilisateur
            $admin = $request->only('email', 'password');
            if (Auth::attempt($admin)) {
                // Rediriger l'utilisateur vers la page de destination
                return redirect('/management');
            } else {
                // Échec de l'authentification
                return back()->with('message', 'Identifiant ou mot de passe incorect!');
            }
        }
    */
    

}

?>