<?php

namespace App\Http\Controllers;

use App\Devis;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class DevisController extends Controller
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
    public function code_edit_devis(Request $request)
    {
        $idFacture=$_GET['idFacture'];
        $idClient=$_GET['idClient'];
        return view('code_edit_devis',['idfacture'=>$idFacture,'idClient'=>$idClient]);
    }

    public function verif_edit_devis(Request $request)
    {
      
           $idfacture=$request->input('idfacture');
         
            error_log($request->input('code_verif'));
            $test = DB::table("codes")
            ->where("code_edit_devis",$request->input('code_verif'))
            ->select('codes.*')
            ->get();
           
            
            error_log(count($test)==0);

       
        if(count($test)==0){
           Session::put('errorLog', 'Code de vérification incorrecte !!');
           return view('code_edit_devis',['idfacture'=>$idfacture]);
            
         
          } else{
            $fact = DB::table("devis")
            ->where("devis_id",$idfacture)
            ->select('devis.*')
            ->get();
        
            

            $clients = DB::table('clients')
                   ->get();
        $tarifs = DB::table('tarifs')
                   ->get();
        $condition = DB::table('condition_paiements')
                   ->get();

        $produits = DB::table('produits')
                   ->get();
           return view('devis_edit',['facture'=>$fact,'clients'=>$clients,'tarifs'=>$tarifs,'condition'=>$condition,'produits'=>$produits]);
    
            
            }
    

           
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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

        $accept=$request->input('accept');
        $date_acceptation=$request->input('date_acceptation');

         DB::table('devis')->insert(
            ['tarif_id' => $tarif, 'client_id' => $client, 'condition_paiement_id' => $condition, 'etat'=>'validée','numero'=>$numero ,
             'date_creation' => $date_creation,'impression'=>$imprime,
             'date_impression' => $date_impression, 'envoi'=>$envoi,'date_envoi'=>$date_envoi,
             'paiement' => $payement_par_defaut, 'date_paiement'=>$date_payement,'remise_globale'=>$remiseTotal,
             'observation' => $observation, 'annotation'=>$annotation,'date_acceptation'=>$date_acceptation,'acceptation'=>$accept]  );

             $idFact = DB::table('devis')
             ->max('devis_id');

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
                    return redirect()->route('ajout_devis');
                }
                else
                $nv_qtep=$qt-$qte;

                DB::table('devis_produits')->insert(
                    ['devis_id' => $idFact, 'produit_id' => $prod, 'remise' => $remise, 'quantite'=>$qte , 'activite'=>$activite]); 
                      
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
                    return redirect()->route('ajout_devis');
                }
                else
                $nv_qte=$qt-$qteq;

            DB::table('devis_produits')->insert(
                    ['devis_id' => $idFact, 'produit_id' => $prodq, 'remise' => $remiseq, 'quantite'=>$qteq , 'activite'=>$activiteq]); 
                      
             DB::table('produits')
                    ->where('produit_id', $prodq)
                    ->update(['quantite_stock' => $nv_qte]);
            }

            

           //`facture_produit_id`, `facture_id`, `produit_id`, `remise`, `quantite`
         
           
        
           
           
        }
       $totalApresRemise=$totalHtFact-(($totalHtFact*$remiseTotal)/100);
       
         

        

        $produits_fact=DB::table('devis_produits')
        ->where('devis_id', $idFact)
      
        ->get();
       
        return view('extras_devis',['remise'=>$remiseTotal,'client'=>$client,'numero'=>$numero,'payement'=>$payement_par_defaut,'numero'=>$numero,'produits_fact'=>$produits_fact]);

    
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
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function show(Devis $devis)
    {
        $idFacture=$_GET['idFacture'];
        $idClient=$_GET['idClient'];
        $type="Devis";
        $facture=DB::table('devis')
         ->where('devis_id', $idFacture)
         ->get();
         $client=DB::table('clients')
         ->where('client_id', $idClient)
         ->get();
 
         $produits_fact=DB::table('devis_produits')
         ->where('devis_id', $idFacture)
       
         ->get();
        
         return view('extras',['facture'=>$facture,'client'=>$client,'produits_fact'=>$produits_fact,'type'=>$type]);
 
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function edit(Devis $devis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devis $devis)
    {
        $client=$request->input('client');
        $etat=$request->input('etat');
        $numero=$request->input('numero');
        $date_creation=$request->input('date_creation');
        $date_fermeture=$request->input('date_fermeture');

        $date_validite=$request->input('date_validite');
        $accept=$request->input('accept');
        $date_acceptation=$request->input('date_acceptation');

        $imprime=$request->input('imprime');
        $date_impression=$request->input('date_impression');
        $envoi=$request->input('envoi');
        $date_envoi=$request->input('date_envoi');
        $idfacture=$request->input('idfacture');

        $payee=$request->input('payee');
        $date_payement=$request->input('date_payement');
        $payement_par_defaut=$request->input('payement_par_defaut');
        $tarif=$request->input('tarif');
        $remiseTotal=$request->input('remiseTotal');

        $condition=$request->input('condition');
        $observation=$request->input('observation');
        $annotation=$request->input('annotation');
       

        /*
         DB::table('produits')
                    ->where('produit_id', $prod)
                    ->update(['quantite_stock' => $nv_qtep]);

                    */

                    DB::table('devis') ->where('devis_id', $idfacture)->update(
                        ['tarif_id' => $tarif, 'client_id' => $client, 'condition_paiement_id' => $condition, 'etat'=>'validée','numero'=>$numero ,
                         'date_creation' => $date_creation,'impression'=>$imprime,
                         'date_impression' => $date_impression, 'envoi'=>$envoi,'date_envoi'=>$date_envoi,
                         'paiement' => $payement_par_defaut, 'date_paiement'=>$date_payement,'remise_globale'=>$remiseTotal,
                         'observation' => $observation, 'annotation'=>$annotation,'date_acceptation'=>$date_acceptation,'acceptation'=>$accept]  );
            
       


             $nblp=$request->input('nblp');

             for($i = 1;$i<=$nblp;$i++)
             {  
                 $id_prod_fact=$request->input('id_prod_fact'.$i);
                 $puj=$request->input('puj'.$i);
                 $prodj=$request->input('prodj'.$i);
                 $qtej=$request->input('qtej'.$i);
                 $remisej=$request->input('remisej'.$i);
                 $activitej=$request->input('activitej'.$i);
                 $totalHTj=$request->input('totalHTj'.$i);
     
     
                 DB::table('devis_produits')->where('devis_produit_id', $id_prod_fact)->update(
                         ['produit_id' => $prodj, 'remise' => $remisej, 'quantite'=>$qtej , 'activite'=>$activitej]); 
                           
                 
                 
     
              
                
             
                
                
             }

         /*    $idFact = DB::table('factures')
             ->max('facture_id');

        
     
        $pu=$request->input('pu');
        $prod=$request->input('prod');
        $qte=$request->input('qte');
        $remise=$request->input('remise');
        $activite=$request->input('activite');
        $totalHT=$request->input('totalHT');

        error_log("nblignes");
        error_log($pu);


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
               
            }*/

        //INSERT INTO `factures`(  `observation`, `annotation`, `created_at`, `updated_at`)
       
        
        
        
    
        $nbl=$request->input('nblignes');
       
        for($i = 1;$i<=$nbl;$i++)
        {  
            error_log('pu'.$i);
            $puq=$request->input('pu'.$i);
            $prodq=$request->input('prod'.$i);
            $qteq=$request->input('qte'.$i);
            $remiseq=$request->input('remise'.$i);
            $activiteq=$request->input('activite'.$i);
            $totalHTq=$request->input('totalHT'.$i);

          
            
           
    

            DB::table('devis_produits')->insert(
                    ['devis_id' => $idfacture, 'produit_id' => $prodq, 'remise' => $remiseq, 'quantite'=>$qteq , 'activite'=>$activiteq]); 
                      
             
            
            

           //`facture_produit_id`, `facture_id`, `produit_id`, `remise`, `quantite`
         
           
        
           
           
        }
      

        $produits_fact=DB::table('devis_produits')
        ->where('devis_id', $idfacture)
      
        ->get();
        error_log("client");
        error_log($client);
        $factures=DB::table('devis')
        ->get();

        return view("liste_devis",['factures'=>$factures]);
    
        //return view('extras-invoice',['remise'=>$remiseTotal,'client'=>$client,'numero'=>$numero,'payement'=>$payement_par_defaut,'numero'=>$numero,'produits_fact'=>$produits_fact]);

   
    }

    public function verif_delete_devis(Request $request)
    {
      
           $idfacture=$request->input('idfacture');
         
            error_log($idfacture);
            error_log($request->input('code_verif'));
            $test = DB::table("codes")
            ->where("code",$request->input('code_verif'))
            ->select('codes.*')
            ->get();
           
            

       
        if(count($test)==0){
           Session::put('errorLog', 'Code de vérification incorrecte !!');
           return view('code_delete_devis',['idfacture'=>$idfacture]);
            
         
          } else{
            
            DB::table('devis')->where("devis_id",$idfacture)->delete();
            DB::table('devis_produits')->where("devis_id",$idfacture)->delete();
            $factures=DB::table('devis')
        ->get();

        return view("liste_devis",['factures'=>$factures]); }
    

           
        
    }
    public function code_delete_devis(Request $request)
    {
        $idFacture=$_GET['idFacture'];
        $idClient=$_GET['idClient'];
        return view('code_delete_devis',['idfacture'=>$idFacture,'idClient'=>$idClient]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devis $devis)
    {
        //
    }
}
