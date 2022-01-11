<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <p>Votre n° de sécurité sociale : <input type="text" name="numsecu" /></p>
            <p><input type="submit" name ="submit" value="OK"></p>
        </form>
    </body>
</html>

<?php 

$socialSecurityNumber="";

if (isset($_POST['numsecu'])) {
    $socialSecurityNumber = htmlspecialchars($_POST['numsecu']);
}

function checkSocialSecurityNumber($socialSecurityNumber) {
    if (preg_match("#^[12][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}[0-9]{2}$#", $socialSecurityNumber)) {
        echo "This number is valid";
    }
    else {
        echo "This number is invalid";
    }
}

checkSocialSecurityNumber($socialSecurityNumber);
?>