<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    protected $table = 'reglements';
    protected $primaryKey = 'reglement_id';
    protected $guarded = ['reglement_id'];
}
