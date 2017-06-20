<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sangkat extends Model
{
	protected $fillable = [
		'name'
	];
	
    public function places(){
    	return $this->hasMany('App\Place');
    }
}
