<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'photo1', 'photo2', 'photo3', 'dimension', 'weight', 'materialUsed', 'description', 'price'
    ];
 public function artist(){
    	return $this->belongsto(User::class);
   }
}
