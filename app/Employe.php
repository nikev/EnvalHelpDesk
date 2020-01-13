<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


    //
}
