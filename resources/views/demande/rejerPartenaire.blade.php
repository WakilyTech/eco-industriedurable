@extends('layouts.appPartenaire')
@section('title', 'Accueil')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Demande Rejeter !</h4>
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
                    <th>Registre Commerce</th>
                    <th>Matricule Fiscale</th>
                    <th>Date Creation</th>
                    <th>Responsable</th>
                    <th>Capital</th>
                    <th>Chiffre d'affaire</th>
                    <th>Certification ISO</th>
                    <th>Motifs</th>
                </tr>
                </thead>
                <tbody>
                @foreach($affichage as $affichages)
                    <tr class="gradeX">
                        <td>{{$affichages->raison_sociale}}</td>
                        <td>{{$affichages->registre_commerce}}</td>
                        <td>{{$affichages->matricule_fiscale}}</td>
                        <td>{{$affichages->date_creation}}</td>
                        <td>{{$affichages->responsable}}</td>
                        <td>{{$affichages->capital}}</td>
                        <td>{{$affichages->chiffre_affaires}}</td>
                        <td>{{$affichages->certification_iso}}</td>
                        <td class="actions">
                            <a  id="openinfo" data-toggle="modal" data-target="#infos" data-whatever="{{$affichages->avis_technique}}"
                                    ><i class=" md-assignment"></i></a>
                        </td>
                    </tr>



                @endforeach
                </tbody>
            </table>
            <div class="modal fade" id="infos">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Motifs Rejer Demande</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="motif">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: page -->
    </div> <!-- end Panel -->
@endsection