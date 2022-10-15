<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./img/login.svg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/20a538d92d.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
 <!--  <link rel="stylesheet" href="./css/style.css">  -->
  <script type="text/javascript" src="./proc/validarlogin.js"></script>
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" type="image/png" href="./img/Logo_Noteros.png">
</head>
<body>

<div class="region">
    
    <div class="widget">
            <div class="logo">
                <img src="img/Logo_Noteros.png" alt="">
            </div>
            <div class="form">
                <div class="login">
                    <form class=""  action="./proc/proc_login.php"  method="post">
                    
                    
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text altura_icono"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="correo" id="email" class="form-control input_user color" placeholder="ejemplo@ejemplo.com">
                    </div>
                    <div class="input-group ">
                        <div class="input-group-append">
                            <span class="input-group-text altura_icono"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="psw" id="password" class="form-control input_pass color" placeholder="password">
                    </div>
                    <a href="#"> Not registered? Create an account</a>

                    <button onclick="return validarLogin()" name="button" class="button-form" name="insesion" type="submit">Login</button>
                    </form>  
                    <button class="button-volver" onclick="window.location.href='./index.php'">Volver</button>           
                </div>
                
            </div>
    </div>
</div>   
<!-- <form class="login"  action="proc/proc_login.php"  method="post">
                
                <div class="input-group mb-3">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="correo" id="email" class="form-control input_user color" placeholder="ejemplo@ejemplo.com">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="psw" id="password" class="form-control input_pass color" placeholder="password">
                                        </div>
                <a href="#"> Not registered? Create an account</a>
                
                <button onclick="return validarLogin()" name="insesion" type="submit">Login</button>
                </form> -->

  <?php
//   if (isset($_GET['msg'])) {
//     $msg=$_GET['msg'];
//     if ($msg==1) {
//     echo "<br>";
//     echo "<span>Usuario o Contraseña Incorrecto</span>";
//     echo "<br>";
//     }else{
//     }
// }
?>				

</body>
</html>