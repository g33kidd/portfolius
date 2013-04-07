
$(document).ready(function() {

	$('#top-tabs a').click(function(e) {
		e.preventDefault();
		$(this).tab('show');
	});

});