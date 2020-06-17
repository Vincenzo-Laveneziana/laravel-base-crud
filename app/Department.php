<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //Fillables: permette scrittura o modifica deglia attributi
    protected $fillables = [
        'name',
        'descrizione'
    ];
}
