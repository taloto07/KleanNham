<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Place;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $place_id)
    {
        // return $request->all();
        $place = Place::findOrFail($place_id);

        $this->validate($request, [
                'message'             => 'required|string|max:500',
                'rating_overall'      => 'sometimes|nullable|numeric',
                'rating_meal_quality' => 'sometimes|nullable|numeric',
                'rating_staff'        => 'sometimes|nullable|numeric',
                'rating_parking'      => 'sometimes|nullable|numeric',
                'rating_hygiene'      => 'sometimes|nullable|numeric',
                'rating_location'     => 'sometimes|nullable|numeric',
            ]);


        $comment = new Comment();

        $comment->place_id      = $place_id;
        $comment->user_id       = Auth::user()->id;
        $comment->message       = $request->message;
        $comment->overall       = is_null($request->rating_overall)         ? 0 : $request->rating_overall;
        $comment->meal_quality  = is_null($request->rating_meal_quality)    ? 0 : $request->rating_meal_quality;
        $comment->staff         = is_null($request->rating_staff)           ? 0 : $request->rating_staff;
        $comment->parking       = is_null($request->rating_parking)         ? 0 : $request->rating_parking;
        $comment->hygiene       = is_null($request->rating_hygiene)         ? 0 : $request->rating_hygiene;
        $comment->location      = is_null($request->rating_location)        ? 0 : $request->rating_location;
        $comment->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
