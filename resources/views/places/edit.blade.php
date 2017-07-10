@extends('layout')

@section('title', 'Edit ' . ucwords($place->name))

@section('stylesheet')
	{!! Html::style('css/select2/select2.css') !!}
	{!! Html::style('css/file-input/fileinput.css') !!}
	{!! Html::style('css/google-map/autocomplete.css') !!}
@endsection

@section('page-title')
    @include('partials._page-title', ['title' => 'Edit ' . ucwords($place->name) ])
@endsection

@section('content')
	
	
<div class="container">

	@if ( session('success') )
    	<div class="alert alert-success" role="alert">
            <strong>
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ session('success') }} <a href="{{route('places.menus.create', ['id' => session('place')->id])}}">click here</a> to add menu.
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
		
	{!! Form::open([ 'route' => ['places.update', $place->id], 'method' => 'put', 'files' => true, 'class' => 'mb80' ]) !!}
    	{{-- Basic Information --}}
      	<fieldset>
	    	<legend>Basic Information</legend>
		  	<div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
		 		{{ Form::label( 'name', 'Name:', ['class' => 'control-label col-form-label'] ) }}
  			 	{{ Form::text('name', $place->name, ['class' => 'form-control form-control-danger']) }}
              	<div class="form-control-feedback">{{ $errors->first('name') }}</div>
		  	</div>
		  	<!-- /.form-group -->
			  	<div class="form-group {{ $errors->has('price') ? 'has-danger' : '' }}">
		  		{{ Form::label('price', 'Price:', ['class' => 'control-label col-form-label'] ) }}
	  			{{ Form::select('price', $prices, $place->price_id, ['class' => 'form-control form-control-danger']) }}
			  	<div>{{ $errors->first('price') }}</div>
            </div>
		 	<!-- /.form-group -->
		 	<div class="form-group {{ count($errors->get('tags.*')) > 0 || $errors->has('tags') ? 'has-danger' : '' }}">
          		{{ Form::label('tags[]', 'Tags:', ['class' => 'control-label col-form-label'] ) }}
				{{ Form::select('tags[]', $tags, $place->tags()->pluck('id')->all(), ['class' => 'form-control form-control-danger tags', 'multiple' => 'multiple', 'style' => 'width: 100%']) }}
				<div>
					{{ $errors->first('tags') }}
					@foreach($errors->get('tags.*') as $message)
						{{ $message[0] }} <br/>
					@endforeach
	            </div>
          	</div>
          	<!-- /.form-group -->
	  	</fieldset>
	  	{{-- Location --}}
	  	<fieldset>
			<legend>Location</legend>
			<div class="row">
          		<div class="col-md-6">
			    	{{ Form::text('address_helper', null, ['class' => 'form-control controls', "id" => "pac-input", "placeholder" => "Search Address"]) }}
  					<div id="map"></div>
    			</div>
    			<div class="col-md-6">
      				<div class="form-group {{ $errors->has('address') ? 'has-danger' : '' }}">
						{{ Form::label('address', 'Address:', ['class' => 'control-label col-form-label'] ) }}
						{{ Form::text('address', $place->address, ['class' => 'form-control form-control-danger', "placeholder" => "Address", 'id' => 'address']) }}
						<div class="form-control-feedback">{{ $errors->first('address') }}</div>
	             	</div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('latitude') ? 'has-danger' : '' }}">
						{{ Form::label('latitude', 'Latitude', ['class' => 'control-label col-form-label'] ) }}
						{{ Form::text('latitude', $place->latitude, ['class' => 'form-control form-control-danger', 'id' => 'latitude']) }}	
						<div class="form-control-feedback">{{ $errors->first('latitude') }}</div>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('longitude') ? 'has-danger' : '' }}">
						{{ Form::label('longitude', 'Longitude', ['class' => 'control-label col-form-label'] ) }}
						{{ Form::text('longitude', $place->longitude, ['class' => 'form-control form-control-danger', 'id' => 'longitude']) }}
						<div class="form-control-feedback">{{ $errors->first('longitude') }}</div>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('sangkat') ? 'has-danger' : '' }}">
						{{ Form::label('sangkat', 'Sangkat:', ['class' => 'control-label col-form-label'] ) }}
						{{ Form::select('sangkat', $sangkats, $place->sangkat_id, ['class' => 'form-control form-control-danger sangkat', 'placeholder' => 'Pick sangkat', 'style' => 'width: 100%']) }}
						<div class="form-control-feedback">
							{{ $errors->first('sangkat') }}
						</div>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('khan') ? 'has-danger' : '' }}">
							{{ Form::label('khan', 'Khan:', ['class' => 'control-label col-form-label'] ) }}
							{{ Form::select('khan', $khans, $place->khan_id, ['class' => 'form-control form-control-danger khan1', 'placeholder' => 'Pick khan', 'id' => 'khan', 'style' => 'width: 100%']) }}
							<div class="form-control-feedback">
								{{ $errors->first('khan') }}
							</div>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('city') ? 'has-danger' : '' }}">
							{{ Form::label('city', 'City:', ['class' => 'control-label col-form-label'] ) }}
							{{ Form::text('city', $place->city->name, ['id' => 'city', 'class' => 'form-control form-control-danger khan', 'readonly']) }}
							<div class="form-control-feedback">
								{{ $errors->first('city') }}
							</div>
		            </div>
      				<!-- /.form-group -->
    			</div>
  			</div>
  			<!-- /.row -->
		</fieldset>
		{{-- Contact Information --}}
		<fieldset>
  			<legend>Contact Information</legend>
  			<div class="row">
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
    					{{ Form::label('email', 'Email', ['class' => 'control-label col-form-label'] ) }}
                    	{{ Form::text('email', $place->contact->email, ['class' => 'form-control form-control-danger']) }}
			            <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                  	</div>
                  	<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('website') ? 'has-danger' : '' }}">
    					{{ Form::label('website', 'Website', ['class' => 'control-label col-form-label'] ) }}
                        {{ Form::text('website', $place->contact->website, ['class' => 'form-control form-control-danger']) }}
			            <div class="form-control-feedback">{{ $errors->first('website') }}</div>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('facebook') ? 'has-danger' : '' }}">
					    {{ Form::label('facebook', 'Facebook', ['class' => 'control-label col-form-label'] ) }}
                      	{{ Form::text('facebook', $place->contact->facebook, ['class' => 'form-control form-control-danger']) }}
			            <div class="form-control-feedback">{{ $errors->first('facebook') }}</div>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('phones.0') ? 'has-danger' : '' }}">
      					<label for="phones[]" class="control-label col-form-label">Phone</label>
      					<input type="text" name="phones[]" class="form-control form-control-danger" id="phones[]" value="{{ (old('phones.0') ? old('phones.0') : (count($place->telephones) > 0 ? $place->telephones[0]->number : '')) }}">
      					<div class="form-control-feedback">{{ $errors->first('phones.0') }}</div>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('phones.1') ? 'has-danger' : '' }}">
      					<label for="phones[]" class="control-label col-form-label">Phone</label>
      					<input type="text" name="phones[]" class="form-control form-control-danger" id="phones[]" value="{{ (old('phones.1') ? old('phones.1') : (count($place->telephones) > 1 ? $place->telephones[1]->number : '')) }}">
      					<dive class="form-control-feedback">{{ $errors->first('phones.1') }}</dive>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('phones.2') ? 'has-danger' : '' }}">
    					<label for="phones[]" class="control-label col-form-label">Phone</label>
    					<input type="text" name="phones[]" class="form-control form-control-danger"value="{{ (old('phones.2') ? old('phones.2') : (count($place->telephones) > 2 ? $place->telephones[2]->number : '')) }}">
    					<dive class="form-control-feedback">{{ $errors->first('phones.2') }}</dive>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
  			</div>
		</fieldset>
		{{-- Opening Hours --}}
        <fieldset>
            <legend>Hours of Operation</legend>
			<table class="table">
					<thead>
						<tr>
								<th></th>
								<th>Open</th>
								<th>Close</th>
						</tr>
					</thead>
					<tbody>
						<tr class="{{ $errors->has('monday_open') ? 'has-danger' : '' }}">
								<th scope="row">Monday</th>
								<td>{{ Form::select('monday_open', $hours, $place->hours()->where('id', 1)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('monday_close', $hours, $place->hours()->where('id', 1)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('tuesday_open') ? 'has-danger' : '' }}">
								<th scope="row">Tuesday</th>
								<td>{{ Form::select('tuesday_open', $hours, $place->hours()->where('id', 2)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('tuesday_close', $hours, $place->hours()->where('id', 2)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('wednesday_open') ? 'has-danger' : '' }}">
								<th scope="row">Wednesday</th>
	                      	<td>{{ Form::select('wednesday_open', $hours, $place->hours()->where('id', 3)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('wednesday_close', $hours, $place->hours()->where('id', 3)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('thursday_open') ? 'has-danger' : '' }}">
								<th scope="row">Thursday</th>
	                      	<td>{{ Form::select('thursday_open', $hours, $place->hours()->where('id', 4)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('thursday_close', $hours, $place->hours()->where('id', 4)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('friday_open') ? 'has-danger' : '' }}">
								<th scope="row">Friday</th>
	                      	<td>{{ Form::select('friday_open', $hours, $place->hours()->where('id', 5)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('friday_close', $hours, $place->hours()->where('id', 5)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('saturday_open') ? 'has-danger' : '' }}">
								<th scope="row">Saturday</th>
	                      	<td>{{ Form::select('saturday_open', $hours, $place->hours()->where('id', 6)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('saturday_close', $hours, $place->hours()->where('id', 6)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('sunday_open') ? 'has-danger' : '' }}">
								<th scope="row">Sunday</th>
	                      	<td>{{ Form::select('sunday_open', $hours, $place->hours()->where('id', 7)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('sunday_close', $hours, $place->hours()->where('id', 7)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
					</tbody>
			</table>
		</fieldset>
        {{-- Upload Image --}}
        <fieldset>
            <legend>Upload Images</legend>
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
        </fieldset>
		<fieldset>
  			<legend>Additional Information</legend>
  			<!-- /.form-check -->
  			<div class="form-check">
    			<label class="form-check-label">
      				<input type="checkbox" class="form-check-input"> I agree with terms &amp; conditions
    			</label>
  			</div>
  			<!-- /.form-check -->
		</fieldset>
		<div class="text-center">
				{!! Html::linkRoute('places.index', 'Cancel', [], ['class' => 'btn btn-warning btn-lg']) !!}
				{!! Form::submit('Update', ['class' => 'btn btn-primary btn-lg']) !!}
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
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1rhBa5RxvE6mSIBXEvCE_3DOeKj3oG3U&libraries=places&callback=initAutocomplete"
         async defer></script>
	
	{!! Html::script('js/tag.js') !!}
    
    <script type="text/javascript">
	    $(document).ready(function() {

			var _token = $('Form').find('input[name=_token]').val();

			$('#images').fileinput({
				showUpload: false,
				allowedFileTypes: ['image'],
				allowedPreviewTypes: ['image'],
				previewFileType: 'image',
				browseLabel: "Pick Images",
				browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
				removeClass: "btn btn-danger",
				maxFileSize: 3000,

				initialPreviewAsData: true,
				overwriteInitial: false,
				initialPreview: [
					@foreach($place->pictures as $image)
						"{{ url(asset('storage/' . $image->path)) }}",
					@endforeach
				],
				initialPreviewConfig: [
					@foreach($place->pictures as $image)
						{ url: "{{ route( 'pictures.destroy', ['id' => $image->id] ) }}" },
					@endforeach
				],
				deleteExtraData: {_method: 'delete', _token: _token},
				validateInitialCount: true,
			});

		});	
    </script>
@endsection