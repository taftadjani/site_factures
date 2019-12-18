<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;
use DB;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInfo(Request $request)
    {
      
            error_log($request->produit_id);
            $pro = DB::table("produits")
            ->where("produit_id",$request->produit_id)
            ->pluck("designation","prix_vente");
            
            error_log("done");
            
            return response()->json($pro);

           
        
    }
    
    public function quantiteStock(Request $request)
    {
      
            error_log($request->produit_id);
            $pro = DB::table("produits")
            ->where("produit_id",$request->produit_id)
            ->pluck("quantite_stock");
            
            
            return response()->json($pro);

           
        
    }


    public function produits(Request $request)
    {
        $produits = DB::table('produits')
                    ->pluck("designation","prix_vente");
        error_log("done");
            
        return response()->json($produits);

         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
       
        $client=$request->input('client');
        $etat=$request->input('etat');
        $numero=$request->input('numero');
        $date_creation=$request->input('date_creation');
        $date_fermeture=$request->input('date_fermeture');

        $date_validite=$request->input('date_validite');
        
        $imprime=$request->input('imprime');
        $date_impression=$request->input('date_impression');
        $envoi=$request->input('envoi');
        $date_envoi=$request->input('date_envoi');


        $payee=$request->input('payee');
        $date_payement=$request->input('date_payement');
        $payement_par_defaut=$request->input('payement_par_defaut');
        $tarif=$request->input('tarif');
        $remiseTotal=$request->input('remiseTotal');

        $condition=$request->input('condition');
        $observation=$request->input('observation');
        $annotation=$request->input('annotation');

         DB::table('factures')->insert(
            ['tarif_id' => $tarif, 'client_id' => $client, 'condition_paiement_id' => $condition, 'etat'=>'validée','numero'=>$numero ,
             'date_creation' => $date_creation,'impression'=>$imprime,
             'date_impression' => $date_impression, 'envoi'=>$envoi,'date_envoi'=>$date_envoi,
             'paiement' => $payement_par_defaut, 'date_paiement'=>$date_payement,'remise_globale'=>$remiseTotal,
             'observation' => $observation, 'annotation'=>$annotation]  );

             $idFact = DB::table('factures')
             ->max('facture_id');

        $nbl=$request->input('nblignes');
        error_log("nblignes");
        error_log($nbl);
        $pu=$request->input('pu');
        $prod=$request->input('prod');
        $qte=$request->input('qte');
        $remise=$request->input('remise');
        $activite=$request->input('activite');
        $totalHT=$request->input('totalHT');


        $qteStockp=DB::table('produits')
                    ->where('produit_id', $prod)
                    ->pluck('quantite_stock');

            foreach($qteStockp as $qt){
                

                if($qt<$qte){
                    return redirect()->route('ajout_factures');
                }
                else
                $nv_qtep=$qt-$qte;

                DB::table('facture_produits')->insert(
                    ['facture_id' => $idFact, 'produit_id' => $prod, 'remise' => $remise, 'quantite'=>$qte , 'activite'=>$activite]); 
                      
             DB::table('produits')
                    ->where('produit_id', $prod)
                    ->update(['quantite_stock' => $nv_qtep]);
               
            }

        //INSERT INTO `factures`(  `observation`, `annotation`, `created_at`, `updated_at`)
       
        
        
        
    
        $totalHtFact=$totalHT;
       
        for($i = 2;$i<=$nbl;$i++)
        {  
            error_log('pu'.$i);
            $puq=$request->input('pu'.$i);
            $prodq=$request->input('prod'.$i);
            $qteq=$request->input('qte'.$i);
            $remiseq=$request->input('remise'.$i);
            $activiteq=$request->input('activite'.$i);
            $totalHTq=$request->input('totalHT'.$i);

            $totalHtFact=$totalHtFact+$totalHTq;
            
            $qteStock=DB::table('produits')
                    ->where('produit_id', $prodq)
                    ->pluck('quantite_stock');

            foreach($qteStock as $qt){
                

                if($qt<$qteq){
                    return redirect()->route('ajout_factures');
                }
                else
                $nv_qte=$qt-$qteq;

            DB::table('facture_produits')->insert(
                    ['facture_id' => $idFact, 'produit_id' => $prodq, 'remise' => $remiseq, 'quantite'=>$qteq , 'activite'=>$activiteq]); 
                      
             DB::table('produits')
                    ->where('produit_id', $prodq)
                    ->update(['quantite_stock' => $nv_qte]);
            }

            

           //`facture_produit_id`, `facture_id`, `produit_id`, `remise`, `quantite`
         
           
        
           
           
        }
       $totalApresRemise=$totalHtFact-(($totalHtFact*$remiseTotal)/100);
       
         

        

        $produits_fact=DB::table('facture_produits')
        ->where('facture_id', $idFact)
      
        ->get();
        error_log("client");
        error_log($client);
        return view('extras-invoice',['remise'=>$remiseTotal,'client'=>$client,'numero'=>$numero,'payement'=>$payement_par_defaut,'numero'=>$numero,'produits_fact'=>$produits_fact]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
       $idFacture=$_GET['idFacture'];
       $idClient=$_GET['idClient'];
       $type="Facture";
       $facture=DB::table('factures')
        ->where('facture_id', $idFacture)
        ->get();
        $client=DB::table('clients')
        ->where('client_id', $idClient)
        ->get();

        $produits_fact=DB::table('facture_produits')
        ->where('facture_id', $idFacture)
      
        ->get();
       
        return view('extras',['facture'=>$facture,'client'=>$client,'produits_fact'=>$produits_fact,'type'=>$type]);


      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        //
    }
}