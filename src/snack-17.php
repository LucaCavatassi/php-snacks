<?php
$email = "esempio@gmail.com";
$isValida = validaEmail($email); // Risultato atteso: true
$email = "email.non.valida@com";
$isValida = validaEmail($email); // Risultato atteso: false

function validaEmail($str) {
    $domain = explode(".", $str);
    if (str_contains($str, "@") && count($domain) > 2) {
        return true;
    } else {
        return false;
    }
}

function validaEmail($str) {
    // Check if the string contains '@' and has at least two parts after splitting by '@'
    if (!str_contains($str, "@")) {
        return false;
    }
    
    $parts = explode("@", $str);
    if (count($parts) != 2) {
        return false; // Invalid if there are not exactly 2 parts
    }

    $domain = $parts[1]; // Get the domain part
    $domainParts = explode(".", $domain); // Split the domain by '.'

    // Check if the domain has at least 2 parts and the last part has at least 2 characters
    if (count($domainParts) < 2 || strlen(end($domainParts)) < 2) {
        return false;
    }

    return true;
}