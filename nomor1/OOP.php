<?php

// Base class
class Person {
    private string $name;
    private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Getter
    public function getName(): string {
        return $this->name;
    }

    // Setter
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function introduce(): void {
        echo "Hi, I'm {$this->name}, {$this->age} years old.\n";
    }
}

// Inheritance
class Customer extends Person {
    private string $customerId;

    public function __construct(string $name, int $age, string $customerId) {
        parent::__construct($name, $age); // call Person constructor
        $this->customerId = $customerId;
    }

    public function introduce(): void {
        parent::introduce(); // reuse parent behavior
        echo "My customer ID is {$this->customerId}.\n";
    }
}

// Static members
class MathHelper {
    public static function add($a, $b): int {
        return $a + $b;
    }
}

// Interface
interface Animal {
    public function makeSound(): void;
}

class Dog implements Animal {
    public function makeSound(): void {
        echo "Woof!\n";
    }
}

// Trait
trait CanSayHello {
    public function sayHello(): void {
        echo "Hello World!\n";
    }
}

class Greeter {
    use CanSayHello;
}

// -------------------
// Testing everything
// -------------------

$p = new Person("Mike", 30);
$p->introduce(); // Hi, I'm Mike, 30 years old.

$c = new Customer("Sarah", 25, "C123");
$c->introduce(); 
// Hi, I'm Sarah, 25 years old.
// My customer ID is C123.

echo MathHelper::add(5, 7) . "\n"; // 12

$dog = new Dog();
$dog->makeSound(); // Woof!

$g = new Greeter();
$g->sayHello(); // Hello World!
