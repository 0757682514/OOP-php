<?php
//Traits in PHP allow for code reuse in multiple classes. They provide a way to include shared methods in several classes without using inheritance. Traits differ from classes and interfaces because they allow you to compose methods in classes.

//Difference from classes and interfaces:

  //  Traits don’t define a type like interfaces.
    //Unlike classes, traits can't be instantiated.
trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $this->log("Creating user: $name");
        // Logic to create a user
    }
}

class Order {
    use Logger;

    public function createOrder($id) {
        $this->log("Creating order: $id");
        // Logic to create an order
    }
}

// Example usage
$user = new User();
$user->createUser("John Doe"); // Log: Creating user: John Doe

$order = new Order();
$order->createOrder(123); // Log: Creating order: 123
?>
