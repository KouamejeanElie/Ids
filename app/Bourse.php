<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bourse extends Model
{
    protected $fillable = [

        'nom',
        'participation',
        'choixbourse',
        'message',
        'id_user',
        'name',
        'statut'
    ];
}
