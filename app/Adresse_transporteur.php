<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse_transporteur extends Model
{
    protected $table = 'adresse_transporteurs';
    protected $primaryKey = 'adresse_transporteur_id';
    protected $guarded = ['adresse_transporteur_id'];
}
