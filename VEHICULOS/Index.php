<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM Vehiculo";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD VEHICULOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<div class="row">
    <div class="col-md-4">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="Placa"placeholder="Placa">
            <input type ="text" class="form-control mb-3" name="Marca_vehiculo"placeholder="Marca_vehiculo">
            <input type ="text" class="form-control mb-3" name="Tipo_vehiculo"placeholder="Tipo_vehiculo">
            <input type ="text" class="form-control mb-3" name="Color"placeholder="Color">
            <input type ="text" class="form-control mb-3" name="Peso"placeholder="Peso">
            <input type ="text" class="form-control mb-3" name="Factura_id"placeholder="Factura_id">
            <input type ="text" class="form-control mb-3" name="Tarifas_id"placeholder="Tarifas_id">

            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>LISTA DE VEHICULOS FULL PARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Placa</th>
                <th scope="col">Marca_vehiculo</th>
                <th scope="col">Tipo_vehiculo</th>
                <th scope="col">Color</th>
                <th scope="col">Peso</th>
                <th scope="col">Factura_id</th>
                <th scope="col">Tarifas_id</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["Placa"]?></td>
              <td><?php echo $row["Marca_vehiculo"]?></td>
              <td><?php echo $row["Tipo_vehiculo"]?></td>
              <td><?php echo $row["Color"]?></td>
              <td><?php echo $row["Peso"]?></td>
              <td><?php echo $row["Factura_id"]?></td>
              <td><?php echo $row["Tarifas_id"]?></td>

              <td><a href="Actualizar.php?id=<?php echo $row["Placa"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["Placa"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>