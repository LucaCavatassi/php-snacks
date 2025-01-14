<?php
function isPrimo($num) {
    if ($num <= 1) return false; // Non è primo se <= 1
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i === 0) return false; // Divisibile, quindi non è primo
    }
    return true; // Nessun divisore trovato, è primo
}

// Stampa i numeri primi da 1 a 100
for ($i = 1; $i <= 100; $i++) {
    if (isPrimo($i)) echo "$i è un numero primo!<br>";
}