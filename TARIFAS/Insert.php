<?php

include("Conexion.php");
$con = conectar();

$id= $_POST["Tipo_vehiculo"];
$Tipo_vehiculo= $_POST["Tipo_vehiculo"];
$Convenios = $_POST["Convenios"];
$Minutos = $_POST["Minutos"];
$Hora = $_POST["Hora"];
$Dia = $_POST["Dia"];
$Noche = $_POST["Noche"];
$Semana = $_POST["Semana"];
$Mes = $_POST["Mes"];


$sql = "INSERT INTO Tarifas VALUES('$id','$Tipo_vehiculo','$Convenios','$Minutos','$Hora','$Dia','$Noche','$Semana','$Mes')";
$query = mysqli_query($con, $sql);

if($query){
Header("location: Index.php");


}


?>