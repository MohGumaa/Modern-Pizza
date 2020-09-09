<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protoced $tabel = 'some name';
    protected  $casts = [
        'toppings' => 'array'
    ];
}
