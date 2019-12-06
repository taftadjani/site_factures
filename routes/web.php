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

use App\Client;

Route::get('/', function () {

    // Les tests

    // CRUD Client
    // $client = new Client(['nom'=>"Taftadjani", "prenom"=>"Dahirou"]);
    // $client->save();

    // $client = Client::find(1)->first();

    // $client = Client::find(1)->first();
    // $client->nom="Zenabou";
    // $client->save();

    // Client::find(1)->first()->delete();
    
    // $client = Client::all()[1]->prenom;
    return "Great job";
});
