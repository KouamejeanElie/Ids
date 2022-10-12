<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $fillable = [
        
        'nom',
        'mail',
        'tel',
        'daterdv',
        'heurerdv',
        'services'

    ];

    protected $dates = ['daterdv'];
}
