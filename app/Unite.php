<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    protected $table = 'unites';
    protected $primaryKey = 'unite_id';
    protected $guarded = ['unite_id'];
    public function produits()
    {
        return $this->hasMany(Produit::class, "unite_id");
    }

}
