<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matameeee no quiero vivir :(</title>
</head>
<body>
    <?php
        var_dump($_GET);
    ?>
    <form method="POST">
        <input type="text" value="<?php echo $_POST['nombre'];?>">
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
    <?php
        var_dump($_POST);
    ?>
</body>
</html>