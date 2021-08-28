<?php

include("Conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM Tarifas WHERE Tipo_vehiculo ='$id'";
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
           <input type="hidden" name="Tipo_vehiculo" value= "<?php echo $row['Tipo_vehiculo']?>">
            <input type ="text" class="form-control mb-3" name="Convenios"value="<?php echo $row['Convenios']?>">
            <input type ="text" class="form-control mb-3" name="Minutos"value="<?php echo $row['Minutos']?>">
            <input type ="text" class="form-control mb-3" name="Hora"value="<?php echo $row['Hora']?>">
            <input type ="text" class="form-control mb-3" name="Dia"value="<?php echo $row['Dia']?>">
            <input type ="text" class="form-control mb-3" name="Noche"value="<?php echo $row['Noche']?>">
            <input type ="text" class="form-control mb-3" name="Semana"value="<?php echo $row['Semana']?>">
            <input type ="text" class="form-control mb-3" name="Mes"value="<?php echo $row['Mes']?>">
            

            <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        </form>

</div>

    
</body>
</html>