<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class featuredProduct extends Model
{
     protected $fillable = [
        'name', 'image1', 'image2', 'image3', 'dimension', 'weight', 'materialUsed', 'description', 'price',
    ];
}
