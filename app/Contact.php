<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'email', 'facebook', 'website', 'place_id'
    ];

    public function place(){
    	return $this->belongsTo('App\Place');
    }

    public function telephones(){
    	return $this->hasMany('App\Telephone');
    }
}
