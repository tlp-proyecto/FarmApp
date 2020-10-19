<?php 
	//conexion a la base de datos
        require('conexion.php');
        session_start();
       		$usuario= $_SESSION['usuario'];
       		if ($usuario=='vieracarlos10@gmail.com' or $usuario=='vieraatilio2017@gmail.com' or $usuario=='juandavid9a0@gmail.com') {
       			 header("Location:inicioadmin.php");
       		} else {
       			 header("Location:iniciocliente.php");
   			}
    //include 'conexion.php';

 ?>