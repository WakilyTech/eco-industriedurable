@extends('layouts.appAdmin')
@section('title', 'Accueil')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Liste des Utilisateurs !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Ville</a></li>
                <li class="active">Durable</li>
            </ol>
        </div>
    </div>

    <div class="panel">

        <div class="panel-body">
            <table class="table table-bordered table-striped" id="datatable">
                <thead>
                <tr>
                    <th>Entite </th>
                    <th>Nom et Prenom</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Mail</th>
                    <th>Profil</th>
                    <th>Login</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listes as $liste)
                    <tr class="gradeX">
                        <td>{{$liste->entite}}</td>
                        <td>{{$liste->responsable}}</td>
                        <td>{{$liste->telephone}}</td>
                        <td>{{$liste->adresse}}</td>
                        <td>{{$liste->email}}</td>
                        <td>{{$liste->profil}}</td>
                        <td>{{$liste->login}}</td>
                        <td >
                            <a class="btn btn-warning waves-effect waves-light" href="{{ route('utilisateur.edit',$liste->id)}}" >Modifier</a>
                            /
                            <button class="btn btn-danger" data-entreprise="{{$liste->id}}" data-toggle="modal" data-target="#delete">Supprimer</button>

                        </td>
                    </tr>



                @endforeach

                </tbody>
            </table>
        </div>

        <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                    </div>

                    <form action="{{ route('utilisateur.destroy','destroy')}}" method="post">
                        {{ method_field('delete') }}
                        {{csrf_field()}}

                        <div class="modal-body">
                            <p class="text-center">
                                Etes vous sure de vouloir supprimer cette utilisateur?
                            </p>
                            <input type="hidden" name="entreprise" id="entreprise_id" value="">

                        </div>


                        <div class="modal-footer">
                            <button class="btn btn-danger waves-effect waves-light" type="submit">Oui, sure</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Non, quitter</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end: page --><!-- end Panel -->

@endsection