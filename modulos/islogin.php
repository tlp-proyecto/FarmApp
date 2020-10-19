<?php 
session_start();

$estadosession = false;
 
if (isset($_SESSION['usuario'])) {
	$estadosession = true;
}


 ?>