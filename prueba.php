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
