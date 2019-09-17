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


class accepterController extends Controller
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

        $affichage=Entreprise::where('decison','Accepter')->get();




        return view('demande.accepterAdmin',compact('affichage'));
    }

    public function create()
    {
        $affichage=Entreprise::where('decison','Accepter')->get();




        return view('demande.accepterPartenaires',compact('affichage'));
    }

    public function show()
    {
       /** $affichage=Entreprise::where('decison','Accepter')->get();

        return view('demande.accepter',compact('affichage'));**/
    }

}
