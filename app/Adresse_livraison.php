<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse_livraison extends Model
{
    protected $table = 'adresse_livraisons';
    protected $primaryKey = 'adresse_livraison_id';
    protected $guarded = ['adresse_livraison_id'];
    
    public function clients()
    {
        return $this->hasMany(Client::class,"adresse_livraison_id");
    }
    
    public function ville()
    {
        return $this->belongsTo(Ville::class,"adresse_livraison_id");
    }
}
