<?php
//An interface in PHP defines a contract that any class implementing it must adhere to. All methods in an interface must be public and cannot contain implementations. A class can implement multiple interfaces, allowing for more flexible design.

//Significance:

  //  Promotes loose coupling and allows multiple classes to follow the same set of rules, regardless of their inheritance.
interface Vehicle {
    public function start();
    public function stop();
}

class Car implements Vehicle {
    public function start() {
        return "Car started";
    }

    public function stop() {
        return "Car stopped";
    }
}

class Bike implements Vehicle {
    public function start() {
        return "Bike started";
    }

    public function stop() {
        return "Bike stopped";
    }
}

// Create a car object
$car = new Car();
echo $car->start(); // Car started
echo $car->stop();  // Car stopped
?>
