<?php
  session_start();//mantiene la sesion abierta del usuario

  session_unset();//libera o destruye todas las variables de session 

  session_destroy(); //destruye o termina cualquier sesion de usuario y su informacion

  header('Location:../index.php');
?>
