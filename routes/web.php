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
use App\Facture;

Route::get('/', function () {
    $client = Client::find(1);
    $facture = new Facture();
    $client->factures()->save($facture);
    return "ok";
});
