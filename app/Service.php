<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


    protected $fillable = [
        'lib_serv',

    ];
    public function employes()
    {
        return $this->hasMany(Employe::class);
    }

    public function technicien()
    {
        return $this->hasMany(Technicien::class);
    }






}
