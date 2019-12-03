<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'factures';
    protected $primaryKey = 'facture_id';
    protected $fillable = [];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
