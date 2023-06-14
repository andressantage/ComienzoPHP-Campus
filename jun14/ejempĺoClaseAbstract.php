<?php
//abstract
/* abstract class animal{
    public function sonido($p1=null){
        return "El sonido del animal es $p1";
    }
}

class perro extends animal{

}

$obj=new perro();
print_r($obj->sonido("guagua")); */

//ABSTRACT
//abstract
abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function makeSound();
    
    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$dog = new Dog("Buddy");
echo "Dog Name: " . $dog->getName() . "\n";  // Salida: Dog Name: Buddy
echo "Dog Sound: ";
$dog->makeSound();  // Salida: Dog Sound: Woof!

$cat = new Cat("Whiskers");
echo "Cat Name: " . $cat->getName() . "\n";  // Salida: Cat Name: Whiskers
echo "Cat Sound: ";
$cat->makeSound();  // Salida: Cat Sound: Meow!

//otro ejemplo de abstract
abstract class Shape {
    protected $color;
    
    public function __construct($color) {
        $this->color = $color;
    }
    
    abstract public function calculateArea();
    
    abstract public function calculatePerimeter();
    
    public function getColor() {
        return $this->color;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($color, $width, $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return $this->width * $this->height;
    }
    
    public function calculatePerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
    
    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

$rectangle = new Rectangle("Blue", 5, 3);
echo "Rectangle Color: " . $rectangle->getColor() . "\n";  // Salida: Rectangle Color: Blue
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";  // Salida: Rectangle Area: 15
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n";  // Salida: Rectangle Perimeter: 16

$circle = new Circle("Red", 4);
echo "Circle Color: " . $circle->getColor() . "\n";  // Salida: Circle Color: Red
echo "Circle Area: " . $circle->calculateArea() . "\n";  // Salida: Circle Area: 50.265482457437
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "\n";  // Salida: Circle Perimeter: 25.132741228718
//Un método abstracto es un método que no tiene una implementación concreta en la clase abstracta, sino que solo proporciona la firma del método, es decir, el nombre del método y los parámetros que acepta.
//Cuando se declara un método abstracto en una clase abstracta, se está indicando que las clases hijas deben proporcionar una implementación concreta de ese método.

//INTERFACE
//interface
interface Animal{
    public function sonido($p1=null);
}

class perro implements Animal{
    public function sonido($p1=null){
        return "El sonido del ";
    }
}


//ejemplo de implements
interface Animal {
    public function emitSound();
}

class Dog implements Animal {
    public function emitSound() {
        echo "Woof!";
    }
}

class Cat implements Animal {
    public function emitSound() {
        echo "Meow!";
    }
}

$dog = new Dog();
$dog->emitSound();  // Salida: Woof!

$cat = new Cat();
$cat->emitSound();  // Salida: Meow!
//otro ejemplo de implements
interface Shape {
    public function calculateArea();
    public function calculatePerimeter();
}

class Rectangle implements Shape {
    private $length;
    private $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function calculateArea() {
        return $this->length * $this->width;
    }
    
    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

class Circle implements Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
    
    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

$rectangle = new Rectangle(5, 3);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";  // Salida: Rectangle Area: 15
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n";  // Salida: Rectangle Perimeter: 16

$circle = new Circle(4);
echo "Circle Area: " . $circle->calculateArea() . "\n";  // Salida: Circle Area: 50.265482457437
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "\n";  // Salida: Circle Perimeter: 25.132741228718
//otro ejemplo:
interface Person {
    const GENDER_MALE = 'Male';
    const GENDER_FEMALE = 'Female';
    
    public function getName();
    public function getGender();
}

class Student implements Person {
    private $name;
    private $gender;
    
    public function __construct($name, $gender) {
        $this->name = $name;
        $this->gender = $gender;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getGender() {
        return $this->gender;
    }
}

$student = new Student('John Doe', Person::GENDER_MALE);
echo 'Name: ' . $student->getName() . "\n";  // Salida: Name: John Doe
echo 'Gender: ' . $student->getGender();  // Salida: Gender: Male


//Ejemplo de uso de clase abstracta e interface
abstract class Vehicle {
    protected $brand;
    
    public function __construct($brand) {
        $this->brand = $brand;
    }
    
    abstract public function start();
    abstract public function stop();
}

interface Fuel {
    public function refuel();
}

class Car extends Vehicle implements Fuel {
    public function start() {
        echo "The car engine is started.\n";
    }
    
    public function stop() {
        echo "The car engine is stopped.\n";
    }
    
    public function refuel() {
        echo "The car is being refueled.\n";
    }
}

$car = new Car("Toyota");
echo "Brand: " . $car->brand . "\n";  // Salida: Brand: Toyota
$car->start();  // Salida: The car engine is started.
$car->refuel();  // Salida: The car is being refueled.
$car->stop();  // Salida: The car engine is stopped.

//trait
//Los traits son una forma de reutilizar y compartir código en PHP. Permiten agrupar métodos y propiedades 
//comunes en un bloque de código y luego utilizar ese bloque en múltiples clases. Esto facilita la composición 
//de clases sin necesidad de herencia múltiple.
trait Greeting {
    public function sayHello() {
        echo "Hello!\n";
    }
    
    public function sayGoodbye() {
        echo "Goodbye!\n";
    }
}

class Person {
    use Greeting;
    
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function introduce() {
        echo "My name is " . $this->name . ". ";
        $this->sayHello();
    }
}

$person = new Person("John");
$person->introduce();  // Salida: My name is John. Hello!
$person->sayGoodbye();  // Salida: Goodbye!




//Uso de :: en php
//En PHP, el operador :: se utiliza para acceder a métodos y propiedades estáticas de una clase, así 
//como para acceder a constantes de una clase.

//ejemplo de Acceder a un método estático:
class Math {
    public static function sum($a, $b) {
        return $a + $b;
    }
}
$result = Math::sum(2, 3);
echo $result;  // Salida: 5

//ejemplo de Acceder a una propiedad estática:
class Counter {
    public static $count = 0;
    
    public static function increment() {
        self::$count++;
    }
}
Counter::increment();
Counter::increment();
echo Counter::$count;  // Salida: 2

//ejemplo de Acceder a una constante:
class Constants {
    const PI = 3.14159;
}
echo Constants::PI;  // Salida: 3.14159



//PARA CODIGO EN DISCORD
```PHP

    echo "hola";
```


?>