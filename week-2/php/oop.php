<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

class Student extends Person {
    public $major;

    public function __construct($name, $age, $major) {
        parent::__construct($name, $age);
        $this->major = $major;
    }

    public function introduce() {
        return parent::introduce() . " I am studying " . $this->major . ".";
    }
}

// Create an instance of the Student class
$student1 = new Student("Alice", 20, "Computer Science");

echo $student1->introduce();
?>
