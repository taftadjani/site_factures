<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition_paiement extends Model
{
    protected $table = 'condition_paiements';
    protected $primaryKey = 'condition_paiement_id';
    protected $guarded = ['condition_paiement_id' ];
}
