@extends('layout')

@section('title', 'Edit')

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
		
	{!! Form::open([ 'route' => 'places.store', 'files' => true, 'class' => 'mb80' ]) !!}
    	{{-- Basic Information --}}
      	<fieldset>
	    	<legend>Basic Information</legend>
		  	<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		 		{{ Form::label( 'name', 'Name:', ['class' => 'control-label'] ) }}
  			 	{{ Form::text('name', $place->name, ['class' => 'form-control', 'aria-describedby' => 'nameErrorMessage']) }}
              	<span id="nameErrorMessage" class="help-block">{{ $errors->first('name') }}</span>
			  	</div>
			  	<!-- /.form-group -->
			  	<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
		  		{{ Form::label('price', 'Price:', ['class' => 'control-label'] ) }}
	  			{{ Form::select('price', $prices, $place->price_id, ['class' => 'form-control', 'aria-describedby' => 'priceErrorMessage']) }}
			  	<span id="priceErrorMessage" class="help-block">{{ $errors->first('price') }}</span>
            </div>
		 	<!-- /.form-group -->
		 	<div class="form-group {{ count($errors->get('tags.*')) > 0 || $errors->has('tags') ? 'has-error' : '' }}">
          		{{ Form::label('tags[]', 'Tags:', ['class' => 'control-label'] ) }}
				{{ Form::select('tags[]', $tags, $place->tags()->pluck('id')->all(), ['class' => 'form-control tags', 'multiple' => 'multiple', 'aria-describedby' => 'tagsErrorMessage', 'style' => 'width: 100%']) }}
				<span id="tagsErrorMessage" class="help-block">
						{{ $errors->first('tags') }}
						@foreach($errors->get('tags.*') as $message)
							{{ $message[0] }} <br/>
						@endforeach
	            </span>
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
      				<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
						{{ Form::label('address', 'Address:', ['class' => 'control-label'] ) }}
						{{ Form::text('address', $place->address, ['class' => 'form-control', 'aria-describedby' => 'addressErrorMessage', "placeholder" => "Address", 'id' => 'address']) }}
						<span id="addressErrorMessage" class="help-block">{{ $errors->first('address') }}</span>
	             	</div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
						{{ Form::label('latitude', 'Latitude', ['class' => 'control-label'] ) }}
						{{ Form::text('latitude', $place->latitude, ['class' => 'form-control', 'id' => 'latitude', 'aria-describedby' => 'latitudeErrorMessage']) }}	
						<span id="addressErrorMessage" class="help-block">{{ $errors->first('latitude') }}</span>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
						{{ Form::label('longitude', 'Longitude', ['class' => 'control-label'] ) }}
						{{ Form::text('longitude', $place->longitude, ['class' => 'form-control', 'id' => 'longitude', 'aria-describedby' => 'longitudeErrorMessage']) }}
						<span id="addressErrorMessage" class="help-block">{{ $errors->first('longitude') }}</span>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('sangkat') ? 'has-error' : '' }}">
						{{ Form::label('sangkat', 'Sangkat:', ['class' => 'control-label'] ) }}
						{{ Form::select('sangkat', $sangkats, $place->sangkat_id, ['class' => 'form-control sangkat', 'aria-describedby' => 'sangkatErrorMessage', 'placeholder' => 'Pick sangkat', 'style' => 'width: 100%']) }}
						<span id="sangkatErrorMessage" class="help-block">
							{{ $errors->first('sangkat') }}
						</span>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('khan') ? 'has-error' : '' }}">
							{{ Form::label('khan', 'Khan:', ['class' => 'control-label'] ) }}
							{{ Form::select('khan', $khans, $place->khan_id, ['class' => 'form-control khan1', 'aria-describedby' => 'khanErrorMessage', 'placeholder' => 'Pick khan', 'id' => 'khan', 'style' => 'width: 100%']) }}
							<span id="khanErrorMessage" class="help-block">
								{{ $errors->first('khan') }}
							</span>
		            </div>
      				<!-- /.form-group -->
      				<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
							{{ Form::label('city', 'City:', ['class' => 'control-label'] ) }}
							{{ Form::text('city', $place->city->name, ['id' => 'city', 'class' => 'form-control khan', 'aria-describedby' => 'cityErrorMessage', 'readonly']) }}
							<span id="cityErrorMessage" class="help-block">
								{{ $errors->first('city') }}
							</span>
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
      				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    					{{ Form::label('email', 'Email', ['class' => 'control-label'] ) }}
                    	{{ Form::text('email', $place->contact->email, ['class' => 'form-control', 'aria-describedby' => 'emailErrorMessage']) }}
			            <span id="emailErrorMessage" class="help-block">{{ $errors->first('email') }}</span>
                  	</div>
                  	<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
    					{{ Form::label('website', 'Website', ['class' => 'control-label'] ) }}
                        {{ Form::text('website', $place->contact->website, ['class' => 'form-control', 'aria-describedby' => 'websiteErrorMessage']) }}
			            <span id="websiteErrorMessage" class="help-block">{{ $errors->first('website') }}</span>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
					    {{ Form::label('facebook', 'Facebook', ['class' => 'control-label'] ) }}
                      	{{ Form::text('facebook', $place->contact->facebook, ['class' => 'form-control', 'aria-describedby' => 'facebookErrorMessage']) }}
			            <span id="facebookErrorMessage" class="help-block">{{ $errors->first('facebook') }}</span>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('phones.0') ? 'has-error' : '' }}">
      					<label>Phone</label>
      					<input type="text" name="phones[]" class="form-control" aria-describedby="phone1ErrorMessage" value="{{ old('phones.0') ? old('phones.0') : count($place->telephones) > 0 ? $place->telephones[0]->number : '' }}">
      					<span id="phone1ErrorMessage" class="help-block">{{ $errors->first('phones.0') }}</span>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('phones.1') ? 'has-error' : '' }}">
      					<label>Phone</label>
      					<input type="text" name="phones[]" class="form-control" aria-describedby="phonesErrorMessage" value="{{ old('phones.1') ? old('phones.1') : count($place->telephones) > 1 ? $place->telephones[1]->number : '' }}">
      					<span id="phonesErrorMessage" class="help-block">{{ $errors->first('phones.1') }}</span>
      				</div>
      				<!-- /.form-group -->
    			</div>
    			<!-- /.col-* -->
    			<div class="col-sm-4">
      				<div class="form-group {{ $errors->has('phones.2') ? 'has-error' : '' }}">
        					<label>Phone</label>
        					<input type="text" name="phones[]" class="form-control" aria-describedby="phonesErrorMessage" value="{{ old('phones.2') ? old('phones.2') : count($place->telephones) > 2 ? $place->telephones[2]->number : '' }}">
        					<span id="phonesErrorMessage" class="help-block">{{ $errors->first('phones.2') }}</span>
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
						<tr class="{{ $errors->has('monday_open') ? 'danger' : '' }}">
								<th scope="row">Monday</th>
								<td>{{ Form::select('monday_open', $hours, $place->hours()->where('id', 1)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('monday_close', $hours, $place->hours()->where('id', 1)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('tuesday_open') ? 'danger' : '' }}">
								<th scope="row">Tuesday</th>
								<td>{{ Form::select('tuesday_open', $hours, $place->hours()->where('id', 2)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('tuesday_close', $hours, $place->hours()->where('id', 2)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('wednesday_open') ? 'danger' : '' }}">
								<th scope="row">Wednesday</th>
	                      	<td>{{ Form::select('wednesday_open', $hours, $place->hours()->where('id', 3)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('wednesday_close', $hours, $place->hours()->where('id', 3)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('thursday_open') ? 'danger' : '' }}">
								<th scope="row">Thursday</th>
	                      	<td>{{ Form::select('thursday_open', $hours, $place->hours()->where('id', 4)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('thursday_close', $hours, $place->hours()->where('id', 4)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('friday_open') ? 'danger' : '' }}">
								<th scope="row">Friday</th>
	                      	<td>{{ Form::select('friday_open', $hours, $place->hours()->where('id', 5)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('friday_close', $hours, $place->hours()->where('id', 5)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('saturday_open') ? 'danger' : '' }}">
								<th scope="row">Saturday</th>
	                      	<td>{{ Form::select('saturday_open', $hours, $place->hours()->where('id', 6)->first()->pivot->open, ['class' => 'form-control']) }}</td>
								<td>{{ Form::select('saturday_close', $hours, $place->hours()->where('id', 6)->first()->pivot->close, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="{{ $errors->has('sunday_open') ? 'danger' : '' }}">
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
				{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) !!}
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
	<script type="text/javascript">
		
		$(document).ready(function() {
		  
			$(".tags").select2({
			  	tags: true,
			  	placeholder: 'Pick tags...'
			});

			$(".khan1").select2({
			  	placeholder: 'Pick khan...',
			  	tags: true
			});

			$(".sangkat").select2({
			  	placeholder: 'Pick sangkat...',
			  	tags: true
			});

            $(".menu").select2({
                placeholder: 'Pick menu...',
                tags: true
            });

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