<?php 
session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /index.php');
  }
    require('conexion.php');
    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $pdo->prepare('SELECT id, usuario, password FROM usuarios WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php");
    } else {
      $message = 'los datos ingresados no son validos intente nuevamente';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/estilositio.css">
</head>
<body>
    <div class="container">
        <div class="card card-container">
             <!--<img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="login.php" class="form-signin" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="usuario" id="inputEmail" class="form-control" placeholder="Usuario"  required autofocus>
                <input type="password" name="password"  id="inputPassword" class="form-control" placeholder="Contraseña" required >
                <?php //esto de abajo hace aparecer el mensaje de contraseña incorrecta en rojo ?>
                <?php if(!empty($message)): ?>
                <?php echo "<span style=\"color: #FF0000\">$message</span>"; ?>
                <?php endif; ?>
<?php//esto de abajo  es la forma de hacer un alert es decir un mensaje de alerta ?>
                <?php //if(!empty($message)): ?>
                <?php //echo "<script>alert ('$message');</script>"; ?>
                <?php //endif; ?>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordar
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sesión</button>
                <span>o <a href="registrarse.php"> Registrate </a> </span>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                <br>
                ¿Olvidaste tu contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>