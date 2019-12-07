<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remboursement extends Model
{
    protected $table = 'remboursements';
    protected $primaryKey = 'remboursement_id';
    protected $guarded = ['remboursement_id'];
    
    public function avoir()
    {
        return $this->belongsTo(Avoir::class, 'remboursement_id');
    }
    public function mode_reglement()
    {
        return $this->belongsTo(Mode_reglement::class, 'remboursement_id');
    }
}
