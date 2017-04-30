<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{

	use SoftDeletes;
	
    protected $fillable = [
    	'path', 'place_id'
    ];

    protected $dates = ['deleted_at'];

    public function place(){
    	return $this->belongsTo('App\Place');
    }
}
