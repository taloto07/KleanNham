<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\Menu;
use App\Food;
use App\Hour;

class TestController extends Controller
{
	public function index(){
		$place = Place::first();
		return $place->hours()->first()->pivot->fromHour;
	}
}
