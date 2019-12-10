<?php

namespace App\Http\Controllers;

use App\Civilite;
use App\Client;
use App\Condition_paiement;
use App\Mode_reglement;
use App\Pays;
use App\Status;
use App\Tarif;
use App\Ville;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Les clients
        $clients = Client::all();
        // Civilite
        $civilites = Civilite::all();
        // Ville
        $villes = Ville::all();
        // data
        // nom, prenom,ville, mail, telephone,civilite, fax
        // $data = [];
        // foreach ($clients as $client) {
        //     $data
        // }
        return view("liste_clients", ['clients' => $clients, 'civilites' => $civilites, 'villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Status
        $statuses = Status::all();
        // Civilite
        $civilites = Civilite::all();
        // Ville
        $villes = Ville::all();
        // Pays
        $payses = Pays::all();
        // Reglement
        $reglements = Mode_reglement::all();
        // Tarif
        $tarifs = Tarif::all();
        // Condition paiement
        $conditon_paiements = Condition_paiement::all();


        return view("ajout_client", [
            'statuses' => $statuses,
            'civilites' => $civilites,
            'villes' => $villes,
            'payses' => $payses,
            'reglements' => $reglements,
            'tarifs' => $tarifs,
            'conditon_paiements' => $conditon_paiements
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request['nom'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
