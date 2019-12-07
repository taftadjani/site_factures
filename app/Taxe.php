<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxe extends Model
{
    protected $table = 'taxes';
    protected $primaryKey = 'taxe_id';
    protected $guarded = ['taxe_id'];
}
