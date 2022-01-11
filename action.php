<?php 
$birthdate = ($_POST['day']) . "-" . ($_POST['month']) . "-" . ($_POST['year']);

function findAge2 ($birthdate) {
    $diff = time() - strtotime($birthdate);
    print (int) ($diff/(365.25*24*3600));
}

echo "Hello " . ($_POST['name']) . ", you are " . findAge2($birthdate);
?>