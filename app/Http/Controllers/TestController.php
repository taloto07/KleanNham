<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\Menu;
use App\Hour;
use App\Telephone;
use App\Contact;
use App\Tag;

use Auth;

use DB;

use Exception;

use Geocode;

class TestController extends Controller
{
	public function index(){
		// try{
			if ( Auth::check() ){
			
				return DB::transaction(function(){
					$tags = Tag::lockForUpdate()->get();
					
					if ($tags->where('name', 'chicken')->count()){
						return 'exits';
					}
					
					sleep(10);
					$tag = Tag::create(['name' => 'chicken']);
				
					return $tag;
				});

			} else {
				
				return DB::transaction(function(){
					$tags = Tag::sharedLock()->get();
					
					if ($tags->where('name', 'chicken')->count()){
						return 'exits';
					}

					$tag = Tag::create(['name' => 'chicken']);

					return $tag;
				});

			}
		// } catch (Exception $e){
		// 	return $e->getMessage();
		// }	
	}

	public function test_1(){
		try {
			
			$tag = new Tag();
			$tag->name = 'test';
			$tag->save();

		} catch(\Execption $e){
			
			return 'errors';
		}
		return 'success';
	}

	public function map(Request $request, $address){
		$geocode = Geocode::make()->address($address);
		
		$address_components = $geocode->raw()->address_components;
		$locationType 		= $geocode->locationType();
		$latitude			= $geocode->latitude();
		$longitude			= $geocode->longitude();

		return view('map', compact('address_components', 'locationType', 'latitude', 'longitude'));
	}

	public function autocomplete(){
		return view('autocomplete');
	}
}
