<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sangkat extends Model
{
	protected $fillable = [
		'name', 'created_at', 'updated_at'
	];
	
    public function places(){
    	return $this->hasMany('App\Place');
    }
}
