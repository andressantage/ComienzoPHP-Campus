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

        /**9)
         * !Números y operadores
         * En PHP principalmente hay diferentes operaciones básicas y complejas, algunos ejemplos son: 
         * !Arithmetic 
         * $num1=2;
         * $num2=3;
         * $num3=3;
         * $num4="30";
         * 
         * var_dump($num1>$num2);
         * echo "<br/>;
         * 
         * var_dump($num1>=$num2);
         * echo "<br/>;
         * 
         * var_dump($num1<=$num2);
         * echo "<br/>;
         * 
         * var_dump($num1==$num2);
         * echo "<br/>;
         * 
         * var_dump($num2==$num3);
         * echo "<br/>;
         * 
         * var_dump($num2==$num4);
         * echo "<br/>;
         * 
         * ? resultados segun comparadores logicos
         * ? -1 es para si es izquierda o menor
         * ? 0 si es igual
         * ? 1 si izquierda es mayor
         * 
         * var_dump($num1<=>$num2);
         * echo "<br/>;
         * 
         * var_dump($num1<=>$num3);
         * echo "<br/>;
         * 
         * var_dump($num2<=>$num1);
         * echo "<br/>;sd
         */

    echo "SECCION 10.<br>";
    /**
     * *La parte del ."<br>" solo es para hacer un renglon
    */

    /**10)
     * !Arreglos, Arreglos asociativos y funciones para arreglos
    */
    
    /**
     * *Forma para crear un arreglo indexado numericamente
    */
    echo "arreglo indexado numericamente";
    $miArreglo=array("valor1","valor2","valor3");
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";
    /**
     * *Forma para imprimir el valor en 0 de la lista
    */
    echo $miArreglo[0]."<br>";
    
    /**
     * *Modifica el valor en posicion 0
    */
    $miArreglo[0]='Nuevo valor';
    echo $miArreglo[0]."<br>";

    /**
     * *Forma para crear un arreglo asociativo es decir con claves unicas
    */
    echo "<br>arreglo asociativo";
    /**
     * *este es una array asociativo que seria lo parecido a un diccionario u objeto literal
    */
    $miArrayAsociativo=array( 
        "clave1" => "valor1",
        "clave2" => "valor2"
    );
    echo "<pre>";
    var_dump($miArrayAsociativo);
    echo "</pre>";
    /**
     * *imprime el valor con la clave1
    */
    echo "<br>".$miArrayAsociativo["clave1"]."<br>"; 

    
    /**
     * *otra forma de escribir un arreglo con claves y valores
    */
    echo "Otra forma de arreglo asociativo<br>"; 
    $cliente=[
        'nombre'=>'jose',
        'saldos'=>[10,20]
    ];
    echo "Valor ".$cliente['nombre']."<br>";
    /**
     * *se cambia valor de clave por Juan
    */
    $cliente['nombre']='Juan'; 
    echo "Valor ".$cliente['nombre']."<br>";
    /**
     * *funciona como una matriz
    */
    echo "Valor ".$cliente['saldos'][0]."<br>"; 
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    echo "push<br>";
    /**
     * *añade elemento al final
    */
    array_push($miArreglo,'Valor agregado al final'); 

    echo "unshift<br>";
    /**
     * *añade elemento al inicio
    */
    array_unshift($miArreglo,'Valor agregado al inicio'); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "pop<br>";
    /**
     * *imprime el ultimo elemento y lo elimina del array
    */
    echo array_pop($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "merge<br>";
    $arreglo1 = array("valor1", "valor2");
    $arreglo2 = array("valor3", "valor4");
    /**
     * *une los dos array en uno solo
    */
    $resultado = array_merge($arreglo1, $arreglo2); 
    echo "<pre>";
    var_dump($resultado);
    echo "</pre>";

    echo "flip<br>";
    echo "<pre>";
    /**
     * *intercambia las claves y valores de un arreglo
    */
    var_dump(array_flip($miArrayAsociativo)); 
    echo "</pre>";

    echo "fill<br>";
    /**
     * *rellena un array con un valor especificado, en este caso desde posicion 0 a 5 con el string "valor"
    */
    $filledArray = array_fill(0, 5, "valor"); 
    echo "<pre>";
    var_dump($filledArray); 
    echo "</pre>";

    echo "filter<br>";
    /**
     * *se hace este arreglo
    */
    $miArreglo = array(1, 2, 3, 4, 5, 6); 
    /**
     * *filtra los elementos de un arreglo utilizando una función de devolución de llamada y crear un nuevo array con los elementos que cumplen con la condicion
    */
    $filteredArray = array_filter($miArreglo, function($elemento) { 
        return $elemento % 2 == 0;
    });
    echo "<pre>";
    var_dump($filteredArray);
    echo "</pre>";

    /**
     * *$miArreglo = array(1, 2, 3, 4, 5, 6);
    */
    echo "map<br>"; 
    /**
     * *aplica una función a cada elemento de un arreglo y con lo que retorna la funcion genera un numero array
    */
    $multiplicados = array_map(function($elemento) { 
        return $elemento * 2;
    }, $miArreglo);
    echo "<pre>";
    var_dump($multiplicados); 
    echo "</pre>";

    /**
     * *$miArreglo = array(1, 2, 3, 4, 5, 6);
    */
    echo "reduce<br>"; 
    /**
     * *reduce un arreglo a un solo valor aplicando una función reductora
    */
    $sumaTotal = array_reduce($miArreglo, function($acumulador, $elemento) { 
        /**
         * *el acumulador va guardando el valor del resultado de cada elemento, y elemento toma el valor de cada elemento del array y asi va haciendo la funcion.
        */
        return $acumulador + $elemento; 
    });
    echo "<pre>";
    var_dump($sumaTotal); 
    echo "</pre>";

    /**
     * *$miArreglo = array(1, 2, 3, 4, 5, 6);
    */
    echo "in_array<br>"; 
    /**
     * *verifica si un valor existe en un arreglo, en este caso si el 9 esta en el array si no es asi retorna false
    */
    $existeValor = in_array(9, $miArreglo); 
    echo "<pre>";
    var_dump($existeValor); 
    echo "</pre>";
    echo $existeValor ? "El valor existe" : "El valor no existe"."<br>"."<br>";

    /**
     * *$miArreglo = array(1, 2, 3, 4, 5, 6);
    */
    echo "rand<br>"; 
    /**
     * *devuelve una o varias claves aleatorias de un arreglo, de las claves del array (0,1,2,3,4,5) devolvera de forma aleatoria uno
    */
    $claveAleatoria = array_rand($miArreglo); 
    echo "Clave aleatoria: " . $claveAleatoria."<br>";

    echo "unique<br>";
    $miArreglo = array("valor1", "valor2", "valor1", "valor3", "valor2");
    /**
     * *elimina valores duplicados de un arreglo
    */
    $arregloUnico = array_unique($miArreglo); 
    echo "<pre>";
    var_dump($arregloUnico); 
    echo "</pre>";

    echo "intersect<br>";
    $arreglo1 = array("valor1", "valor2", "valor3");
    $arreglo2 = array("valor2", "valor3", "valor4");
    $interseccion = array_intersect($arreglo1, $arreglo2);
    echo "<pre>";
    /**
     * *devuelve los valores que están presentes en dos o más arreglos, es decir los valores que comparten los array
    */
    var_dump($interseccion); 
    echo "</pre>";

    echo "diff<br>";
    $diferencia = array_diff($arreglo1, $arreglo2);
    echo "<pre>";
    /**
     * *devuelve los valores que están en el primer arreglo pero no en los demás
    */
    var_dump($diferencia); 
    echo "</pre>";

    echo "reverse<br>";
    $miArreglo = array("valor1", "valor2", "valor3");
    /**
     * *invierte el orden de los elementos en un arreglo
    */
    $reversedArray = array_reverse($miArreglo); 
    echo "<pre>";
    var_dump($reversedArray); 
    echo "</pre>";

    echo "sum<br>";
    $miArreglo = array(1, 2, 3, 4, 5);
    /**
     * *calcula la suma de los valores numéricos en un arreglo. 1+2+3+4+5
    */
    $suma = array_sum($miArreglo); 
    echo "<pre>";
    var_dump($suma); 
    echo "</pre>";

    echo "product<br>";
    $miArreglo = array(2, 3, 4); 
    /**
     * *calcula el producto de los valores numéricos en un arreglo. 2*3*4
    */
    $producto = array_product($miArreglo); 
    echo "<pre>";
    var_dump($producto); 
    echo "</pre>";

    echo "chunk<br>";
    $miArreglo = array("valor1", "valor2", "valor3", "valor4", "valor5");
    /**
     * *divide un arreglo en trozos más pequeños, crea arreglos de 2 valores
    */
    $trozos = array_chunk($miArreglo, 2); 
    echo "<pre>";
    var_dump($trozos); 
    echo "</pre>";

    echo "keys<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    /**
     * *devuelve todas las claves de un arreglo
    */
    $claves = array_keys($miArreglo); 
    echo "<pre>";
    var_dump($claves); 
    echo "</pre>";

    echo "values<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    /**
     * *devuelve todos los valores de un arreglo
    */
    $valores = array_values($miArreglo); 
    echo "<pre>";
    var_dump($valores); 
    echo "</pre>";

    echo "walk<br>";
    $miArreglo = array("valor1", "valor2", "valor3");
    /**
     * *aplica una función de devolución de llamada a cada elemento de un arreglo
    */
    array_walk($miArreglo, function(&$valor, $clave) { 
        /**
         * *valor toma los valores del array y clave de cada clave segun en la iteracion en la que se encuentre
        */
        $valor="Modificado: ".$valor." con ".$clave;  
    });
    echo "<pre>";
    var_dump($miArreglo); 
    echo "</pre>";

    echo "key_exists<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    /**
     * *verifica si ciertas claves existen en el arreglo 
    */
    $existeClave1 = array_key_exists("clave1", $miArreglo); 
    $existeClave4 = array_key_exists("clave4", $miArreglo);
    echo "¿Existe la clave 'clave1'? " . ($existeClave1 ? "Sí" : "No") . "<br>";
    echo "¿Existe la clave 'clave4'? " . ($existeClave4 ? "Sí" : "No") . "<br>";

    echo "<br>foreach<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    /**
     * *itera de manera sencilla sobre elementos de un arreglo y realizar operaciones en cada elemento
    */
    foreach($miArreglo as $clave => $valor){ 
        /**
         * *clave y valor seran los respectivos claves y valores de cada elemento en el array
        */
        echo "Clave: ".$clave.", Valor: ".$valor."<br>"; 
    }

    echo "sort<br>";
    $miArreglo = array(1,3,6,5,4);
    /**
     * *ordena de menor a mayor el array
    */
    sort($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo); 
    echo "</pre>";

    echo "rsort<br>";
    /**
     * *ordena de mayor a menor el array
    */
    rsort($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "asort<br>";
    $miArreglo = array('a2','a1','ba','bc');
    /**
     * *ordena de forma alfabetica los valores
    */
    asort($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "arsort<br>";
    $miArreglo = array('a2','a1','ba','bc');
    /**
     * *ordena de forma alfabetica al reves los valores
    */
    arsort($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "ksort<br>";
    $miArreglo = array('a'=>'a2','c'=>'a1','d'=>'ba','b'=>'bc');
    /**
     * *ordena de forma alfabetica con las llaves
    */
    ksort($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "krsort<br>";
    $miArreglo = array('a'=>'a2','c'=>'a1','d'=>'ba','b'=>'bc');
    /**
     * *ordena de forma alfabetica al reves con las llaves
    */
    krsort($miArreglo); 
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**11)
     * !Isset() y Empty()
     */
    
    /**
     * *Isset()
     * la parte del isset($miVariable) dara true o false dependiendo si es indefinida o null
     */
    echo "Isset():<br>";
    $miVariable="Hola";
    if(isset($miVariable)){
        echo "La variable esta definida o no es null<br>";
    }else{
        echo "La variable esta indefinida o es null<br>";
    }
    echo "<br>";

    /**
     * *Empty()
     * la parte del empty($miVariable) dara true o false dependiendo si tiene un valor o no
     */
    echo "Empty():<br>";
    $miVariable="";
    if(empty($miVariable)){
        echo "La variable esta vacia o no esta definida<br>";
    }else{
        echo "La variable tiene un valor<br>";
    }
    echo "<br>";

    /**SECCION: 12)
     * !Estructuras de control
     * En funcion de ciertas condiciones realiza ciertas acciones
     * ejemplos: for, while, if, switch, try, catch...
     */
    
    /**
     * *Estructuras condicionales
     */
    /**
     * if, else if, else:es muy parecido a javascript
     */
    echo "if, else if, else:<br>";
    $valor=2;
    if($valor===3){
        echo "con el solo if<br>";
    }else if($valor===2){
        echo "con else if<br>";
    }else{
        echo "con el else<br>";
    }
    echo "<br>";

    /**
     * switch:es muy parecido a javascript
     */
    echo "switch<br>";
    $valor=2;
    switch($valor){
        case 1: //en caso de $valor=1
            echo "es 1 el valor: $valor<br>";
            break;
        case 2: //en caso de $valor=2
            echo "es 2 el valor: $valor<br>";
            break;
        default:
            echo "ninguno cuadra con el valor: $valor<br>";
            break;
    }
    echo "<br>";

    /**
     * *Estructuras repetitivas
     * el i++ incremente en uno el valor de i
     */

    /**
     * for:es muy parecido a javascript
     */
    echo "for:<br>";
    for ($i = 0; $i < 4; $i++) {
        echo $i."<br>";
    }
    echo "<br>";

    /**
     * while:es muy parecido a javascript
     */
    echo "while:<br>";
    $i=0;
    while($i<3){
        echo $i."<br>";
        $i++; 
    }
    echo "<br>";

    /**
     * do while:es muy parecido a javascript
     */
    echo "do while:<br>";
    $i=0;
    do{
        echo $i."<br>";
        $i++;
    }while($i<2);


     /**
     * SECCION 11
     * !Funciones definidas por el usuario
     * son bloques de codigo que se pueden llamar y ejecutar en cualquier parte del programa
     * permiten: modularizacion y reutilizabilidad
     * componentes: valor de retorno (puede retornar un valor o no ), codigo dentro de funcion, variables locales (tomaran la asignacion de los parametros dados por el usuario) y globales
     */

   /**
    * *Funciones en PHP
    *? Estructura: 
    * function nombreFuncion(parametro1, parametro2){
    *        Aqui va el codigo que se ejecutara;
    *       return Valor;
    * };
    */

    /**
     * *Funciones que no retornan valor
     * ? palabra void: se usa para definir una funcion que no retorna ningun valor
     * ! es una buena practica usar void para funciones que no retorna un valor
     */
     /**
      * Ejemplo de funcion donde se le asignan dos parametros 
      * tambien se pone la palabra void ya que no retorna nada
      * el int $numero=0, es para asignar en caso de no ponerse ningun valor el valor que se le da al parametro
      */
    declare(strict_types=1);
    function sumar(int $numero1=0, $numero2):void{
        echo $numero1+$numero2;
    }
    sumar(10, 2);
    echo "<br>"; 

    /**
     * *Funciones que retornan valor
     * ? en este caso no se usa la palabra void
     * retornan un valor
     */
     /**
      * Ejemplo de funcion donde se le asigna un parametro
      * en este caso se predefine que debe ser boleano
      * retornar un valor string en vaso de estar autenticado ?string
      * en caso de no se true retornara null, es decir nada
      */
      declare(strict_types=1);
      function usuarioAutenticado(bool $autenticado): ?string {
        if($autenticado){
            return "El usuario esta autenticado";
        }else{
            return null;
        }
      }
      $usuario=usuarioAutenticado(false);
      echo $usuario;
      echo "<br>"; 
     /**
      * en las funciones se utiliza el : para definir que tipo de variable va a retornar seguido del simbolo ?
      * solo en caso de que vaya a retornar y luego al lado se pone el tipo de dato a retornar 
      */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

</body>
</html>