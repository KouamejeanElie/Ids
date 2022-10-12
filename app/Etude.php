<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    protected $fillable = [
       
       'nom',
       'emailformation',
       'contact',
       'formations'

    ];

     protected $dates = ['created_at'];
}
