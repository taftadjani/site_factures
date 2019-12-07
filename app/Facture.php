<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'factures';
    protected $primaryKey = 'facture_id';
    protected $guarded = ['facture_id' ];

    public function client(){
        return $this->belongsTo(Client::class, 'facture_id');
    }

    
    
    public function mode_reglement()
    {
        return $this->belongsTo(Mode_reglement::class, 'facture_id');
    }
    
    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'facture_id');
    }
    
    public function taxe()
    {
        return $this->belongsTo(Taxe::class, 'facture_id');
    }
    
    
    public function condition_paiement()
    {
        return $this->belongsTo(Condition_paiement::class, 'facture_id');
    }

    public function produits(){
        return $this->belongsToMany(Produit::class, "facture_produits", "facture_id", "produit_id");
    }

    public function reglements(){
        return $this->hasMany(Reglement::class, "facture_id");
    }

    public function acomptes(){
        return $this->hasMany(Acompte::class, "facture_id");
    }
}
