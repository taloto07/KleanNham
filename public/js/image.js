$(document).ready(function() {

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