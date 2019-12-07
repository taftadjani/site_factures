<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';
    protected $primaryKey = 'produit_id';
    protected $guarded = ['produit_id', ];

    public function unite()
    {
        return $this->belongsTo(Unite::class, 'produit_id');
    }
    

    public function famille()
    {
        return $this->belongsTo(Famille::class, 'produit_id');
    }
    

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'produit_id');
    }
    
    

    public function taxe()
    {
        return $this->belongsTo(Taxe::class, 'produit_id');
    }

    public function factures(){
        return $this->belongsToMany(Facutres::class, "facture_produits", "produit_id", "facture_id");
    }

    public function devis(){
        return $this->belongsToMany(Facutres::class, "devis_produits", "produit_id", "devis_id");
    }


    public function avoirs(){
        return $this->belongsToMany(Facutres::class, "avoir_produits", "produit_id", "avoir_id");
    }

    public function bon_livraisons(){
        return $this->belongsToMany(Facutres::class, "bon_livraison_produits", "produit_id", "bon_livraison_id");
    }

    
}
