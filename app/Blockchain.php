<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blockchain extends Model
{
    protected $fillable = [

        'nom',
        'emailformation',
        'contact',
        'formations'
    ];
}
