@extends('layout')

@section('title', '403')

@section('content')
	<div class="container">
      <div class="warning">
        <h1>403</h1>
        <p>You are not allowed to access this page.</p>
        <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-long-arrow-left"></i> Return Home</a>
      </div>
      <!-- /.warning -->
    </div>
    <!-- /.container-fluid -->
@endsection