<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel="shortcut icon" href="./img/login.svg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/20a538d92d.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" href="./css/style.css"> 
  <script type="text/javascript" src="./proc/validarlogin.js"></script>
</head>
<body>
<?php
    session_start();
    $_SESSION['login']=false;
    $_SESSION['login2']=false;
?>


<!-- partial:index.partial.html -->
<form class="login"  action="proc/proc_login.php"  method="post">
  
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
</form>
</body>
</html>