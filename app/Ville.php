<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'villes';
    protected $primaryKey = 'ville_id';
    protected $guarded = ['ville_id'];
}
