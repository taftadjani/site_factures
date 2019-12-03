<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';
    protected $primaryKey = 'produit_id';
    protected $fillable =["reference", "designation", "activite", "prix_achat", "img_name"];
    
}
