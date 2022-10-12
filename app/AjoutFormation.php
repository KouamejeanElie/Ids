<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjoutFormation extends Model
{
    protected $fillable = [
   
     'titrebouton',
     'soustitre',
     'titre',
     'image',
     'descriptifformation',
     'nomformateur',
     'dateformation',
     'categorieformation'

    ];

    protected $dates = ['dateformation'];
}
