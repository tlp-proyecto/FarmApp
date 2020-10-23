<?php
require('conexion.php');
session_start();

$id = $_GET["id"];
if (isset($_POST['editar'])) {
    $emailActual = $_POST["emailActual"];
    $email = $_POST["email"];
    $passwordActual = $_POST["contraseniaActual"];
    $password = $_POST["contrasenia"];
    $password2 = $_POST["contrasenia2"];
    $contraDB = md5($password);

    //  vamos a validar que hayan contraseña de usuarios correcta.
    $sql_validar = ("SELECT COUNT(*) FROM usuarios_personas WHERE EMAIL= :email AND PASSWORD = :passwordActual");
    $sentenciaValidar = $conexion->prepare($sql_validar);
    //pasamos los parámetros definidos para ejecutar nuestra sentencia.
    $sentenciaValidar->execute(array(":email" => $emailActual, ":passwordActual" => $passwordActual));

    if ($sentenciaValidar->fetchColumn() == 0) {
        // cuando no se encuentra el usuario y contraseña correspondiente
        die('El usuario y/o contraseña no sido registrado anteriormente...');
    }

    if (empty($email)) {
        die('Ingrese un correo');
    } 
    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/", $email)) {
        die('El EMAIL es incorrecto.');
    }

    if (!empty($password) || !empty($password2)) {
        if ($password2 !== $password) {            
           die('Repita la contraseña');
        }
        $sql1 = $conexion->prepare("UPDATE usuarios_personas SET EMAIL = ? , PASSWORD = ? WHERE ID_PERSONA = ?");
        $contador = $sql1->execute([$email, $contraDB, $id]);
    } else {
        $sql1 = $conexion->prepare("UPDATE usuarios_personas SET EMAIL = ? WHERE ID_PERSONA = ?");
        $contador = $sql1->execute([$email, $id]);
    }
    
    if ($contador === TRUE) {
        echo 'Usuario Actualizado';
    } else {
        echo 'ERROR';
    }
} else {
    echo 'Es vacío';
}