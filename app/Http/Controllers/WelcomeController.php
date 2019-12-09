<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function ajout_client()
    {
        return view("ajout_client");
    }
    public function liste_clients()
    {
        return view("liste_clients");
    }
    public function ajout_fournisseur()
    {
        return view("ajout_fournisseur");
    }
    public function liste_fournisseurs()
    {
        return view("liste_fournisseurs");
    }
    public function ajout_devis()
    {
        return view("ajout_devis");
    }
    public function liste_devis()
    {
        return view("liste_devis");
    }
    public function ajout_bl()
    {
        return view("ajout_bl");
    }
    public function liste_bl()
    {
        return view("liste_bl");
    }
    public function ajout_avoir()
    {
        return view("ajout_avoir");
    }
    public function liste_avoirs()
    {
        return view("liste_avoirs");
    }
    public function ajout_factures()
    {
        return view("ajout_factures");
    }
    public function liste_factures()
    {
        return view("liste_factures");
    }
}
