@extends('layouts.appAdmin')
@section('title', 'Accueil')
@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">BIENVENUE !</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Ville</a></li>
                <li class="active">Durable</li>
            </ol>
        </div>
    </div>

    <!-- Start Widget -->
    <!--Widget-4 -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-warning"><i class=" md-book"></i></span>
                <div class="mini-stat-info text-right text-dark">
                    <a href="{{route('demande.index')}}" >
                        En Cours
                    </a>
                </div>
                <div class="tiles-progress">
                    <div class="m-t-20">
                        <h5 class="text-uppercase">Demande en Cours</h5>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-danger"><i class="md-highlight-remove"></i></span>
                <div class="mini-stat-info text-right text-dark">
                    <a href="{{route('rejeter.index')}}" >
                    Rejetées
                        </a>
                </div>
                <div class="tiles-progress">
                    <div class="m-t-20">
                        <h5 class="text-uppercase">Demande Rejetées </h5>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-success"><i class="md-assignment-turned-in"></i></span>
                <div class="mini-stat-info text-right text-dark">
                    <a href="{{route('Accepter.index')}}" >
                        Acceptée
                    </a>
                </div>
                <div class="tiles-progress">
                    <div class="m-t-20">
                        <h5 class="text-uppercase">Demande Acceptées <span class="pull-right"></span></h5>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 57%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="mini-stat clearfix bx-shadow bg-white">
                <span class="mini-stat-icon bg-primary"><i class="ion-loop"></i></span>
                <div class="mini-stat-info text-right text-dark">
                    <a href="{{route('transmise.index')}}" >
                        Transmise
                    </a>
                </div>
                <div class="tiles-progress">
                    <div class="m-t-20">
                        <h5 class="text-uppercase">Demande Transmise <span class="pull-right"></span></h5>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 57%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end row -->


@endsection
