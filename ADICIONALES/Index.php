<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM Adicionales";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ADICIONALES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<div class="row">
    <div class="col-md-4">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="Placa_vehiculo"placeholder="Placa_vehiculo">
            <input type ="text" class="form-control mb-3" name="Servicio"placeholder="Servicio">
            <input type ="text" class="form-control mb-3" name="Valor"placeholder="Valor">


            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>ADICIONALES FULL PARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Placa_vehiculo</th>
                <th scope="col">Servicio</th>
                <th scope="col">Valor</th>

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
              <td><?php echo $row["Servicio"]?></td>
              <td><?php echo $row["Valor"]?></td>


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