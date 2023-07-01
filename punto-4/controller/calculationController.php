<?php 
    $username = "";
    $message = "";
    $result = "";

    if (isset($_POST['user_birthdate'])) {
        $username = ($_POST["user_name"]);
        $birthDay = new Datetime($_POST['user_birthdate']);
        $currentDate = new DateTime();
        $diffDate = $birthDay->diff($currentDate);
        
        if ($diffDate->days < 6574) {
            $message = $username . " su edad es $diffDate->y";
            $result = " por tanto ES MENOR DE EDAD";
        } else {
            $message = $username . " su edad es $diffDate->y";
            $result = " por tanto ES MAYOR DE EDAD";
        }
    }
?>