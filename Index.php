<?php
       
  require "Conexion.php";

  session_start();
  
  if($_POST) {

 $Correo_electronico= $_POST['Correo_electronico'];
 $Password= $_POST['Password'];


$sql = "SELECT  Id, Password, Nombre, Tipo_usuario  FROM roles WHERE Correo_electronico= '$Correo_electronico'";
echo $sql;
$resultado = $mysqli ->query($sql);
$num = $resultado->num_rows;

If($num>0) {
$row = $resultado->fetch_assoc();
$Password_bd = $row['Password'];


$pass_c =($Password);


if ($Password_bd == $pass_c){


    $_SESSION['Id'] = $row['Id'];
    $_SESSION['Nombre'] = $row['Nombre'];
    $_SESSION['Tipo_usuario'] = $row['Tipo_usuario'];

    header("Location: Index.php");

} else {
echo "La contraseña no coincide";
}




} else {
echo" No existe Correo";
}




  }



    

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Index - Fullparking</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="Index - Fullparking">
            <div id="Index - Fullparking_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Inicio de sesion</h3></div>
                                    <div class="card-body">
                                        <form method="POST"> 
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="Correo_electronico"type="email" placeholder="name@example.com" />
                                                <label for="inputEmail"> Correo electronico</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="Password"type="password" placeholder="Password" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recordar Contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Has olvidado tu contraseña?</a>
                                                <button class="btn btn-primary account-btn" type="submit" name="btnIngresar" value="Ingresar">Ingresar</button> 
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Necesito una cuenta? Inscribirse!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> OMAR GIOVANNI SIERRA RICO</div>
                            <!--<div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>-->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
