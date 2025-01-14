<?php 
if (isset($_POST["firstNum"]) or isset ($_POST["secondNum"])) {
    $operator = $_POST["operator"];

    if ($operator === "+") {
        echo $_POST["firstNum"] + $_POST["secondNum"];
    } else if ($operator === "-") {
        echo $_POST["firstNum"] - $_POST["secondNum"];
    }
}