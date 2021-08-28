<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM Tarifas";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD TARIFAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<div class="row">
    <div class="col-md-4">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="Tipo_vehiculo"placeholder="Tipo_vehiculo">
            <input type ="text" class="form-control mb-3" name="Convenios"placeholder="Convenios">
            <input type ="text" class="form-control mb-3" name="Minutos"placeholder="Minutos">
            <input type ="text" class="form-control mb-3" name="Hora"placeholder="Hora">
            <input type ="text" class="form-control mb-3" name="Dia"placeholder="Dia">
            <input type ="text" class="form-control mb-3" name="Noche"placeholder="Noche">
            <input type ="text" class="form-control mb-3" name="Semana"placeholder="Semana">
            <input type ="text" class="form-control mb-3" name="Mes"placeholder="Mes">

            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>LISTA DE TARIFAS FULL PARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Tipo_vehiculo</th>
                <th scope="col">Convenios</th>
                <th scope="col">Minutos</th>
                <th scope="col">Hora</th>
                <th scope="col">Dia</th>
                <th scope="col">Noche</th>
                <th scope="col">Semana</th>
                <th scope="col">Mes</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["Tipo_vehiculo"]?></td>
              <td><?php echo $row["Convenios"]?></td>
              <td><?php echo $row["Minutos"]?></td>
              <td><?php echo $row["Hora"]?></td>
              <td><?php echo $row["Dia"]?></td>
              <td><?php echo $row["Noche"]?></td>
              <td><?php echo $row["Semana"]?></td>
              <td><?php echo $row["Mes"]?></td>

              <td><a href="Actualizar.php?id=<?php echo $row["Tipo_vehiculo"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["Tipo_vehiculo"]?>"class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>