	
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
	  }