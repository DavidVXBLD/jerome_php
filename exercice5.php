<?php


function searchCities($saisie) {
    if (($handle = fopen("villes_france.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[1]==$saisie) {
                print($data[3]);
            }
        }
        fclose($handle);
    }
}
$saisie =readline();
print searchCities($saisie);


?>