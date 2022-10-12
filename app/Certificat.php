<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    protected $fillable = [

        'libellecertificat',
        'id_user',
        'id_name',
        'statut',
        'files'


    ];

   protected $dates = ['created_at'];
}
