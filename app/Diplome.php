<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
     protected $fillable = [

        'libellediplome',
        'id_user',
        'id_name',
        'statut',
        'files',
        'id_diplome'


    ];

   protected $dates = ['created_at'];
}
