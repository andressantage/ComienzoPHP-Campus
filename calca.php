<?php
    session_start();
    if (isset($_POST['numero'])) {
        if (isset($_SESSION['num1'])) {
            $_SESSION['num1'] .= $_POST['numero'];
        } else {
            $_SESSION['num1'] =  $_POST['numero'];
        }
    }

    if (isset($_POST['opera'])) {
        switch()

        if (isset($_SESSION['num1'])) {
            $_SESSION['num1'] .= $_POST['numero'];
        } else {
            $_SESSION['num1'] =  $_POST['numero'];
        }
    }


 /*    session_destroy(); */
    var_dump($_SESSION['num1']);
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
<form method="POST"> 
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

</body>
</html>