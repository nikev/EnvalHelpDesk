<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function techniciens()
    {
        return $this->belongsToMany(Technicien::class);
    }


}
