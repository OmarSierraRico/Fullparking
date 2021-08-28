<?php

include("Conexion.php");
$con = conectar();

$id = $_POST['Tipo_vehiculo'];
$Convenios = $_POST['Convenios'];
$Minutos = $_POST['Minutos'];
$Hora = $_POST['Hora'];
$Dia = $_POST['Dia'];
$Noche = $_POST['Noche'];
$Semana = $_POST['Semana'];
$Mes = $_POST['Mes'];

$sql = "UPDATE Tarifas SET Convenios = '$Convenios',Minutos = '$Minutos',Hora = '$Hora',Dia = '$Dia',Noche = '$Noche', Semana = '$Semana', Mes = '$Mes', WHERE Tipo_vehiculo = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }


?>