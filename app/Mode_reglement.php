<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode_reglement extends Model
{
    protected $table = 'mode_reglements';
    protected $primaryKey = 'mode_reglement_id';
    protected $guarded = ['mode_reglement_id'];
}
