<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
    public function show()
    {
        return view('login.show');
    }
    public function login(Request $request)
    {
        $login = $request->login;
        $password = $request->password;
        
        // Retrieve the formateur from the database based on the provided email
        $formateur = User::where('email', $login)->first();

        // Check if the formateur exists and the provided password is correct
        if ($formateur && Auth::attempt(['email' => $login, 'password' => $password])) {
            $request->session()->regenerate();

            // Access the 'nom' and 'prenom' attributes of the authenticated formateur
            $nom = $formateur->nom;

            // Redirect to the permutations.create route with the formateur's name
            return redirect()->route('dashbord.home')->with([
                'success' => 'Vous êtes bien connecté ' .  auth()->user()->nom ,
            ]);
        } else {
            return back()->withErrors(['login' => 'Email ou mot de passe incorrect'])->onlyInput('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('articles.index')->with('done','vous etes bien deconecte');
    }
}
