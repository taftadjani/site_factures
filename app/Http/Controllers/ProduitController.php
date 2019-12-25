<?php

namespace App\Http\Controllers;

use App\Famille;
use App\Fournisseur;
use App\Produit;
use App\Taxe;
use App\Unite;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = produit::all();


        return view('liste_produits', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familles = Famille::all();
        $fournisseurs = Fournisseur::all();
        $unites = Unite::all();
        $taxes = Taxe::all();
        return view('ajout_produit', ['familles' => $familles, 'fournisseurs' => $fournisseurs, 'unites' => $unites, 'taxes' => $taxes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produitdata = [];

        $produitdata['designation'] = $request['designation'];
        $produitdata['reference'] = $request['reference_produit'];
        $produitdata['quantite_stock'] = doubleval($request['quantite']);
        $produitdata['famille_id'] = intval($request['famille']) == -1 ? null : intval($request['famille']);
        $produitdata['fournisseur_id'] = intval($request['fournisseur']) == -1 ? null : intval($request['fournisseur']);


        $produitdata['activite'] = $request['activite'] == "noActivity" ? null : $request['activite'];
        $produitdata['unite_id'] = intval($request['unite']) == -1 ? null : intval($request['unite']);
        $produitdata['prix_achat'] = doubleval($request['prix_achat']);
        $produitdata['prix_vente'] = doubleval($request['prix_vente']);
        $produitdata['taxe_id'] = intval($request['taxe']) == -1 ? null : intval($request['taxe']);
        $produitdata['marge_ht'] = doubleval($request['marge_ht']);
        $produitdata['image_name'] = $request['images'];

        // return $produitdata;

        $produit = new Produit($produitdata);
        $produit->save();



        
        return redirect()->action('ProduitController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "eeddd";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        // return 'edit';
        $familles = Famille::all();
        $fournisseurs = Fournisseur::all();
        $unites = Unite::all();
        $taxes = Taxe::all();
        $id = $_GET['id'];
        // return $id;

        $produit = Produit::findOrFail(intval($id));

        // return $id;

        return view('modify_produit',  ['familles' => $familles, 'fournisseurs' => $fournisseurs, 'unites' => $unites, 'taxes' => $taxes, 'produit'=>$produit]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        
        $produit['designation']= $request->designation;
        $produit['reference']=$request->reference_produit;
        $produit['quantite_stock']=$request->quantite;
        $produit['famille_id']=$request->famille ==-1?null:$request->famille;
        $produit['fournisseur_id']=$request->fournisseur ==-1?null:$request->fournisseur;
        $produit['activite']=$request->activite;
        $produit['unite_id']=$request->unite ==-1?null:$request->unite;
        $produit['prix_achat']=$request->prix_achat;
        $produit['prix_vente']=$request->prix_vente;
        $produit['taxe_id']=$request->taxe ==-1?null:$request->taxe;
        $produit['marge_ht']=$request->marge_ht;
        $produit['image_name']=$request->images;
        $produit->save();

        return redirect()->action('ProduitController@index');
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $produit = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->action('ProduitController@index');
    }
}
