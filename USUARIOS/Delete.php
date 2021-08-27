<?php
include("Conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM Usuarios WHERE Nombres = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: Index.php");
    
    
    }

?>