function envoi(e) {
	//alert("it works 1 ");
	var titre    = document.getElementById(e);
	//alert("it works 2 ");
	var prix = titre.getAttribute("name");
	var nom  = titre.innerHTML; 
	//alert(nom);
	var reponse;
	//alert(e);
	//alert(prix);

	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200){
			reponse = xhr.responseText;
		}
}
	
	xhr.open("POST","panier.php",true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("prix="+prix+"&nom="+nom);
}

