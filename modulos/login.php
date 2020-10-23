<?php 

session_start();

// la funcion isset pregunta si la variable indicada tiene contenido o no , devuelve un valor true es decir si variable tiene contenido ejecuta la linea siguiente 

    require('conexion.php');
   
    //------------comprobacion de usuario y contraseña
    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $pdo->prepare('SELECT id_usuarios, nombre_usuarios, password_usuarios FROM usuarios WHERE nombre_usuarios = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    $msgusuario='';
    $msgpassword='';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password_usuarios'])) {
      $_SESSION['user_id'] = $results['id_usuarios'];
      header("Location:verificaruser.php");
    } else {
      $message = 'Datos no validos :';

    }
    //-----------------------comprobacion de usuario solo , si esta registrado----------------------------------
    $usuario = $_POST['usuario']; //almaceno el usuario ingresado del formulario en la variable usuario
    //hago una consulta a la base de datos para buscar el usuario ingresado en la tabla de usuarios"user" si lo encuentra lo almacena en la variable $user
    $consulta = $pdo->query("select nombre_usuarios from usuarios where nombre_usuarios like '". $usuario ."'");
    $user =  $consulta->fetch(); //fetch :obtiene una fila es decir si se especificaba el select * from user almacenaba toda la fila de la base de datos con sus campos correspondientes es decir [id_user , descripcion_user , password_user]
                        //los indices de la fila quedarian    0              1               3  en este caso la consulta solo pide la descripcion es decir el usuario por ende el indice de la fila seria "0" y se almacena en la variable $user[0]
    
        //echo $user[0];
        if (empty($user[0])) { //pregunto si la variable $user esta vacia es decir no encontro el usuario en la BD...
        //echo 'el usuario ingresado es incorrecto';
        $msgusuario = ' usuario incorrecto';
        }else{
        //echo 'la contraseña ingresada es incorrecta';
        $msgpassword = ' contraseña incorrecta';
        }
        //-----------------guardo el usuario de la base de datos en una variable de sesion  $_SESSION['usuario']
        //-----------------tambien se guardo el id del usuario en la variable de sesion $_SESSION['user_id']
        $_SESSION['usuario']=$user[0];
    
    }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Farmapp</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />

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
        <form action="login.php" class="ui large form" method="POST">
          <div class="ui stacked segment">
            <div class="field">
              <div class="ui left icon input">
                <i class="user green icon"></i>
                <input type="email" id="email" name="usuario" placeholder="usuario" required="" />
              </div>
            </div>

            <div class="field">
              <div class="ui left icon input">
                <input type="password" id="password" name="password" placeholder="contraseña" required="" />
              </div>
            </div>
           
            <?php
                    //esto de abajo  es la forma de hacer un mensaje de alerta mas abajo se especifican los tipos de mensaje 
                        if(!empty($message) && !empty($msgusuario)) {
                            echo '<div class="single line warning"><i class="attention red icon"></i>'.$message.$msgusuario.'</div>'; 
                        } 
                        ?>
                
                        <?php
                        if(!empty($message) && !empty($msgpassword)) {
                            echo '<div class="single line warning"><i class="attention red icon"></i>'.$message.$msgpassword.'</div>'; 
                        } 
                        ?>

                         <?php 
                         /*
                            alert comun:
                            <?php //echo "<script>alert ('$message');</script>"; ?>
                            tipos de mensajes de alerta:
                            echo '<div class="alert alert-success">'.$msgusuario.'</div>'; 
                            echo '<div class="alert alert-info">'.$msgusuario.'</div>'; 
                            echo '<div class="alert alert-warning">'.$msgusuario.'</div>'; 
                            echo '<div class="alert alert-danger">'.$msgusuario.'</div>'; 
                       
                         */
                        ?>
            <button class="ui fluid large green submit button registered-only">
              Ingresar
            </button>
          </div>
        </form>
        <!-- Mensaje de Alerta-->
        <div id="alert"></div>
        <div class="ui message">
          ¿Aún no estás Registrado? <a href="registrarse.php">Registrate</a>
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
