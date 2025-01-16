<?php
$cart = [
    ["name" => "T-shirt", "price" => 20.00, "quantity" => 6],
    ["name" => "Sneakers", "price" => 50.00, "quantity" => 1],
    ["name" => "Jeans", "price" => 40.00, "quantity" => 2]
];


function calculateTotal($cart) {
    $quantityDiscount = 5;
    foreach ($cart as $elem) {
        if($elem["quantity"] > 5) {
            $elem["price"] = $elem["price"] - ($elem["price"] * ($quantityDiscount / 100));
            var_dump($elem["price"]);
        };
    }
};

echo calculateTotal($cart);
