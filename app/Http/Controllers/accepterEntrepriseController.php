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


class accepterEntrepriseController extends Controller
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

        $user= Auth::user()->id;

        $affichage=Entreprise::where('id_user',$user)->where('decison','Accepter')->get();




        return view('demande.accepterEntreprise',compact('affichage'));
    }

    public function create()
    {
        $user= Auth::user()->id;
        $affichage=Entreprise::where('id_user',$user)->get();




        return view('demande.demande',compact('affichage'));
    }

    public function store()
    {
        $affichage=Entreprise::where('decison','Accepter')->get();

        return view('demande.rejeter',compact('affichage'));
    }

}
