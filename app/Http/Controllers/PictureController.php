<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Picture;

class PictureController extends Controller
{
    public function destroy(Request $request, $id){
    	
    	Picture::destroy($id);
    	return response()->json(['success' => 'seleted successfully ' . $id]);
    	
    }
}
