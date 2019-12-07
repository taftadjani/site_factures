<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avoir extends Model
{
    protected $table = 'avoirs';
    protected $primaryKey = 'avoir_id';
    protected $guarded = ['avoir_id'];

    public function taxe(){
        return $this->belongsTo(Taxe::class, 'avoir_id');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'avoir_id');
    }

    public function condition_paiement(){
        return $this->belongsTo(Condition_paiement::class, 'avoir_id');
    }
    
    public function mode_reglement()
    {
        return $this->belongsTo(Mode_reglement::class, 'avoir_id');
    }
    
    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'avoir_id');
    }
    
    public function remboursements()
    {
        return $this->belongsTo(Remboursement::class, 'avoir_id');
    }

    public function produits(){
        return $this->belongsToMany(Produit::class, "avoir_produits", "avoir_id", "produit_id");
    }

}
