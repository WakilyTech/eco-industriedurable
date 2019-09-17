<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Valide;
use App\Notifications\NotificationMail;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('inscription.register');
    }

    public function store()
    {


        $utilisateur = new User();


        $utilisateur->entite = request('entite');
        $utilisateur->responsable = request('Representant');
        $utilisateur->adresse = request('adresse');
        $utilisateur->telephone = request('tel');
        $utilisateur->bp = request('bp');
        $utilisateur->email = request('email');
        $utilisateur->login = request('login');
        $utilisateur->mdp = bcrypt(request('password'));
        $utilisateur->profil = request('profil');
        $utilisateur->save();


        $utilisateur->notify(new NotificationMail($utilisateur));



        return view('welcome');
    }
}
