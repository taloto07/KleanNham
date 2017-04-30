@extends('layout')

@section('title', 'Place');

@section('stylesheet')
	
@endsection

@section('content')
	
	@foreach($places as $place)
		<div class="row">

			<div class="media">
			  <div class="media-left media-top">
			    <a href="#">
			      <img class="media-object" src="{{ asset('storage/' . $place->pictures()->first()->path) }}" alt="{{$place->name}}" width="200px">
			    </a>
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading">{{ $place->name }}</h4>
			    <div> Address: {{ $place->address }} </div>
			    <div> 
			    	Tags: 
			    	@foreach($place->tags as $tag)
			    		<span class="label label-info">{{$tag->name}}</span>
			    	@endforeach
			     </div>
			  </div>
			</div>

		</div>
	@endforeach

@endsection

@section('javascript')
	
@endsection

