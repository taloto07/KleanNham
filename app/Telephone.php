<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    protected $fillable = [
    	'number', 'contact_id'
    ];

    public function contact(){
    	return $this->belongsTo('App\Contact');
    }
}
