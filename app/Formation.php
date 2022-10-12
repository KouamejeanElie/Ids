<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [

         'nom',
         'emailformation',
         'contact',
         'formations'
    ];

    protected $dates = ['created_at'];
}
