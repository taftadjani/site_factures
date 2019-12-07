<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $guarded = ['client_id'];
    // public function factures()
    // {
    //     return $this->hasMany(Facture::class,"client_id");
    // }
}
