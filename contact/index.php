<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <title>Nous Contacter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css" >
    <link rel="stylesheet" href="index.css">
</head>



<body>
<?php // require("header.php"); ?>

    <div class="container">
        <div class="row mt-5">
            <div id="block1" class="col-sm-4 offset-md-4 ">
            <form>
             <label for="fname">Nom </label>
             <input type="text" id="fname" name="name" >
             <label for="lname">Prénom </label>
             <input type="text" id="lname" name ="lname">
             <label  for="@">Email </label>
             <input type="text" id="@" name ="@">
             <label for="contact">Message </label><br>
             <textarea id="contact" name="contact" placeholder="Votre message"></textarea>
             <br>
             <button type="reset" class = "buttons">Effacer</button>
             <button type="submit" class = "buttons">Envoyer le message</button>         
            </form>
        </div>
    </div>



<?php // require("footer.php"); ?>
</body>

</html>
