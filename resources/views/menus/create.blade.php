@extends('layout')

@section('title', 'Home')

@section('stylesheet')
	{!! Html::style('css/select2/select2.css') !!}
	{!! Html::style('css/file-input/fileinput.css') !!}
@endsection

@section('page-title')
    @include('partials._page-title', ['title' => 'Menus'])
@endsection

@section('content')
	
	
<div class="container">

	@if ( session('success') )
    	<div class="alert alert-success" role="alert">
            <strong>
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ session('success') }}
            </strong>
        </div>
        <!-- /.alert alert-success -->
	@endif

    @if ( $errors->any() )
        <div class="alert alert-danger" role="alert">
            <strong>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                There are some errors! Please, fix them before submitting!
            </strong>
        </div>
        <!-- /.alert alert-danger -->
    @endif
		
	{!! Form::open([ 'route' => ['places.menus.store', $place->id], 'files' => true, 'class' => 'mb80' ]) !!}
    	<fieldset>
	    	<legend>Add Menu</legend>
	    	<div class="row">
	    		<div class="col-md-6">
	    			<div class="form-group {{ $errors->has('menu') ? 'has-error' : '' }}">
						{{ Form::label('menu', 'Menu:', ['class' => 'control-label'] ) }}
						{{ Form::select('menu', $menus, null, ['class' => 'form-control menu', 'aria-describedby' => 'menuErrorMessage', 'placeholder' => 'Pick menu', 'style' => 'width: 100%']) }}
						<span id="menuErrorMessage" class="help-block">
							{{ $errors->first('menu') }}
						</span>
		            </div>
      				<!-- /.form-group -->
	    			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
				 		{{ Form::label( 'name', 'Name:', ['class' => 'control-label'] ) }}
		  			 	{{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameErrorMessage']) }}
		              	<span id="nameErrorMessage" class="help-block">{{ $errors->first('name') }}</span>
				  	</div>
				  	<!-- /.form-group -->
				  	<!-- /.form-group -->
	    			<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
				 		{{ Form::label( 'price', 'Price:', ['class' => 'control-label'] ) }}
		  			 	{{ Form::text('price', null, ['class' => 'form-control', 'aria-describedby' => 'priceErrorMessage']) }}
		              	<span id="priceErrorMessage" class="help-block">{{ $errors->first('price') }}</span>
				  	</div>
				  	<!-- /.form-group -->
				  	<div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
				  		<label class="control-label" for="image">Image:</label>
                		<input  name="image" type="file" class="form-control-file" accept="image/*" aria-describedby="imageErrorMessage" />
                		<span id="imageErrorMessage" class="help-block">{{ $errors->first('image') }}</span>
				  	</div>
				  	<!-- /.form-group -->
	    		</div>
	    		<!-- ./col-md-6 -->
	    		<div class="col-md-6">
	    			<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
				 		{{ Form::label( 'description', 'Description:', ['class' => 'control-label'] ) }}
		  			 	{{ Form::textarea('description', null, ['class' => 'form-control', 'aria-describedby' => 'descriptionErrorMessage']) }}
		              	<span id="descriptionErrorMessage" class="help-block">{{ $errors->first('description') }}</span>
				  	</div>
	    		</div>
	    		<!-- ./col-md-6 -->
	    	</div>
	  	</fieldset>

		<div class="text-center">
				{!! Html::linkRoute('places.index', 'Cancel', [], ['class' => 'btn btn-warning btn-lg']) !!}
				{!! Form::submit('Add', ['class' => 'btn btn-primary btn-lg']) !!}
		</div>
		{!! Form::close() !!}
</div>
<!-- /.container-fluid -->
          	
	

@endsection	

@section('javascript')
	
	{!! Html::script('js/select2/select2.js') !!}
	{!! Html::script('js/file-input/plugins/canvas-to-blob.js') !!}
	{!! Html::script('js/file-input/plugins/sortable.js') !!}
	{!! Html::script('js/file-input/plugins/purify.js') !!}
	{!! Html::script('js/file-input/fileinput.js') !!}
	{!! Html::script('js/google-map/autocomplete.js') !!}
  	
	<script type="text/javascript">
		
		$(document).ready(function() {
		  
			$(".menu").select2({
			  	tags: true,
			  	placeholder: 'Pick menu...'
			});

		});

	</script>
@endsection