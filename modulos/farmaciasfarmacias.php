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
    $consulta = "SELECT `id_farmacias`, `nombre`, `link_direccion`, `calle`, `altura`, `horario_matutino_1`, `horario_matutino_2`, `horario_vespertino_1`, `horario_vespertino_2` FROM `farmacias` JOIN `farmacias_usuarios` WHERE farmacias.id_farmacias = farmacias_usuarios.rela_farmacias AND farmacias_usuarios.rela_usuarios = ".$_SESSION['user_id'];
    $sql = $pdo->query($consulta);
    $sql2 = $sql->fetchAll(PDO::FETCH_OBJ);
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
                <div class="column">
                    <!--\\ TABLA DE FARMACIAS \\  -->
                    <div class="ui vertical stripe segment">
                        <div class="ui middle aligned stackable grid container">
                            <div class="left aligned column">
                                <a class="big ui compact labeled icon green button" href="agregarfarmacias.php">
                                    <i class="plus icon"></i>
                                    Agregar
                                </a>
                            </div>
                            <div class="row">
                                <table class="ui sortable celled padded table">
                                    <thead>
                                        <tr>
                                            <th class="single line">#</th>
                                            <th class="single line">Farmacias</th>
                                            <th>Estado del día</th>
                                            <th>Ubicación en el mapa</th>
                                            <th>Dirección</th>
                                            <th>Horario</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($sql2 as $mostrar) { ?>
                                            <tr>
                                                <td>
                                                    <h5 class="ui center aligned header"><?php echo $mostrar->id_farmacias ?></h5>
                                                </td>
                                                <td>
                                                    <h3 class="ui center aligned header"><?php echo $mostrar->nombre ?></h3>
                                                </td>
                                                <?php

                                                if (($mostrar->horario_matutino_1 === $mostrar->horario_vespertino_2 && $mostrar->horario_matutino_2 === $mostrar->horario_vespertino_1) ) {
                                                    echo '<td>
                                                            <h5><i class="plus green icon"></i>De Turno</h5>
                                            
                                                          </td>';
                                                } else {
                                                    echo '<td class="single line warning">
                                                             <h5><i class="attention red icon"></i>Fuera de Turno</h5>
                                                         </td>';
                                                }
                                                ?>

                                                <td class="ui center aligned">
                                                    <iframe src="<?php echo $mostrar->link_direccion ?>" width="200" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                </td>
                                                <td>
                                                    <h5 class="ui center aligned header"><?php echo $mostrar->calle ?> <?php echo $mostrar->altura ?></h5>
                                                </td>
                                                <td>
                                                    <h5>
                                                        Lunes-Viernes <br />
                                                        <?php echo $mostrar->horario_matutino_1 ?>-<?php echo $mostrar->horario_matutino_2 ?>
                                                        <br>
                                                        <?php echo $mostrar->horario_vespertino_1 ?>-<?php echo $mostrar->horario_vespertino_2 ?>
                                                    </h5>
                                                </td>
                                                <td class="center aligned">
                                                    <div class="ui large buttons">
                                                        <a class="ui button green" href="editarfarmacia.php?id=<?php echo $mostrar->id_farmacias ?>"><i class="edit icon"></i></a>
                                                        <div class="or" data-text="o"></div>
                                                        <a class="ui button red" href="eliminarfarmacia.php?id=<?php echo $mostrar->id_farmacias ?>"><i class="trash icon"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7">
                                                <div class="ui right floated pagination menu">
                                                    <a class="icon item">
                                                        <i class="left arrow green fade icon"></i>
                                                    </a>
                                                    <a class="item">1</a>
                                                    <a class="item">2</a>
                                                    <a class="item">3</a>
                                                    <a class="icon item">
                                                        <i class="right arrow green fade icon"></i>
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--// FIN DE TABLA DE FARMACIAS //  -->
                </div>
            </div>
            <!-- Footer 
            <?php include './includes/pages/footer.php' ?>
            -->
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
    </script>
</body>

</html>