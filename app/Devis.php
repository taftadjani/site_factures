<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $table = 'devis';
    protected $primaryKey = 'devis_id';
    protected $guarded = ['devis_id'];

    public function mode_reglement(){
        return $this->belongsTo(Mode_reglement::class, 'devis_id');
    }
    
    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'devis_id');
    }
    
    public function taxe()
    {
        return $this->belongsTo(Taxe::class, 'devis_id');
    }
    
    public function client()
    {
        return $this->belongsTo(Client::class, 'devis_id');
    }
    
    public function condition_paiement()
    {
        return $this->belongsTo(Condition_paiement::class, 'devis_id');
    }
    

    public function produits(){
        return $this->belongsToMany(Produit::class, "devis_produits", "devis_id", "produit_id");
    }
}
