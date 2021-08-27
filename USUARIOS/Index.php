<?php

include("Conexion.php");
$con = conectar();

$sql = "SELECT * FROM Usuarios";
$query = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
<div class="row">
    <div class="col-md-4">
        <form action="Insert.php"method="POST">
            <input type ="text" class="form-control mb-3" name="Nombres"placeholder="Nombres">
            <input type ="text" class="form-control mb-3" name="Apellidos"placeholder="Apellidos">
            <input type ="text" class="form-control mb-3" name="Identificacion"placeholder="Identificacion">
            <input type ="text" class="form-control mb-3" name="Telefono"placeholder="Telefono">
            <input type ="text" class="form-control mb-3" name="Celular"placeholder="Celular">
            <input type ="text" class="form-control mb-3" name="Domicilio"placeholder="Domicilio">
            <input type ="text" class="form-control mb-3" name="Email"placeholder="Email">

            <input type="submit" class="btn btn-primary btn-block">
        </form>
    </div>
<div class="col-md-8"></div>
            <table class="table">
            <caption>LISTA DE USUARIOS FULL PARKING</caption>
            <thead class="thead-dark">
                <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Identificacion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Celular</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>

        <?php
        while($row = mysqli_fetch_array($query)){
    
        ?>
          <tr>
              <td><?php echo $row["Nombres"]?></td>
              <td><?php echo $row["Apellidos"]?></td>
              <td><?php echo $row["Identificacion"]?></td>
              <td><?php echo $row["Telefono"]?></td>
              <td><?php echo $row["Celular"]?></td>
              <td><?php echo $row["Domicilio"]?></td>
              <td><?php echo $row["Email"]?></td>

              <td><a href="Actualizar.php?id=<?php echo $row["Nombres"]?>"class="btn btn-info"> Editar</a></td>
              <td><a href="Delete.php?id=<?php echo $row["Nombres"]?>" class="btn btn-danger"> Eliminar</a></td>
              

          </tr> 
          <?php
        }
        ?>    

            </tbody>
            </table>
    </div>
</body>
</html>