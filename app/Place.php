<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
    	'name', 'address', 'price_id'
    ];

    public function tags(){
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function Price(){
    	return $this->belongsTo('App\Price');
    }

    public function pictures(){
    	return $this->hasMany('App\Picture');
    }

    public function menus(){
        return $this->belongsToMany('App\Menu')
                    ->withPivot('id')
                    ->withTimestamps();
    }

    public function hours(){
        return $this->belongsToMany('App\Hour')
                    ->withPivot('fromHour', 'fromMinute', 'untilHour', 'untilMinute')
                    ->withTimestamps();
    }
}
