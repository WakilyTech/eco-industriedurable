@extends('layouts.appPartenaire')
@section('title', 'Accueil')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Demande en Cours !</h4>
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
                    <th>Raison Sociale </th>
                    <th>Matricule Fiscale</th>
                    <th>Date Creation</th>
                    <th>Responsable</th>
                    <th>Capital</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>



                    @foreach($affichage as $affichages)

                    <tr class="gradeX">
                        <td>{{$affichages->raison_sociale}}</td>
                        <td>{{$affichages->matricule_fiscale}}</td>
                        <td>{{$affichages->date_creation}}</td>
                        <td>{{$affichages->responsable}}</td>
                        <td>{{$affichages->capital}}</td>
                        <td>

                            <a class="btn btn-warning waves-effect waves-light" href="{{ route('demandePartenaire.edit',$affichages->id)}}" >Consulter</a>
                            /
                            <button class="btn btn-danger" data-entreprise="{{$affichages->id}}" data-toggle="modal" data-target="#delete">Supprimer</button>

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

                            <form action="{{ route('demandePartenaire.destroy','destroy')}}" method="post">
                                {{ method_field('delete') }}
                                {{csrf_field()}}

                    <div class="modal-body">
                        <p class="text-center">
                            Are you sure you want to delete this?
                        </p>
                        <input type="hidden" name="entreprise" id="entreprise_id" value="">

                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-danger waves-effect waves-light" type="submit">Oui</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>
                    </div>
                </form>

                </div>
            </div>
            </div>
        </div>
        <!-- end: page --><!-- end Panel -->
@endsection