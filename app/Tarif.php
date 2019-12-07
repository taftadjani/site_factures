<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarifs';
    protected $primaryKey = 'tarif_id';
    protected $guarded = ['tarif_id'];
}
