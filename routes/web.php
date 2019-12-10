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
Route::get('/ajout_client', 'ClientController@create');
Route::get('/liste_clients', 'ClientController@index');
Route::get('/ajout_fournisseur', 'FournisseurController@create');
Route::get('/liste_fournisseurs', 'FournisseurController@index');

Route::get('/ajout_devis', 'WelcomeController@ajout_devis');
Route::get('/liste_devis', 'WelcomeController@liste_devis');
Route::get('/ajout_bl', 'WelcomeController@ajout_bl');
Route::get('/liste_bl', 'WelcomeController@liste_bl');
Route::get('/ajout_avoir', 'WelcomeController@ajout_avoir');
Route::get('/liste_avoirs', 'WelcomeController@liste_avoirs');
Route::get('/ajout_factures', 'WelcomeController@ajout_factures');
Route::get('/liste_factures', 'WelcomeController@liste_factures');
Route::resource('Client', 'ClientController');
Route::resource('Fournisseur', 'FournisseurController');
Route::resource('Facture', 'FactureController');
Route::resource('Devis', 'DevisController');
Route::resource('Bon_livraison', 'Bon_livraisonController');
Route::resource('Avoir', 'AvoirController');
