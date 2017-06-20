<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Place;
use App\Menu;

class MenuController extends Controller
{

	protected function saveMenu($menu){
        $menu = strtolower($menu);
        if (!is_numeric($menu)){
            return Menu::firstOrCreate(['name' => $menu]);    
        } 
        
        return Menu::findOrFail($menu);
    }

    public function create($id){
        $place = Place::findOrFail($id);
        $menus = Menu::all()->mapWithKeys(function($menu){
            return [ $menu['id'] => $menu['name'] ];
        });

        return view('menus.create', compact('place', 'menus'));
    }

    /**
     * Store a newly created menu in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $placeId){
        $this->validate($request, [
            'name'          => 'required|string|max:255',
            'menu'          => 'required|max:255',
            'price'         => 'sometimes|nullable|numeric',
            'description'   => 'sometimes|nullable|string|max:500',
            'image'         => 'sometimes|nullable|image|max:3000'
        ]);

        $place = Place::findOrFail($placeId);

        $menu = $this->saveMenu($request->menu);

        $path = '';
        if ($request->hasFile('image')){
            $location     = "images/menus";
            $disk         = 'public';
            $path         = $request->file('image')->store($location, $disk);
        }

        $place->menus()->save($menu, [
            'name'          => $request->name,
            'description'   => $request->description,
            'price'         => $request->price,
            'ingredient'    => $request->ingredient,
            'image'         => $path
        ]);

        return back()->with([
            'success' => 'Successfully Created.'
        ]);
    }
}
