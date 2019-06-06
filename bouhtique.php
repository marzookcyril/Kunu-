<?php
	session_start();
	
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta http-equiv="content-language" content="FR"/>
	<script type="text/javascript" src="panier.js"></script>
</head>

	<div id="thevert"  name="8" > Thé vert mleh de fouuuu</div>
	
	  <button type="button" onclick=envoi("thevert") name="8" >Ajouter au panier</button>

	<div id="livre" name="5" > Livre tout nu sans couverture</div>
	
	<button type="button" onclick=envoi("livre") name="5" >Ajouter au panier</button>

	<div id="creme" name="12" > Creme solaire zone intime</div>

  <button type="button" onclick=envoi("creme") name="12" >Ajouter au panier</button>

	<br/>
	<br/>
   <button type="button" onclick="location.href = 'pagePanier.php';" class="cancelbtn">Voir mon panier</button>



</body>
</html>
