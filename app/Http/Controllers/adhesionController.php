<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Entreprise;
use App\Models\Environnement;
use App\Models\FonctionProductionMaintenance;
use App\Models\EnergieRenouvelable;
use App\Models\PrincipaleMatierePremiere;
use App\Models\ProduitService;
use App\Models\Projet;
use App\Models\ConsommationCombustible;
use App\Models\Utilite;
use Auth;


class adhesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user=Auth::user();

        return view('entreprise.acceuilEntreprise',compact('user'));
    }

    public function create()
    {
        return view('entreprise.adhesion');
    }


    public function store(Request $request)
    {
        $entreprise= new Entreprise();
        $environnement= new Environnement();
        $fonction= new FonctionProductionMaintenance();
        $energie= new EnergieRenouvelable();
        $matiere= new PrincipaleMatierePremiere();
        $produit= new ProduitService();
        $projet= new Projet();
        $consommation= new ConsommationCombustible();
        $utile= new Utilite();



      $id= Auth::user()->id;

        //dump(Auth::user()->id);

        $entreprise->raison_sociale = Auth::user()->entite;
        $entreprise->registre_commerce = request('RegisterC');
        $entreprise->matricule_fiscale = request('Matricule');
        $entreprise->adresse = Auth::user()->adresse;
        $entreprise->date_creation = request('DateC');
        $entreprise->date_production = request('DateP');
        $entreprise->responsable = Auth::user()->responsable;
        $entreprise->forme_juridique = request('Forme');
        $entreprise->capital = request('capital');
        $entreprise->chiffre_affaires = request('Chiffre');
        $entreprise->certification_iso = request('Certification');
        $entreprise->salaries_permanents = request('Permanents');
        $entreprise->temporaires = request('Temporaires');
        $entreprise->gmao1 = request('gmao');
        $entreprise->sous_traitance1 = request('sousT');
        $entreprise->type_abonnement = request('abonnement');
        $entreprise->puissance_souscrite = request('Puissance');
        $entreprise->facture_annuelle = request('Facture');
        $entreprise->secours = request('secours');
        $entreprise->typesecours = request('type');
        $entreprise->autre = request('Autres');
        $entreprise->part_secourue = request('Part');
        $entreprise->emballage = request('Emballages');
        $entreprise->prelevement = request('PRELEVEMENT');
        $entreprise->autre1 = request('autres1');
        $entreprise->rejet = request('rejet');
        $entreprise->autre2 = request('autres2');
        $entreprise->enlevement = request('principe');
        $entreprise->vaporisation_interne_possible = request('vaporisation');
        $entreprise->statut_autorisation = request('NP');
        $entreprise->decison = 'Traitement';
        $entreprise->id_user = $id;

        $entreprise->save();



        $idt=$entreprise->id;


        $environnement->detailRoute = request('detailRoutes');
        $environnement->distanceRoute = request('distanceRoutes');
        $environnement->detailsPlan = request('detailPlan');
        $environnement->distancePlan = request('distancePlan');
        $environnement->detailsPublic = request('detailEtablissement');
        $environnement->distancePublic = request('distanceEtablissement');
        $environnement->detailsCommerciaux = request('detailCommercial');
        $environnement->distanceCommerciaux = request('distanceCommercial');
        $environnement->detailsIndustriels = request('detailIndustriel');
        $environnement->distanceIndustriels = request('distanceIndustriel');
        $environnement->identreprise = $idt;
        $environnement->save();

        $fonction->lignes_de_production_services = request('PS1');
        $fonction->annee_de_mise_en_service = request('AP1');
        $fonction->capacite = request('Capacité1');
        $fonction->unite = request('Unité1');
        $fonction->lignes_de_production_services1 = request('PS2');
        $fonction->annee_de_mise_en_service1 = request('AP2');
        $fonction->capacite1 = request('Capacité2');
        $fonction->unite1 = request('Unité2');
        $fonction->lignes_de_production_services2 = request('PS3');
        $fonction->annee_de_mise_en_service2 = request('AP3');
        $fonction->capacite2 = request('Capacité3');
        $fonction->unite2 = request('Unité3');
        $fonction->lignes_de_production_services3 = request('PS4');
        $fonction->annee_de_mise_en_service3 = request('AP4');
        $fonction->capacite3 = request('Capacité4');
        $fonction->unite3 = request('Unité4');
        $fonction->identreprise = $idt;
        $fonction->save();

        $energie->energieBiomasse = request('EnergieB');
        $energie->serviceBiomasse = request('serviceBiomasse');
        $energie->utiliteBiomasse = request('UtilitéBiomasse');
        $energie->puissanceBiomasse = request('PuissanceBiomasse');
        $energie->energieSolaire = request('EnergieS');
        $energie->serviceSolaire = request('annéeSolaire');
        $energie->utiliteSolaire = request('utiliteSolaire');
        $energie->puissanceSolaire = request('puissanceSolaire');
        $energie->energieCogeneration = request('produite');
        $energie->serviceCogeneration = request('anneeCogénération');
        $energie->utiliteCogeneration = request('utiliteCogénération');
        $energie->puissanceCogeneration = request('puissanceCogénération');
        $energie->energieAutres = request('autresEnergie');
        $energie->serviceAutres = request('anneeAutre');
        $energie->utiliteAutres = request('utiliteAutres');
        $energie->puissanceAutres = request('puissanceAutres');
        $energie->identreprise = $idt;
        $energie->save();

        $matiere->designation = request('DesignationP');
        $matiere->origine = request('OrigineP');
        $matiere->designation1 = request('DesignationP2');
        $matiere->origine1 = request('OrigineP2');
        $matiere->designation2 = request('DesignationP3');
        $matiere->origine2 = request('OrigineP3');
        $matiere->identreprise = $idt;
        $matiere->save();

        $produit->designation = request('Designation1');
        $produit->part_chiffre_affaire = request('Affaire1');
        $produit->designation2 = request('Designation2');
        $produit->part_chiffre_affaire2 = request('Affaire2');
        $produit->designation3 = request('Designation3');
        $produit->part_chiffre_affaire3 = request('Affaire3');
        $produit->designation4 = request('Designation4');
        $produit->part_chiffre_affaire4 = request('Affaire4');
        $produit->identreprise = $idt;
        $produit->save();

        $projet->question1 = request('pole');
        $projet->datedeme = request('Date1');
        $projet->question2 = request('diversification');
        $projet->datepro = request('Date2');
        $projet->question3 = request('énergie');
        $projet->dateinstall = request('Date3');
        $projet->question4 = request('environnemental');
        $projet->datecellule = request('Date4');
        $projet->question5 = request('problème');
        $projet->impact = request('approvisionnement');
        $projet->question6 = request('renouvelable');
        $projet->projet = request('projet');
        $projet->question7 = request('potentiel');
        $projet->modequestion7 = request('potentielV');

        $projet->datee = request('le');
        $projet->lieu = request('lieu');
        $projet->responsable1 = request('respo');
        $projet->identreprise = $idt;
        $projet->save();

        $consommation->usageDiesel = request('DieselU');
        $consommation->factureDiesel = request('DieselF');
        $consommation->usageFuel = request('FuelU');
        $consommation->factureFuel = request('FuelF');
        $consommation->usageGaz = request('GazU');
        $consommation->factureGaz = request('GazF');
        $consommation->usageAutres = request('AutresU');
        $consommation->factureAutres = request('AutresF');
        $consommation->identreprise = $idt;
        $consommation->save();


        $utile->Vapeur=request('Vapeur');
        $utile->Commentaire=request('comVapeur');
        $utile->Air_comprime=request('Air');
        $utile->Commentaire1=request('comAir');
        $utile->Froid=request('Froid');
        $utile->Commentaire2=request('comFroid');
        $utile->Chaleur_Process= request('Chaleur');
        $utile->Commentaire3= request('comChaleur');
        $utile->save();





        return redirect()->route('adhesion.index')->with('success', 'Adhesion envoyer!');



    }

}
