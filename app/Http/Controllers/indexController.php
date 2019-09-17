<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Valide;
use App\Notifications\NotificationMail;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('index.administrateur');
    }
    public function create()
    {
        return view('index.partenaire');
    }

    public function show()
    {
       // return view('index.index');
    }
    public function edit(Request $request,$id)
    {
        $user = User::find($id);
        return view('demande.editerCompte', compact('user'));
    }
    public function  update(Request $request,$id)
    {
        $user = User::find($id);

        $user->responsable = $request->get('NP');
        $user->telephone = $request->get('Tel');
        $user->adresse = $request->get('adresse');
        $user->email = $request->get('Mail');
        $user->profil = $request->get('profil');
        $user->login = $request->get('Login');
        $user->mdp = bcrypt($request->get('password'));

        $user->update();

        return view('entreprise.acceuilEntreprise');
    }
    public function store()
    {
        return view('index.index');
    }
    public function destroy()
    {
        return view('index.index');
    }

}
