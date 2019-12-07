<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition_paiement extends Model
{
    protected $table = 'condition_paiements';
    protected $primaryKey = 'condition_paiement_id';
    protected $guarded = ['condition_paiement_id' ];
    
    public function clients()
    {
        return $this->hasMany(Client::class,"condition_paiement_id");
    }
    
    public function factures()
    {
        return $this->hasMany(Facture::class,"condition_paiement_id");
    }
    
    public function devis()
    {
        return $this->hasMany(Devis::class,"condition_paiement_id");
    }

    public function avoirs()
    {
        return $this->hasMany(Avoir::class, "condition_paiement_id");
    }

}
