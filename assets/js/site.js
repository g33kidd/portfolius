$(document).ready(function() {
	
	$('#register').submit(function(event) {
		event.preventDefault();
		var data = $(this).serializeArray();
		$.post('system/request/post.php', data, function(response) {
			response = jQuery.parseJSON(response);
			console.log(response);
			if (response.status == 'success'){
				switch(response.trigger) {
					case '0':
						$('#msg').fadeOut('slow', function() {
							$(this).html('<div class="complete"> Account Successfully Created! </div> <a href="dashboard.php" class="btn">Go to Dashboard.</button>')
						}).fadeIn('fast');
						break;
				}
			}else if(response.status == 'error'){
				alert('There was an error: ' + response.type);
			}
			
		})
	});
		$('#login').submit(function(event) {
		event.preventDefault();
		var data = $(this).serializeArray();
		$.post('system/request/post.php', data, function(response) {
			response = jQuery.parseJSON(response);
			console.log(response);
			if (response.status == 'success'){
				switch(response.trigger) {
					case '0':
						$('#msg').fadeOut('slow', function() {
							$(this).html('<div class="complete"> Logged in, transfering! </div> <a href="dashboard.php" class="btn">Go to Dashboard.</button>')
						}).fadeIn('fast');
						break;
				}
			}else if(response.status == 'error'){
				alert('There was an error: ' + response.type);
			}
			
		})
	});
	
	//Create more later for better looking pages.
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
	
});