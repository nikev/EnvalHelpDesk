<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model

{

    protected $fillable = [

        'cat_incident',
        'niveau_sev',
        'description'
    ];
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function techniciens()
    {
        return $this->belongsToMany(Technicien::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
