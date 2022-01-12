<?php
function searchDpt($saisie) {
    if (($handle = fopen("departement.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($data[1]==$saisie) {
                return $data[2];
            }
        }
        fclose($handle);
    }
}
$saisie =readline();
print searchDpt($saisie);
?>