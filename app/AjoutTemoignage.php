<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjoutTemoignage extends Model
{
    protected $fillable = [

     'nom',
     'provenance',
     'message',
     'image'

    ];
}
