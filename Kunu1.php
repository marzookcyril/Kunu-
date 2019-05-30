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

 <form action="KunuPremierTest.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" autofocus placeholder="Entrer Email" name="email" required><br/>

  <label for="pseudo"><b> Pseudonyme </b></label>
    <input type="text" placeholder="Entrer un pseudo" name="pseudo" required><br/>

  <label for="date"><b> Date de naissance</b></label>
    <input type="date" placeholder="" name="date" required>
    <br/>
      <label for="adresse"><b> Adresse </b></label>
    <input type="text" placeholder="Entrez votre adresse" name="adresse" required><br/>

  <label for="postal"><b> Code postale</b></label>
    <input type="text" name="postal" required><br/>
     
      <label for="pays"><b> Pays</b></label>
    <input type="text"  name="pays" required><br/>

  <label for="prenom"><b> Prénom </b></label>
    <input type="text"  name="prenom" required><br/>

 <label for="nom"><b> Nom </b></label>
    <input type="text"  name="nom" required><br/>

    <label for="mdp"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer Mot de passe" name="mdp" required><br/>

    <label for="mdp2"><b>Repeter Mot de passe</b></label>
    <input type="password" placeholder="Repeter Mot de passe" name="mdp2" required><br/>


    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
      <button onclick="location.href = 'KunuDejaInscrit.php';" type="button" class="Inscrit">Deja Inscrit?</button>
    </div>
  </div>
</form>
</body>
</html>
