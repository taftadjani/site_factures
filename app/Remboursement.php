<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remboursement extends Model
{
    protected $table = 'remboursements';
    protected $primaryKey = 'remboursement_id';
    protected $guarded = ['remboursement_id'];
}
