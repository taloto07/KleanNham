<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocaleController extends Controller
{
    public function index(Request $request, $locale){

    	session(['locale' => $locale]);

    	return back();
    }
}
