<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function place(){
    	return $this->belongsTo('App\Place');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function rate(){
    	$score = ($this->overall + $this->meal_quality + $this->staff + $this->parking + $this->hygiene + $this->location) / 6;
    	return (float)number_format( (float)$score, 1, '.', '' );
    }
}
