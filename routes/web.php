<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::resource('index', 'indexController');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache'); 
    return 'DONE'; //Return anything 
   });

Route::resource('index', 'indexController');

//Route::resource('entreprise', 'acceuilEntrepriseController');

Route::resource('inscription', 'RegisterController');

Route::resource('adhesion', 'adhesionController');

Route::get('/welcome', 'WelcomeController@home');

Route::post('/welcome', 'WelcomeController@traitement');

Route::resource('demande', 'CoursController');

Route::resource('demandeEntreprise', 'CoursEntrepriseController');

Route::resource('demandeConsultant', 'CoursConsultantController');

Route::resource('demandePartenaire', 'CoursPartenaireController');

Route::resource('rejeter', 'rejeterController');

Route::resource('rejeterConsultant', 'rejeterConsultantController');

Route::resource('Consultant', 'ConsultantController');

Route::resource('rejeterEntreprise', 'rejeterEntrepriseController');

Route::resource('AccepterEntreprise', 'accepterEntrepriseController');

Route::resource('Accepter', 'accepterController');

Route::resource('utilisateur', 'UtilisateurController');

Route::resource('traiter', 'transmisePartenaireController');

Route::resource('transmise', 'transmiseController');

Route::resource('transmiseConsultant', 'transmiseConsultantController');

Route::resource('accepterConsultant', 'accepterConsultantController');





Auth::routes();

Route::get('/', 'WelcomeController@home');
