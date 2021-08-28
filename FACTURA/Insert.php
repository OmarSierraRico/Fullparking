<?php

include("Conexion.php");
$con = conectar();


$id = $_POST["Placa_vehiculo"];
$Placa_vehiculo = $_POST["Placa_vehiculo"];
$Fecha_ingreso = $_POST["Fecha_ingreso"];
$Hora_ingreso = $_POST["Hora_ingreso"];
$Fecha_salida = $_POST["Fecha_salida"];
$Hora_salida = $_POST["Hora_salida"];
$Impuestos = $_POST["Impuestos"];
$Subtotal = $_POST["Subtotal"];
$Total = $_POST["Total"];


$sql = "INSERT INTO Factura VALUES('$id','$Placa_vehiculo','$Fecha_ingreso','$Hora_ingreso','$Fecha_salida','$Hora_salida','$Impuestos','$Subtotal','$Total')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: Index.php");


}


?>