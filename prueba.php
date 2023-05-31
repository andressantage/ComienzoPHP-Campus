<?php

    echo "SECCION 10";
    //la parte del ."<br>" solo es para hacer un renglon

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
    echo $miArreglo[0]."<br>"; //forma para imprimir el valor en 0 de la lista

    $miArreglo[0]='Nuevo valor'; //modifica el valor en posicion 0
    echo $miArreglo[0]."<br>";

    /**
     * *Forma para crear un arreglo asociativo es decir con claves unicas
     */
    echo "<br>arreglo asociativo";
    $miArrayAsociativo=array( //este es una array asociativo que seria lo parecido a un diccionario u objeto literal
        "clave1" => "valor1",
        "clave2" => "valor2"
    );
    echo "<pre>";
    var_dump($miArrayAsociativo);
    echo "</pre>";

    echo "<br>".$miArrayAsociativo["clave1"]."<br>"; //imprime el valor con la clave1

    //otra forma de escribir un arreglo con claves y valores
    echo "Otra forma de arreglo asociativo<br>"; 
    $cliente=[
        'nombre'=>'jose',
        'saldos'=>[10,20]
    ];
    echo "Valor ".$cliente['nombre']."<br>";
    $cliente['nombre']='Juan'; //se cambia valor de clave por Juan
    echo "Valor ".$cliente['nombre']."<br>";
    echo "Valor ".$cliente['saldos'][0]."<br>"; //funciona como una matriz
    echo "<pre>";
    var_dump($cliente);
    echo "</pre>";

    echo "push<br>";
    array_push($miArreglo,'Valor agregado al final'); //añade elemento al final

    echo "unshift<br>";
    array_unshift($miArreglo,'Valor agregado al inicio'); //añade elemento al inicio
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "pop<br>";
    echo array_pop($miArreglo); //imprime el ultimo elemento y lo elimina del array
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "merge<br>";
    $arreglo1 = array("valor1", "valor2");
    $arreglo2 = array("valor3", "valor4");
    $resultado = array_merge($arreglo1, $arreglo2); //une los dos array en uno solo
    echo "<pre>";
    var_dump($resultado);
    echo "</pre>";

    echo "flip<br>";
    echo "<pre>";
    var_dump(array_flip($miArrayAsociativo)); //intercambia las claves y valores de un arreglo
    echo "</pre>";

    echo "fill<br>";
    $filledArray = array_fill(0, 5, "valor"); //rellena un array con un valor especificado, en este caso desde posicion 0 a 5 con el string "valor"
    echo "<pre>";
    var_dump($filledArray); 
    echo "</pre>";

    echo "filter<br>";
    $miArreglo = array(1, 2, 3, 4, 5, 6); //se hace este arreglo
    $filteredArray = array_filter($miArreglo, function($elemento) { //filtra los elementos de un arreglo utilizando una función de devolución de llamada y crear un nuevo array con los elementos que cumplen con la condicion
        return $elemento % 2 == 0;
    });
    echo "<pre>";
    var_dump($filteredArray);
    echo "</pre>";

    echo "map<br>"; //$miArreglo = array(1, 2, 3, 4, 5, 6);
    $multiplicados = array_map(function($elemento) { //aplica una función a cada elemento de un arreglo y con lo que retorna la funcion genera un numero array
        return $elemento * 2;
    }, $miArreglo);
    echo "<pre>";
    var_dump($multiplicados); 
    echo "</pre>";

    echo "reduce<br>"; //$miArreglo = array(1, 2, 3, 4, 5, 6);
    $sumaTotal = array_reduce($miArreglo, function($acumulador, $elemento) { //reduce un arreglo a un solo valor aplicando una función reductora
        return $acumulador + $elemento; //el acumulador va guardando el valor del resultado de cada elemento, y elemento toma el valor de cada elemento del array y asi va haciendo la funcion.
    });
    echo "<pre>";
    var_dump($sumaTotal); 
    echo "</pre>";

    echo "in_array<br>"; //$miArreglo = array(1, 2, 3, 4, 5, 6);
    $existeValor = in_array(9, $miArreglo); //verifica si un valor existe en un arreglo, en este caso si el 9 esta en el array si no es asi retorna false
    echo "<pre>";
    var_dump($existeValor); 
    echo "</pre>";
    echo $existeValor ? "El valor existe" : "El valor no existe"."<br>"."<br>";

    echo "rand<br>"; //$miArreglo = array(1, 2, 3, 4, 5, 6);
    $claveAleatoria = array_rand($miArreglo); //devuelve una o varias claves aleatorias de un arreglo, de las claves del array (0,1,2,3,4,5) devolvera de forma aleatoria uno
    echo "Clave aleatoria: " . $claveAleatoria."<br>";

    echo "unique<br>";
    $miArreglo = array("valor1", "valor2", "valor1", "valor3", "valor2");
    $arregloUnico = array_unique($miArreglo); //elimina valores duplicados de un arreglo
    echo "<pre>";
    var_dump($arregloUnico); 
    echo "</pre>";

    echo "intersect<br>";
    $arreglo1 = array("valor1", "valor2", "valor3");
    $arreglo2 = array("valor2", "valor3", "valor4");
    $interseccion = array_intersect($arreglo1, $arreglo2);
    echo "<pre>";
    var_dump($interseccion); //devuelve los valores que están presentes en dos o más arreglos, es decir los valores que comparten los array
    echo "</pre>";

    echo "diff<br>";
    $diferencia = array_diff($arreglo1, $arreglo2);
    echo "<pre>";
    var_dump($diferencia); //devuelve los valores que están en el primer arreglo pero no en los demás
    echo "</pre>";

    echo "reverse<br>";
    $miArreglo = array("valor1", "valor2", "valor3");
    $reversedArray = array_reverse($miArreglo); //invierte el orden de los elementos en un arreglo
    echo "<pre>";
    var_dump($reversedArray); 
    echo "</pre>";

    echo "sum<br>";
    $miArreglo = array(1, 2, 3, 4, 5);
    $suma = array_sum($miArreglo); //calcula la suma de los valores numéricos en un arreglo. 1+2+3+4+5
    echo "<pre>";
    var_dump($suma); 
    echo "</pre>";

    echo "product<br>";
    $miArreglo = array(2, 3, 4); 
    $producto = array_product($miArreglo); //calcula el producto de los valores numéricos en un arreglo. 2*3*4
    echo "<pre>";
    var_dump($producto); 
    echo "</pre>";

    echo "chunk<br>";
    $miArreglo = array("valor1", "valor2", "valor3", "valor4", "valor5");
    $trozos = array_chunk($miArreglo, 2); //divide un arreglo en trozos más pequeños, crea arreglos de 2 valores
    echo "<pre>";
    var_dump($trozos); 
    echo "</pre>";

    echo "keys<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    $claves = array_keys($miArreglo); //devuelve todas las claves de un arreglo
    echo "<pre>";
    var_dump($claves); 
    echo "</pre>";

    echo "values<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    $valores = array_values($miArreglo); //devuelve todos los valores de un arreglo
    echo "<pre>";
    var_dump($valores); 
    echo "</pre>";

    echo "walk<br>";
    $miArreglo = array("valor1", "valor2", "valor3");
    array_walk($miArreglo, function(&$valor, $clave) { //aplica una función de devolución de llamada a cada elemento de un arreglo
        $valor="Modificado: ".$valor." con ".$clave;  //valor toma los valores del array y clave de cada clave segun en la iteracion en la que se encuentre
    });
    echo "<pre>";
    var_dump($miArreglo); 
    echo "</pre>";

    echo "key_exists<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    $existeClave1 = array_key_exists("clave1", $miArreglo); //verifica si ciertas claves existen en el arreglo 
    $existeClave4 = array_key_exists("clave4", $miArreglo);
    echo "¿Existe la clave 'clave1'? " . ($existeClave1 ? "Sí" : "No") . "<br>";
    echo "¿Existe la clave 'clave4'? " . ($existeClave4 ? "Sí" : "No") . "<br>";

    echo "<br>foreach<br>";
    $miArreglo = array("clave1" => "valor1", "clave2" => "valor2", "clave3" => "valor3");
    foreach($miArreglo as $clave => $valor){ //itera de manera sencilla sobre elementos de un arreglo y realizar operaciones en cada elemento
        echo "Clave: ".$clave.", Valor: ".$valor."<br>"; //clave y valor seran los respectivos claves y valores de cada elemento en el array
    }

    echo "sort<br>";
    $miArreglo = array(1,3,6,5,4);
    sort($miArreglo); //ordena de menor a mayor el array
    echo "<pre>";
    var_dump($miArreglo); 
    echo "</pre>";

    echo "rsort<br>";
    rsort($miArreglo); //ordena de mayor a menor el array
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "asort<br>";
    $miArreglo = array('a2','a1','ba','bc');
    asort($miArreglo); //ordena de forma alfabetica los valores
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "arsort<br>";
    $miArreglo = array('a2','a1','ba','bc');
    arsort($miArreglo); //ordena de forma alfabetica al reves los valores
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "ksort<br>";
    $miArreglo = array('a'=>'a2','c'=>'a1','d'=>'ba','b'=>'bc');
    ksort($miArreglo); //ordena de forma alfabetica con las llaves
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    echo "krsort<br>";
    $miArreglo = array('a'=>'a2','c'=>'a1','d'=>'ba','b'=>'bc');
    krsort($miArreglo); //ordena de forma alfabetica al reves con las llaves
    echo "<pre>";
    var_dump($miArreglo);
    echo "</pre>";

    /**11)
     * !Isset() y Empty()
     */
    
    /**
     * *Isset()
     */
    $miVariable="Hola";
    if(isset($miVariable)){ //la parte del isset($miVariable) dara true o false dependiendo si es indefinida o null
        echo "La variable esta definida o no es null<br>";
    }else{
        echo "La variable esta indefinida o es null<br>";
    }

    /**
     * *Empty()
     */
    $miVariable="";
    if(empty($miVariable)){ //la parte del empty($miVariable) dara true o false dependiendo si tiene un valor o no
        echo "La variable esta vacia o no esta definida<br>";
    }else{
        echo "La variable tiene un valor<br>";
    }

    /**12)
     * !Estructuras de control
     * En funcion de ciertas condiciones realiza ciertas acciones
     * ejemplos: for, while, if, switch, try, catch...
     */
    
    /**
     * *Estructuras condicionales
     */
    echo "if, else if, else<br>";
    $valor=2;
    if($valor===3){
        echo "con el solo if<br>";
    }else if($valor===2){
        echo "con else if<br>";
    }else{
        echo "con el else<br>";
    }

    echo "switch<br>";
    $valor=2;
    switch($valor){
        case 1: //en caso de $valor=1
            echo "es 1 $valor<br>";
            break;
        case 2: //en caso de $valor=2
            echo "es 2 $valor<br>";
            break;
        default:
            echo "es ninguno $valor<br>";
            break;
    }

    /**
     * *Estructuras repetitivas
     */
    echo "while<br>";
    $i=0;
    while($i<3){
        echo $i."<br>";
        $i++; //incrementa
    }

    echo "do while<br>";
    $i=0;
    do{
        echo $i."<br>";
        $i++; //incrementa
    }while($i<2);

    /**13)
     * !Funciones definidas por el usuario
     * es lo mismo que cualquier otra funcion en python o javascript
     */
    
    /**
     * *Funciones en PHP
     * una funcion que no retorna un valor se llama "void" aunque esta palabra no es necesario usarla aunque es una buena practica usarla
     */

     /**
      **Funcion que no retorna un valor
      */

      function sumar(int $num1=0, array $num2):void{
        echo $num1+$num2;
      }
      sumar(10,[]);




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
