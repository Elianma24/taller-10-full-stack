<?php
$result = 0;
$message = "";

if (
    isset($_POST["first_number"]) &&
    isset($_POST["second_number"]) &&
    isset($_POST["operation_type"])
) {

    $firstNumber = intval($_POST["first_number"]);
    $secondNumber = intval($_POST["second_number"]);
    $operationType = $_POST["operation_type"];

    switch ($operationType) {
        case "Suma":
            $result = $firstNumber + $secondNumber;
            break;
        case "Resta":
            $result = $firstNumber - $secondNumber;
            break;
        case "Multiplicacion":
            $result = $firstNumber * $secondNumber;
            break;
        case "Division":
            $result = $firstNumber / $secondNumber;
            break;
        default:
    }
}
