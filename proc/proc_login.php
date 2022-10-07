<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="./Logo_Noteros.png" type="image/png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
    <?php
require_once "./conexion.php";

if(isset($_POST["button"])){
    if(isset($_POST["correo"]) && isset($_POST["psw"])){
        $correo=$_POST["correo"];
        $password=sha1($_POST["psw"]);

        $comprobar= "SELECT * FROM tbl_login WHERE `correo` = '{$correo}' AND `password` = '{$password}';";
        $cons = mysqli_query($connection,$comprobar);
        $cons_fin=mysqli_fetch_array($cons);
        $num = mysqli_num_rows($cons);
        if($num==1){
            // var_dump($cons_fin);
            session_start();
            $_SESSION["nombre_user"]=$cons_fin['nombre'];
            echo "<script>Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Usuario correcto',
                showConfirmButton: false,
                timer: 1500
              })</script>";
            header("Location:./mostrar.php");
        }else{

            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: 'El correo o la contraseña son incorrectos',
                            imageUrl: '../img/borrar.png',
                            imageWidth: 200,
                            imageHeight: 200,
                            background: '#f39c12',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Volver'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            }
                        })
                }

                aviso('../index.html');
            </script>
            <?php
            }
    }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: "Tienes que rellenar todos los campos",
                            imageUrl: '../img/borrar.png',
                            imageWidth: 200,
                            imageHeight: 200,
                            background: '#f39c12',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Volver'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            }
                        })
                }

                aviso('../index.html');
            </script>
            <?php
    }
    




}else{
    header("Location: ../login.php");
}
    ?>
</body>
</html>