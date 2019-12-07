<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acompte extends Model
{
    protected $table = 'acomptes';
    protected $primaryKey = 'acompte_id';
    protected $guarded = ['acompte_id'];
}
