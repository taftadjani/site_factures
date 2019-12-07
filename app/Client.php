<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $guarded = ['client_id'];



// Ok verified
    public function factures()
    {
        return $this->hasMany(Facture::class, "client_id");
    }
    public function bon_livraisons()
    {
        return $this->hasMany(Bon_livraison::class, "client_id");
    }


    public function devis()
    {
        return $this->hasMany(Devis::class, "client_id");
    }

    public function ville(){
        return $this->belongsTo(Ville::class, 'client_id');
    }

    public function civilite()
    {
        return $this->belongsTo(Civilite::class, 'client_id');
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class, 'client_id');
    }
    
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'client_id');
    }
    
    public function adresse_livraison()
    {
        return $this->belongsTo(Adresse_livraison::class, 'client_id');
    }
    
    public function adresse_transporteur()
    {
        return $this->belongsTo(Adresse_transporteur::class, 'client_id');
    }
    
    public function mode_reglement()
    {
        return $this->belongsTo(Mode_reglement::class, 'client_id');
    }
    
    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'client_id');
    }
    
    public function condition_paiement()
    {
        return $this->belongsTo(Condition_paiement::class, 'client_id');
    }

    public function avoirs()
    {
        return $this->hasMany(Avoir::class, "client_id");
    }


}
