<?php 
// First way #############################################################################################

// function findAge ($readline) {
//     $currentDate = date("d/m/Y");
//     echo "Aujourd'hui, nous sommes le " . $currentDate . ". ";
//     $age = date_diff(date_create($readline), date_create($currentDate));
//     echo "L'utilisateur a ". $age->format("%Y") . " ans.";
// }
// $readline = readline();
// findAge($readline);

// Second way #############################################################################################

// function findAge2 ($birthdate) {
//     $diff = time() - strtotime($birthdate);
//     print (int) ($diff/(365.25*24*3600));
// }

// Third way #############################################################################################

// function findAge3 ($birthdate) {
//     $now = new DateTime("now");
//     $date = DateTime::createFromFormat('d-m-Y, $birthdate');
//     $interval = $now->diff($date);
//     return $interval->format("%y");
// }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="action.php" method="post">
            <p>Votre nom : <input type="text" name="name" /></p>
            <p>Votre date de naissance : <input type="text" name="day" /><input type="text" name="month" /><input type="text" name="year" />
            </p>
            <p><input type="submit" name ="submit" value="OK"></p>
        </form>
    </body>
</html>




