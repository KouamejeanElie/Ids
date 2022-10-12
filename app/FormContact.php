<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormContact extends Model
{
    protected $fillable = [

        'identite',
        'contact',
        'mailcontact',
        'message'

    ];

    protected $dates = ['created_at'];
}
