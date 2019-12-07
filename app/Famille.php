<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    protected $table = 'familles';
    protected $primaryKey = 'famille_id';
    protected $guarded = ['famille_id' ];
    public function produits()
    {
        return $this->hasMany(Produit::class, "famille_id");
    }
    

    public function taxe()
    {
        return $this->belongsTo(Taxe::class, 'famille_id');
    }
    

}
