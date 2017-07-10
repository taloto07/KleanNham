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

});