<?php

interface Saludar{
    public function getNumero();
    public function setNumero($numero);
    public function getNome();
}

interface Saludar2{
    public function getNumeroRamdom();
    public function setNumeroRamdom($numero);
}

class Hola2 extends Hola implements Saludar, Saludar2{

    function __construct($numero,$nome){
        parent::__construct($numero,$nome);
    }

    public function getNumero(){
        print_r(1);
    }
    public function setNumero($numero){}
    public function getNome(){}

    public function getNumeroRamdom(){}
    public function setNumeroRamdom($numero){}
    
}

//las interfaces solo pueden extender otras interfaces:
interface Animal {
    public function eat();
}

interface Mammal extends Animal {
    public function giveBirth();
}

class Dog implements Mammal {
    public function eat() {
        echo "The dog is eating.\n";
    }
    
    public function giveBirth() {
        echo "The dog gave birth to puppies.\n";
    }
}

$dog = new Dog();
$dog->eat();  // Salida: The dog is eating.
$dog->giveBirth();  // Salida: The dog gave birth to puppies.


?>