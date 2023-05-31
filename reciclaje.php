<?php
    session_start();
    if (isset($_POST['numero'])) {
        if (isset($_SESSION['num1'])) {
            $_SESSION['num1'] .= $_POST['numero'];
        } else {
            $_SESSION['num1'] =  $_POST['numero'];
        }
    }
    var_dump($_SESSION['num1']);

/*     if (isset($_POST['numero'])) {
        $_SESSION['num1'] .= $_POST['numero'];

        if (isset($_SESSION['num1'])) {
            
        } else {
            $_SESSION['num1'] =  $_POST['numero'];
        }
    }
    var_dump($_SESSION['num1']);
 */

/* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $opera=$_POST['opera'];
    switch ($opera) {
        case 'suma':
            $p=$num1+$num2;
            $resultado="Resultado es: ".$p;
            break;
        case 'res':
            $p=$num1-$num2;
            $resultado="Resultado es: ".$p;
            break;
        case 'divi':
            $p=$num1/$num2;
            $resultado="Resultado es: ".$p;
            break;
        case 'mult':
            $p=$num1*$num2;
            $resultado="Resultado es: ".$p;
            break;
        default:
            echo "Opción no válida";
            break;
    }
}  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta type="button" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    body{
        background-color: black;
        color: white
    }
    input{
        height: 5rem;
        width: 5rem;
        margin: 0.2rem;
        font-size: 2.2rem !important;
    } 
    button{
        width: 5rem;
        margin: 0.2rem  !important;
    }
    .tablero{
        width: 98%;
        margin: 0.2rem;
    }
    .letra{
        color: black !important;
        font-weight: bold;
        font-size: 22px  !important;
        padding: 0;
    }
    .espacioBoton{
        margin: 1px !important;
    }
    </style>
</head>
<body>
<form method="POST"> <!-- Se puede describir el metodo pero sino entonces por defecto se pondra como metodo GET -->
       <!--  <div class="container my-4" style="width: 25rem;">
          <div class="form-group">
            <label for="num1">Numero 1:</label>
            <input type="number" name="num1" class="form-control" id="num1" placeholder="Ingresa primer numero">
          </div>
          <div class="form-group">
            <label for="num2">Numero 2:</label>
            <input type="number" name="num2" class="form-control" id="num2" placeholder="Ingresa segundo numero">
          </div>
          <div class="form-group">
            <label for="seleccion">Selecciona una operacion a realizar:</label>
            <select class="form-control" name="opera" id="operar">
                <option value="suma">Sumar</option>
                <option value="res">Restar</option>
                <option value="divi">Dividir</option>
                <option value="mult">Multiplicar</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mb-4">Calcular</button>
        <div> -->

        
        <?php  if(isset($resultado)){?>
            <h5><?php echo $resultado ?> </h5>
        <?php }?>

    <div class="container d-flex justify-content-center">
        <table >
            <tr> 
                <td  colspan="4"><input class="btn btn-light letra tablero" type="text" name="resultado" value="<?php  if(isset($_SESSION['num1'])){?> <?php echo $_SESSION['num1'] ?> <?php }?>"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="submit" name="numero" value="7"></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="8"></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="9"></td>
                <td><input class="btn btn-light" type="submit" name="opera" value="÷"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="submit" name="numero" value="4"></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="5"></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="6"></td>
                <td><input class="btn btn-light" type="submit" name="opera" value="x"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="submit" name="numero" value="1"></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="2"></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="3"></td>
                <td><input class="btn btn-light" type="submit" name="opera" value="-"></td>
            </tr>
            <tr>
                <td><input class="btn btn-light" type="submit" name="punto" value="."></td>
                <td><input class="btn btn-light" type="submit" name="numero" value="0"></td>
                <td><input class="btn btn-light" type="submit" name="calcular" value="="></td>
                <td><input class="btn btn-light" type="submit" name="opera" value="+"></td>
            </tr>
            <tr>
                <td class="espacioBoton" colspan="2"><button type="submit" class="btn btn-primary tablero espacioBoton" name="uno"><-</button></td>
                <td class="espacioBoton" colspan="2"><button type="submit" class="btn btn-primary tablero" name="todo">C</button></td>
            </tr>
        </table>   
    </div>
</form>    

<!--    <table >
    <tr> 
        <td  colspan="4"><input class="btn btn-light letra tablero" type="text" name="resultado" value="<?php isset($_COOKIE['num1']) ? $_COOKIE['num1'] :0;?>"></td>
    </tr>
    <tr>
        <td><input class="btn btn-light" type="button" name="7" value="7"></td>
        <td><input class="btn btn-light" type="button" name="8" value="8"></td>
        <td><input class="btn btn-light" type="button" name="9" value="9"></td>
        <td><input class="btn btn-light" type="button" name="div" value="÷"></td>
    </tr>
    <tr>
        <td><input class="btn btn-light" type="button" name="4" value="4"></td>
        <td><input class="btn btn-light" type="button" name="5" value="5"></td>
        <td><input class="btn btn-light" type="button" name="6" value="6"></td>
        <td><input class="btn btn-light" type="button" name="x" value="x"></td>
    </tr>
    <tr>
        <td><input class="btn btn-light" type="button" name="1" value="1"></td>
        <td><input class="btn btn-light" type="button" name="2" value="2"></td>
        <td><input class="btn btn-light" type="button" name="3" value="3"></td>
        <td><input class="btn btn-light" type="button" name="-" value="-"></td>
    </tr>
    <tr>
        <td><input class="btn btn-light" type="button" name="." value="."></td>
        <td><input class="btn btn-light" type="button" name="0" value="0"></td>
        <td><input class="btn btn-light" type="button" name="=" value="="></td>
        <td><input class="btn btn-light" type="button" name="+" value="+"></td>
    </tr>
    <tr>
        <td class="espacioBoton" colspan="2"><button type="submit" class="btn btn-primary tablero espacioBoton" name="uno"><-</button></td>
        <td class="espacioBoton" colspan="2"><button type="submit" class="btn btn-primary tablero" name="todo">C</button></td>
    </tr>
 </table>    -->

    
</body>
</html>