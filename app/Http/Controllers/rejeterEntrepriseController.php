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
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class rejeterEntrepriseController extends Controller
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

         $id=Auth::user()->id;

        $affichage=Entreprise::where('id_user',$id)->where('decison','Refuser')->get();

//dump($affichage);

        return view('demande.rejetEntreprise',compact('affichage'));
    }


}
