<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Ville;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return view("liste_fournisseurs", compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ville
        $villes = Ville ::all();


        return view("ajout_fournisseur", ['villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $nom = $request['nom'];
        $code = $request['code'];
        $prenom =  $request['prenom'];
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
        
        $ville = intval($ville);

        $fournisseur_data = [];
        
        if ($ville != -1) {
            $fournisseur_data['ville_id'] = $ville;
        }

        $fournisseur_data['nom'] = $nom;
        $fournisseur_data['code'] = $code;
        $fournisseur_data['prenom'] = $prenom;
        $fournisseur_data['raison_sociale'] = $raison_sociale;
        $fournisseur_data['adresse'] = $adresse;
        $fournisseur_data['telephone'] = $telephone;
        $fournisseur_data['email'] = $email;
        $fournisseur_data['code_postal'] = $code_postal;
        $fournisseur_data['ice'] = $ice;
        $fournisseur_data['if'] = $ifvar;
        $fournisseur_data['patente'] = $patente;
        $fournisseur_data['cnss'] = $cnss;
        $fournisseur_data['rc'] = $rc;


        $fournisseur=new Fournisseur($fournisseur_data);
        $fournisseur->save();


       return redirect()->action('FournisseurController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        $villes = Ville::all();
        $id= $_GET['id'];
        $fournisseur = Fournisseur::findOrFail($id);


        return view("modify_fournisseur", ['villes' => $villes, 'fournisseur'=>$fournisseur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $fournisseur = Fournisseur::findOrFail($id);

        $fournisseur['raison_sociale'] = $request->raison_sociale;
        $fournisseur['nom'] = $request->nom;
        $fournisseur['code'] = $request->code;
        $fournisseur['prenom'] = $request->prenom;
        $fournisseur['adresse'] = $request->adresse;
        $fournisseur['telephone'] = $request->telephone;
        $fournisseur['email'] = $request->email;
        $fournisseur['code_postal'] = $request->code_postal;
        $fournisseur['ville_id'] = $request->ville == -1?null:$request->ville ;
        $fournisseur['ice'] = $request->ice;
        $fournisseur['if'] = $request->if;
        $fournisseur['patente'] = $request->patente;
        $fournisseur['cnss'] = $request->cnss;
        $fournisseur['rc'] = $request->rc;
        $fournisseur->save();

        return redirect()->action('FournisseurController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fournisseur = Fournisseur::findOrFail($id);
        $fournisseur->delete();
        return redirect()->action('FournisseurController@index');
    }
}
