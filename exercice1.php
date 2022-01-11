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
            <p>Vérifier si un jour est férié en 2022 : 
                <select name="day">
                    <option value="01">1</option>
                    <option value="02">2</option>
                    <option value="03">3</option>
                    <option value="04">4</option>
                    <option value="05">5</option>
                    <option value="06">6</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name="month">
                    <option value="01">Janvier</option>
                    <option value="02">Février</option>
                    <option value="03">Mars</option>
                    <option value="04">Avril</option>
                    <option value="05">Mai</option>
                    <option value="06">Juin</option>
                    <option value="07">Juillet</option>
                    <option value="08">Août</option>
                    <option value="09">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>
                <input type="text" name="year" value="2022" readonly></p>
            <p><input type="submit" name ="submit" value="OK"></p>
        </form>
    </body>
</html>

<?php 
$feriesArray = array("01-01-2022", "18-04-2022", "01-05-2022", "08-05-2022", "26-05-2022", "06-06-2022", "14-04-2022", "15-08-2022", "01-11-2022", "11-11-2022", "25-12-2022");
$givenDate="";
if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
    $givenDate = htmlspecialchars($_POST['day']) . "-" . htmlspecialchars($_POST['month']) . "-" . htmlspecialchars($_POST['year']);
}

function feriesDays($givenDate, $feriesArray) {
    if (in_array($givenDate, $feriesArray)) {
        echo "Ce jour est férié";
    }
    else {
        echo "Ce jour n'est pas férié";
    }
}
feriesDays($givenDate, $feriesArray);
?>