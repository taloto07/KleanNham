<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = [
    	'day'
    ];

    public function places(){
    	return $this->belongsToMany('App\Place');
    }
}
