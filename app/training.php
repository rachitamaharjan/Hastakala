<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'introduction', 'image','contact', 'description', 'trainer', 'venue', 'category',
    ];
}
