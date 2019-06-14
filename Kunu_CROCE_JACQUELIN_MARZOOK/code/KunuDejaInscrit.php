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

 <form action="KunuInscritEnvoi.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign in</h1>
    <p>Please fill in this form to connect.</p>
    <hr>

  <label for="pseudo"><b> Pseudonyme </b></label>
    <input type="text" placeholder="Entrer un pseudo" name="pseudo" required><br/>

    <label for="mdp"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer Mot de passe" name="mdp" required><br/>

    <div class="clearfix">
      <button onclick="location.href = 'Kunu1.php';" type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
