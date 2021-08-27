<?php

include("Conexion.php");
$con = conectar();

$id = $_POST['Placa'];
$Marca_vehiculo = $_POST['Marca_vehiculo'];
$Tipo_vehiculo = $_POST['Tipo_vehiculo'];
$Color = $_POST['Color'];
$Peso = $_POST['Peso'];
$Factura_id = $_POST['Factura_id'];
$Tarifas_id = $_POST['Tarifas_id'];

$sql = "UPDATE Vehiculo SET Marca_vehiculo = '$Marca_vehiculo',Tipo_vehiculo = '$Tipo_vehiculo',Color = '$Color',Peso = '$Peso',Factura_id = '$Factura_id', Tarifas_id = '$Tarifas_id' WHERE Placa = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }


?>