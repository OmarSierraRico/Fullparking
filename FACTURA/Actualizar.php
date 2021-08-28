<?php

include("Conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM Factura WHERE Placa_vehiculo ='$id'";
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
           <input type="hidden" name="Placa_vehiculo" value= "<?php echo $row['Placa_vehiculo']?>">
            <input type ="text" class="form-control mb-3" name="Fecha_ingreso"value="<?php echo $row['Fecha_ingreso']?>">
            <input type ="text" class="form-control mb-3" name="Hora_ingreso"value="<?php echo $row['Hora_ingreso']?>">
            <input type ="text" class="form-control mb-3" name="Fecha_salida"value="<?php echo $row['Fecha_salida']?>">
            <input type ="text" class="form-control mb-3" name="Hora_salida"value="<?php echo $row['Hora_salida']?>">
            <input type ="text" class="form-control mb-3" name="Impuestos"value="<?php echo $row['Impuestos']?>">
            <input type ="text" class="form-control mb-3" name="Subtotal"value="<?php echo $row['Subtotal']?>">
            <input type ="text" class="form-control mb-3" name="Total"value="<?php echo $row['Total']?>">

            <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        </form>

</div>

    
</body>
</html>