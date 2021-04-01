with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Falta escribir un nombre de usuario");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Falta escribir su password");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
