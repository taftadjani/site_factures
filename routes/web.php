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
Route::get('/getInfo', 'FactureController@getInfo')->name('getInfo');
Route::post('/create_facture', 'FactureController@create');
Route::post('/create_avoir', 'AvoirController@create');
Route::post('/create_bl', 'Bon_livraisonController@create');
Route::get('/extras', 'FactureController@show');
Route::post('/create_devis', 'DevisController@create');
Route::post('/create_bl', 'Bon_livraisonController@create');
Route::get('/extrasDevis', 'DevisController@show');
Route::get('/extrasBl', 'Bon_livraisonController@show');
Route::get('/extrasAvoir', 'AvoirController@show');

Route::get('/quantiteStock', 'FactureController@quantiteStock')->name('quantiteStock');
Route::get('/produits', 'FactureController@produits')->name('produits');
Route::get('/ajout_avoir', 'WelcomeController@ajout_avoir')->name('ajout_avoir');;
Route::get('/liste_avoirs', 'WelcomeController@liste_avoirs');
Route::get('/ajout_factures', 'WelcomeController@ajout_factures')->name('ajout_factures');
Route::get('/liste_factures', 'WelcomeController@liste_factures');
Route::resource('Client', 'ClientController');
Route::resource('Fournisseur', 'FournisseurController');
Route::resource('Facture', 'FactureController');
Route::resource('Devis', 'DevisController');
Route::resource('Bon_livraison', 'Bon_livraisonController');
Route::resource('Avoir', 'AvoirController');
