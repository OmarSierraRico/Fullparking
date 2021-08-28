<?php

include("Conexion.php");
$con = conectar();


$id= $_POST["Placa_vehiculo"];
$Placa_vehiculo = $_POST["Placa_vehiculo"];
$Servicio = $_POST["Servicio"];
$Valor = $_POST["Valor"];



$sql = "INSERT INTO Adicionales VALUES('$id','$Placa_vehiculo','$Servicio','$Valor')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: Index.php");


}


?>