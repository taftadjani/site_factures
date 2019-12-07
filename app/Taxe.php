<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxe extends Model
{
    protected $table = 'taxes';
    protected $primaryKey = 'taxe_id';
    protected $guarded = ['taxe_id'];
    
    public function factures()
    {
        return $this->hasMany(Facture::class,"taxe_id");
    }
    public function produits()
    {
        return $this->hasMany(Produit::class, "taxe_id");
    }
    public function familles()
    {
        return $this->hasMany(Famille::class, "taxe_id");
    }
    public function devis()
    {
        return $this->hasMany(Devis::class, "taxe_id");
    }

    public function avoirs()
    {
        return $this->hasMany(Avoir::class, "taxe_id");
    }
    public function bon_livraisons()
    {
        return $this->hasMany(Bon_livraison::class, "taxe_id");
    }


}
