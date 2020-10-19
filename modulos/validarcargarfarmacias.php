<?php
include '../inc/conexion.php';
session_start();

$mensaje = '';

if (isset($_POST['agregar'])) {
    $ape_y_nom = $_POST["apellido_y_nombre"];
    $cuil = $_POST["cuil"];
    $domicilio = $_POST["domicilio"];
    $localidad = $_POST["localidad"];
    $edad = $_POST["edad"];
    $rango = $_POST["rango"];

    // Queremos validar el hecho de si ya se encuentra registrado el usuario:
    // guardamos la sentencia en una variable
    $validar = ("SELECT COUNT(*) FROM personas WHERE NOMBRE_APELLIDO = :apellido_y_nombre AND CUIL = :cuil AND DOMICILIO = :domicilio AND LOCALIDAD = :localidad AND EDAD = :edad AND RANGO_PERSONA = :rango");
    // pasamos la sentencia a PDO
    $sentencia1 = $conexion->prepare($validar);
    // pasamos ejecutamos la sentencia 
    $sentencia1->execute(array(
        ":apellido_y_nombre" => $ape_y_nom,
        ":cuil" => $cuil,
        ":domicilio" => $domicilio,
        ":localidad" => $localidad,
        ":edad" => $edad,
        ":rango" => $rango
    ));

    if (empty($ape_y_nom)) {
        echo 'Ingrese un apellido y nombre';
    } else if (empty($cuil)) {
        echo 'Ingrese un CUIL';
    } else if (empty($domicilio)) {
        echo 'Ingrese un domicilio';
    } else if (empty($localidad)) {
        echo 'Ingrese una localidad';
    } else if (empty($edad)) {
        echo 'Ingrese una edad';
    } else {
        if ($sentencia1->fetchColumn() > 0) {       //mayor que 0 porque en esa posición está el ID
            echo 'El usuario ya se encuenta registrado...'; // Si ya se encuentra registrado imprimir el siguiente mensaje.
        } else {
            $sql1 = $conexion->prepare("INSERT INTO personas(NOMBRE_APELLIDO, CUIL, DOMICILIO, LOCALIDAD, EDAD, RANGO_PERSONA)
                                         VALUES (:apellido_y_nombre,:cuil,:domicilio,:localidad,:edad,:rango)");
            $sql1->execute(array(
                ":apellido_y_nombre" => $ape_y_nom,
                ":cuil" => $cuil,
                ":domicilio" => $domicilio,
                ":localidad" => $localidad,
                ":edad" => $edad,
                ":rango" => $rango
            ));


            if ($sql1->rowCount() == 1) {
                echo 'Todo OK';
            } else {
                echo 'ERROR';
            }
        }
    }
} else {
    echo 'vacío';
}