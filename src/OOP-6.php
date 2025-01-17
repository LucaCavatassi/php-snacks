<?php 


class Product {
    public $name;
    public $price;
    public $available_quantity;
    
    public function __construct($name, $price, $available_quantity){
        $this->name = $name;
        $this->price = $price;
        $this->available_quantity = $available_quantity;
    }
}
class Catalog {
    public $catalog = [];

    public function addToCatalog($name, $price, $available_quantity) {
        $product = new Product($name, $price, $available_quantity);
        $this->catalog[] = $product;
    }

    public function checkAvailabilty($catalog) {
        $lowAvailabilityProducts = [];

        foreach ($catalog as $product) {
            if ($product["available_quantity"] < 10) {
                $lowAvailabilityProducts[] = $product;
            }
        }
    }

    public function totalValue($catalog) {
        $totalValue = 0;
        foreach ($catalog as $product) {
            $totalProduct = $product["price"] * $product["available_quantity"];
            $totalValue += $totalProduct;
        }
    }
}