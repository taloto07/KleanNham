
$(document).ready(function(){
	$('#images').fileinput({
		showUpload: false,
		allowedFileTypes: ['image'],
		allowedPreviewTypes: ['image'],
		previewFileType: 'image',
		browseLabel: "Pick Images",
		browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
		removeClass: "btn btn-danger",
		maxFileCount: 10,
		maxFileSize: 3000,
	});
});
