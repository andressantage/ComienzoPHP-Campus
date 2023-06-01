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
