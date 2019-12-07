<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'pays';
    protected $primaryKey = 'pays_id';
    protected $guarded = ['pays_id'];
}
