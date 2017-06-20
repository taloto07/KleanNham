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

    public function price(){
    	return $this->belongsTo('App\Price');
    }

    public function pictures(){
    	return $this->hasMany('App\Picture');
    }

    public function menus(){
        return $this->belongsToMany('App\Menu')
                    ->withPivot('id', 'name', 'description', 'ingredient', 'price', 'image')
                    ->withTimestamps();
    }

    public function hours(){
        return $this->belongsToMany('App\Hour')
                    ->withPivot('open', 'close')
                    ->withTimestamps();
    }

    public function contact(){
        return $this->hasOne('App\Contact');
    }

    public function telephones(){
        return $this->hasManyThrough('App\Telephone', 'App\Contact');
    }

    public function sangkat(){
        return $this->belongsTo('App\Sangkat');
    }

    public function khan(){
        return $this->belongsTo('App\Khan');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function getFullAddress(){
        return $this->address . ', ' . $this->sangkat->name . ', ' . $this->khan->name . ', ' . $this->city->name . ', cambodia';
    }

    public function getAddress(){
        return $this->address . ', ' . $this->sangkat->name . ', ' . $this->khan->name;   
    }

    public function isPictureExist(){
        return $this->pictures()->count();
    }

    public function getThumbnail(){
        return $this->pictures[0]->path;
    }
}
