<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM Factura";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD FACTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<div class="row">
    <div class="col-md-4">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="Placa_vehiculo"placeholder="Placa_vehiculo">
            <input type ="text" class="form-control mb-3" name="Fecha_ingreso"placeholder="Fecha_ingreso">
            <input type ="text" class="form-control mb-3" name="Hora_ingreso"placeholder="Hora_ingreso">
            <input type ="text" class="form-control mb-3" name="Fecha_salida"placeholder="Fecha_salida">
            <input type ="text" class="form-control mb-3" name="Hora_salida"placeholder="Hora_salida">
            <input type ="text" class="form-control mb-3" name="Impuestos"placeholder="Impuestos">
            <input type ="text" class="form-control mb-3" name="Subtotal"placeholder="Subtotal">
            <input type ="text" class="form-control mb-3" name="Total"placeholder="Total">


            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>FACTURA FULL PARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Placa_vehiculo</th>
                <th scope="col">Fecha_ingreso</th>
                <th scope="col">Hora_ingreso</th>
                <th scope="col">Fecha_salida</th>
                <th scope="col">Hora_salida</th>
                <th scope="col">Impuestos</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Total</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["Placa_vehiculo"]?></td>
              <td><?php echo $row["Fecha_ingreso"]?></td>
              <td><?php echo $row["Hora_ingreso"]?></td>
              <td><?php echo $row["Fecha_salida"]?></td>
              <td><?php echo $row["Hora_salida"]?></td>
              <td><?php echo $row["Impuestos"]?></td>
              <td><?php echo $row["Subtotal"]?></td>
              <td><?php echo $row["Total"]?></td>

              <td><a href="Actualizar.php?id=<?php echo $row["Placa_vehiculo"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["Placa_vehiculo"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>