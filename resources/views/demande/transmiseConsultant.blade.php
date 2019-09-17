@extends('layouts.appConsultant')
@section('title', 'Accueil')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Demande Transmise !</h4>
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
                    <th>Decision</th>
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
                        <td>{{$affichages->decison}}</td>
                    </tr>



                @endforeach

                </tbody>
            </table>
        </div>
        <!-- end: page -->
    </div> <!-- end Panel -->
@endsection