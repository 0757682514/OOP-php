<?php
//Static properties and methods belong to the class rather than an instance of the class. They can be accessed without creating an object of the class. Static methods cannot use $this as they are not bound to an instance.

//Use cases:

   // To maintain shared data among all instances of a class.
   // Utility functions that don’t depend on object state.
class MathHelper {
    public static $pi = 3.14159;

    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

// Accessing static property and method without instantiating the class
echo MathHelper::$pi;  // 3.14159
echo MathHelper::circleArea(5);  // 78.53975
?>
