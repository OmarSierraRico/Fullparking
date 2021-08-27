<?php

include("Conexion.php");
$con = conectar();

$id = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Identificacion = $_POST['Identificacion'];
$Telefono = $_POST['Telefono'];
$Celular = $_POST['Celular'];
$Domicilio = $_POST['Domicilio'];
$Email = $_POST['Email'];

$sql = "UPDATE Usuarios SET Apellidos = '$Apellidos',Identificacion = '$Identificacion',Telefono = '$Telefono',Celular = '$Celular',Domicilio = '$Domicilio', Email = '$Email' WHERE Nombres = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }


?>