<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'genre_id';
    protected $guarded = ['genre_id'];
}