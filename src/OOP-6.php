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

    public function applyDiscount($percentage) {
        $this->price -= ($this->price * $percentage / 100);
    }
}
class Catalog {
    public $catalog = [];

    public function addToCatalog($name, $price, $available_quantity) {
        $product = new Product($name, $price, $available_quantity);
        $this->catalog[] = $product;
    }

    public function checkAvailabilty() {
        $lowAvailabilityProducts = [];

        foreach ($this->catalog as $product) {
            if ($product->available_quantity < 10) {
                $lowAvailabilityProducts[] = $product;
            }
        }

        return $lowAvailabilityProducts;
    }

    public function totalValue() {
        $totalValue = 0;
        foreach ($this->catalog as $product) {
            $totalProduct = $product->price * $product->available_quantity;
            $totalValue += $totalProduct;
        }

        return $totalValue;
    }
}