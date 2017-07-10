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