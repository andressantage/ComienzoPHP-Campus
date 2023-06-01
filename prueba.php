<?php
    echo "SECCION 10";
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
