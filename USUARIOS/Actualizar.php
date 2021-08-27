<?php

include("Conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM Usuarios WHERE Nombres ='$id'";
$query = mysqli_query($con,$sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


</head>
<body>
<div class="container mt-5">
<form action="Update.php"method="POST">
           <input type="hidden" name="Nombres" value= "<?php echo $row['Nombres']?>">
            <input type ="text" class="form-control mb-3" name="Apellidos"value="<?php echo $row['Apellidos']?>">
            <input type ="text" class="form-control mb-3" name="Identificacion"value="<?php echo $row['Identificacion']?>">
            <input type ="text" class="form-control mb-3" name="Telefono"value="<?php echo $row['Telefono']?>">
            <input type ="text" class="form-control mb-3" name="Celular"value="<?php echo $row['Celular']?>">
            <input type ="text" class="form-control mb-3" name="Domicilio"value="<?php echo $row['Domicilio']?>">
            <input type ="text" class="form-control mb-3" name="Email"value="<?php echo $row['Email']?>">

            <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        </form>

</div>

    
</body>
</html>