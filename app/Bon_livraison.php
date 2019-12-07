<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bon_livraison extends Model
{
    protected $table = 'bon_livraisons';
    protected $primaryKey = 'bon_livraison_id';
    protected $guarded = ['bon_livraison_id'];

    public function client(){
        return $this->belongsTo(Client::class, 'bon_livraison_id');
    }
    
    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'bon_livraison_id');
    }
    
    public function taxe()
    {
        return $this->belongsTo(Taxe::class, 'bon_livraison_id');
    }
    

    public function produits(){
        return $this->belongsToMany(Produit::class, "bon_livraison_produits", "bon_livraison_id", "produit_id");
    }


}
