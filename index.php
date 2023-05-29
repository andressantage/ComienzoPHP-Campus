<?php 
    /** 5)
     * !Introducción a php
     * *Estructura básica de un script PHP
     * documentRoot es la carpeta principal del servidor Apache donde se deben alojar cada uno de los proyectos que se han creado
     * Crear las carpetas: css, img, js, scripts,uploads y index.php
     * **para inicializar y es una buena practica:
     * ?//<?php 
     *   ?//Aqui va el codigo
     * ?//?>
     * !Comando para comprobar el servidor
     * php -S localhost:3000
     */

      /**6)
       * !Funciones de salida en PHP
       * *echo() //para imprimir y es muy comun, sirve para texto y etiquetas
       * echo "Texto a imprimir";
       * 
       * el %s es para indicar que es una cadena de texto
       * 
       * *print() //solo puede imprimir cadena de texto
       * $texto="Mundo";
       * printf("Hola %s", $texto);
       * 
       * *sprintf() //devuelve cadena de texto formateada como resultado
       * $texto="Mundo";
       * $mensaje=sprintf("Hola %s", $texto);
       * echo $mensaje;
       */

       /**7)
        * !Variables y constantes
        * !Definir variables
        * Las variables se definen con $nombre_variable
        * $edad=25; //numerica
        * $nombre="Soy"; //texto
        * $es_true=true; //boleana
        * 
        * para imprimir tipo de dato:
        * echo var_dump($nombre); //en este caso imprimira string(3), indicando que es un string con 3 caracteres
        * 
        * !Definir constantes
        * define("PI",3.14156); //define constante numerica
        * define("SALUDO","Hola Mundo!"); //define constante de texto
        * define("ES_VALIDO",true); //define constante boleana
        */

       /**8)
        * !Tipos de datos
        * *Boleano //es para true o false
        * $logueado=true; 
        * var_dump($logueado);
        * 
        * *Floats
        * $float=200.18
        *  var_dump($float); 
        * 
        * *Strings
        * $nombre="Juan";
        * var_dump($nombre);
        * 
        * *Numeros
        * $numero=200;
        * var_dump($numero);
        * 
        * *Arrays
        * $array=[1,2,3];
        * var_dump($array);
        * 
        * *Objects //para instancias de clases que son definiciones de objetos
        * class Persona {
            public $nombre;
            public $edad;

            public function __construct($nombre, $edad) {
                $this->nombre = $nombre;
                $this->edad = $edad;
            }

            public function saludar() {
                echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
            }
          }
        * var_dump(Persona);
        *
        * *Nullos //representa una variable sin valor o sin definir
        * $variableSinValor = null;
        * var_dump($variableSinValor);
        * 
        * *Recursos (resource) //para almacenar referencias a recuersos externos ejemplo: conexiones a bases de datos
        * $conexion = mysqli_connect($host, $user, $password, $database);
        * var_dump($conexion);
        */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Hola"; ?>
</body>
</html>