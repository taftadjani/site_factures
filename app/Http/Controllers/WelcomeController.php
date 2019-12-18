<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view("index");
    }
    
  
    
    public function ajout_devis()
    {
        $clients = DB::table('clients')
                   ->get();
        $tarifs = DB::table('tarifs')
                   ->get();
        $condition = DB::table('condition_paiements')
                   ->get();

        $produits = DB::table('produits')
                   ->get();
        $idDevis = DB::table('devis')
                   ->max('devis_id');
        return view("ajout_devis",['clients'=>$clients,'tarifs'=>$tarifs,'condition'=>$condition,'produits'=>$produits,'idFact'=>$idDevis]);
  
       
       
          }
    public function liste_devis()
    {
        $factures=DB::table('devis')
        ->get();

        return view("liste_devis",['factures'=>$factures]);
       
    }
    public function ajout_bl()
    {
        $clients = DB::table('clients')
        ->get();
        $tarifs = DB::table('tarifs')
                ->get();
        $condition = DB::table('condition_paiements')
                ->get();

        $produits = DB::table('produits')
                ->get();
        $idDevis = DB::table('bon_livraisons')
                ->max('bon_livraison_id');
        return view("ajout_bl",['clients'=>$clients,'tarifs'=>$tarifs,'condition'=>$condition,'produits'=>$produits,'idFact'=>$idDevis]);

    }
    public function liste_bl()
    {

        $factures=DB::table('bon_livraisons')
        ->get();

        return view("liste_bl",['factures'=>$factures]);
       
    }
    public function ajout_avoir()
    {
        $clients = DB::table('clients')
                   ->get();
        $tarifs = DB::table('tarifs')
                   ->get();
        $condition = DB::table('condition_paiements')
                   ->get();

        $produits = DB::table('produits')
                   ->get();
        $idFact = DB::table('factures')
                   ->max('facture_id');
        return view("ajout_avoir",['clients'=>$clients,'tarifs'=>$tarifs,'condition'=>$condition,'produits'=>$produits,'idFact'=>$idFact]);
  
        
    }
    public function liste_avoirs()
    {
        $factures=DB::table('avoirs')
        ->get();

        return view("liste_avoirs",['factures'=>$factures]);
       
    }
    public function ajout_factures()
    {
        $clients = DB::table('clients')
                   ->get();
        $tarifs = DB::table('tarifs')
                   ->get();
        $condition = DB::table('condition_paiements')
                   ->get();

        $produits = DB::table('produits')
                   ->get();
        $idFact = DB::table('factures')
                   ->max('facture_id');
        return view("ajout_factures",['clients'=>$clients,'tarifs'=>$tarifs,'condition'=>$condition,'produits'=>$produits,'idFact'=>$idFact]);
    }
    public function liste_factures()
    {
        $factures=DB::table('factures')
        ->get();

        return view("liste_factures",['factures'=>$factures]);
    }

   
}
