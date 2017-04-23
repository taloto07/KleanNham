<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
    	'path', 'place_id'
    ];

    public function place(){
    	return $this->belongsTo('App\Place');
    }
}
