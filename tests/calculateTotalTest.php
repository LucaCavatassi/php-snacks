<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/snack-22.php'; // Importa la funzione

class CalculateTotalTest extends TestCase {
    public function testTotalWithoutDiscounts() {
        $cart = [
            ["name" => "T-shirt", "price" => 20.00, "quantity" => 1],
            ["name" => "Sneakers", "price" => 50.00, "quantity" => 1]
        ];
        $this->assertEquals('70,00', calculateTotal($cart));
    }

    public function testTotalWithQuantityDiscount() {
        $cart = [
            ["name" => "T-shirt", "price" => 20.00, "quantity" => 5] // Sconto 5%
        ];
        $this->assertEquals('95,00', calculateTotal($cart));
    }

    public function testTotalWithFullCartDiscount() {
        $cart = [
            ["name" => "T-shirt", "price" => 60.00, "quantity" => 2] // Totale 120€, sconto 10%
        ];
        $this->assertEquals('108,00', calculateTotal($cart));
    }

    public function testTotalWithBothDiscounts() {
        $cart = [
            ["name" => "T-shirt", "price" => 20.00, "quantity" => 5], // Sconto 5%
            ["name" => "Sneakers", "price" => 50.00, "quantity" => 1]
        ];
        $this->assertEquals('130,50', calculateTotal($cart));
    }

    public function testInvalidPrice() {
        $cart = [
            ["name" => "T-shirt", "price" => -20.00, "quantity" => 1] // Prezzo negativo
        ];
        $this->assertEquals("There was an error, please check your cart!", calculateTotal($cart));
    }

    public function testInvalidQuantity() {
        $cart = [
            ["name" => "T-shirt", "price" => 20.00, "quantity" => 0] // Quantità zero
        ];
        $this->assertEquals("There was an error, please check your cart!", calculateTotal($cart));
    }
}