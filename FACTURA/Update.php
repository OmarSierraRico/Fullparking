<?php

include("Conexion.php");
$con = conectar();

$id = $_POST['Placa_vehiculo'];
$Fecha_ingreso = $_POST['Fecha_ingreso'];
$Hora_ingreso = $_POST['Hora_ingreso'];
$Fecha_salida = $_POST['Fecha_salida'];
$Hora_salida = $_POST['Hora_salida'];
$Impuestos = $_POST['Impuestos'];
$Subtotal = $_POST['Subtotal'];
$Total = $_POST['Total'];

$sql = "UPDATE Factura SET Fecha_ingreso = '$Fecha_ingreso',Hora_ingreso = '$Hora_ingreso',Fecha_salida = '$Fecha_salida',Hora_salida = '$Hora_salida',Impuestos = '$Impuestos', Subtotal = '$Subtotal',Total = '$Total' WHERE Placa_vehiculo = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }


?>