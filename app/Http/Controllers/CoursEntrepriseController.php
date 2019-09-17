<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use App\Models\Environnement;
use App\Models\FonctionProductionMaintenance;
use App\Models\EnergieRenouvelable;
use App\Models\PrincipaleMatierePremiere;
use App\Models\ProduitService;
use App\Models\Projet;
use App\Models\ConsommationCombustible;
use Illuminate\Http\Request;
use Auth;


class CoursEntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $user= Auth::user()->id;

        //$listes = Entreprise::all();
        // $aut = $listes->statut_autorisation;

        $affichage=Entreprise::where('id_user',$user)->where('decison','Traitement')->get();


        return view('demande.coursEntreprise',compact('affichage'));
    }

    public function create()
    {
        //

    }

    public function store(Request $request)
    {


       /** $utilisateur = new User();

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




        return redirect()->route('utilisateur.create')->with('success', 'Utilisateur enregistrer!');**/
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $entreprise = Entreprise::find($id);


        $ent = $entreprise->id;

        $environnement=Environnement::where('identreprise',$ent)->first();

        //$environnement = Environnement::all();
        $fonction = FonctionProductionMaintenance::where('identreprise',$ent)->first();
        $energie = EnergieRenouvelable::where('identreprise',$ent)->first();
        $principe = PrincipaleMatierePremiere::where('identreprise',$ent)->first();
        $produit = ProduitService::where('identreprise',$ent)->first();
        $projet = Projet::where('identreprise',$ent)->first();
        $consommation = ConsommationCombustible::where('identreprise',$ent)->first();


        return view('demande.affichageEntreprise',compact('entreprise','environnement','fonction','energie','principe','produit','projet','consommation'));
    }
    public function update(Request $request, $id)
    {
        $entreprise = Entreprise::find($id);

        $entreprise->decison = $request->get('val');
        $entreprise->statut_autorisation = $request->get('class');

        $entreprise->avis_technique = $request->get('motifs');


        $entreprise->update();
        return redirect()->route('demandeEntreprise.index')->with('success', 'Entreprise updated!');

    }

    public function destroy(Request $request)
    {
        /**$entreprise = Entreprise::find($id);
        $entreprise->delete();
        return redirect()->route('demandeEntreprise.index')->with('success', 'Entreprise deleted!');**/


        $entreprise = Entreprise::findOrFail($request->entreprise);
        $entreprise->delete();
        return redirect()->route('demandeEntreprise.index')->with('success', 'Entreprise Delete!');
    }

}
