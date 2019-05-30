<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Kunu</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
  <meta http-equiv="content-language" content="FR"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="style2.css">

 </head>

 <body>
  <!-- HEADER -->

  <?php include("functions/header.php"); ?>

    <!-- FORMULAIRE -->
<div class="formulaire-signup">

  <form class="contenu-formulaire">

      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

          <label for="email"><b>Email</b></label><br>
          <input type="text" autofocus placeholder="Entrer Email" name="email" required><br/>

          <label for="pseudo"><b> Pseudonyme </b></label><br>
          <input type="text" placeholder="Entrer un pseudo" name="pseudo" required><br/>

          <label for="date"><b> Date de naissance</b></label><br>
          <input type="date" placeholder="" name="date" required><br/>
            
          <label for="adresse"><b> Adresse </b></label><br>
          <input type="text" placeholder="Entrez votre adresse" name="adresse" required class="addresse"><br/>

          <label for="postal"><b> Code postale</b></label><br>
          <input type="text" name="postal" required><br/>
            
          <label for="pays"><b> Pays</b></label><br>
          <input type="text"  name="pays" required><br/>

          <label for="prenom"><b> Prénom </b></label><br>
          <input type="text"  name="prenom" required><br/>

          <label for="nom"><b> Nom </b></label><br>
          <input type="text"  name="nom" required><br/>

          <label for="mdp"><b>Mot de passe</b></label><br>
          <input type="password" placeholder="Entrer Mot de passe" name="mdp" required><br/>

          <label for="mdp2"><b>Repeter Mot de passe</b></label><br>
          <input type="password" placeholder="Repeter Mot de passe" name="mdp2" required><br/>


          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
            <button onclick="location.href = 'KunuDejaInscrit.php';" type="button" class="Inscrit">Deja Inscrit?</button>
          </div>

      </div>

  </form>
</div>

    <!--FOOTER-->

    <?php include("functions/footer.php"); ?>

</body>
</html>
