<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class);
    }



}
