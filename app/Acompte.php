<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acompte extends Model
{
    protected $table = 'acomptes';
    protected $primaryKey = 'acompte_id';
    protected $guarded = ['acompte_id'];
    

    public function facture(){
        return $this->belongsTo(Facture::class, 'acompte_id');
    }

    public function mode_reglement(){
        return $this->belongsTo(Mode_reglement::class, 'acompte_id');
    }
}
