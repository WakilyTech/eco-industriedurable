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


class CoursPartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        //$listes = Entreprise::all();
        // $aut = $listes->statut_autorisation;

        $affichage=Entreprise::where('statut_autorisation','consultant')->get();

        //dump($affichage);


        return view('demande.coursPartenaire')->with('affichage',$affichage);
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


        return view('demande.affichagePartenaire',compact('entreprise','environnement','fonction','energie','principe','produit','projet','consommation'));
    }
    public function update(Request $request, $id)
    {
        $entreprise = Entreprise::find($id);

        $entreprise->decison = $request->get('val');
        $entreprise->statut_autorisation = $request->get('class');

        $entreprise->avis_technique = $request->get('motifs');


        $entreprise->update();
        return redirect()->route('demandePartenaire.index')->with('success', 'Entreprise updated!');

    }

    public function destroy(Request $request, $id)
    {


        //dd($request->entreprise_id);
        $entreprise = Entreprise::findOrFail($request->entreprise);
        $entreprise->delete();
        return redirect()->route('demandePartenaire.index')->with('success', 'Entreprise Delete!');
    }

}
