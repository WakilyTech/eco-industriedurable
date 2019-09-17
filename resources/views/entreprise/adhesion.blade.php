@extends('layouts.appEntreprise')
@section('title', 'Accueil')
@section('content')

    <!-- Page-Title -->
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Veuillez Renseigner les cases dans chaque Onglet !</h4>
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
            <form action="{{route('adhesion.store')}}" method="post" class="section">
                {{csrf_field("get")}}

            <div id="ENTREPRISE" class="tabcontent">
                <h3>ENTREPRISE</h3>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Raison Social*</label>
                    <div class="col-lg-6">
                        <input class="form-control" id="Raison" name="Raison" type="text" disabled="disabled" value="{{Auth::user()->entite}}" placeholder="{{Auth::user()->entite}}">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Adresse Entité *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="adresse_entite" name="adresse_entite" disabled="disabled" value="{{Auth::user()->adresse}}" type="text" placeholder="{{Auth::user()->adresse}}">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">N°Registre de Commerce *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="RegisterC" name="RegisterC" type="text" placeholder="N°Registre de Commerce *">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">N° Matricule fiscal (NINEA) *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Matricule" name="Matricule" type="text" placeholder="N° Matricule fiscal (NINEA) *">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Date de création *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="DateC" name="DateC" type="date">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Date d’entrée en production *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="DateP" name="DateP" type="date">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Nom et Prénom du Responsable *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="NomR" name="NomR" type="text" disabled="disabled"  value="{{Auth::user()->responsable}}" placeholder="{{Auth::user()->responsable}}">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Forme Juridique *</label>
                    <div class="col-lg-3">
                        <label class="checkbox-inline"><input type="radio"  name="Forme" value="SA">SA </label>
                        <label class="checkbox-inline"><input type="radio"  name="Forme" value="SUARL">SUARL</label>
                        <label class="checkbox-inline"><input type="radio"  name="Forme" value="SARL">SARL</label>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Capital *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="capital" name="capital" type="text" placeholder="Capital">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Chiffre d'Affaire *</label>
                    <div class="col-lg-3">
                        &nbsp;&nbsp;
                            <label class="radio-inline"><input type="radio" name="Chiffre" value="50000000_500000000">] 50.000.000 - 500.000.000]</label>


                            <label  class="radio-inline"><input type="radio" name="Chiffre" value="500000000_2000000000">] 500.000.000 - 2.000.000.000]</label>


                            <label  class="radio-inline"><input type="radio" name="Chiffre" value="2000000000_20000000000" >] 2.000.000.000 - 20.000.000.000]</label>


                            <label  class="radio-inline"><input type="radio" name="Chiffre" value="20000000000">>20.000.000.000</label>

                    </div>
                </div>
                <br><br><br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Certification ISO *</label>
                    <div class="col-lg-8">
                        <label class="radio-inline"><input type="radio" name="Certification" value="ISO9001">ISO9001 </label>
                        <label class="radio-inline"><input type="radio" name="Certification" value="ISO22000">ISO22000</label>
                        <label class="radio-inline"><input type="radio" name="Certification" value="ISO14001">ISO14001</label>
                        <label class="radio-inline"><input type="radio" name="Certification" value="ISO50001">ISO50001</label>
                        <label class="radio-inline"><input type="radio" name="Certification" value="OSAS18000">OSAS18000</label>
                    </div>
                </div>
                    <br><br><br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Salariés Permanents </label>
                    <div class="col-lg-6">
                        <label class="radio-inline"><input type="radio" name="Permanents" value="Homme">Homme </label>
                        <label class="radio-inline"><input type="radio" name="Permanents" value="Femme">Femme</label>
                    </div>
                </div>
                    <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Salariés Temporaires </label>
                    <div class="col-lg-6">
                        <label class="radio-inline"><input type="radio" name="Temporaires" value="Homme">Homme </label>
                        <label class="radio-inline"><input type="radio" name="Temporaires" value="Femme">Femme</label>
                    </div>
            </div>
                </div>
            <div id="INFORMATION" class="tabcontent">
                <h3>LES PRINCIPAUX PRODUITS ET SERVICES</h3>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Designation *</label>
                    <div class="col-lg-4">
                        <input class="form-control" id="Designation1" name="Designation1" type="text" placeholder="Designation">
                        <br>
                        <input class="form-control" id="Designation2" name="Designation2" type="text" placeholder="Designation">
                        <br>
                        <input class="form-control" id="Designation3" name="Designation3" type="text" placeholder="Designation">
                        <br>
                        <input class="form-control" id="Designation4" name="Designation4" type="text" placeholder="Designation">

                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Part % du Chiffre d'Affaire  *</label>
                    <div class="col-lg-4">
                        <input class="form-control" id="Affaire1" name="Affaire1" type="text" placeholder="Part % du Chiffre d'Affaire">
                        <br>
                        <input class="form-control" id="Affaire2" name="Affaire2" type="text" placeholder="Part % du Chiffre d'Affaire">
                        <br>
                        <input class="form-control" id="Affaire3" name="Affaire3" type="text" placeholder="Part % du Chiffre d'Affaire">
                        <br>
                        <input class="form-control" id="Affaire4" name="Affaire4" type="text" placeholder="Part % du Chiffre d'Affaire">
                    </div>
                </div>
                <br><br><br>
                <h3>LES PRINCIPALES MATIERES PREMIERES</h3>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Designation *</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="DesignationP" name="DesignationP" type="text" placeholder="Designation">
                        <br>
                        <input class="form-control" id="DesignationP1" name="DesignationP2" type="text" placeholder="Designation">
                        <br>
                        <input class="form-control" id="DesignationP2" name="DesignationP3" type="text" placeholder="Designation">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-1">Origine  *</label>
                    <div class="col-lg-6">
                        <div>
                            <label class="radio-inline"><input type="radio" name="OrigineP" value="Nationale" >Nationale</label>
                            <label class="radio-inline"><input type="radio" name="OrigineP" value="CEDEAO" >CDEAO</label>
                            <label class="radio-inline"><input type="radio" name="OrigineP" value="Restedumonde">Reste Monde</label>
                        </div>

                        <br><br>
                        <div>
                            <label class="radio-inline"><input type="radio" name="OrigineP2" value="Nationale">Nationale</label>
                            <label class="radio-inline"><input type="radio" name="OrigineP2" value="CEDEAO">CDEAO</label>
                            <label class="radio-inline"><input type="radio" name="OrigineP2" value="Restedumonde">Reste Monde</label>
                        </div>
                        <br><br>
                        <div>
                            <label class="radio-inline"><input type="radio" name="OrigineP3" value="Nationale">Nationale</label>
                            <label class="radio-inline"><input type="radio" name="OrigineP3" value="CEDEAO">CDEAO</label>
                            <label class="radio-inline"><input type="radio" name="OrigineP3" value="Restedumonde">Reste Monde</label>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Emballages Utilisés </label>
                    <div class="col-lg-9">
                        <label class="radio-inline"><input type="radio" name="Emballages" value="Papier">Papier </label>
                        <label class="radio-inline"><input type="radio" name="Emballages" value="Plastic">Plastic</label>
                        <label class="radio-inline"><input type="radio" name="Emballages" value="Métallique">Métallique</label>
                    </div>
                </div>
                <br><br><br>
                <h3>FONCTION PRODUCTION ET MAINTENANCE</h3>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Lignes Production/Services</label>
                    <div class="col-lg-2">
                        <input class="form-control" id="PS1" name="PS1" type="text" placeholder="Lignes de production/Services">
                        <br>
                        <input class="form-control" id="PS2" name="PS2" type="text" placeholder="Lignes de production/Services">
                        <br>
                        <input class="form-control" id="PS3" name="PS3" type="text" placeholder="Lignes de production/Services">
                        <br>
                        <input class="form-control" id="PS4" name="PS4" type="text" placeholder="Lignes de production/Services">
                    </div>

                    <label for="adresse_structure" class="control-label col-lg-1">Année production</label>

                    <div class="col-lg-2">
                        <input class="form-control" id="AP1" name="AP1" type="date">
                        <br>
                        <input class="form-control" id="AP2" name="AP2" type="date">
                        <br>
                        <input class="form-control" id="AP3" name="AP3" type="date">
                        <br>
                        <input class="form-control" id="AP4" name="AP4" type="date">
                    </div>

                    <label for="adresse_structure" class="control-label col-lg-1">Capacité</label>

                    <div class="col-lg-2">
                        <input class="form-control" id="Capacité1" name="Capacité1" type="text" placeholder="Capacite">
                        <br>
                        <input class="form-control" id="Capacité2" name="Capacité2" type="text" placeholder="Capacite">
                        <br>
                        <input class="form-control" id="Capacité3" name="Capacité3" type="text" placeholder="Capacite">
                        <br>
                        <input class="form-control" id="Capacité4" name="Capacité4" type="text" placeholder="Capacite">
                    </div>

                    <label for="adresse_structure" class="control-label col-lg-1">/Unité</label>

                    <div class="col-lg-2">
                        <input class="form-control" id="Unité1" name="Unité1" type="text" placeholder="/Unite">
                        <br>
                        <input class="form-control" id="Unité2" name="Unité2" type="text" placeholder="/Unite">
                        <br>
                        <input class="form-control" id="Unité3" name="Unité3" type="text" placeholder="/Unite">
                        <br>
                        <input class="form-control" id="Unité4" name="Unité4" type="text" placeholder="/Unite">
                    </div>
                </div>
                <br><br><br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">GMAO</label>
                    <div class="col-lg-3">
                        <label class="radio-inline"><input type="radio" name="gmao" value="OUI">OUI </label>
                        <label class="radio-inline"><input type="radio" name="gmao" value="NON">NON</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Sous-Traitance</label>
                    <div class="col-lg-3">
                        <label class="radio-inline"><input type="radio" name="sousT" value="OUI">OUI </label>
                        <label class="radio-inline"><input type="radio" name="sousT" value="NON">NON</label>
                    </div>
                </div>
            </div>

            <div id="EFFICACITE" class="tabcontent">
                <h3>CONNEXION AU RESEAU ELECTRIQUE SENELEC</h3>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Type d’abonnement</label>
                    <div class="col-lg-6">
                        <label class="radio-inline"><input type="radio" name="abonnement" value="moyennetension">Moyenne Tension </label>
                        <label class="radio-inline"><input type="radio" name="abonnement" value="bassetension">Basse Tension</label>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Puissance souscrite (KW)</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Puissance" name="Puissance" type="text" placeholder="Puissance souscrite (KW)">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Facture Annuelle(FCFA)</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Facture" name="Facture" type="text" placeholder="Facture Annuelle(FCFA)">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Existe-t-il un secours ?</label>
                    <div class="col-lg-6">
                        <label class="radio-inline"><input type="radio" name="secours" value="OUI">OUI </label>
                        <label class="radio-inline"><input type="radio" name="secours" value="NON">NON</label>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Type de Secours</label>
                    <div class="col-lg-5">
                        <div class="col-lg-5">
                            <label class="radio-inline"><input type="radio" name="type" value="groupeelectrogene">Groupe Electrogéne </label>
                            <label class="radio-inline"><input type="radio" name="type" value="onduleur">Onduleur</label>
                        </div>
                    </div>
                        <label for="autres" class="control-label col-lg-1">Autres</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="Autres" name="Autres" type="text" placeholder="Autres">
                        </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Part Secourue (%)</label>
                    <div class="col-lg-5">
                         <input class="form-control" id="Part" name="Part" type="text" placeholder="Part Secourue (%)">
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
                        <input class="form-control" id="DieselU" name="DieselU" type="text" placeholder="Usage">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="DieselF" name="DieselF" type="text" placeholder="Facture annuelle FCFA">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Fuel lourd/Fuel léger</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="FuelU" name="FuelU" type="text" placeholder="Usage">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="FuelF" name="FuelF" type="text" placeholder="Facture annuelle FCFA">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Gaz</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="GazU" name="GazU" type="text" placeholder="Usage">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="GazF" name="GazF" type="text" placeholder="Facture annuelle FCFA">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Autres</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="AutresU" name="AutresU" type="text" placeholder="Usage">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="AutresF" name="AutresF" type="text" placeholder="Facture annuelle FCFA">
                    </div>
                </div>
                <br><br>
                <h3>INSTALLATIONS DES ENERGIES RENOUVELABLES ET COGENERATION</h3>
                <h4>Biomasse</h4>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Energie produite </label>
                    <div class="col-lg-5">
                        <label class="radio-inline"><input type="radio" name="EnergieB" value="electricite">Electricité </label>
                        <label class="radio-inline"><input type="radio" name="EnergieB" value="chaleur">Chaleur</label>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                    <div class="col-lg-2">
                        <input class="form-control" id="serviceBiomasse" name="serviceBiomasse" type="date" >
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                    <div class="col-lg-2">
                        <input class="form-control" id="UtilitéBiomasse" name="UtilitéBiomasse" type="text" placeholder="Utilité desservie">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                    <div class="col-lg-2">
                        <input class="form-control" id="PuissanceBiomasse" name="PuissanceBiomasse" type="text" placeholder="Puissance installée(KW)">
                    </div>
                </div>
                <br><br>
                <h4>Solaire</h4>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Energie produite </label>
                    <div class="col-lg-5">
                        <label class="radio-inline"><input type="radio" name="EnergieS" value="electricite">Electricité </label>
                        <label class="radio-inline"><input type="radio" name="EnergieS" value="chaleur">Chaleur</label>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="annéeSolaire" name="annéeSolaire" type="date" >
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="utiliteSolaire" name="utiliteSolaire" type="text" placeholder="Utilité desservie">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="puissanceSolaire" name="puissanceSolaire" type="text" placeholder="Puissance installée(KW)">
                        </div>
                    </div>
                    <br><br>
                    <h4>Cogénération</h4>
                   <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Energie produite </label>
                    <div class="col-lg-5">
                        <label class="radio-inline"><input type="radio" name="produite" value="electricite">Electricité </label>
                        <label class="radio-inline"><input type="radio" name="produite" value="chaleur">Chaleur</label>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="anneeCogénération" name="anneeCogénération" type="date" >
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="utiliteCogénération" name="utiliteCogénération" type="text" placeholder="Utilité desservie">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="puissanceCogénération" name="puissanceCogénération" type="text" placeholder="Puissance installée(KW)">
                        </div>
                    </div>
                       <br><br>
                    <h4>Autres</h4>
                   <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Energie produite </label>
                       <div class="col-lg-3">
                           <input class="form-control" id="autresEnergie" name="autresEnergie" type="text" placeholder="Energie produite">
                       </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Année de mise en service</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="anneeAutre" name="anneeAutre" type="date">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Utilité desservie</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="utiliteAutres" name="utiliteAutres" type="text" placeholder="Utilité desservie">
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-2">Puissance installée(KW)</label>
                        <div class="col-lg-2">
                            <input class="form-control" id="puissanceAutres" name="puissanceAutres" type="text" placeholder="Puissance installée(KW)">
                        </div>
                    </div>
                </div>
                   </div>
                <br><br>
                    <h4>UTILITES</h4>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Vapeur</label>
                        <div class="col-lg-2">
                            <label class="radio-inline"><input type="radio" name="Vapeur" value="OUI">OUI </label>
                            <label class="radio-inline"><input type="radio" name="Vapeur" value="NON">NON</label>
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="comVapeur" name="comVapeur" type="text" placeholder="Commentaire(Puissance,Pression...">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Air comprimé</label>
                        <div class="col-lg-2">
                            <label class="radio-inline"><input type="radio" name="Air" value="OUI">OUI </label>
                            <label class="radio-inline"><input type="radio" name="Air" value="NON">NON</label>
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="comAir" name="comAir" type="text" placeholder="Commentaire(Puissance,Pression...">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Froid</label>
                        <div class="col-lg-2">
                            <label class="radio-inline"><input type="radio" name="Froid" value="OUI">OUI </label>
                            <label class="radio-inline"><input type="radio" name="Froid" value="NON">NON</label>
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="comFroid" name="comFroid" type="text" placeholder="Commentaire(Puissance,Pression...">
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Chaleur Process(Four, séchage</label>
                        <div class="col-lg-2">
                            <label class="radio-inline"><input type="radio" name="Chaleur" value="OUI">OUI </label>
                            <label class="radio-inline"><input type="radio" name="Chaleur" value="NON">NON</label>
                        </div>
                        <label for="adresse_structure" class="control-label col-lg-3">Commentaire(Puissance,Pression...)</label>
                        <div class="col-lg-3">
                            <input class="form-control" id="comChaleur" name="comChaleur" type="text" placeholder="Commentaire(Puissance,Pression...">
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
                        <input class="form-control" id="detailRoutes" name="detailRoutes" type="text" placeholder="Détails">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="distanceRoutes" name="distanceRoutes" type="text" placeholder="Distance Approximative">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-5">Plan d'eau (mer, lacs, rivières, etc.)</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="detailPlan" name="detailPlan" type="text" placeholder="Détails">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="distancePlan" name="distancePlan" type="text" placeholder="Distance Approximative">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-5">Etablissements Recevant du Public(Hôpital, Mosquée,etc.)</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="detailEtablissement" name="detailEtablissement" type="text" placeholder="Détails">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="distanceEtablissement" name="distanceEtablissement" type="text" placeholder="Distance Approximative">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-5">Etablissements Commerciaux</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="detailCommercial" name="detailCommercial" type="text" placeholder="Détails">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="distanceCommercial" name="distanceCommercial" type="text" placeholder="Distance Approximative">
                    </div>
                </div>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-5">Etablissements Industriels</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="detailIndustriel" name="detailIndustriel" type="text" placeholder="Détails">
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" id="distanceIndustriel" name="distanceIndustriel" type="text" placeholder="Distance Approximative">
                    </div>
                </div>
                <br><br><br><br>
                <h3>PRELEVEMENT ET UTILISATION D'EAU</h3>
                <div class="form-group">
                    <div class="col-lg-3">
                        <label class="radio-inline"><input type="radio" name="PRELEVEMENT" value="ReseauSDE">Réseau SDE </label>
                        <label class="radio-inline"><input type="radio" name="PRELEVEMENT" value="Forage">Forages  </label>
                        <label class="radio-inline"><input type="radio" name="PRELEVEMENT" value="Mer">Mer  </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Autres (à préciser)</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="autres1" name="autres1" type="text" placeholder="à préciser...">
                    </div>
                </div>
                <br><br><br><br>
                <h3>REJET EAUX DE PROCEDE</h3>
                <div class="form-group">
                    <div class="col-lg-3">
                        <label class="radio-inline"><input type="radio" name="rejet" value="ReseauONAS">Réseau ONAS </label>
                        <label class="radio-inline"><input type="radio" name="rejet" value="SDE">SDE    </label>
                        <label class="radio-inline"><input type="radio" name="rejet" value="MER">Mer    </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-2">Autres (à préciser)</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="autres2" name="autres2" type="text" placeholder="à préciser...">
                    </div>
                </div>
                <br><br><br><br>
                <h3>PRINCIPAUX DECHETS SOLIDES</h3>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Filières d’élimination</label>
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="principe" value="EnlevementSpecialise">Enlévement </label>
                        <label class="radio-inline"><input type="radio" name="principe" value="Decharge">Décharge   </label>
                        <label class="radio-inline"><input type="radio" name="principe" value="Brulage">Brulage    </label>
                    </div>
                </div>
                <br><br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-3">Vaporisation interne possible</label>
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="vaporisation" value="OUI">OUI </label>
                        <label class="radio-inline"><input type="radio" name="vaporisation" value="NON">NON   </label>
                    </div>
                </div>
            </div>
            <div id="PROJETS" class="tabcontent">
                <h4>Avez-vous un projet de déménagement dans le pôle urbain de Diamniadio ?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="pole" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="pole" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Date1" name="Date1" type="date">
                    </div>
                </div>
                <br><br><br>
                <h4>Avez-vous un projet d'extension ou de diversification?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="diversification" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="diversification" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Date2" name="Date2" type="date">
                    </div>
                </div>
                <br><br><br>
                <h4>Vos installations sont-elles équipées de compteurs divisionnaires de l'énergie?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="énergie" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="énergie" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Date3" name="Date3" type="date">
                    </div>
                </div>
                <br><br><br>
                <h4>Avez-vous une cellule de gestion de l'énergie et/ou de l’environnemental au sein de votre entreprise ?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="environnemental" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="environnemental" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui Date...</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="Date4" name="Date4" type="date">
                    </div>
                </div>
                <br><br><br>
                <h4>Avez-vous un problème d'approvisionnement en énergie ?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="problème" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="problème" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui, quel est l’impact sur la production</label>
                    <div class="col-lg-5">
                        <textarea name="approvisionnement" class="form-control rounded-0" rows="5" cols="12">Veuillez renseigner ......</textarea>
                    </div>
                </div>
                <br><br><br><br><br><br>
                <h4>Avez-vous mis en place un projet d'efficacité énergétique, d’énergie renouvelable, ou de protection de l’environnement ?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="renouvelable" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="renouvelable" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui veuillez présenter une description</label>
                    <div class="col-lg-5">
                        <textarea name="projet" class="form-control rounded-0" rows="5" cols="12">Veuillez renseigner ......</textarea>
                    </div>
                </div>
                <br><br><br><br><br><br>
                <h4>Y’a-t-il un potentiel de valorisation énergétique des déchets?</h4>
                <div class="form-group">
                    <div class="col-lg-4">
                        <label class="radio-inline"><input type="radio" name="potentiel" value="OUI">OUI </label>
                        &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                        <label class="radio-inline"><input type="radio" name="potentiel" value="NON">NON   </label>
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-3">Si Oui, préciser le mode de valorisation</label>
                    <div class="col-lg-5">
                        <textarea name="potentielV" class="form-control rounded-0" rows="5" cols="12">Veuillez renseigner ......</textarea>
                    </div>
                </div>
                <br><br><br><br><br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Je soussigné(e)</label>
                    <div class="col-lg-5">
                        <input class="form-control" id="respo" name="respo" type="text" placeholder="Nom et Prénom">
                    </div>
                </div>
            </div>
            <div id="FINISH" class="tabcontent">
                <p>Agissant en qualité de représentant légal de l’entreprise ci-dessous mentionnée </p>
                <p>Souhaite adhérer au «Programme « Villes Durables » pour le Sénégal :</p>
                <p>Pour la promotion des énergies renouvelables, l’efficacité énergétique et la gestion intégrée des déchets dans les parcs industriels de Diamniadio et à Dakar»</p>
                <br><br>
                <div class="form-group">
                    <label for="adresse_structure" class="control-label col-lg-2">Fait à</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="lieu" name="lieu" type="text" placeholder="Lieu">
                    </div>
                    <label for="adresse_structure" class="control-label col-lg-1">Le</label>
                    <div class="col-lg-3">
                        <input class="form-control" id="le" name="le" type="date">
                    </div>
                </div>
                <br><br>
                <section>
                    <div class="form-group clearfix">
                        <div class="col-lg-12">
                            <input id="acceptTerms-2" name="NP" type="checkbox" value="admin" class="required">
                            <label for="acceptTerms-2">Lu et Approuver</label>
                        </div>
                    </div>

                </section>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary " type="submit">Envoyer</button>
                    </div>
                </div>
            </div>
          </form>

        </div>

    </div>


@endsection
