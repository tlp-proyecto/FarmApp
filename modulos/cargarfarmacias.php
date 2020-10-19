<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <!-- Site Properties -->
  <title>farmapp</title>
  <!-- CCS Properties -->
  <link rel="stylesheet" href="../css/home/home.css" />
  <!-- JS Properties -->
  <script src="../js/home/home.js"></script>
</head>

<body>

  <?php
  //conexion a la base de datos
  require('conexion.php');
  session_start();

  //include 'conexion.php';
  ?>

  <!-- Following Menu -->
  <div class="ui large top fixed hidden menu">
    <div class="ui container">
      <a class="active item">Home</a>
      <a class="item">Work</a>
      <a class="item">Company</a>
      <a class="item" href="modulos/login.html">Careers</a>
      <div class="right menu">
        <div class="item">
          <a class="ui primary button">Sign Up</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <div class="ui sidebar vertical inverted menu">
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <a class="item">Signup</a>
  </div>
  <!-- Page Contents -->
  <div class="pusher">
    <div class="ui inverted vertical center aligned segment">
      <div class="ui container">
        <div class="ui large secondary inverted pointing menu">
          <a class="toc item">
            <i class="sidebar icon"></i>
          </a>
          <a class="active item" href="inicioadmin.php">Home</a>
          <a class="item">Work</a>
          <a class="item">Company</a>
          <a class="item">Careers</a>

          <div class="right item">
            <a class="ui inverted button" href="cerrarsesion.php">Salir</a>
          </div>

        </div>
      </div>

      <?php
      $usuario = $_SESSION['usuario'];
      if (!empty($usuario)) {
        echo '<div class="single line positive"><i class="plus green icon"></i>' . $usuario . '</div>';;
      }
      ?>
      <div>
        <h2 class="ui center aligned icon green header">
          <i class="circular green plus icon"></i>
          FarmApp
        </h2>
      </div>
    </div>
    <br>
    <div class="ui middle aligned center aligned grid">
      <div class="col-md-6">
        <form action="registrarse.php" method="POST" class="ui large form">
          <div class="ui stacked segment">

            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese el nombre de la farmacia</small>
              <div class="ui left icon input">
                <input type="text" name="nombre_farmacia" placeholder="nombre" required="" />
              </div>
            </div>

            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese la dirección</small>
              <div class="ui left icon input">
                <input type="text" name="direccion_farmacia" placeholder="dirección" />
              </div>
            </div>


            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese el cuit</small>
              <div class="ui left icon input">
                <input type="text" name="cuit_farmacia" placeholder="cuit" />
              </div>
            </div>


            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese el correo electronico</small>
              <div class="ui left icon input">
                <i class="user green icon"></i>
                <input type="text" id="email" name="email" placeholder="ejemplo@email.com" />
              </div>
            </div>

            <div class="field">
              <small id="form-group" class="form-text text-muted">Ingrese el numero de telefono</small>
              <div class="ui left icon input">
                <input type="text" name="telefono_farmacia" placeholder="telefono" />
              </div>
            </div>
            <button class="ui fluid large green submit button registered-only">
              Registrar Farmacia
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>

</html>