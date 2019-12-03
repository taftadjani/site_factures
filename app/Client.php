<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ['nom', "prenom", "adresse", "telephone", "code_postal", "ville", "email", "statut", "civilite", "raison_sociale"];
    public function factures()
    {
        return $this->hasMany(Facture::class,"client_id");
    }
}
