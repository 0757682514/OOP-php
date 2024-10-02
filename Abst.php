<?php
//Abstract classes in PHP are classes that cannot be instantiated directly. They serve as base classes for other classes to inherit from. Abstract classes can contain both abstract methods (which must be implemented by the subclass) and regular methods with their implementation.

//When to use them:

//When you want to define a common base structure for different classes but want to enforce specific methods to be implemented by the subclasses.
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method that must be implemented by subclasses
    abstract public function makeSound();

    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Creating objects of the subclasses
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

echo $dog->getName() . " says " . $dog->makeSound(); // Buddy says Bark!
echo $cat->getName() . " says " . $cat->makeSound();  // Whiskers says Meow!
?>
