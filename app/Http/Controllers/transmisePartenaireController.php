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


class transmisePartenaireController extends Controller
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

        $affichage=Entreprise::where('statut_autorisation','classer')->get();




        return view('demande.transmisePartenaire',compact('affichage'));
    }

    public function create()
    {
        $affichage=Entreprise::where('decison','Refuser')->get();




        return view('demande.rejerPartenaire',compact('affichage'));
    }

    public function store()
    {
        $affichage=Entreprise::where('decison','Refuser')->get();

        return view('demande.rejeter',compact('affichage'));
    }

}
