<?php

include("Conexion.php");
$con = conectar();

$id = $_POST['Placa_vehiculo'];
$Servicio = $_POST['Servicio'];
$Valor = $_POST['Valor'];


$sql = "UPDATE Adicionales SET Servicio = '$Servicio',Valor = '$Valor' WHERE Placa_vehiculo = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }


?>