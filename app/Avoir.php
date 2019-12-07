<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avoir extends Model
{
    protected $table = 'avoirs';
    protected $primaryKey = 'avoir_id';
    protected $guarded = ['avoir_id'];
}
