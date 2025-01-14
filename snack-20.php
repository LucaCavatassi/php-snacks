<?php 
var_dump($_POST);
if (!empty($_POST["firstNum"]) or !empty($_POST["secondNum"])) {
    $operator = $_POST["operator"];

    if ($operator === "+") {
        echo (int)$_POST["firstNum"] + (int)$_POST["secondNum"];
    } else if ($operator === "-") {
        echo (int)$_POST["firstNum"] - (int)$_POST["secondNum"];
    }
} else {
    echo "no num provided";
}