<?php 


$scon = "mysql:dbname=farmapp;host=localhost";
				$suser ='root';
				$spass = 'hola123';
				$msg='';

				$_SESSION["bd"]="farmapp";

				try {
					$pdo = new PDO("mysql:dbname=farmapp;host=localhost",$suser,$spass,array(PDO::ATTR_PERSISTENT => true,
																		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$msg='conexion_ok'; 
					echo "conectado correctamente". "<br>"; 
				} catch (PDOException $e) {
					$msg='conexion_cancel: '.$e->getMessage();
					//echo "Error al conectar a la base de datos. ".$e->getMessage();	
					echo "Error de conexion". "<br>";
				}
				
 ?>

