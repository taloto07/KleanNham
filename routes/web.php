<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Place;
Route::get('/', function () {
    return view('home', ['projects' => 5]);
})->name('home');

Route::get('about', function(){
	return view('about');
});

Route::get('contact', function(){
	return view('contact');
});

Route::get('locale/{locale}', 'LocaleController@index');
Auth::routes();

Route::delete('pictures/{id}', 'PictureController@destroy')
->name('pictures.destroy');


Route::get('places/{id}/menus/create', 'MenuController@create')
->name('places.menus.create');

Route::post('places/{id}/menus', 'MenuController@store')
->name('places.menus.store');

Route::post('places/{id}/comments', 'CommentController@store')
->name('comments.store')->middleware('auth');

Route::resource('places', 'PlaceController');


