<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjoutProjet extends Model
{
    protected $fillable = [
       
       'titreprojet',
       'descriptifprojet',
       'image'
    ];
}
