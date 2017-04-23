<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
    	'name', 'address', 'level_id'
    ];

    public function tags(){
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function level(){
    	return $this->belongsTo('App\Level');
    }

    public function pictures(){
    	return $this->hasMany('App\Picture');
    }
}
