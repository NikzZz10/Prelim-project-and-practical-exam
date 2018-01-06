	
	function checkForm(form)
	  {
		if(form.username.value == "") {
		  alert("Error: Username cannot be blank!");
		  form.username.focus();
		  return false;
		}
		
		if(form.passwd.value == "") {
		  alert("Error: Password cannot be blank!");
		  form.passwd.focus();
		  return false;
		}
		
		if(form.firstname.value == "") {
		  alert("Error: Firstname cannot be blank!");
		  form.firstname.focus();
		  return false;
		}
		
		if(form.lastname.value == "") {
		  alert("Error: Lastname cannot be blank!");
		  form.lastname.focus();
		  return false;
		}
		
		if(form.birthday.value == "") {
		  alert("Error: Birthday cannot be blank!");
		  form.birthday.focus();
		  return false;
		}
		
		re = /^\w+$/;
		if(!re.test(form.username.value)) {
		  alert("Error: Username must contain only letters, numbers and underscores!");
		  form.username.focus();
		  return false;
		}

		if(form.passwd.value != "" && form.passwd.value == form.r_passwd.value) {
		  if(form.passwd.value.length < 6) {
			alert("Error: Password must contain at least six characters!");
			form.passwd.focus();
			return false;
		  }
		  if(form.passwd.value == form.username.value) {
			alert("Error: Password must be different from Username!");
			form.passwd.focus();
			return false;
		  }
		  re = /[0-9]/;
		  if(!re.test(form.passwd.value)) {
			alert("Error: password must contain at least one number (0-9)!");
			form.passwd.focus();
			return false;
		  }
		  re = /[a-z]/;
		  if(!re.test(form.passwd.value)) {
			alert("Error: password must contain at least one lowercase letter (a-z)!");
			form.passwd.focus();
			return false;
		  }
		  re = /[A-Z]/;
		  if(!re.test(form.passwd.value)) {
			alert("Error: password must contain at least one uppercase letter (A-Z)!");
			form.passwd.focus();
			return false;
		  }
		} else {
		  alert("Error: Please check that you've entered and confirmed your password!");
		  form.passwd.focus();
		  return false;
		}
	  }