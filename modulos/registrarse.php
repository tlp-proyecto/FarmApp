<?php 
	require('conexion.php');
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilositio.css">

</head>
<body>
	<?php 
    
$message= '';

 if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Se registro satisfactoriamente para continuar inicie sesion';
    } else {
      $message = 'perdon ha ocurrido un error';
    }
 }
 ?>


	
	<header>
    <div  class="container">
     
    </div>
    </header>
	<div class="container">
        <div class="card card-container">
        	<h1>Registrate</h1>
        	<span>o <a href="login.php"> Iniciar Sesión </a> </span>
	<form action="registrarse.php" method="post">
		 <br>
		 <input type="email" name="usuario" id="inputEmail" class="form-control" placeholder="ingresa tu mail" required autofocus>
		 <br>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="ingresa una contraseña" required>
		 <br>
          <input type="password" name="confirmarpassword" id="inputPassword2" class="form-control" placeholder="confirmar contraseña" required autofocus>
         <br>
          <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Registrarme</button>
          <br>
          <?php if(!empty($message)): ?>
                <?php 
                echo "<script>alert ('$message');</script>";
                 ?>
                 <a href="login.php" class="btn btn-success">INICIAR SESIÓN</a>
                <?php endif; ?>


	</form>
</body>
</html>