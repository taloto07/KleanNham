<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePlace;

use App\Price;
use App\Tag;
use App\Place;
use App\Picture;
use App\Sangkat;
use App\Khan;
use App\City;
use App\Contact;
use App\Telephone;
use App\Menu;

use Carbon\Carbon;

class PlaceController extends Controller
{

    public function __construct(){
        
    }

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

                $newTag = Tag::firstOrCreate(['name' => $tag]);
                $collectTags->push($newTag);

            } else {
                $collectTags->push(Tag::find($tag));
            }
        }
        
        return $place->tags()->sync($collectTags->pluck('id'));

    }

    protected function saveSangkat($sangkat){
        $sangkat = strtolower($sangkat);
        if (!is_numeric($sangkat)){
            return Sangkat::firstOrCreate(['name' => $sangkat]);    
        } 
        
        return Sangkat::findOrFail($sangkat);
    }

    protected function saveKhan($khan){
        $khan = strtolower($khan);
        if (!is_numeric($khan)){
            return Khan::firstOrCreate(['name' => $khan]);    
        } 
        
        return Khan::findOrFail($khan);
    }

    protected function saveCity($city){
        $city = strtolower($city);
        if (!is_numeric($city)){
            return City::firstOrCreate(['name' => $city]);    
        } 
        
        return City::findOrFail($city);
    }

    // return Array [open hour, close hour]
    protected function getActualOpenAndClose($open, $close){
        if ($open === 'close' || $close === 'close'){
            return [ 'open' => 'close', 'close' => 'close'];
        } 
            
        return ['open' => $open, 'close' => $close];
    }

    // save contact
    protected function saveContact($place, $request){
        // save contact
        $contact = $place->contact ? $place->contact : new Contact();
        
        $contact->email     = $request->email;
        $contact->website   = $request->website;
        $contact->facebook  = $request->facebook;
        $contact->place_id  = $place->id;
        
        $contact->save();

        $telephones = collect();
        foreach ($request->phones as $telephone){
            if (!empty($telephone)){
                $telephones->push( new Telephone(['number' => $telephone]) );
            }
        }

        if ( !$telephones->isEmpty() ){
            $contact->telephones()->delete();
            $contact->telephones()->saveMany( $telephones );
        }
        
    }

    // save operation hours
    protected function saveHour($place, $request){
        $monday     = $this->getActualOpenAndClose($request->monday_open, $request->monday_close);
        $tuesday    = $this->getActualOpenAndClose($request->tuesday_open, $request->tuesday_close);
        $wednesday  = $this->getActualOpenAndClose($request->wednesday_open, $request->wednesday_close);
        $thursday   = $this->getActualOpenAndClose($request->thursday_open, $request->thursday_close);
        $friday     = $this->getActualOpenAndClose($request->friday_open, $request->friday_close);
        $saturday   = $this->getActualOpenAndClose($request->saturday_open, $request->saturday_close);
        $sunday     = $this->getActualOpenAndClose($request->sunday_open, $request->sunday_close);

        $place->hours()->syncWithoutDetaching([
            1 => ['open' => $monday['open'], 'close' => $monday['close']],
            2 => ['open' => $tuesday['open'], 'close' => $tuesday['close']],
            3 => ['open' => $wednesday['open'], 'close' => $wednesday['close']],
            4 => ['open' => $thursday['open'], 'close' => $thursday['close']],
            5 => ['open' => $friday['open'], 'close' => $friday['close']],
            6 => ['open' => $saturday['open'], 'close' => $saturday['close']],
            7 => ['open' => $sunday['open'], 'close' => $sunday['close']],
        ]);
    }

    protected function getPrices(){
        return Price::all()->mapWithKeys(function($item){
            return [$item['id'] => $item['description']];
        });
    }

    protected function getTags(){
        return Tag::all()->mapWithKeys(function($tag){
            return [ $tag['id'] => $tag['name'] ];
        });
    }

    protected function getSangkats(){
        return Sangkat::all()->mapWithKeys(function($sangkat){
            return [ $sangkat['id'] => $sangkat['name'] ];
        });
    }

    protected function getKhans(){
        return Khan::all()->mapWithKeys(function($khan){
            return [ $khan['id'] => $khan['name'] ];
        });
    }

    protected function getMinutesAndHours(){
        $minutes    = ['00', '30'];
        $hours      = ['close' => 'close'];
        for($i = 0; $i <= 24; $i++){
            for($j = 0; $j < 2; $j++){
                $hour = $i;
                $minute = $minutes[$j];
                $hours["$hour:$minute"] = "$hour:$minute";
                if ($i === 24) break;  
            }
        }

        return ['minutes' => $minutes, 'hours' => $hours];
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

        $prices     = $this->getPrices();
        $tags       = $this->getTags();
        $sangkats   = $this->getSangkats();
        $khans      = $this->getKhans();
        $times      = $this->getMinutesAndHours();
        $minutes    = $times['minutes'];
        $hours      = $times['hours'];

        return view('places.create', compact('prices', 'tags', 'sangkats', 'khans', 'hours', 'minutes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlace $request)
    {
        $sangkat    = $this->saveSangkat($request->sangkat);
        $khan       = $this->saveKhan($request->khan);
        $city       = $this->saveCity($request->city);
        $address    = strip_tags($request->address);

        $place = new Place();

        $place->name        = strip_tags($request->name);
        $place->address     = $address;
        $place->price_id    = $request->price;
        $place->latitude    = $request->latitude;
        $place->longitude   = $request->longitude;
        $place->sangkat_id  = $sangkat->id;
        $place->khan_id     = $khan->id;
        $place->city_id     = $city->id;
        $place->save();

        // save contact
        $this->saveContact($place, $request);

        // save hours
        $this->saveHour($place, $request);

        // // save picture
        if ($request->hasFile('images')){
            $this->storeImage($request->file('images'), $place);
        }
        // -- save picture

        // save tags
        if ($request->has('tags')){
            $this->saveTag($request->tags, $place);
        }
        // -- save tags

        return back()->with([
            'success'   => 'Successfully created!',
            'place'   => $place
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $place = Place::findOrFail($id);
        
        $menus = Menu::with(
            [
                'places' => function($q) use ($id){
                    return $q->where('places.id', $id);
                }
            ]
        )
        ->orderBy('id')
        ->get()
        ->filter(function($menu){
            return $menu->places->isNotEmpty();
        })
        ->values();

        return view('places.show', compact('place', 'menus'));
    }

    public function comment(Request $request, $id){
        return $request->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::findOrFail($id);
        $prices     = $this->getPrices();
        $tags       = $this->getTags();
        $sangkats   = $this->getSangkats();
        $khans      = $this->getKhans();
        $times      = $this->getMinutesAndHours();
        $minutes    = $times['minutes'];
        $hours      = $times['hours'];

        return view('places.edit', compact('place', 'prices', 'tags', 'sangkats', 'khans', 'minutes', 'hours'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePlace $request, $id)
    {
        $place = Place::findOrFail($id);

        $sangkat    = $this->saveSangkat($request->sangkat);
        $khan       = $this->saveKhan($request->khan);
        $city       = $this->saveCity($request->city);
        $address    = strip_tags($request->address);

        $place->name        = strip_tags($request->name);
        $place->address     = $address;
        $place->price_id    = $request->price;
        $place->latitude    = $request->latitude;
        $place->longitude   = $request->longitude;
        $place->sangkat_id  = $sangkat->id;
        $place->khan_id     = $khan->id;
        $place->city_id     = $city->id;
        $place->save();

        // save contact
        $this->saveContact($place, $request);

        // save hours
        $this->saveHour($place, $request);

        // save tags
        if ($request->has('tags')){
            $this->saveTag($request->tags, $place);
        }
        // -- save tags

        // // save picture
        if ($request->hasFile('images')){
            $this->storeImage($request->file('images'), $place);
        }

        return back()->with([
            'success'   => 'Successfully created!',
            'place'   => $place
        ]);
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
