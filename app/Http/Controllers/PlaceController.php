<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Price;
use App\Tag;
use App\Place;
use App\Picture;

class PlaceController extends Controller
{

    protected function storeImage($images, $place){
        
        $location     = "images/places/$place->id";
        $disk         = 'public';
        $placeImages   = collect();

        foreach ($images as $image){
        
            $path = $image->store($location, $disk);
            $placeImages->push(new Picture(['path' => $path]));
        
        }

        return $place->pictures()->saveMany($placeImages);
    }

    protected function saveTag($tags, $place){

        $collectTags = collect();

        foreach($tags as $tag){
            if (!is_numeric($tag)){

                $newTag = Tag::where('name', $tag);

                $newTag = $newTag->count() ? $tag->first() : new Tag(['name' => $tag]);
                $newTag->save();
                $collectTags->push($newTag);
            } else {
                $collectTags->push(Tag::find($tag));
            }
        }
        
        return $place->tags()->syncWithoutDetaching($collectTags->pluck('id'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();

        return view('places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prices = Price::all()->mapWithKeys(function($item){
            return [$item['id'] => $item['description']];
        });

        $tags = Tag::all()->mapWithKeys(function($tag){
            return [ $tag['id'] => $tag['name'] ];
        });

        return view('places.create', compact('prices', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, 
            [
                'name'      => 'required|string|max:255',
                'address'   => 'required|string|max:255',
                'price'     => 'required|exists:prices,id',
                'tags.*'    => 'sometimes',
                'images.*'  => 'sometimes|image|max:3000',
            ]
        );

        $place = new Place();

        $place->name = strip_tags($request->name);
        $place->address = strip_tags($request->address);
        $place->price_id = $request->price;
        $place->save();

        // // save picture
        if ($request->hasFile('images')){
            $this->storeImage($request->file('images'), $place);
        }

        // save tags
        if ($request->has('tags')){
            $this->saveTag($request->tags, $place);
        }

        return back()->withSuccess('Successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
