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

 <img src="img/the.png" >
 <br/>
   <div id="description" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br/> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
 	 <br/>

 <button type="button" onclick=envoi("thevert") name="8" >Ajouter au panier</button>

<div id="livre" name="5" > Livre tout nu sans couverture</div>
<img src="img/livre.jpg" >
 <br/>
 <div id="description" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br/> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
 	 <br/>

<button type="button" onclick=envoi("livre") name="5" >Ajouter au panier</button>

<div id="creme" name="12" > Creme solaire zone intime</div>
<img src="img/creme.jpg" >
 <br/>
   <div id="description" > Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  <br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  <br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <br/> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
 	<br/>

  <button type="button" onclick=envoi("creme") name="12" >Ajouter au panier</button>

<br/>
<br/>
   <button type="button" onclick="location.href = 'pagePanier.php';" class="cancelbtn">Voir mon panier</button>



</body>
</html>