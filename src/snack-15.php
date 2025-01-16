<?php 
$input = ["Ciao", "PHP", "Programmazione", "Sviluppo", "Hello"];
function filter($arr) {
    $output = [];
    foreach ($arr as $elem) {
        if (ctype_upper($elem[0]) && strlen($elem) > 5) {
            $output[] = $elem;
        }
    }
    return $output;
}
// Risultato atteso: ["Programmazione", "Sviluppo", "Hello"]