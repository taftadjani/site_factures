<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'pays';
    protected $primaryKey = 'pays_id';
    protected $guarded = ['pays_id'];

    public function villes()
    {
        return $this->hasMany(Ville::class,"pays_id");
    }
}
