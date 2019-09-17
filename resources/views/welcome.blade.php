<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rakida - Ville Durable</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href= "vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/resume.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"  id="sideNav">
    <em>Equipe Projet...</em>
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Rakida</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded mx-auto mb-2" src="{{ asset('img/mouhamed.jpg') }}" width="90" height="50" alt="">
      </span>

    </a>
    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded mx-auto mb-2" src="{{ asset('img/fatou.jpg') }}" width="90" height="50" alt="">
      </span>

    </a>
    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded mx-auto mb-2" src="{{ asset('img/fagueye.jpg') }}" width="90" height="50" alt="">
      </span>

    </a>
    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded mx-auto mb-2" src="{{ asset('img/samba.jpg') }}" width="90" height="50" alt="">
      </span>

    </a>
    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded mx-auto mb-2" src="{{ asset('img/mamadou.jpg') }}" width="90" height="50" alt="">
      </span>

    </a>
</nav>

<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-60">
            <h1 class="mb-0">VILLE
                <span class="text-primary">DURABLE</span>
            </h1>
            <div class="subheading mb-5">NOTE SUR LE PROJET

            </div>
            <div class="transbox">
            <p>Initiative « Villes Durables » pour le Sénégal : Pour la promotion des énergies renouvelables et le management des déchets dans les parcs industriels durables Le Bureau de Mise à Niveau (BMN) est une structure administrative créée depuis 2004 et dotée d’une autonomie de gestion. Il est placé sous la tutelle du Ministère du commerce, du secteur informel, de la consommation et des PME et a pour mission de renforcer la compétitivité des entreprises, de diversifier le tissu industriel sénégalais et d’améliorer l’environnement des affaires à travers la mise en œuvre d’un Programme de Mise à Niveau. En 2010, Il a intégré dans son programme de mise à niveau les volets environnement et efficacité énergétique pour mieux inciter les entreprises à investir sur la maitrise de l’énergie et à mieux prendre en compte l’impact négatif de leurs activités sur l’environnement. C’est dans ce cadre que le BMN s’est vu confier la gestion de la composante 2 du projet « villes durables », financé par le Fonds pour l’Environnement Mondial (FEM) et mise en œuvre par l’ONUDI. Cette composante 2 du projet « villes durables » promeut les énergies renouvelables, l’efficacité énergétique, la réduction des POPs et la gestion intégrée des déchets dans les parcs industriels de Dakar et de Diamniadio. Elle démontrera la faisabilité technique, la durabilité environnementale et la viabilité financière des projets pilotes intégrant les énergies renouvelables et les applications éco énergétiques, les mesures production propre, le recyclage des déchets, ainsi que la récupération et la production d'énergie dans le parc industriel de Diamniadio. Les objectifs du projet pilote sont de réduire les émissions en carbone de l'industrialisation et de l'urbanisation dans le nouveau pôle Diamniadio urbain. D’une manière générale, le projet aborde les trois domaines thématiques de l'ONUDI: >--->L’efficacité énergétique --->Les énergies renouvelables -->La gestion des déchets dangereux</p>
            </div>
            <div class="social-icons">

                <a href="http://www.thegef.org">
                    <img width="130" height="100" src="{{ asset('img/gef2.png') }}">
                </a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.worldbank.org/">
                    <img width="130" height="100" src="{{ asset('img/onudi2.png') }}">
                </a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                <a href="#">
                    <img width="130" height="100" src="{{ asset('img/world2.png') }}">
                </a>
            </div>
        </div>
        <div class="col-lg-20 mx-auto">
            <div class="transbox">

            <div class="card-header">
                <a href=""><img alt="image" src="img/logo.png" width="200"></a>
            </div>
                <form action="/welcome" method="post" class="section">
                    {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group">
                        <label class="label">Login</label>
                        <div class="control">
                            <input class="input" type="text" name="login" id="login" value="{{ old('login') }}">
                            @if($errors->has('login'))
                                <p>{{ $errors->first('login') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="label">Mot de passe</label>
                        <div class="control">
                            <input class="input" type="password" name="password" id="password">
                            @if($errors->has('password'))
                                <p>{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="control">
                            <button class="button is-link" type="submit">Se connecter</button>
                        </div>
                    </div>
                </div>


            </form>
            <div class="card-footer">
                Vous navez pas de compte? <a href="{{route('inscription.index')}}" >S'INSCRIRE</a>
            </div>
        </div>
        </div>
    </section>
</div>

<!-- Bootstrap core JavaScript -->
<script src= "{{ asset('vendor/jquery/jquery.min.css') }}"></script>
<script src= "{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src= "{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src= "{{ asset('js/resume.min.js') }}"></script>

</body>

</html>
