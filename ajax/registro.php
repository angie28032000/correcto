<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];



$sql="INSERT INTO usuario (login,email,clave)
		VALUES ('$username','$email','$clave')";

     $ejecutar = mysqli_query($conexion,$sql);
     
     header('Location: ../vistas/login.html');
    
     
?>