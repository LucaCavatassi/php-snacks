<?php
$numeri = [2, 8, 15, 1, 7];
$risultato = calcolaStatistiche($numeri);
/*
Risultato atteso:
[
    "somma" => 33,
    "media" => 6.6,
    "massimo" => 15,
    "minimo" => 1
]
*/

function calcolaStatistiche($arr) {
    $result = [
        "somma" => 0,
        "media" => 0,
        "massimo" => 0,
        "minimo" => 0
    ];

    // Calculate the sum
    for ($i = 0; $i < count($arr); $i++) { 
        $result["somma"] += $arr[$i];
    }

    // Calculate the average
    $result["media"] = $result["somma"] / count($arr);

    // Find the minimum and maximum
    $tempArray = $arr; // Make a copy of the array
    sort($tempArray); // Sort the copy in ascending order
    $result["minimo"] = $tempArray[0]; // First element is the smallest
    $result["massimo"] = $tempArray[count($tempArray) - 1]; // Last element is the largest

    return $result;
}