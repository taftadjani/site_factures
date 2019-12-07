<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bon_livraison extends Model
{
    protected $table = 'bon_livraisons';
    protected $primaryKey = 'bon_livraison_id';
    protected $guarded = ['bon_livraison_id'];
}
