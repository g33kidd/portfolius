$(document).ready(function() {
	
	console.log("Like snooping around our code? You should help us build it: http://jobs.site.com");
	
	$('#register').submit(function(event) {
		event.preventDefault();
		var data = $(this).serializeArray();
		$.post('system/request/post.php', data, function(response) {
			response = jQuery.parseJSON(response);
			console.log(response);
			if (response.status == 'success'){
				switch(response.trigger) {
					case '0':
						$('#signup').fadeOut('slow', function() {
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
			//response = jQuery.parseJSON(response);
			console.log(response);
			if (response.status == 'success'){
				switch(response.trigger) {
					case '0':
						$('#signup').fadeOut('slow', function() {
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
    
    function scrollToAnchor(aid){
	    var aTag = $("a[name='"+ aid +"']");
	    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}
	
	$("#feature-scroll").click(function() {
	   scrollToAnchor('features');
	});

	
});