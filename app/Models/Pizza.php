<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //use HasFactory;
    // metoda za pravljenje niza od izabranih vrednosti za toppings
    protected $casts = [
        'toppings' => 'array'
    ];
}
