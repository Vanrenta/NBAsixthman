document.getElementById("checked_passwd").addEventListener("blur", function(e){
	var pass = document.getElementById("pass").value;
	var phrase = "";
	if(pass != e.target.value){
		phrase = "Les mots de passe ne sont pas identiques";
	}
	document.getElementById("passValid").textContent = phrase;
});

document.getElementById("mail").addEventListener("blur", function(e){
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	var mail = document.getElementById("mail").value;
	var phrase = "";
	if(!regex.test(mail)){
		phrase = "L'adresse mail n'est pas valide";
	}
	document.getElementById("mailValid").textContent = phrase;
});