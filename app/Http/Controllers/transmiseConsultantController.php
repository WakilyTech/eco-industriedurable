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


class transmiseConsultantController extends Controller
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

        $affichage=Entreprise::where('decison','Traitement')->where('statut_autorisation','Consultant')->get();




        return view('demande.transmiseConsultant',compact('affichage'));
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
