<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civilite extends Model
{
    protected $table = 'civilites';
    protected $primaryKey = 'civilite_id';
    protected $guarded = ['civilite_id'];
}
