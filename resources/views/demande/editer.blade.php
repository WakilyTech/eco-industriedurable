@extends('layouts.appAdmin')
@section('title', 'Accueil')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Ajouter un nouvel Utilisateur !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Ville</a></li>
                <li class="active">Durable</li>
            </ol>
        </div>
    </div>


    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-heading bg-img">
                <div class="bg-overlay"></div>
                <h3 class="text-center m-t-10 text-white"> Modification Compte </h3>
            </div>


            <div class="panel-body">
                <form class="form-horizontal m-t-20" method="post" action="{{route('utilisateur.update',$user->id)}}">
                    @method('PUT')
                    {{csrf_field("get")}}
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Nom et Prénom*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="NP" name="NP" type="text" value="{{$user->responsable}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Adresse*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="adresse" name="adresse" type="text" value="{{$user->adresse}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Telephone*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="Tel" name="Tel" type="text" value="{{$user->telephone}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Mail*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="Mail" name="Mail" type="text" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Login*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="Login" name="Login" type="text" value="{{$user->login}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Mot de Passe*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="password" name="password" type="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Confirmée Mot de Passe*</label>
                        <div class="col-lg-6">
                            <input class="form-control" id="Confirm" name="Confirm" type="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse_structure" class="control-label col-lg-2">Profil*</label>
                        <div class="col-lg-6">
                            <select name="profil" id="profil" class="select2 form-control">
                                <option>---</option>

                                <option>Project_Manager</option>
                                <option>Consultant</option>
                                <option>Partenaire</option>
                                <option>Entreprise</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success waves-effect waves-light" type="submit">Modifier</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <!-- end: page -->
    <!-- end Panel -->
@endsection