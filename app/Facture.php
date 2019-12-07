<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'factures';
    protected $primaryKey = 'facture_id';
    protected $guarded = ['facture_id' ];

    // public function client(){
    //     return $this->belongsTo(Client::class);
    // }

    // public function produits(){
    //     return $this->belongsToMany(Produit::class, "produit_facture", "facture_id", "produit_id");
    // }
}
