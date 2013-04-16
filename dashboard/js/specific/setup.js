jQuery(function($) {

	$('#wizard').smartWizard({transitionEffect:'slideleft',onLeaveStep:leaveAStepCallback,onFinish:onFinishCallback,enableFinishButton:true});

	function leaveAStepCallback(obj) {
		var step_num = obj.attr('rel');
		return validateSteps(step_num);
	}

	function onFinishCallback() {
		if(validateAllSteps()){
			$.ajax({
				type: "POST",
				url: "ajax/post.php",
				data: $('form#setupAccount').serialize(),
				dataType: "json"
			}).done(function(msg){
				alert(msg);
			});
		}
	}

});

function validateAllSteps(){
	var isStepValid = true;

	if(validateStep1() == false){
		isStepValid() = false;
		$('#wizard').smartWizard('setError', {stepnum:1,iserror:true});
	}else{
		$('#wizard').smartWizard('setError', {stepnum:1,iserror:false});
	}

	if(validateStep2() == false){
		isStepValid() = false;
		$('#wizard').smartWizard('setError', {stepnum:2,iserror:true});
	}else{
		$('#wizard').smartWizard('setError', {stepnum:2,iserror:false});
	}

	if(validateStep3() == false){
		isStepValid() = false;
		$('#wizard').smartWizard('setError', {stepnum:3,iserror:true});
	}else{
		$('#wizard').smartWizard('setError', {stepnum:3,iserror:false});
	}

	if(validateStep4() == false){
		isStepValid() = false;
		$('#wizard').smartWizard('setError', {stepnum:4,iserror:true});
	}else{
		$('#wizard').smartWizard('setError', {stepnum:4,iserror:false});
	}

	return isStepValid;
}

function validateSteps(step) {
	var isStepValid = true;

	if(step == 1){
		if(validateStep1() == false){
			isStepValid = false;
			$('#wizard').smartWizard('showMessage', 'Please fix errors in this step and click next.')
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:true});
		}else{
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
		}
	}

	if(step == 2){
		if(validateStep2() == false){
			isStepValid = false;
			$('#wizard').smartWizard('showMessage', 'Please fix errors in this step and click next.')
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:true});
		}else{
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
		}
	}

	if(step == 3){
		if(validateStep1() == false){
			isStepValid = false;
			$('#wizard').smartWizard('showMessage', 'Please fix errors in this step and click next.')
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:true});
		}else{
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
		}
	}

	if(step == 4){
		if(validateStep4() == false){
			isStepValid = false;
			$('#wizard').smartWizard('showMessage', 'Please fix errors in this step and click next.')
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:true});
		}else{
			$('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
		}
	}
}

function validateStep1() {
	var isValid = true;

	var user = $('#username').val();
	var pass = $('#password').val();
	var pass2 = $('#cpassword').val();

	if(!user && user.length <= 0){
		isValid = false;
		$('#msg_username').html('Please fill out username.').show();
	}else{
		$('#msg_username').html('').hide();
	}

	if(!pass && pass.length <= 0){
		isValid = false;
		$('#msg_password').html('Please fill out password.').show();
	}else{
		$('#msg_password').html('').hide();
	}

	if(!pass2 && pass2.length <= 0){
		isValid = false;
		$('#msg_cpassword').html('Please fill out password.').show();
	}else{
		$('#msg_cpassword').html('').hide();
	}

	if(pass && pass.length > 0 && pass2 && pass2.length > 0){
		if(pass != pass2) {
			isValid = false;
			$('#msg_cpassword').html('Passwords do not match.').show();
		}else{
			$('#msg_cpassword').html('').hide();
		}
	}

	return isValid;
}

function validateStep2() {
	var isValid = true;
  //validate email  email
  var email = $('#email').val();
   if(email && email.length > 0){
     if(!isValidEmailAddress(email)){
       isValid = false;
       $('#msg_email').html('Email is invalid').show();           
     }else{
      $('#msg_email').html('').hide();
     }
   }else{
     isValid = false;
     $('#msg_email').html('Please enter email').show();
   }       
  return isValid;
}

function validateStep3() {
	var isValid = true;

	return isValid;
}

function validateStep4() {
	var isValid = true;

	return isValid;
}


// Email Validation
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
}
