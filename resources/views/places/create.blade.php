@extends('layout')

@section('title', 'Creat Place')

@section('stylesheet')
	{!! Html::style('css/select2/select2.css') !!}
	{!! Html::style('css/file-input/fileinput.css') !!}
@endsection

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create Place</h1>
			<hr>

			@if ( session('success') )
				<div class="alert alert-success" role="alert"><strong>{{ session('success') }}</strong></div>
			@endif

			{!! Form::open([ 'route' => 'places.store', 'files' => true ]) !!}

				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					{{ Form::label( 'name', 'Name:', ['class' => 'control-label'] ) }}
					{{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameErrorMessage']) }}
					<span id="nameErrorMessage" class="help-block">{{ $errors->first('name') }}</span>
				</div>
				
				<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
					{{ Form::label('address', 'Address:', ['class' => 'control-label'] ) }}
					{{ Form::text('address', null, ['class' => 'form-control', 'aria-describedby' => 'addressErrorMessage']) }}
					<span id="addressErrorMessage" class="help-block">{{ $errors->first('address') }}</span>
				</div>

				<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
					{{ Form::label('price', 'Price:', ['class' => 'control-label'] ) }}
					{{ Form::select('price', $prices, null, ['placeholder' => 'Pick a price...', 'class' => 'form-control', 'aria-describedby' => 'priceErrorMessage']) }}
					<span id="priceErrorMessage" class="help-block">{{ $errors->first('price') }}</span>
				</div>

				<div class="form-group {{ count($errors->get('tags.*')) > 0 || $errors->has('tags') ? 'has-error' : '' }}">
					{{ Form::label('tags[]', 'Tags:', ['class' => 'control-label'] ) }}
					{{ Form::select('tags[]', $tags, null, ['class' => 'form-control tags', 'multiple' => 'multiple', 'aria-describedby' => 'tagsErrorMessage']) }}
					<span id="tagsErrorMessage" class="help-block">
						{{ $errors->first('tags') }}
						@foreach($errors->get('tags.*') as $message)
							{{ $message[0] }} <br/>
						@endforeach
					</span>
				</div>

				<div class="form-group {{ count($errors->get('images.*')) > 0 || $errors->has('images') ? 'has-error' : '' }}">
					<label class="control-label" for="images[]">Images:</label>
					<input id="images" name="images[]" type="file" multiple class="file-loading" accept="image/*" aria-describedby="imagesErrorMessage"/>
					<span id="tagsErrorMessage" class="help-block">
						{{ $errors->first('images') }}
						@foreach($errors->get('images.*') as $message)
							{{ $message[0] }} <br/>
						@endforeach
					</span>
				</div>

				<div class="text-center">
					{!! Html::linkRoute('places.index', 'Cancel', [], ['class' => 'btn btn-warning btn-lg']) !!}
					{!! Form::submit('Add', ['class' => 'btn btn-success btn-lg']) !!}
				</div>

			{!! Form::close() !!}		
		</div>
	</div>

@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/select2/select2.js') }}"></script>
	{!! Html::script('js/file-input/plugins/canvas-to-blob.js') !!}
	{!! Html::script('js/file-input/plugins/sortable.js') !!}
	{!! Html::script('js/file-input/plugins/purify.js') !!}
	{!! Html::script('js/file-input/fileinput.js') !!}

	<script type="text/javascript">
		
		$(document).ready(function() {
		  
		  $(".tags").select2({
		  	tags: true,
		  	placeholder: 'Pick tags...'
		  });

		  $('#images').fileinput({
				showUpload: false,
				allowedFileTypes: ['image'],
				allowedPreviewTypes: ['image'],
				previewFileType: 'image',
				browseLabel: "Pick Images",
				browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
				removeClass: "btn btn-danger",
				maxFileSize: 3000,
			});
		});

	</script>
@endsection