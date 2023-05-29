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

    </script>
</html>