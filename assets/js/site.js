$(document).ready(function() {
	
	console.log("Like snooping around our code? You should help us build it: http://jobs.codejo.org");
	
	$('#register').submit(function(event) {
		event.preventDefault();
		var data = $(this).serializeArray();
		$.post('system/request/post.php', data, function(response) {
			response = jQuery.parseJSON(response);
			console.log(response);
			if (response.status == 'success'){
				switch(response.trigger) {
					case '0':
						$('#signup-section').fadeOut('slow', function() {
							$('#bigText').fadeOut(function() {
								$(this).html("Account Successfully Created. You are redirect to Dasboard.");
								setTimeout("location.href = 'dashboard.php';", 500);
							}).fadeIn();
						});
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
						$('#login-section').fadeOut('slow', function() {
							$('#bigText').fadeOut(function() {
								$(this).html("You are being logged in!");
								setTimeout("location.href = 'dashboard.php';", 500);
							}).fadeIn();
						});
					break;
				}
			}else if(response.status == 'error'){
				alert('There was an error: ' + response.type);
			}
			
		})
	});

	$('#logout').click(function(event) {
		event.preventDefault();
		$.post('system/request/post.php', {request:"logout"}, function(response) {
			response = jQuery.parseJSON(response);
			console.log(response);
			if (response.status == 'success'){
				switch(response.trigger) {
					case '0':
						setTimeout("location.href = 'index.php';", 500);
					break;
				}
			}else if(response.status == 'error'){
				alert('There was an error: ' + response.type);
			}
			
		})
	});
	
	//Create more functions like this later for better looking pages.
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);
    });
    function redirectPage() { window.location = linkLocation; }
    function scrollToAnchor(aid){ var aTag = $("a[name='"+ aid +"']"); $('html,body').animate({scrollTop: aTag.offset().top},'slow'); }

});