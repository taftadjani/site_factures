<?php

namespace App\Http\Controllers;

use App\Avoir;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class AvoirController extends Controller
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
    
    public function code_edit_av(Request $request)
    {
        $idFacture=$_GET['idFacture'];
        $idClient=$_GET['idClient'];
        return view('code_edit_av',['idfacture'=>$idFacture,'idClient'=>$idClient]);
    }
    public function verif_edit_av(Request $request)
    {
      
           $idfacture=$request->input('idfacture');
         
            error_log($request->input('code_verif'));
            $test = DB::table("codes")
            ->where("code",$request->input('code_verif'))
            ->select('codes.*')
            ->get();
           
            
            error_log(count($test)==0);

       
        if(count($test)==0){
           Session::put('errorLog', 'Code de vérification incorrecte !!');
           return view('code_edit_av',['idfacture'=>$idfacture]);
            
         
          } else{
            $fact = DB::table("avoirs")
            ->where("avoir_id",$idfacture)
            ->select('avoirs.*')
            ->get();
        
            

            $clients = DB::table('clients')
                   ->get();
        $tarifs = DB::table('tarifs')
                   ->get();
        $condition = DB::table('condition_paiements')
                   ->get();

        $produits = DB::table('produits')
                   ->get();
           return view('avoir_edit',['facture'=>$fact,'clients'=>$clients,'tarifs'=>$tarifs,'condition'=>$condition,'produits'=>$produits]);
    
            
            }
    

           
        
    }



    public function code_delete_av(Request $request)
    {
        $idFacture=$_GET['idFacture'];
        $idClient=$_GET['idClient'];
        return view('code_delete_av',['idfacture'=>$idFacture,'idClient'=>$idClient]);
    }
    public function verif_delete_av(Request $request)
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
           return view('code_delete_av',['idfacture'=>$idfacture]);
            
         
          } else{
            
            DB::table('avoirs')->where("avoir_id",$idfacture)->delete();
            DB::table('avoir_produits')->where("avoir_id",$idfacture)->delete();
            $factures=DB::table('avoirs')
        ->get();

        return view("liste_avoirs",['factures'=>$factures]); }
    

           
        
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


        $payee=$request->input('remb');
        $date_payement=$request->input('date_remb');
        $payement_par_defaut=$request->input('payement_par_defaut');
        $tarif=$request->input('tarif');
        $remiseTotal=$request->input('remiseTotal');

        $condition=$request->input('condition');
        $observation=$request->input('observation');
        $annotation=$request->input('annotation');

         DB::table('avoirs')->insert(
            ['tarif_id' => $tarif, 'client_id' => $client, 'condition_paiement_id' => $condition, 'etat'=>'validée','numero'=>$numero ,
             'date_creation' => $date_creation,'impression'=>$imprime,
             'date_impression' => $date_impression, 'envoi'=>$envoi,'date_envoi'=>$date_envoi,
             'paiement' => $payement_par_defaut, 'date_remboursement'=>$date_payement,'remboursement'=>$payee,'remise_globale'=>$remiseTotal,
             'observation' => $observation, 'annotation'=>$annotation]  );
              	
             $idFact = DB::table('avoirs')
             ->max('avoir_id');

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
                

            
                $nv_qtep=$qt+$qte;

                DB::table('avoir_produits')->insert(
                    ['avoir_id' => $idFact, 'produit_id' => $prod, 'remise' => $remise, 'quantite'=>$qte , 'activite'=>$activite]); 
                      
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
                

                
                $nv_qte=$qt+$qteq;

            DB::table('avoir_produits')->insert(
                    ['avoir_id' => $idFact, 'produit_id' => $prodq, 'remise' => $remiseq, 'quantite'=>$qteq , 'activite'=>$activiteq]); 
                      
             DB::table('produits')
                    ->where('produit_id', $prodq)
                    ->update(['quantite_stock' => $nv_qte]);
            }

            

           //`facture_produit_id`, `facture_id`, `produit_id`, `remise`, `quantite`
         
           
        
           
           
        }
       $totalApresRemise=$totalHtFact-(($totalHtFact*$remiseTotal)/100);
       
         

        

        $produits_fact=DB::table('avoir_produits')
        ->where('avoir_id', $idFact)
      
        ->get();
        error_log("client");
        error_log($client);
        return view('extras_avoir',['remise'=>$remiseTotal,'client'=>$client,'numero'=>$numero,'payement'=>$payement_par_defaut,'numero'=>$numero,'produits_fact'=>$produits_fact]);

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
     * @param  \App\Avoir  $avoir
     * @return \Illuminate\Http\Response
     */
    public function show(Avoir $avoir)
    {
        $idFacture=$_GET['idFacture'];
       $idClient=$_GET['idClient'];
       $type="Avoir";
       $facture=DB::table('avoirs')
        ->where('avoir_id', $idFacture)
        ->get();
        $client=DB::table('clients')
        ->where('client_id', $idClient)
        ->get();

        $produits_fact=DB::table('avoir_produits')
        ->where('avoir_id', $idFacture)
      
        ->get();
       
        return view('extras',['facture'=>$facture,'client'=>$client,'produits_fact'=>$produits_fact,'type'=>$type]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avoir  $avoir
     * @return \Illuminate\Http\Response
     */
    public function edit(Avoir $avoir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avoir  $avoir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avoir $avoir)
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
        $idfacture=$request->input('idfacture');

        $payee=$request->input('remb');
        $date_payement=$request->input('date_remb');
        $payement_par_defaut=$request->input('payement_par_defaut');
        $tarif=$request->input('tarif');
        $remiseTotal=$request->input('remiseTotal');

        $condition=$request->input('condition');
        $observation=$request->input('observation');
        $annotation=$request->input('annotation');


        DB::table('avoirs')->where('avoir_id', $idfacture)->update(
            ['tarif_id' => $tarif, 'client_id' => $client, 'condition_paiement_id' => $condition, 'etat'=>'validée','numero'=>$numero ,
             'date_creation' => $date_creation,'impression'=>$imprime,
             'date_impression' => $date_impression, 'envoi'=>$envoi,'date_envoi'=>$date_envoi,
             'paiement' => $payement_par_defaut, 'date_remboursement'=>$date_payement,'remboursement'=>$payee,'remise_globale'=>$remiseTotal,
             'observation' => $observation, 'annotation'=>$annotation]  );
              	
       


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
     
     
                 DB::table('avoir_produits')->where('avoir_produit_id', $id_prod_fact)->update(
                         ['produit_id' => $prodj, 'remise' => $remisej, 'quantite'=>$qtej , 'activite'=>$activitej]); 
                           
                 
                 
     
              
                
             
                
                
             }

        
        
        
        
    
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

          
            
            $qteStock=DB::table('produits')
                    ->where('produit_id', $prodq)
                    ->pluck('quantite_stock');

           

            DB::table('avoir_produits')->insert(
                    ['facture_id' => $idfacture, 'produit_id' => $prodq, 'remise' => $remiseq, 'quantite'=>$qteq , 'activite'=>$activiteq]); 
                      
             
            

            

           //`facture_produit_id`, `facture_id`, `produit_id`, `remise`, `quantite`
         
           
        
           
           
        }
      

        $produits_fact=DB::table('avoir_produits')
        ->where('avoir_id', $idfacture)
      
        ->get();
        error_log("client");
        error_log($client);
        $factures=DB::table('avoirs')
        ->get();

        return view("liste_avoirs",['factures'=>$factures]);
    
       
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avoir  $avoir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avoir $avoir)
    {
        //
    }
}
