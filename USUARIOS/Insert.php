<?php

include("Conexion.php");
$con = conectar();


$id= $_POST["Nombres"];
$Nombres= $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Identificacion = $_POST["Identificacion"];
$Telefono = $_POST["Telefono"];
$Celular = $_POST["Celular"];
$Domicilio = $_POST["Domicilio"];
$Email = $_POST["Email"];


$sql = "INSERT INTO Usuarios VALUES('$id','$Nombres','$Apellidos','$Identificacion','$Telefono','$Celular','$Domicilio','$Email')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: Index.php");


}


?>