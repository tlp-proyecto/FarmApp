<?PHP 
//conexion a la base de datos
        require('conexion.php');
    //include 'conexion.php';
?>

<?php 
    
$message= '';
$notificacion='';
//$estado = false;


//-----------verificarusuario/registrado-----------

if (!empty($_POST['email'])) {
    $usuario = $_POST['email']; //almaceno el usuario ingresado del formulario en la variable usuario
    //hago una consulta a la base de datos para buscar el usuario ingresado en la tabla de usuarios"user" si lo encuentra lo almacena en la variable $user
    $consulta = $pdo->query("select nombre_usuarios from usuarios where nombre_usuarios like '". $usuario ."'");
    $user =  $consulta->fetch(); //fetch :obtiene una fila es decir si se especificaba el select * from user almacenaba toda la fila de la base de datos con sus campos correspondientes es decir [id_user , descripcion_user , password_user]
                        //los indices de la fila quedarian    0              1               3  en este caso la consulta solo pide la descripcion es decir el usuario por ende el indice de la fila seria "0" y se almacena en la variable $user[0]

    //$veruser= $user[0];
    
    if (empty($user[0])){ //si $user[0] esta vacio es decir no encontro el usuario ingresado en la BD por ende se hara el insert para registrar al usuario...
             $sql = "INSERT INTO personas (nombre_persona, apellido_persona, dni_persona, fecha_nac_persona) VALUES (:nombre, :apellido, :dni, :fecha)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':nombre', $_POST['nombre_persona']);
                $stmt->bindParam(':apellido', $_POST['apellido_persona']);
                $stmt->bindParam(':dni', $_POST['dni_persona']);
                $stmt->bindParam(':fecha', $_POST['fecha_nac_persona']);
                $stmt->execute();
                $lastId = $pdo->lastInsertId(); //sentencia para recuperar el ultimo id insertado
               
            

            //una vez recuperado el ultimo id insertado en la tabla persona , hago el insert en la tabla user
            
                $sql = "INSERT INTO usuarios (nombre_usuarios, password_usuarios, id_personas) VALUES (:usuario, :password , :id_persona)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':usuario', $_POST['email']);
                $stmt->bindParam(':id_persona', $lastId);
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $stmt->bindParam(':password', $password);

            

                if ($stmt->execute()) {
                $message = 'Se registro satisfactoriamente para continuar inicie sesion';
                echo "<script>alert ('$message');</script>";
                echo" <script> location.replace('../index.php'); </script> ";
                } else {
                $message = 'perdon ha ocurrido un error';
                }


                //lastInsertId es una funcion para recuperar el ultimo ID insertado en la tabla Persona
                //:usuario y :password son variables en donde puedo almacenar
                //email y password son los nombres de los campos en donde el usuario se registra

    }else{
        $notificacion='usted ya posee una cuenta registrada con el usuario ingresado por favor inicie sesión';
        echo "<script>alert ('$notificacion');</script>";
        echo" <script> location.replace('login.php'); </script> ";   
    }
}


 ?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instituto Politécnico Formosa</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    />
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/login/styles.css" />
  </head>

  <body>
    <div class="ui middle aligned center aligned grid">
      <div class="column">
        <h1 class="ui center aligned icon green header">
          <i class="circular green plus icon"></i>
          FarmApp
        </h1>

        <form action="registrarse.php" method="POST" class="ui large form">
          <div class="ui stacked segment">

            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese su nombre</small>
              <div class="ui left icon input">
                <input type="text" name="nombre_persona" placeholder="nombre" required="" />
              </div>
            </div>

            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese su apellido</small>
              <div class="ui left icon input">
                <input type="text" name="apellido_persona" placeholder="apellido"/>
              </div>
            </div>


            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese su DNI</small>
              <div class="ui left icon input">
                <input type="text" name="dni_persona" placeholder="dni"/>
              </div>
            </div>


            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese su fecha de nacimiento</small>
              <div class="ui left icon input">
                <input type="date" name="fecha_nac_persona" placeholder=""/>
              </div>
            </div>


            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese su correo electronico</small>
              <div class="ui left icon input">
                <i class="user green icon"></i>
                <input type="text" id="email" name="email" placeholder="ejemplo@email.com"/>
              </div>
            </div>


            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese una contraseña</small>
              <div class="ui left icon input">
                <input type="password" name="password" placeholder="contraseña"/>
              </div>
            </div>

            
            <button class="ui fluid large green submit button registered-only">
              Registrarme
            </button>
          </div>
        </form>
       
        <div class="ui message">
          Si ya estas registrado <a href="login.php">Inicia Sesión</a>
        </div>
      </div>
    </div>

    
    <script src="valirarLogin.js"></script>
    <script>
      $(".registered-only").popup({
        title: "Atención:",
        content:
          "Esta funcionalidad sólo está disponible para usuarios registrados",
      });
      function ocultar(){
        $('#alert .message').hide();
      }
    </script>
  </body>
</html>
