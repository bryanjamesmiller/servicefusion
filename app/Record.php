<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /*
     * This permits mass assigning for these input values through forms.
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'birthday',
        'zipcode'
    ];
}
