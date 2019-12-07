<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $table = 'fournisseurs';
    protected $primaryKey = 'fournisseur_id';
    protected $guarded = ['fournisseur_id' ];

    public function ville(){
        return $this->belongsTo(Ville::class, "fournisseur_id");
    }
    public function produits()
    {
        return $this->hasMany(Produit::class, "fournisseur_id");
    }
}
