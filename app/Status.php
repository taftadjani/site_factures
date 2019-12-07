<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'status_id';
    protected $guarded = ['status_id'];
    
    public function clients()
    {
        return $this->hasMany(Client::class,"status_id");
    }
}
