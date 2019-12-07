<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode_reglement extends Model
{
    protected $table = 'mode_reglements';
    protected $primaryKey = 'mode_reglement_id';
    protected $guarded = ['mode_reglement_id'];
    
    public function clients()
    {
        return $this->hasMany(Client::class,"mode_reglement_id");
    }
    
    public function factures()
    {
        return $this->hasMany(Facture::class,"mode_reglement_id");
    }
    
    public function devis()
    {
        return $this->hasMany(Devis::class,"mode_reglement_id");
    }
    
    public function regelment()
    {
        return $this->hasMany(Reglement::class,"mode_reglement_id");
    }
    
    public function acomptes()
    {
        return $this->hasMany(Acompte::class,"mode_reglement_id");
    }
    public function avoirs()
    {
        return $this->hasMany(Avoir::class, "mode_reglement_id");
    }
    
    
    public function remboursements()
    {
        return $this->belongsTo(Remboursement::class, 'mode_reglement_id');
    }
}
