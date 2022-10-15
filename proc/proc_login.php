<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
if(isset($_POST["button"])){
    if(isset($_POST["correo"]) && isset($_POST["psw"])){
        require_once "./conexion.php";
        $correo=$connection->real_escape_string(strip_tags($_POST["correo"]));
        $password=$connection->real_escape_string(strip_tags(sha1($_POST["psw"])));
        $comprobar= "SELECT * FROM tbl_login WHERE `correo` = '{$correo}' AND `password` = '{$password}';";
        $cons = mysqli_query($connection,$comprobar);
        $cons_fin=mysqli_fetch_array($cons);
        $num = mysqli_num_rows($cons);
        if($num==1){
            session_start();
            $_SESSION["nombre_user"]=$cons_fin['nombre'];
            ?>
            <script>function aviso() {
                Swal.fire({
                background: '#A9F5D7',
                position: 'center',
                icon: 'success',
                title: 'Usuario correcto',
                showConfirmButton: false,
                timer: 1500
              })
            }

                
            aviso()
            setTimeout(function(){ window.location.href = './mostrar.php' }, 1500);
            </script>
              <?php
        }else{
            ?>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: 'El correo o la contraseña son incorrectos',
                            imageUrl: '../img/borrar.png',
                            imageWidth: 200,
                            imageHeight: 200,
                            background: '#A9F5D7',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Volver'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            }
                        })
                }

                aviso('../index.php');
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
                            background: '#A9F5D7',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Volver'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            }
                        })
                }

                aviso('../index.php');
            </script>
            <?php
    }
    




}else{
    echo "<script>window.location.href='../login.php'</script>";
}
    ?>
</body>
</html>