@extends('layouts.appEntreprise')
@section('title', 'Accueil')
@section('content')

    <!-- Page-Title -->
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Affichage de vos Information !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Ville</a></li>
                <li class="active">Durable</li>
            </ol>
        </div>
    </div>

    <!-- Start Widget -->
    <!--Widget-4 -->
    <div class="row">
        <div class="col-lg-15">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'ENTREPRISE')">ENTREPRISE</button>
                <button class="tablinks" onclick="openCity(event, 'INFORMATION')">INFORMATION ENTREPRISE</button>
                <button class="tablinks" onclick="openCity(event, 'EFFICACITE')">EFFICACITE ENERGETIQUE</button>
                <button class="tablinks" onclick="openCity(event, 'ENVIRONNEMENT')">ENVIRONNEMENT</button>
                <button class="tablinks" onclick="openCity(event, 'PROJETS')">VOS PROJETS</button>
                <button class="tablinks" onclick="openCity(event, 'FINISH')">FINISH</button>
            </div>
            <form action="{{ route('demandeEntreprise.update',$entreprise->id) }}" method="post" class="section">
                @method('PUT')
                {{csrf_field("get")}}

                <div id="ENTREPRISE" class="tabcontent">
                    <h3>ENTREPRISE</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Raison Social*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="Raison" name="Raison" type="text" disabled="disabled" value="{{$entreprise->raison_sociale}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Adresse Entité *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="adresse_entite" name="adresse_entite" type="text" disabled="disabled" value="{{$entreprise->adresse}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">N°Registre de Commerce *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="RegisterC" name="RegisterC" type="text" disabled="disabled" value="{{$entreprise->registre_commerce}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">N° Matricule fiscal (NINEA) *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Matricule" name="Matricule" type="text" disabled="disabled" value="{{$entreprise->matricule_fiscale}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Date de création *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="DateC" name="DateC" type="date" disabled="disabled" value="{{$entreprise->date_creation}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Date d’entrée en production *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="DateP" name="DateP" type="date" disabled="disabled" value="{{$entreprise->date_production}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Nom et Prénom du Responsable *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="NomR" name="NomR" type="text" disabled="disabled" value="{{$entreprise->responsable}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Forme Juridique *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="forme_juridique" name="forme_juridique" type="text" disabled="disabled" value="{{$entreprise->forme_juridique}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Capital *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="capital" name="capital" type="text" disabled="disabled" value="{{$entreprise->capital}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Chiffre d'Affaire *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="chiffre_affaires" name="chiffre_affaires" type="text" disabled="disabled" value="{{$entreprise->chiffre_affaires}}">
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Certification ISO *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="certification_iso" name="certification_iso" type="text" disabled="disabled" value="{{$entreprise->certification_iso}}">
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Salariés Permanents </label>
                        <div class="col-lg-3">
                            <input class="form-control" id="salaries_permanents" name="salaries_permanents" type="text" disabled="disabled" value="{{$entreprise->salaries_permanents}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Salariés Temporaires </label>
                        <div class="col-lg-3">
                            <input class="form-control" id="temporaires" name="temporaires" type="text" disabled="disabled" value="{{$entreprise->temporaires}}">
                        </div>
                    </div>
                </div>
                <div id="INFORMATION" class="tabcontent">
                    <h3>LES PRINCIPAUX PRODUITS ET SERVICES</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Designation *</label>
                        <div class="col-lg-4">
                            <input class="form-control" id="Designation1" name="Designation1" type="text" disabled="disabled" value="{{$produit->designation}}">
                            <br>
                            <input class="form-control" id="Designation2" name="Designation2" type="text" disabled="disabled" value="{{$produit->designation2}}">
                            <br>
                            <input class="form-control" id="Designation3" name="Designation3" type="text" disabled="disabled" value="{{$produit->designation3}}">
                            <br>
                            <input class="form-control" id="Designation4" name="Designation4" type="text" disabled="disabled" value="{{$produit->designation4}}">

                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Part % du Chiffre d'Affaire  *</label>
                        <div class="col-lg-4">
                            <input class="form-control" id="Affaire1" name="Affaire1" type="text" disabled="disabled" value="{{$produit->part_chiffre_affaire}}">
                            <br>
                            <input class="form-control" id="Affaire2" name="Affaire2" type="text" disabled="disabled" value="{{$produit->part_chiffre_affaire2}}">
                            <br>
                            <input class="form-control" id="Affaire3" name="Affaire3" type="text" disabled="disabled" value="{{$produit->part_chiffre_affaire3}}">
                            <br>
                            <input class="form-control" id="Affaire4" name="Affaire4" type="text" disabled="disabled" value="{{$produit->part_chiffre_affaire4}}">
                        </div>
                    </div>
                    <br><br><br>
                    <h3>LES PRINCIPALES MATIERES PREMIERES</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Designation *</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="DesignationP" name="DesignationP" type="text" disabled="disabled"   value="{{$principe->designation}}">
                            <br>
                            <input class="form-control" id="DesignationP1" name="DesignationP2" type="text" disabled="disabled" value="{{$principe->designation1}}">
                            <br>
                            <input class="form-control" id="DesignationP2" name="DesignationP3" type="text" disabled="disabled" value="{{$principe->designation2}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-1">Origine  *</label>
                        <div class="col-lg-6">
                            <div class="col-lg-3">
                                <input class="form-control" id="origine" name="origine" type="text" disabled="disabled" value="{{$principe->origine}}">
                            </div>

                            <br><br>
                            <div class="col-lg-3">
                                <input class="form-control" id="origine1" name="origine1" type="text" disabled="disabled" value="{{$principe->origine1}}">
                            </div>
                            <br><br>
                            <div class="col-lg-3">
                                <input class="form-control" id="origine2" name="origine2" type="text" disabled="disabled" value="{{$principe->origine2}}">
                            </div>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Emballages Utilisés </label>
                        <div class="col-lg-3">
                            <input class="form-control" id="emballage" name="emballage" type="text" disabled="disabled" value="{{$entreprise->emballage}}">
                        </div>
                    </div>
                    <br><br><br>
                    <h3>FONCTION PRODUCTION ET MAINTENANCE</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Lignes Production/Services</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="PS1" name="PS1" type="text" disabled="disabled" value="{{$fonction->lignes_de_production_services}}">
                            <br>
                            <input class="form-control" id="PS2" name="PS2" type="text" disabled="disabled" value="{{$fonction->lignes_de_production_services1}}">
                            <br>
                            <input class="form-control" id="PS3" name="PS3" type="text" disabled="disabled" value="{{$fonction->lignes_de_production_services2}}">
                            <br>
                            <input class="form-control" id="PS4" name="PS4" type="text" disabled="disabled" value="{{$fonction->lignes_de_production_services3}}">
                        </div>

                        <label for="adresse_structure" class="control-label col-lg-1">Année production</label>

                        <div class="col-lg-2">
                            <input class="form-control" id="AP1" name="AP1" type="date" disabled="disabled" value="{{$fonction->annee_de_mise_en_service}}">
                            <br>
                            <input class="form-control" id="AP2" name="AP2" type="date" disabled="disabled" value="{{$fonction->annee_de_mise_en_service1}}">
                            <br>
                            <input class="form-control" id="AP3" name="AP3" type="date" disabled="disabled" value="{{$fonction->annee_de_mise_en_service2}}">
                            <br>
                            <input class="form-control" id="AP4" name="AP4" type="date" disabled="disabled" value="{{$fonction->annee_de_mise_en_service3}}">
                        </div>

                        <label for="adresse_structure" class="control-label col-lg-1">Capacité</label>

                        <div class="col-lg-2">
                            <input class="form-control" id="Capacité1" name="Capacité1" disabled="disabled" type="text" value="{{$fonction->capacite}}">
                            <br>
                            <input class="form-control" id="Capacité2" name="Capacité2" disabled="disabled" type="text" value="{{$fonction->capacite1}}">
                            <br>
                            <input class="form-control" id="Capacité3" name="Capacité3" disabled="disabled" type="text" value="{{$fonction->capacite2}}">
                            <br>
                            <input class="form-control" id="Capacité4" name="Capacité4" disabled="disabled" type="text" value="{{$fonction->capacite3}}">
                        </div>

                        <label for="adresse_structure" class="control-label col-lg-1">/Unité</label>

                        <div class="col-lg-2">
                            <input class="form-control" id="Unité1" name="Unité1" type="text" disabled="disabled" value="{{$fonction->unite}}">
                            <br>
                            <input class="form-control" id="Unité2" name="Unité2" type="text" disabled="disabled" value="{{$fonction->unite1}}">
                            <br>
                            <input class="form-control" id="Unité3" name="Unité3" type="text" disabled="disabled" value="{{$fonction->unite2}}">
                            <br>
                            <input class="form-control" id="Unité4" name="Unité4" type="text" disabled="disabled" value="{{$fonction->unite3}}">
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">GMAO</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="gmao" name="gmao" type="text" disabled="disabled" value="{{$entreprise->gmao1}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Sous-Traitance</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="sous_traitance1" name="sous_traitance1" disabled="disabled" type="text" value="{{$entreprise->sous_traitance1}}">
                        </div>
                    </div>
                </div>

                <div id="EFFICACITE" class="tabcontent">
                    <h3>CONNEXION AU RESEAU ELECTRIQUE SENELEC</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Type d’abonnement</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="type_abonnement" name="type_abonnement" disabled="disabled" type="text" value="{{$entreprise->type_abonnement}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Puissance souscrite (KW)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Puissance" name="Puissance" type="text" disabled="disabled" value="{{$entreprise->puissance_souscrite}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Facture Annuelle(FCFA)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Facture" name="Facture" type="text" disabled="disabled" value="{{$entreprise->facture_annuelle}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Existe-t-il un secours ?</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="secours" name="secours" type="text" disabled="disabled" value="{{$entreprise->secours}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Type de Secours</label>

                        <div class="col-lg-3">
                            <input class="form-control" id="typesecours" name="typesecours" disabled="disabled" type="text" value="{{$entreprise->typesecours}}">
                        </div>

                        <label for="autres" class="control-label col-lg-1">Autres</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Autres" name="Autres" type="text" disabled="disabled" value="{{$entreprise->autre}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Part Secourue (%)</label>
                        <div class="col-lg-5">
                            <input class="form-control" id="Part" name="Part" type="text" disabled="disabled" value="{{$entreprise->part_secourue}}">
                        </div>
                    </div>
                    <br><br>
                    <h3>CONSOMMATION DES COMBUSTIBLES</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Type de combustible</label>
                        <label for="adresse_structure" class="control-label col-lg-3">Usage</label>
                        <label for="adresse_structure" class="control-label col-lg-3">Facture annuelle FCFA</label>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Diesel</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="DieselU" name="DieselU" type="text" disabled="disabled" value="{{$consommation->usageDiesel}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="DieselF" name="DieselF" type="text" disabled="disabled" value="{{$consommation->factureDiesel}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Fuel lourd/Fuel léger</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="FuelU" name="FuelU" type="text" disabled="disabled" value="{{$consommation->usageFuel}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="FuelF" name="FuelF" type="text" disabled="disabled" value="{{$consommation->factureFuel}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Gaz</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="GazU" name="GazU" type="text" disabled="disabled" value="{{$consommation->usageGaz}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="GazF" name="GazF" type="text" disabled="disabled" value="{{$consommation->factureGaz}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Autres</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="AutresU" name="AutresU" type="text" disabled="disabled" value="{{$consommation->usageAutres}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="AutresF" name="AutresF" type="text" disabled="disabled" value="{{$consommation->factureAutres}}">
                        </div>
                    </div>
                    <br><br>
                    <h3>INSTALLATIONS DES ENERGIES RENOUVELABLES ET COGENERATION</h3>
                    <h4>Biomasse</h4>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Energie produite </label>
                        <div class="col-lg-3">
                            <input class="form-control" id="energieBiomasse" name="energieBiomasse" disabled="disabled" type="text" value="{{$energie->energieBiomasse}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="serviceBiomasse" name="serviceBiomasse" disabled="disabled" type="date" value="{{$energie->serviceBiomasse}}" >
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="UtilitéBiomasse" name="UtilitéBiomasse" disabled="disabled" type="text" value="{{$energie->utiliteBiomasse}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="PuissanceBiomasse" name="PuissanceBiomasse" disabled="disabled" type="text" value="{{$energie->puissanceBiomasse}}">
                        </div>
                    </div>
                    <br><br>
                    <h4>Solaire</h4>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Energie produite </label>
                        <div class="col-lg-3">
                            <input class="form-control" id="energieSolaire" name="energieSolaire" disabled="disabled" type="text" value="{{$energie->energieSolaire}}">
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                            <div class="col-lg-2">
                                <input class="form-control" id="annéeSolaire" name="annéeSolaire" disabled="disabled" type="date" value="{{$energie->serviceSolaire}}" >
                            </div>
                            <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                            <div class="col-lg-2">
                                <input class="form-control" id="utiliteSolaire" name="utiliteSolaire" disabled="disabled" type="text" value="{{$energie->utiliteSolaire}}">
                            </div>
                            <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                            <div class="col-lg-2">
                                <input class="form-control" id="puissanceSolaire" name="puissanceSolaire" disabled="disabled" type="text" value="{{$energie->puissanceSolaire}}">
                            </div>
                        </div>
                        <br><br>
                        <h4>Cogénération</h4>
                        <div class="form-group">
                            <label for="adresse_structure" class="control-label col-lg-2">Energie produite </label>
                            <div class="col-lg-3">
                                <input class="form-control" id="energieCogeneration" name="energieCogeneration" disabled="disabled" type="text" value="{{$energie->energieCogeneration}}">
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="anneeCogénération" name="anneeCogénération" disabled="disabled" type="date" value="{{$energie->serviceCogeneration}}" >
                                </div>
                                <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="utiliteCogénération" name="utiliteCogénération" disabled="disabled" type="text" value="{{$energie->utiliteCogeneration}}">
                                </div>
                                <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                                <div class="col-lg-2">
                                    <input class="form-control" id="puissanceCogénération" name="puissanceCogénération" disabled="disabled" type="text" value="{{$energie->puissanceCogeneration}}">
                                </div>
                            </div>
                            <br><br>
                            <h4>Autres</h4>
                            <div class="form-group">
                                <label for="adresse_structure" class="control-label col-lg-2">Energie produite </label>
                                <div class="col-lg-3">
                                    <input class="form-control" id="autresEnergie" name="autresEnergie" disabled="disabled" type="text" value="{{$energie->energieAutres}}">
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" id="anneeAutre" name="anneeAutre" disabled="disabled" type="date" value="{{$energie->serviceAutres}}">
                                    </div>
                                    <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" id="utiliteAutres" name="utiliteAutres" disabled="disabled" type="text" value="{{$energie->utiliteAutres}}">
                                    </div>
                                    <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                                    <div class="col-lg-2">
                                        <input class="form-control" id="puissanceAutres" name="puissanceAutres" disabled="disabled" type="text" value="{{$energie->puissanceAutres}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h4>UTILITES</h4>
                        <div class="form-group">
                            <label for="adresse_structure" class="control-label col-lg-2">Vapeur</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="lieu" name="lieu" disabled="disabled" type="text" value="">
                            </div>
                            <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="comVapeur" name="comVapeur" disabled="disabled" type="text" value="">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="adresse_structure" class="control-label col-lg-2">Air comprimé</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="lieu" name="lieu" disabled="disabled" type="text" value="Lieu">
                            </div>
                            <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="comAir" name="comAir" disabled="disabled" type="text" value="">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="adresse_structure" class="control-label col-lg-2">Froid</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="lieu" name="lieu" disabled="disabled" type="text" value="Lieu">
                            </div>
                            <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="comFroid" name="comFroid" disabled="disabled" type="text" value="">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="adresse_structure" class="control-label col-lg-2">Chaleur Process(Four, séchage</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="lieu" name="lieu" disabled="disabled" type="text" value="Lieu">
                            </div>
                            <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                            <div class="col-lg-3">
                                <input class="form-control" id="comChaleur" disabled="disabled" name="comChaleur" type="text" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ENVIRONNEMENT" class="tabcontent">
                    <h3>PROXIMITE AVEC LE VOISINAGE</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-5">Lieux d’habitations</label>
                        <label for="adresse_structure" class="control-label col-lg-3">Détails</label>
                        <label for="adresse_structure" class="control-label col-lg-3">Distance Approximative</label>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-5">Routes</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="detailRoutes" disabled="disabled" name="detailRoutes" type="text" value="{{$environnement->detailRoute}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="distanceRoutes" disabled="disabled" name="distanceRoutes" type="text" value="{{$environnement->distanceRoute}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-5">Plan d'eau (mer, lacs, rivières, etc.)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="detailPlan" disabled="disabled" name="detailPlan" type="text" value="{{$environnement->detailsPlan}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="distancePlan" disabled="disabled" name="distancePlan" type="text" value="{{$environnement->distancePlan}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-5">Etablissements Recevant du Public(Hôpital, Mosquée,etc.)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="detailEtablissement" disabled="disabled" name="detailEtablissement" type="text" value="{{$environnement->detailsPublic}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="distanceEtablissement" disabled="disabled" name="distanceEtablissement" type="text" value="{{$environnement->distancePublic}}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-5">Etablissements Commerciaux</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="detailCommercial" disabled="disabled" name="detailCommercial" type="text" value="{{$environnement->detailsCommerciaux}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="distanceCommercial" disabled="disabled" name="distanceCommercial" type="text" value="{{$environnement->distanceCommerciaux}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-5">Etablissements Industriels</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="detailIndustriel" disabled="disabled" name="detailIndustriel" type="text" value="{{$environnement->detailsIndustriels}}">
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" id="distanceIndustriel" disabled="disabled" name="distanceIndustriel" type="text" value="{{$environnement->distanceIndustriels}}">
                        </div>
                    </div>
                    <br><br><br><br>
                    <h3>PRELEVEMENT ET UTILISATION D'EAU</h3>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="PRELEVEMENT" disabled="disabled" name="PRELEVEMENT" type="text" value="{{$entreprise->PRELEVEMENT}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Autres (à préciser)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="autres1" disabled="disabled" name="autres1" type="text" value="{{$entreprise->autres1}}">
                        </div>
                    </div>
                    <br><br><br><br>
                    <h3>REJET EAUX DE PROCEDE</h3>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="rejet" disabled="disabled" name="rejet" type="text" value="{{$entreprise->rejet}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Autres (à préciser)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="autres2" disabled="disabled" name="autres2" type="text" value="{{$entreprise->autres2}}">
                        </div>
                    </div>
                    <br><br><br><br>
                    <h3>PRINCIPAUX DECHETS SOLIDES</h3>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Filières d’élimination</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="principe" disabled="disabled" name="principe" type="text" value="{{$entreprise->principe}}">
                        </div>
                    </div>
                    <br><br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-3">Vaporisation interne possible</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="vap" disabled="disabled" name="vap" type="text" value="{{$entreprise->vaporisation}}">
                        </div>
                    </div>
                </div>
                <div id="PROJETS" class="tabcontent">
                    <h4>Avez-vous un projet de déménagement dans le pôle urbain de Diamniadio ?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="question1" disabled="disabled" name="question1" type="text" value="{{$projet->question1}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Date1" disabled="disabled" name="Date1" type="date" value="{{$projet->datedeme}}">
                        </div>
                    </div>
                    <br><br><br>
                    <h4>Avez-vous un projet d'extension ou de diversification?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="question2" disabled="disabled" name="question2" type="text" value="{{$projet->question2}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Date2" disabled="disabled" name="Date2" type="date" value="{{$projet->datepro}}">
                        </div>
                    </div>
                    <br><br><br>
                    <h4>Vos installations sont-elles équipées de compteurs divisionnaires de l'énergie?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="question3" disabled="disabled" name="question3" type="text" value="{{$projet->question3}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Date3" disabled="disabled" name="Date3" type="date" value="{{$projet->dateinstall}}">
                        </div>
                    </div>
                    <br><br><br>
                    <h4>Avez-vous une cellule de gestion de l'énergie et/ou de l’environnemental au sein de votre entreprise ?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="question4" disabled="disabled" name="question4" type="text" value="{{$projet->question4}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Date4" disabled="disabled" name="Date4" type="date" value="{{$projet->datecellule}}">
                        </div>
                    </div>
                    <br><br><br>
                    <h4>Avez-vous un problème d'approvisionnement en énergie ?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="question5" disabled="disabled" name="question5" type="text" value="{{$projet->question5}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui, quel est l’impact sur la production</label>
                        <div class="col-lg-5">
                            <textarea name="approvisionnement" disabled="disabled" class="form-control rounded-0" rows="5" cols="12" >{{$projet->impact}}</textarea>
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                    <h4>Avez-vous mis en place un projet d'efficacité énergétique, d’énergie renouvelable, ou de protection de l’environnement ?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="question6" disabled="disabled" name="question6" type="text" value="{{$projet->question6}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui veuillez présenter une description</label>
                        <div class="col-lg-5">
                            <textarea name="projet" class="form-control rounded-0" disabled="disabled" rows="5" cols="12">{{$projet->projet}}</textarea>
                        </div>
                    </div>
                    <br><br><br><br><br><br>
                    <h4>Y’a-t-il un potentiel de valorisation énergétique des déchets?</h4>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <input class="form-control" id="lieu" name="lieu" disabled="disabled" type="text" value="{{$projet->question7}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Si Oui, préciser le mode de valorisation</label>
                        <div class="col-lg-5">
                            <textarea name="potentielV" class="form-control rounded-0" disabled="disabled" rows="5" cols="12">{{$projet->modequestion7}}</textarea>
                        </div>
                    </div>
                    <br><br><br><br><br><br>

                </div>
                <div id="FINISH" class="tabcontent">
                    <p>Agissant en qualité de représentant légal de l’entreprise ci-dessous mentionnée </p>
                    <p>Souhaite adhérer au «Programme « Villes Durables » pour le Sénégal :</p>
                    <p>Pour la promotion des énergies renouvelables, l’efficacité énergétique et la gestion intégrée des déchets dans les parcs industriels de Diamniadio et à Dakar»</p>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Je soussigné(e)</label>
                        <div class="col-lg-5">
                            <input class="form-control" id="respo" name="respo" disabled="disabled" type="text" value="{{$projet->responsable1}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Fait à</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="lieu" name="lieu" disabled="disabled" type="text" value="{{$projet->lieu}}">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-1">Le</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="le" name="le" disabled="disabled" type="date" value="{{$projet->datee}}">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <a href="{{url('demandeEntreprise')}}" class="btn btn-primary waves-effect waves-light"  tabindex="-1" role="button" aria-disabled="true" style='color:red'>Précédent</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>


@endsection
