<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    protected $table = 'reglements';
    protected $primaryKey = 'reglement_id';
    protected $guarded = ['reglement_id'];

    public function facture(){
        return $this->belongsTo(Facture::class, 'reglement_id');
    }

    public function mode_reglement(){
        return $this->belongsTo(Mode_reglement::class, 'reglement_id');
    }
}
