<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <title>Connexion et Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css" >
    <link rel="stylesheet" href="index.css">
</head>



<body>
<?php // require("header.php"); ?>



<div class="container">
    <!-- Login form -->
    <div  class="row">
        <div id="block1" class="col-sm-3 offset-md-5">
            <h3>Connexion</h3>
            <form action="login.php" method="post">
                <label for="login-email">Email </label></br>
                <input type="email" id="login-email" name="email" required> <br>
                <label for="login-password">Mot de passe </label></br>
                <input type="password" id="login-password" name="password" required> <br>
                <input type="submit" class="buttons" value="Se connecter">
            </form>
        </div>
    </div>

    <div class="row">
    <div id="block2" class="col-sm-3 offset-md-5">

    <!-- SignUp form -->
    
     <br><br>

     <h6>Pas de compte ?</h6>
     <h3>Créez votre compte</h3>
     <form action="index.php" method="post">
         <label for="name">Nom  </label></br>
         <input type="text" id="name" name="name" required> <br>
         <label for="fname">Prénom</label></br>
         <input type="text" id="fname" name="fname" required> <br>
         <label for="birth-date">Date de naissance</label></br>
         <input type="date" id="birth-date" name="birth-date" required> <br>
         <label for="cp">Code postal</label></br>
         <input type="text" id="cp" name="cp" required> <br>
         <label for="city">Ville</label></br>
         <input type="text" id="city" name="city" required> <br>
         <label for="adress">Adresse</label></br>
         <input type="text" id="adress" name="adress" required> <br>
         <label for="email-signup">Email</label></br>
         <input type="email" id="email-signup" name="email" required> <br>
         <label for="password-signup">Mot de passe</label></br>
         <input type="password" id="password-signup" name="password" required> <br>
         <label for="cpassword">Confirmez le mot de passe</label></br>
         <input type="password" id="cpassword" name="cpassword" required> <br>
         <input class ="buttons" type="submit" value="Créer un compte">
        </form>
    </div>

<?php // require("footer.php"); ?>

</body>
</html>
