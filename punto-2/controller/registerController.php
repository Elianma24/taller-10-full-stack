<?php 
$age = 0;
$message = "";

if (
    isset($_POST["name_user"]) &&
    isset($_POST["age_user"])) {

    $nameUser = ($_POST["name_user"]);
    $ageUser = intval($_POST["age_user"]);
    
    if ($ageUser >= 18) {
        $message = "Muy bien!! Sr(a) " . $nameUser . " " . "usted es MAYOR DE EDAD";
    } else {
        $message = "Lo sentimos! Sr(a) " . $nameUser . " " . "Usted NO es MAYOR DE EDAD";
    }
    }
?>