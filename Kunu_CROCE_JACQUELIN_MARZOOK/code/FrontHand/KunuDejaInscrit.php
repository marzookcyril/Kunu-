<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Kunu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="content-language" content="FR"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,500" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 </head>

 <body>

   <!-- HEADER -->

   <?php include("functions/header2.php"); ?>


<div class="signuppage">
 <form action="../KunuInscritEnvoi.php"  method="POST">
  <div class="signin-container">
    <h1>Sign in</h1>
    <p>Please fill in this form to connect.</p>
    <hr>

  <label for="pseudo"><b> Pseudonyme </b></label>
    <input type="text" placeholder="Entrer un pseudo" name="pseudo" required><br/>

    <label for="mdp"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer Mot de passe" name="mdp" required><br/>

    <div class="btn-signin">
      <button type="submit" class="signupbtn">Sign Up</button>
      <button onclick="location.href = 'Kunu1.php';" type="button" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>
</div>
      <!--FOOTER-->

      <?php include("functions/footer.php"); ?>
</body>
</html>
