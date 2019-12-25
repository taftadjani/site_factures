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
use App\Adresse_livraison;
use App\Adresse_transporteur;
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
        
        // Insertion dans la BD
        $nom = $request['nom'];
        $prenom =  $request['prenom'];
        $status =  $request['status'];
        $civilite =  $request['civilite'];
        $raison_sociale =  $request['raison_sociale'];
        $adresse =  $request['adresse'];
        $telephone =  $request['telephone'];
        $email =  $request['email'];
        $code_postal =  $request['code_postal'];
        $ville =  $request['ville'];
        $ice = $request['ice'];
        $ifvar =  $request['if'];
        $patente =  $request['patente'];
        $cnss =  $request['cnss'];
        $rc =  $request['rc'];
        $siret =  $request['siret'];
        $code_ape =  $request['code_ape'];
        $tva_intra =  $request['tva_intra'];
        $raison_sociale_adr_livraison =  $request['raison_sociale_adr_livraison'];
        $adresse_1_livraison =  $request['adresse_1_livraison'];
        $adresse_2_livraison =  $request['adresse_2_livraison'];
        $code_postal_adr_livraison = $request['code_postal_adr_livraison'];
        $pays_adr_livraison =  $request['pays_adr_livraison'];
        $ville_adr_livraison =  $request['ville_adr_livraison'];
        $raison_sociale_adr_transporteur =  $request['raison_sociale_adr_transporteur'];
        $adresse_1_transporteur =  $request['adresse_1_transporteur'];
        $adresse_2_transporteur =  $request['adresse_2_transporteur'];
        $code_postal_adr_transporteur =  $request['code_postal_adr_transporteur'];
        $pays_adr_transporteur =  $request['pays_adr_transporteur'];
        $ville_adr_transporteur =  $request['ville_adr_transporteur'];
        $reglement =  $request['reglement'];
        $tarif =  $request['tarif'];
        $condition_paiement_devis =  $request['condition_paiement_devis'];
        $condition_paiement_facture =  $request['condition_paiement_facture'];


        $status = intval($status);
        $civilite = intval($civilite);
        $ville = intval($ville);
        $pays_adr_livraison = intval($pays_adr_livraison);
        $ville_adr_livraison = intval($ville_adr_livraison);
        $pays_adr_transporteur = intval($pays_adr_transporteur);
        $ville_adr_transporteur = intval($ville_adr_transporteur);
        $tarif = intval($tarif);
        $reglement = intval($reglement);
        $condition_paiement_devis = intval($condition_paiement_devis);
        $condition_paiement_facture = intval($condition_paiement_facture);




        $clientdata = [];
        $adr_livdata = [];
        $adr_transdata = [];

        $clientdata['nom'] = $nom;
        $clientdata['prenom'] = $prenom;

        if ($status != 0) {
            $clientdata['status_id'] = $status;
        }
        if ($civilite != 0) {
            $clientdata['civilite_id'] = $civilite;
        }
        if ($ville != 0) {
            $clientdata['ville_id'] = $ville;
        }
        if ($tarif != 0) {
            $clientdata['tarif_id'] = $tarif;
        }
        if ($reglement != 0) {
            $clientdata['mode_reglement_id'] = $reglement;
        }
        if ($condition_paiement_devis != 0) {
            $clientdata['condition_paiement_devis_id'] = $condition_paiement_devis;
        }
        if ($condition_paiement_facture != 0) {
            $clientdata['condition_paiement_facture_id'] = $condition_paiement_facture;
        }



        $clientdata['raison_sociale'] = $raison_sociale;
        $clientdata['adresse'] = $adresse;
        $clientdata['telephone'] = $telephone;
        $clientdata['email'] = $email;
        $clientdata['code_postal'] = $code_postal;

        $clientdata['ice'] = $ice;
        $clientdata['if'] = $ifvar;
        $clientdata['patente'] = $patente;
        $clientdata['email'] = $email;
        $clientdata['cnss'] = $cnss;

        $clientdata['rc'] = $rc;
        $clientdata['siret'] = $siret;
        $clientdata['code_ape'] = $code_ape;
        $clientdata['tva_intra'] = $tva_intra;



        // Adresse livraison

        $adr_livdata['raison_sociale'] = $raison_sociale_adr_livraison;
        $adr_livdata['adresse_1'] = $adresse_1_livraison;
        $adr_livdata['adresse_2'] = $adresse_2_livraison;
        $adr_livdata['code_postal'] = $code_postal_adr_livraison;
        
        if ($ville_adr_livraison != -1) {
            $adr_livdata['ville_id'] = $ville_adr_livraison;
        }


        // Adresse transporteur

        $adr_transdata['raison_sociale'] = $raison_sociale_adr_transporteur;
        $adr_transdata['adresse_1'] = $adresse_1_transporteur;
        $adr_transdata['adresse_2'] = $adresse_2_transporteur;
        $adr_transdata['code_postal'] = $code_postal_adr_transporteur;

        if ($ville_adr_transporteur != -1) {
            $adr_transdata['ville_id'] = $ville_adr_transporteur;
        }


        $adr_liv = new Adresse_livraison($adr_livdata);
        $adr_liv->save();

        $adr_trans = new Adresse_transporteur($adr_transdata);
        $adr_trans->save();

        $client = new Client($clientdata);

        $adr_liv->clients()->save($client);
        $adr_trans->clients()->save($client);


        return redirect()->action('ClientController@index');



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
    public function edit(Request $request)
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
        $client = Client::findOrFail(intval($request['id']));
        
        $adr_liv = null;
        $adr_trans = null;
        if ($client->adresse_livraison_id != null) {
            $adr_liv = Adresse_livraison::findOrFail($client->adresse_livraison_id);
        }
        if ($client->adresse_transporteur_id != null) {
            $adr_trans = Adresse_transporteur::findOrFail($client->adresse_transporteur_id);
        }

        return view("modify_client", [
                    'statuses' => $statuses,
                    'civilites' => $civilites,
                    'villes' => $villes,
                    'payses' => $payses,
                    'reglements' => $reglements,
                    'tarifs' => $tarifs,
                    'conditon_paiements' => $conditon_paiements,
                    'client' => $client,
                    'adr_liv'=>$adr_liv,
                    'adr_trans'=>$adr_trans
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
       $client->delete();

        // Insertion dans la BD
        $nom = $request['nom'];
        $prenom =  $request['prenom'];
        $status =  $request['status'];
        $civilite =  $request['civilite'];
        $raison_sociale =  $request['raison_sociale'];
        $adresse =  $request['adresse'];
        $telephone =  $request['telephone'];
        $email =  $request['email'];
        $code_postal =  $request['code_postal'];
        $ville =  $request['ville'];
        $ice = $request['ice'];
        $ifvar =  $request['if'];
        $patente =  $request['patente'];
        $cnss =  $request['cnss'];
        $rc =  $request['rc'];
        $siret =  $request['siret'];
        $code_ape =  $request['code_ape'];
        $tva_intra =  $request['tva_intra'];
        $raison_sociale_adr_livraison =  $request['raison_sociale_adr_livraison'];
        $adresse_1_livraison =  $request['adresse_1_livraison'];
        $adresse_2_livraison =  $request['adresse_2_livraison'];
        $code_postal_adr_livraison = $request['code_postal_adr_livraison'];
        $pays_adr_livraison =  $request['pays_adr_livraison'];
        $ville_adr_livraison =  $request['ville_adr_livraison'];
        $raison_sociale_adr_transporteur =  $request['raison_sociale_adr_transporteur'];
        $adresse_1_transporteur =  $request['adresse_1_transporteur'];
        $adresse_2_transporteur =  $request['adresse_2_transporteur'];
        $code_postal_adr_transporteur =  $request['code_postal_adr_transporteur'];
        $pays_adr_transporteur =  $request['pays_adr_transporteur'];
        $ville_adr_transporteur =  $request['ville_adr_transporteur'];
        $reglement =  $request['reglement'];
        $tarif =  $request['tarif'];
        $condition_paiement_devis =  $request['condition_paiement_devis'];
        $condition_paiement_facture =  $request['condition_paiement_facture'];


        $status = intval($status);
        $civilite = intval($civilite);
        $ville = intval($ville);
        $pays_adr_livraison = intval($pays_adr_livraison);
        $ville_adr_livraison = intval($ville_adr_livraison);
        $pays_adr_transporteur = intval($pays_adr_transporteur);
        $ville_adr_transporteur = intval($ville_adr_transporteur);
        $tarif = intval($tarif);
        $reglement = intval($reglement);
        $condition_paiement_devis = intval($condition_paiement_devis);
        $condition_paiement_facture = intval($condition_paiement_facture);




        $clientdata = [];
        $adr_livdata = [];
        $adr_transdata = [];

        $clientdata['nom'] = $nom;
        $clientdata['prenom'] = $prenom;

        if ($status != 0) {
            $clientdata['status_id'] = $status;
        }
        if ($civilite != 0) {
            $clientdata['civilite_id'] = $civilite;
        }
        if ($ville != 0) {
            $clientdata['ville_id'] = $ville;
        }
        if ($tarif != 0) {
            $clientdata['tarif_id'] = $tarif;
        }
        if ($reglement != 0) {
            $clientdata['mode_reglement_id'] = $reglement;
        }
        if ($condition_paiement_devis != 0) {
            $clientdata['condition_paiement_devis_id'] = $condition_paiement_devis;
        }
        if ($condition_paiement_facture != 0) {
            $clientdata['condition_paiement_facture_id'] = $condition_paiement_facture;
        }



        $clientdata['raison_sociale'] = $raison_sociale;
        $clientdata['adresse'] = $adresse;
        $clientdata['telephone'] = $telephone;
        $clientdata['email'] = $email;
        $clientdata['code_postal'] = $code_postal;

        $clientdata['ice'] = $ice;
        $clientdata['if'] = $ifvar;
        $clientdata['patente'] = $patente;
        $clientdata['email'] = $email;
        $clientdata['cnss'] = $cnss;

        $clientdata['rc'] = $rc;
        $clientdata['siret'] = $siret;
        $clientdata['code_ape'] = $code_ape;
        $clientdata['tva_intra'] = $tva_intra;



        // Adresse livraison

        $adr_livdata['raison_sociale'] = $raison_sociale_adr_livraison;
        $adr_livdata['adresse_1'] = $adresse_1_livraison;
        $adr_livdata['adresse_2'] = $adresse_2_livraison;
        $adr_livdata['code_postal'] = $code_postal_adr_livraison;
        
        if ($ville_adr_livraison != -1) {
            $adr_livdata['ville_id'] = $ville_adr_livraison;
        }


        // Adresse transporteur

        $adr_transdata['raison_sociale'] = $raison_sociale_adr_transporteur;
        $adr_transdata['adresse_1'] = $adresse_1_transporteur;
        $adr_transdata['adresse_2'] = $adresse_2_transporteur;
        $adr_transdata['code_postal'] = $code_postal_adr_transporteur;

        if ($ville_adr_transporteur != -1) {
            $adr_transdata['ville_id'] = $ville_adr_transporteur;
        }


        $adr_liv = new Adresse_livraison($adr_livdata);
        $adr_liv->save();

        $adr_trans = new Adresse_transporteur($adr_transdata);
        $adr_trans->save();

        $client = new Client($clientdata);

        $adr_liv->clients()->save($client);
        $adr_trans->clients()->save($client);


       
       return redirect()->action('ClientController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
       $client->delete();
       return redirect()->action('ClientController@index');
    }
}
