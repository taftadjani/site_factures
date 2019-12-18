<?php

namespace App\Http\Controllers;

use App\Bon_livraison;
use Illuminate\Http\Request;
use DB;

class Bon_livraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $type='Bon de Livraison';
        $client=$request->input('client');
        $etat=$request->input('etat');
        $acompte=$request->input('acompte');
        $net=$request->input('netApayer');
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
       
        $tarif=$request->input('tarif');
        $remiseTotal=$request->input('remiseTotal');

        
        $observation=$request->input('observation');
        $annotation=$request->input('annotation');

         DB::table('bon_livraisons')->insert(
            ['tarif_id' => $tarif, 'client_id' => $client, 'etat'=>'validée','numero'=>$numero ,
             'date_creation' => $date_creation, 'envoi'=>$envoi,'date_envoi'=>$date_envoi
             ,'remise_globale'=>$remiseTotal,
             'observation' => $observation, 'annotation'=>$annotation,'acompte'=>$acompte, 'net_a_payer'=>$net]  );

             $idFact = DB::table('bon_livraisons')
             ->max('bon_livraison_id');

        $nbl=$request->input('nblignes');
        
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
                    return redirect()->route('ajout_bl');
                }
                else
                $nv_qtep=$qt-$qte;

                DB::table('bon_livraison_produits')->insert(
                    ['bon_livraison_id' => $idFact, 'produit_id' => $prod, 'remise' => $remise, 'quantite'=>$qte , 'activite'=>$activite]); 
                      
             DB::table('produits')
                    ->where('produit_id', $prod)
                    ->update(['quantite_stock' => $nv_qtep]);
               
            }

        //INSERT INTO `factures`(  `observation`, `annotation`, `created_at`, `updated_at`)
       
        
        
        
    
        $totalHtFact=$totalHT;
       
        for($i = 2;$i<=$nbl;$i++)
        {  
            
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
                    return redirect()->route('ajout_bl');
                }
                else
                $nv_qte=$qt-$qteq;

            DB::table('bon_livraison_produits')->insert(
                    ['bon_livraison_id' => $idFact, 'produit_id' => $prodq, 'remise' => $remiseq, 'quantite'=>$qteq , 'activite'=>$activiteq]); 
                      
             DB::table('produits')
                    ->where('produit_id', $prodq)
                    ->update(['quantite_stock' => $nv_qte]);
            }

            

           //`facture_produit_id`, `facture_id`, `produit_id`, `remise`, `quantite`
         
           
        
           
           
        }
       $totalApresRemise=$totalHtFact-(($totalHtFact*$remiseTotal)/100);
       
         

        

        $produits_fact=DB::table('bon_livraison_produits')
        ->where('bon_livraison_id', $idFact)
      
        ->get();
        error_log("client");
        error_log($client);
        return view('extras_bl',['remise'=>$remiseTotal,'client'=>$client,'numero'=>$numero,'payement'=>"",'numero'=>$numero,'produits_fact'=>$produits_fact,'type'=>$type]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bon_livraison  $bon_livraison
     * @return \Illuminate\Http\Response
     */
    public function show(Bon_livraison $bon_livraison)
    {
       
        $idFacture=$_GET['idFacture'];
        $idClient=$_GET['idClient'];
        $type=$_GET['type'];;
        $facture=DB::table('bon_livraisons')
      
         ->where('bon_livraison_id', $idFacture)
         ->get();
         $client=DB::table('clients')
         ->where('client_id', $idClient)
         ->get();
 
         $produits_fact=DB::table('bon_livraison_produits')
         ->where('bon_livraison_id', $idFacture)
       
         ->get();
        
         return view('extras',['facture'=>$facture,'client'=>$client,'produits_fact'=>$produits_fact,'type'=>$type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bon_livraison  $bon_livraison
     * @return \Illuminate\Http\Response
     */
    public function edit(Bon_livraison $bon_livraison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bon_livraison  $bon_livraison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bon_livraison $bon_livraison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bon_livraison  $bon_livraison
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bon_livraison $bon_livraison)
    {
        //
    }
}
