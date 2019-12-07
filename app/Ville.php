<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'villes';
    protected $primaryKey = 'ville_id';
    protected $guarded = ['ville_id'];

    public function clients()
    {
        return $this->hasMany(Client::class,"ville_id");
    }
    
    public function fournisseurs()
    {
        return $this->hasMany(Fournisseur::class,"ville_id");
    }

    public function adresse_livraisons()
    {
        return $this->hasMany(Adresse_livraison::class,"ville_id");
    }

    public function adresse_transporteur()
    {
        return $this->hasMany(Adresse_transporteur::class,"ville_id");
    }
    
    public function pays()
    {
        return $this->belongsTo(Pays::class, 'ville_id');
    }
}
