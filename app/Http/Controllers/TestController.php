<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\Menu;
use App\Food;

class TestController extends Controller
{
	public function index(){
		return Food::where('menu_place_id', Place::first()->menus[0]->pivot->id)->get();
	}
}
