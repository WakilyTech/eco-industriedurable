<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Valide;
use App\Notifications\NotificationMail;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('demande.ajoutUtilisateur');
    }

    public function create()
    {
        $listes= User::all();
        return view('demande.liste', compact('listes'));

    }

    public function store(Request $request)
    {


        $utilisateur = new User();

        request()->validate([
            'Mail' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);


        $utilisateur->entite = 'Utilisateur';
        $utilisateur->responsable = request('NP');
        $utilisateur->adresse = request('adresse');
        $utilisateur->telephone = request('Tel');
        $utilisateur->bp = request('bp');
        $utilisateur->email = request('Mail');
        $utilisateur->login = request('Login');
        $utilisateur->mdp = bcrypt(request('password'));
        $utilisateur->profil = request('profil');
        $utilisateur->save();




        return redirect()->route('utilisateur.create')->with('success', 'Utilisateur enregistrer!');
    }


    public function show($id)
    {
        //
    }


    public function edit(Request $request,$id)
    {
        $user = User::find($id);
        return view('demande.editer', compact('user'));

    }

    public function update(Request $request,$id)
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

        return redirect()->route('utilisateur.create')->with('success', 'Utilisateur enregistrer!');


    }

    public function destroy(Request $request)
    {
        $utilisateur = User::findOrFail($request->entreprise);
        $utilisateur->delete();
        return redirect()->route('utilisateur.create')->with('success', 'Entreprise Delete!');;
    }
}
