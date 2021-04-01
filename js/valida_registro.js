with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Falta escribir un nombre de usuario");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Falta escribir su nombre");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Falta escribir su email");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Falta escribir su password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Falta escribir su confirmacion de password");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
