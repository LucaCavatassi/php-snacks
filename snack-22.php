<?php
$cart = [
    ["name" => "T-shirt", "price" => 20.00, "quantity" => 6],
    ["name" => "Sneakers", "price" => 50.00, "quantity" => 1],
    ["name" => "Jeans", "price" => 40.00, "quantity" => 2]
];

function calculateTotal($cart) {
    $error_message = "There was an error, please check your cart!";

    $total = 0;
    $quantityDiscount = 5; // Sconto del 5% per 5 o più pezzi dello stesso prodotto
    $fullCartDiscount = 10; // Sconto del 10% per ordini superiori a 100€
    
    foreach ($cart as $elem) {
        // Se una delle chiavi del carrello non è settata
        // O il nome non è una stringa
        // O il prezzo non è un numero o è minore di 0
        // O la quantita non è un intero o è minore o uguale a 0
        // Ritorna errore
        if (!isset($elem["name"], $elem["price"], $elem["quantity"]) || !is_string($elem["name"]) || !is_numeric($elem["price"]) || $elem["price"] < 0 || !is_int($elem["quantity"]) || $elem["quantity"] <= 0) {
            return $error_message;
        }
        // Il total del singolo elemento prezzo * quantità
        $itemTotal = $elem["price"] * $elem["quantity"];
        // Applica lo sconto quantità se ci sono almeno 5 pezzi dello stesso prodotto
        if ($elem["quantity"] >= 5) {
            $itemTotal -= $itemTotal * ($quantityDiscount / 100);
        }
        // Totale è la somma dei singoli elementi
        $total += $itemTotal;
    }
    // Applica lo sconto sull'ordine intero se supera i 100€
    if ($total > 100) {
        $total -= $total * ($fullCartDiscount / 100);
    }
    // Ritorna il numero formattato con due zeri
    return number_format($total, 2, ',', '.');
}

echo calculateTotal($cart);
