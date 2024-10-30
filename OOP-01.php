<!-- Task: Create a class called Car with properties make, model, and year. 
Write a constructor to initialize these properties and a method displayInfo() that prints the car’s details in the format
“Make: [make], Model: [model], Year: [year]”. -->

<?php 
class Car {
    public $make;
    public $model;
    public $year; 

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayInfo() {
        return "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}";
    }
}

$car = new Car("Toyota", "Prius", "2024");

echo $car->displayInfo();