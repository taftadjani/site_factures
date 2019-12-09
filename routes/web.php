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

Route::get('/', 'WelcomeController@index');
Route::get('/', 'WelcomeController@ajout_client');
Route::get('/', 'WelcomeController@liste_clients');
Route::get('/', 'WelcomeController@ajout_fournisseur');
Route::get('/', 'WelcomeController@liste_fournisseurs');
Route::get('/', 'WelcomeController@ajout_devis');
Route::get('/', 'WelcomeController@liste_devis');
Route::get('/', 'WelcomeController@ajout_bl');
Route::get('/', 'WelcomeController@liste_bl');
Route::get('/', 'WelcomeController@ajout_avoir');
Route::get('/', 'WelcomeController@liste_avoirs');
Route::get('/', 'WelcomeController@ajout_factures');
Route::get('/', 'WelcomeController@liste_factures');
Route::resource('Client', 'ClientController');
Route::resource('Fournisseur', 'FournisseurController');
Route::resource('Facture', 'FactureController');
Route::resource('Devis', 'DevisController');
Route::resource('Bon_livraison', 'Bon_livraisonController');
Route::resource('Avoir', 'AvoirController');
