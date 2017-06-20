@extends('layout')

@section('title', 'About')

@section('stylesheet')
  
  {!! Html::style('css/google-map/autocomplete.css') !!}

  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

@endsection

@section('content')

  <input id="pac-input" class="controls" type="text" placeholder="Search Box">
  <div id="map"></div>
  Latitude: <input type="text" name="" id="latitude"> Longitude: <input type="text" name="" id="longitude">
  
@endsection

@section('javascript')

  {!! Html::script('js/google-map/autocomplete.js') !!} 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1rhBa5RxvE6mSIBXEvCE_3DOeKj3oG3U&libraries=places&callback=initAutocomplete"
         async defer></script>

@endsection