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
?>
<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="resultado" value="<?php isset($_COOKIE['num1']) ? $_COOKIE['num1'] :0;?>">
        <button type="submit" name="numero" value="1">1</button>
        <button type="submit" name="numero" value="2">2</button>
        <button type="submit" name="numero" value="3">3</button>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

