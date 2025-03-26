<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion et Inscription</title>
    <link rel="stylesheet" href="login-page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css" >

</head>
<body>
<?php // require("header.php"); ?>


<!-- Login form -->
<div id="login-block">
    <h3>Connexion</h3>
    <form action="login.php" method="post">
        <label for="login-email">Email :</label>
        <input type="email" id="login-email" name="email" required> <br>
        <label for="login-password">Mot de passe :</label>

        <input type="password" id="login-password" name="password" required> <br>
        <input type="submit" class="btn btn-primary btn-lg" value="Se connecter">
    </form>
</div>

<!-- SignUp form -->
<div id="signin-block">
    <br>
    <p>Pas de compte ?</p>
    <h3>Créez votre compte</h3>
    <form action="index.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required> <br>
        <label for="fname">Prénom :</label>
        <input type="text" id="fname" name="fname" required> <br>
        <label for="birth-date">Date de naissance :</label>
        <input type="date" id="birth-date" name="birth-date" required> <br>
        <label for="cp">Code postal :</label>
        <input type="text" id="cp" name="cp" required> <br>
        <label for="city">Ville :</label>
        <input type="text" id="city" name="city" required> <br>
        <label for="adress">Adresse :</label>
        <input type="text" id="adress" name="adress" required> <br>
        <label for="email-signup">Email :</label>
        <input type="email" id="email-signup" name="email" required> <br>
        <label for="password-signup">Mot de passe :</label>
        <input type="password" id="password-signup" name="password" required> <br>
        <label for="cpassword">Confirmez le mot de passe :</label>
        <input type="password" id="cpassword" name="cpassword" required> <br>

        <input type="submit" value="Créer un compte">
    </form>
</div>

<?php // require("footer.php"); ?>

</body>
</html>
