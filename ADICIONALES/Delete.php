<?php
include("Conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM Adicionales WHERE Placa_vehiculo = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }

?>