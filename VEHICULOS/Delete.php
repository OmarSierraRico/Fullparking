<?php
include("Conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM Vehiculo WHERE Placa = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }

?>