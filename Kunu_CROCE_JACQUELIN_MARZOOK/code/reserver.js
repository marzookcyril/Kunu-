function envoi() {
	//alert("it works 1 ");
	var titre    = document.getElementById("titre");
	var description = document.getElementById("description");
	var idTitre = titre.options[titre.selectedIndex].value;
	var reponse;
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			reponse = xhr.responseText;
			description.innerHTML = reponse;
		}
}
	
	xhr.open("POST","chercher.php",true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("idTitre="+idTitre);
}
