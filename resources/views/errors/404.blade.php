@extends('layout')

@section('title', '404')

@section('content')
	<div class="container">
      <div class="warning">
        <h1>404</h1>
        <p>Page not found. Please use search in header.</p>
        <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-long-arrow-left"></i> Return Home</a>
      </div>
      <!-- /.warning -->
    </div>
    <!-- /.container-fluid -->
@endsection