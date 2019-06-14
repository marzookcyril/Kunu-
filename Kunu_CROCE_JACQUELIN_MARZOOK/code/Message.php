<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta http-equiv="content-language" content="FR"/>
 </head>

 <body>

 <form action="Tchat.php" style="border:1px solid #ccc" method="POST">

  <label for="pseudoReceveur"><b> Pseudonyme </b></label>
    <input type="text" placeholder="Entrer un pseudo" name="pseudoReceveur" required><br/>
  <label for="message"> <b> Votre Message</b></label> 
   <textarea type="text" placeholder="Entrer un message (pas de ponctuation ni d'accent)" name="message" rows = "5" size="75" maxlength="255"required></textarea>


     <button type="submit" class="signupbtn">Yep</button>
</form>
     <form action="Message.php" method="POST">
		<button type="submit" class="signupbtn"> Voir mes messages </button>

     
     </form>

</body>
</html>

