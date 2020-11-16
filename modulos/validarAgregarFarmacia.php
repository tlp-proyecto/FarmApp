<?php
// está planteado pero para nada está resuelto. tener una idea y terminar del todo
require('conexion.php');
session_start();

if (isset($_POST['agregar'])) {
    $id_farmacias = $_POST["id_farmacias"];
    $nombre = $_POST["nombre"];
    $link_direccion = $_POST["link_direccion"];
    $calle = $_POST["calle"];
    $altura = $_POST["altura"];
    $horario_matutino_1 = $_POST["horario_matutino_1"];
    $horario_matutino_2 = $_POST["horario_matutino_2"];
    $horario_vespertino_1 = $_POST["horario_vespertino_1"];
    $horario_vespertino_2 = $_POST["horario_vespertino_2"];
    $status = $_POST["status"];

    //  vamos a validar que no hayan usuarios repetidaos.
    $sql_validar = ("SELECT COUNT(*) FROM farmacias WHERE nombre = :nombre AND link_direccion = :link_direccion");
    $sentenciaValidar = $pdo->prepare($sql_validar);
    //pasamos los parámetros definidos para ejecutar nuestra sentencia.
    $sentenciaValidar->execute(array(":nombre" => $nombre, ":link_direccion" => $link_direccion));

    if (empty($nombre)) {
        die('Ingrese una farmacia...');
    }

    if (strlen($nombre) > 40) {
        die('El Nombre del la farmacia no debe superar los 40 Caracteres.');
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)) {
        die('Solo letras y espacios en blanco');
    }

    // check if URL address syntax is valid (this regular expression also allows dashes in the URL) Validación sacada de W3school
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $link_direccion)) {
        die('La URL ingresada no es válida!...');
    }

    //Validación de Horario
    if ((trim($horario_matutino_1) == "") && (trim($horario_matutino_2) == "")) {
        die('Ingrese un horario matutino válido');
    }

    if (empty($horario_vespertino_1) || (empty($horario_vespertino_1))){
        die('Ingrese un horario vespertino válido');
    }

    if ($sentenciaValidar->fetchColumn() > 0) {
        // Primero se consulta y, si se encuentra regitrada la farmacia, se imprime el mesaje:
        echo 'La farmacia ya ha sido registrada anteriormente...';
    } else {
        $sql_agregar = $pdo->prepare("INSERT INTO `farmacias`(`id_farmacias`, `nombre`, `link_direccion`, `calle`, `altura`, `horario_matutino_1`, `horario_matutino_2`, `horario_vespertino_1`, `horario_vespertino_2`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $sql_agregar->execute([$id_farmacias, $nombre, $link_direccion, $calle, $altura, $horario_matutino_1, $horario_matutino_2, $horario_vespertino_1, $horario_vespertino_2, $status]);

        if ($sql_agregar->rowCount() == 1) {
            die('Farmacia agreada con éxito...');
        } else {
            die('ERROR al registrar la farmacia...');
        }
    }
} else {
    die('Por favor, ingrese los datos de una farmacia');
}
