<?php

include("Conexion.php");
$con = conectar();


$id= $_POST["Placa"];
$Placa= $_POST["Placa"];
$Marca_vehiculo = $_POST["Marca_vehiculo"];
$Tipo_vehiculo = $_POST["Tipo_vehiculo"];
$Color = $_POST["Color"];
$Peso = $_POST["Peso"];
$Factura_id = $_POST["Factura_id"];
$Tarifas_id = $_POST["Tarifas_id"];


$sql = "INSERT INTO Vehiculo VALUES('$id','$Placa','$Marca_vehiculo','$Tipo_vehiculo','$Color','$Peso','$Factura_id','$Tarifas_id')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: Index.php");


}


?>