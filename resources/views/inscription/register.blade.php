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
        <div class="col-lg-20 mx-auto">
            <div class="transbox">
                <div class=" float-right col-10">

                    <div class="card card-primary" style="opacity: .95;">
                        <div class="card-header">
                            <h4>Création de Compte</h4>

                        </div>
                        <div class="form-divider">
                            </a><legend>Information Générale<hr/></legend>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('inscription.store') }}">
                                {{csrf_field("get")}}

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="entite" class="dmd control-label"><span class="fg-red">*</span>Raison Social</label>
                                            <input id="entite" type="text" class="form-control" name="entite">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for=""  class="dmd control-label">Representant</label>
                                            <input id="Representant" type="text" class="form-control" name="Representant">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="" class="dmd control-label">Adresse</label>
                                            <input id="adresse" type="text" class="form-control" name="adresse">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="tel" class="dmd control-label">Telephone</label>
                                                <input id="tel" type="text" class="form-control" name="tel">
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="dmd control-label">Boite postale</label>
                                                <input type="text" class="form-control" name="bp">
                                            </div>
                                        </div>
                                        <div class="form-divider">
                                            </a><legend>Information de connection<hr/></legend>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-5">
                                                    <label for="entite" class="dmd control-label"><span class="fg-red">*</span>Email</label>
                                                    <input id="" type="email" class="form-control" name="email">
                                                </div>
                                                <div class="form-group col-5">
                                                    <label for=""  class="dmd control-label"><span class="fg-red">*</span>Login</label>
                                                    <input id="" type="text" class="form-control" name="login">
                                                </div>
                                                <div class="form-group col-5">
                                                    <label for=""  class="dmd control-label"><span class="fg-red">*</span>Password</label>
                                                    <input id="" type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-5">
                                                    <label for="" class="dmd control-label"><span class="fg-red">*</span>Confirm Password</label>
                                                    <input id="" type="password" class="form-control" name="Cpassword">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-7">
                                                    <label for="" class="dmd control-label"><span class="fg-red">*</span>Veuillez cocher cette case pour resevoir le mail d'activation</label>
                                                    <label class="checkbox-inline"><input type="checkbox"  name="profil" value="entreprise">valider </label>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                    <div class="form-group">
                                        <input type="submit" value="M'inscrire">
                                    </div>
                            </form>
                        </div>
                    </div>
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
