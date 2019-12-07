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

    // Les tests

    // CRUD Client
    // Insert
    // $client = new Client(['nom'=>"Taftadjani", "prenom"=>"Dahirou"]);
    // $client->save();

    // Get
    $client = Client::find(1)->first();
    dd($client->factures);

    // Update
    // $client = Client::find(1)->first();
    // $client->nom="Zenabou";
    // $client->save();

    // Delete
    // Client::find(1)->first()->delete();
    
    // Get all
    // $client = Client::all()[1]->prenom;



    
    // CRUD Produit
    // Insert
    // $produit = new Produit(["reference"=>"Reference 1", "prix_achat"=>122, "prix_vente"=>200]);
    // $produit->save();

    // Get
    // $produit = Produit::find(1)->first()->prix_vente*22;

    // Update
    // $produit = Produit::find(1)->first();
    // $produit->designation="Le produit est vraiment super ouf !!!";
    // $produit->save();

    // Delete
    // Produit::find(1)->first()->delete();

    // Get all
    // $produit = Produit::all();



    
    // CRUD Fournisseurs
    // Insert
    // $fournisseur = new Fournisseur(["code"=>"code 1", "nom"=>"nom", "prenom"=>"prenom"]);
    // $fournisseur->save();

    // Get
    // $fournisseur = Fournisseur::find(1)->first();
    // return $fournisseur;

    // Update
    // $fournisseur = Fournisseur::find(1)->first();
    // $fournisseur->nom="Nom updated";
    // $fournisseur->save();

    // Delete
    // $fournisseur = Fournisseur::find(1)->first();
    // $fournisseur->delete();

    // Get all
    // $fournisseur = Fournisseur::all();
    // dd($fournisseur);



    
    // CRUD Facture
    // Insert
    // $facture = new Facture(["etat"=>"etat 1", "numero"=>"numero", "impression"=>"impression"]);
    // $facture->save();

    // Get
    // $facture = Facture::find(2)->first();
    // dd($facture->client);

    // Update
    // $facture = Facture::find(1)->first();
    // $facture->etat="etat updated";
    // $facture->save();

    // Delete
    // $facture = Facture::findOrFail(1)->first();
    // $facture->delete();

    // Get all
    // $facture = Facture::all();
    // dd($facture);



    
    // CRUD Devis
    // Insert
    // $devis = new Devis(["etat"=>"etat 1", "numero"=>"numero", "impression"=>"impression"]);
    // $devis->save();

    // Get
    // $devis = Devis::find(1)->first();
    // return $devis;

    // Update
    // $devis = Devis::find(1)->first();
    // $devis->etat="etat updated";
    // $devis->save();

    // Delete
    // $devis = Devis::findOrFail(1)->first();
    // $devis->delete();

    // Get all
    // $devis = Devis::all();
    // dd($devis);

    



    
    // CRUD Famille
    // Insert
    // $famille = new Famille(["libelle"=>"libelle 1", "taxe_id"=>1]);
    // $famille->save();

    // Get
    // $famille = Famille::find(1)->first();
    // return $famille;

    // Update
    // $famille = Famille::find(1)->first();
    // $famille->libelle="libelle updated";
    // $famille->save();

    // Delete
    // $famille = Famille::findOrFail(1)->first();
    // $famille->delete();

    // Get all
    // $famille = Famille::all();
    // dd($famille);



    


    
    // CRUD condition_paiements
    // Insert
    // $condition_paiement = new Condition_paiement(["texte"=>"libelle 1"]);
    // $condition_paiement->save();

    // Get
    // $condition_paiement = Condition_paiement::find(1)->first();
    // return $condition_paiement;

    // Update
    // $condition_paiement = Condition_paiement::find(1)->first();
    // $condition_paiement->texte="texte updated";
    // $condition_paiement->save();

    // Delete
    // $condition_paiement = Condition_paiement::findOrFail(1)->first();
    // $condition_paiement->delete();

    // Get all
    // $condition_paiement = Condition_paiement::all();
    // dd($condition_paiement);



    

    
    // CRUD Status
    // Insert
    // $status = new Status(["libelle"=>"libelle 1"]);
    // $status->save();

    // Get
    // $status = Status::find(1)->first();
    // return $status;

    // Update
    // $status = Status::find(1)->first();
    // $status->libelle="libelle updated";
    // $status->save();

    // Delete
    // $status = Status::findOrFail(1)->first();
    // $status->delete();

    // Get all
    // $status = Status::all();
    // dd($status);

    

    // Facture client
    // $client->factures()->save($facture);

    return "Good job";
});
