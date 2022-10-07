<?php
session_start();
if(!isset($_SESSION["nombre_user"])){
    header("Location: ../index.php");
}
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
    <?php
    $nombre=$_SESSION["nombre_user"];
    echo "<h1>Bienvenido $nombre</h1>"
    ?>
    <a href="./logout.php">Log Out</a>
</body>
</html>