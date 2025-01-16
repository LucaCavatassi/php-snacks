<?php
$cart = [
    ["name" => "T-shirt", "price" => 20.00, "quantity" => 6],
    ["name" => "Sneakers", "price" => 50.00, "quantity" => 1],
    ["name" => "Jeans", "price" => 40.00, "quantity" => 2]
];


function calculateTotal($cart) {
    $total = 0;

    $quantityDiscount = 5;
    $fullCartDiscount = 10;

    foreach ($cart as $elem) {
        if($elem["quantity"] > 5) {
            $elem["price"] = $elem["price"] - ($elem["price"] * ($quantityDiscount / 100));
            var_dump($elem["price"]);
        };

        $total += $elem["price"];
        var_dump($total);
    }

    if ($total > 100) {
        $total = $total - ($total * ($fullCartDiscount / 100));
    }

    return $total;
};

echo calculateTotal($cart);
