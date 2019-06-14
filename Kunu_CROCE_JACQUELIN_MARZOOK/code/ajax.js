function refresh() {
	envoi();
	document.getElementById("message").value = " ";
}





function envoi() {
	//alert("it works 1 ");
	var nom    = document.getElementById("nom");
	var discussion = document.getElementById("discussion");
	var idNom = nom.options[nom.selectedIndex].value;
	var reponse;
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			reponse = xhr.responseText;
			discussion.innerHTML = reponse;
		}
}
	
	xhr.open("POST","conv.php",true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("idNom="+idNom);
}



function envoi2() {
	//alert("it works 1 ");
	var nom    = document.getElementById("nom");
	var idNom = nom.options[nom.selectedIndex].value;
	var message = document.getElementById("message").value;
	var reponse;
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			reponse = xhr.responseText;
		}
	}
	xhr.open("POST","Tchat.php",true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("idNom="+idNom+"&message="+message);
	
}

