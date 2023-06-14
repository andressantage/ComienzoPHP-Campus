<?php
/*
*Se define una clase abstracta llamada Animal 
*utilizando la palabra clave abstract. 
?Una clase abstracta no se puede instanciar directamente, 
?se utiliza como una clase base para otras clases derivadas. 
*/
abstract class Animal {
    /*
    *La clase Animal tiene una propiedad protegida $nombre y un método abstracto sonidoAnimal().
    */
    protected $nombre;
    protected $apellido;
    protected $edad;
    /*
    *La clase abstracta Animal tiene un constructor llamado __construct() que recibe un parámetro $nombre
    *y lo asigna a la propiedad protegida $nombre.
    */
    public function __construct($nombre,$apellido,$edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->setEdad($edad); // Utilizamos el método setEdad para validar el valor
    }
    /*
    *El método sonidoAnimal() es declarado como ABSTRACTO utilizando la palabra clave abstract.
    ?Esto significa que cualquier CLASE derivada de Animal debe implementar este método.
    */
    abstract public function sonidoAnimal();
    
    /*
    *Agregar un método público para obtener el valor de la propiedad protegida $nombre.
    */
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getEdad() {
        return $this->edad;
    }
    public function setEdad($edad) {
        if (is_numeric($edad) && $edad > 0) {
            $this->edad = $edad;
        } else {
            // Si el valor no es un número válido, asignamos un valor predeterminado
            $this->edad = 1;
        }
    }
}

/*
*Se definen dos clases derivadas de Animal: Perro y Gato. 
?Ambas clases implementan el método sonidoAnimal() que se define en la clase abstracta Animal.
*/
class Perro extends Animal {
    public function sonidoAnimal() {
        return "Guau Guau Guau!";
    }
}

class Gato extends Animal {
    public function sonidoAnimal() {
        return "Miau Miau Miau!";
    }
}

/*
*Se crean objetos de las clases derivadas: $perro de la clase Perro y $gato de la clase Gato. 
*Se proporciona un nombre en el constructor de cada objeto.
*/
// Crear objetos de las clases derivadas
$perro = new Perro("Sheila","Cubides",32);
$gato = new Gato("Angel","Ramirez",20);

/*
*Se llama al método sonidoAnimal() en cada objeto ($perro->sonidoAnimal() y $gato->sonidoAnimal()) y se imprime el resultado utilizando echo. 
*El método sonidoAnimal() devuelve el sonido característico de cada animal.
*/

// Llamar al método sonidoAnimal() y getNombre()
echo "El perro: " . $perro->getNombre() . " " . $perro->getApellido() . " tiene una edad de " . $perro->getEdad() . " y hace el sonido:  " . $perro->sonidoAnimal() . "<br>";
echo "El gato: " . $gato->getNombre() . " " . $gato->getApellido() . " tiene una edad de " . $gato->getEdad() . " y hace el sonido:  " . $gato->sonidoAnimal() . "<br>";

?>