<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FarmApp</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body>
    <?php
    //conexion a la base de datos
    require('conexion.php');
    session_start();

    //include 'conexion.php';
    $id = $_GET["id"];
    $consul = $pdo->prepare("SELECT `id_farmacias`, `nombre`, `link_direccion`, `calle`, `altura`, `horario_matutino_1`, `horario_matutino_2`, `horario_vespertino_1`, `horario_vespertino_2`, `status` FROM `farmacias` where `id_farmacias` = ?");
    $consul->execute([$id]);
    $pharm = $consul->fetch(PDO::FETCH_OBJ);
    ?>
    <!-- Sidebar Menu -->
    <?php include './includes/pages/sidebarmenu.php' ?>
    <!-- sidebar -->
    <!-- top nav -->
    <?php include './includes/pages/topnav.php' ?>

    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <div class="ui inverted segment">
                        <h2 class="ui green inverted center aligned icon header">
                            <i class="circular plus icon green"></i>
                            FarmApp
                        </h2>
                    </div>
                </div>
            </div>
            <div class="ui grid stackable padded">
                <div class="ui two column centered grid">
                    <div class="column">
                        <div class="ui inverted segment">
                            <h2 class="ui green inverted header">
                                Editar Farmacia
                            </h2>
                        </div>
                    </div>
                    <div class="column">
                        <form action="validareditarfarmacia.php?id=<?php echo $pharm->id_farmacias ?>" method="POST" class="ui form">
                            <div class="ui inverted segment">
                                <div class="ui inverted form">
                                    <div class="field">
                                        <label>Farmacia</label>
                                        <div class="fields">
                                            <div class="four wide field">
                                                <input name="id_farmacias" type="text" placeholder="#" value="<?php echo $pharm->id_farmacias ?>" disabled>
                                            </div>
                                            <div class="twelve wide field">
                                                <input name="nombre" placeholder="Farmacia" type="text" value="<?php echo $pharm->nombre ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="link_direccion">Ubicacion en el mapa</label>
                                        <textarea name="link_direccion" id="link_direccion"><?php echo $pharm->link_direccion ?></textarea>
                                    </div>
                                    <div class="field">
                                        <div class="fields">
                                            <div class="twelve wide field">
                                                <label>Dirección</label>
                                                <input name="nombre_calle_direccion" placeholder="Dirección" type="text" value="<?php echo $pharm->calle ?>">
                                            </div>
                                            <div class="four wide field">
                                                <label>Altura</label>
                                                <input name="altura" type="number" placeholder="#" value="<?php echo $pharm->altura ?>" min="0" max="99999">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Horario Matutino</label>
                                        <div class="two fields">
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="horario_matutino_1" id="horario_matutino_1">
                                                    <option value="<?php echo $pharm->horario_matutino_1 ?>"></option>
                                                    <option value="00:00hs">00:00hs</option>
                                                    <option value="05:00hs">05:00hs</option>
                                                    <option value="05:30hs">05:30hs</option>
                                                    <option value="06:00hs">06:00hs</option>
                                                    <option value="06:30hs">06:30hs</option>
                                                    <option value="07:00hs">07:00hs</option>
                                                    <option value="07:30hs">07:30hs</option>
                                                    <option value="08:00hs">08:00hs</option>
                                                    <option value="08:30hs">08:30hs</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="horario_matutino_2" id="horario_matutino_2">
                                                    <option value="<?php echo $pharm->horario_matutino_2 ?>"></option>
                                                    <option value="12:00hs">12:00hs</option>
                                                    <option value="12:30hs">12:30hs</option>
                                                    <option value="13:00hs">13:00hs</option>
                                                    <option value="13:30hs">13:30hs</option>
                                                    <option value="14:00hs">14:00hs</option>
                                                    <option value="14:30hs">14:30hs</option>
                                                    <option value="15:00hs">15:00hs</option>
                                                    <option value="15:30hs">15:30hs</option>
                                                    <option value="16:00hs">16:00hs</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Horario Vespertino</label>
                                        <div class="two fields">
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="horario_vespertino_1" id="horario_vespertino_1 ">
                                                    <option value="<?php echo $pharm->horario_vespertino_1 ?>"></option>
                                                    <option value="12:00hs">12:00hs</option>
                                                    <option value="12:30hs">12:30hs</option>
                                                    <option value="13:00hs">13:00hs</option>
                                                    <option value="13:30hs">13:30hs</option>
                                                    <option value="14:00hs">14:00hs</option>
                                                    <option value="14:30hs">14:30hs</option>
                                                    <option value="15:00hs">15:00hs</option>
                                                    <option value="15:30hs">15:30hs</option>
                                                    <option value="16:00hs">16:00hs</option>
                                                    <option value="16:30hs">16:30hs</option>
                                                    <option value="17:00hs">17:00hs</option>
                                                    <option value="17:30hs">17:30hs</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="horario_vespertino_2" id="horario_vespertino_2">
                                                    <option value="<?php echo $pharm->horario_vespertino_2 ?>"></option>
                                                    <option value="20:00hs">20:00hs</option>
                                                    <option value="20:30hs">20:30hs</option>
                                                    <option value="21:00hs">21:00hs</option>
                                                    <option value="21:30hs">21:30hs</option>
                                                    <option value="22:00hs">22:00hs</option>
                                                    <option value="22:30hs">22:30hs</option>
                                                    <option value="23:00hs">23:00hs</option>
                                                    <option value="23:30hs">23:30hs</option>
                                                    <option value="00:00hs">00:00hs</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Estado Del Día</label>
                                        <select class="ui fluid search dropdown" name="status">
                                            <option value="activar" <?php if ($pharm->status === "de turno") {
                                                                        echo "selected";
                                                                    } ?>>Activar</option>
                                            <option value="desactivar" <?php if ($pharm->status === "fuera de turno") {
                                                                            echo "selected";
                                                                        } ?>>Desactivar</option>
                                        </select>
                                    </div>
                                    <div class="field">
                                        <label>Nombre de Usuario</label>
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="usuarios">
                                                <option value="id_de_las_personas" <?php if ($pharm->status === "de turno") {
                                                                                        echo "selected";
                                                                                    } ?>>Nombre de usuario</option><!-- Nombre de usuario -->
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" name="editar" class="ui submit green button">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="four column centered row">
                        <div class="column"></div>
                        <div class="column"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.ui.dropdown').dropdown();
            $('.sidebar-menu-toggler').on('click', function() {
                var target = $(this).data('target');
                $(target)
                    .sidebar({
                        dinPage: true,
                        transition: 'overlay',
                        mobileTransition: 'overlay'
                    })
                    .sidebar('toggle');
            });
        });
        $('.ui.checkbox')
            .checkbox();
    </script>
</body>

</html>