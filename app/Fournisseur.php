<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $table = 'fournisseurs';
    protected $primaryKey = 'fournisseur_id';
    protected $fillable = ["nom","prenom", "adresse", "telephone","code_postal", "ville", "email","raison_sociale"];
}
