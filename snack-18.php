<?php 

$testo = "PHP è fantastico. PHP è facile da imparare.";
$conteggio = contaParoleUniche($testo);
/*
Risultato atteso:
[
    "PHP" => 2,
    "è" => 2,
    "fantastico" => 1,
    "facile" => 1,
    "da" => 1,
    "imparare" => 1
]
*/
function contaParoleUniche($testo) {
    // Convert all words to lowercase for case-insensitivity
    $testo = strtolower($testo);

    // Remove punctuation using preg_replace
    $testo = preg_replace("/[^\w\sàèéìòù]/u", "", $testo);

    // Split the string into words
    $parole = explode(" ", $testo);

    // Initialize an associative array to store word counts
    $conteggio = [];

    // Loop through each word
    foreach ($parole as $parola) {
        $parola = trim($parola); // Remove any surrounding whitespace
        if ($parola !== "") { // Ignore empty strings
            if (isset($conteggio[$parola])) {
                $conteggio[$parola]++;
            } else {
                $conteggio[$parola] = 1;
            }
        }
    }

    return $conteggio;
}

// Test the function
$testo = "PHP è fantastico. PHP è facile da imparare.";
$conteggio = contaParoleUniche($testo);

print_r($conteggio);