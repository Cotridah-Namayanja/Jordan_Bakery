<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $fillable = [
        'recipename',
        'ingredient_name',
        'quantity',
        'instructions'
    ];

}
