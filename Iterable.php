<?php
//In PHP, an iterable is any value that can be looped over with foreach. This includes arrays and objects that implement the Traversable interface (like Iterator and Generator).

//Applications:

//Useful when working with collections of data or when defining classes that allow iteration.
class NumberGenerator implements Iterator {
    private $numbers = [];
    private $position = 0;

    public function __construct($max) {
        for ($i = 1; $i <= $max; $i++) {
            $this->numbers[] = $i;
        }
    }

    public function current() {
        return $this->numbers[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function valid() {
        return isset($this->numbers[$this->position]);
    }
}

// Using the iterable
$generator = new NumberGenerator(5);
foreach ($generator as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
?>
