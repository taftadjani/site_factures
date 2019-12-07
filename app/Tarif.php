<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarifs';
    protected $primaryKey = 'tarif_id';
    protected $guarded = ['tarif_id'];
    
    public function clients()
    {
        return $this->hasMany(Client::class,"tarif_id");
    }
    
    public function factures()
    {
        return $this->hasMany(Facture::class,"tarif_id");
    }
    public function devis()
    {
        return $this->hasMany(Devis::class,"tarif_id");
    }
    public function avoirs()
    {
        return $this->hasMany(Avoir::class, "tarif_id");
    }
    public function bon_livraisons()
    {
        return $this->hasMany(Bon_livraison::class, "tarif_id");
    }

}
