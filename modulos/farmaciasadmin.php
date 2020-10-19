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
    $consulta = 'SELECT id_farmacias, nombre, link_direccion, nombre_calle_direccion, horario_farmacia FROM farmacias,direccion WHERE farmacias.id_farmacias=direccion.rela_farmacias';
    $sql = $pdo->query($consulta);
    $sql2 = $sql->fetchAll(PDO::FETCH_OBJ);
    ?>
    <!-- Sidebar Menu -->
    <div class="ui sidebar inverted vertical menu sidebar-menu" id="sidebar">
        <div class="item">
            <div class="header">General</div>
            <div class="menu">
                <a class="item">
                    <div>
                        <i class="icon tachometer alternate"></i>
                        Dashboard
                    </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="header">Administración</div>
            <div class="menu">
                <a class="item">
                    <div><i class="cogs icon"></i>Configuraciones</div>
                </a>
                <a class="item">
                    <div><i class="users icon"></i>Equipo de desarrollo</div>
                </a>
            </div>
        </div>

        <a href="inicioadmin.php" class="item">
            <div>
                <i class="icon home blue"></i>
                Inicio
            </div>
        </a>

        <a href="farmaciasadmin.php" class="item active">
            <div>
                <i class="icon plus green"></i>
                Farmacias
            </div>
        </a>

        <a href="productosadmin.php" class="item">
            <div>
                <i class="icon shopping cart red"></i>
                Productos
            </div>
        </a>

        <a class="item">
            <div>
                <i class="icon lightbulb teal"></i>
                Farmacias
            </div>
        </a>
        <div class="item">
            <div class="header">Otros</div>
            <div class="menu">
                <a href="#" class="item">
                    <div>
                        <i class="icon envelope"></i>
                        Mensajes
                    </div>
                </a>

                <a href="#" class="item">
                    <div>
                        <i class="icon calendar alternate"></i>
                        Calendarios de Turnos
                    </div>
                </a>
            </div>
        </div>

        <div class="item">
            <form action="#">
                <div class="ui mini action input">
                    <input type="text" placeholder="Buscar..." />
                    <button class="ui mini icon button">
                        <i class="search icon"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="ui segment inverted">
            <div class="ui tiny olive inverted progress">
                <div class="bar" style="width: 30%"></div>
                <div class="label">Monthly Bandwidth</div>
            </div>

            <div class="ui tiny teal inverted progress">
                <div class="bar" style="width: 78%"></div>
                <div class="label">Disk Usage</div>
            </div>
        </div>
    </div>

    <!-- sidebar -->
    <!-- top nav -->

    <nav class="ui top fixed inverted menu">
        <div class="left menu">
            <a href="#" class="sidebar-menu-toggler item" data-target="#sidebar">
                <i class="sidebar icon"></i>
            </a>
            <a href="#" class="header item">FarmApp </a>
        </div>

        <div class="right menu">
            <a href="#" class="item">
                <i class="bell icon"></i>
            </a>
            <div class="ui dropdown item">
                <i class="user cirlce icon"></i>
                <div class="menu">
                    <a href="#" class="item">
                        <?php
                        $usuario = $_SESSION['usuario'];
                        if (!empty($usuario)) {
                            echo '<div class="single line positive"><i class="plus green icon"></i>' . $usuario . '</div>';;
                        }
                        ?>
                        <!-- <i class="info circle icon"></i> Profile</a> -->
                        <a href="#" class="item">
                            <i class="wrench icon"></i>
                            Settings</a>
                        <a href="cerrarsesion.php" class="item">
                            <i class="sign-out icon"></i>
                            Salir
                        </a>
                </div>
            </div>
        </div>
    </nav>

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
                                                <td class="single line warning">
                                                    <h5>
                                                        <i class="attention red icon"></i>Fuera de Turno
                                                    </h5>
                                                </td>
                                                <td class="ui center aligned">
                                                    <iframe src="<?php echo $mostrar->link_direccion ?>" width="200" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                </td>
                                                <td>
                                                    <h5 class="ui center aligned header"><?php echo $mostrar->nombre_calle_direccion ?></h5>
                                                </td>
                                                <td>
                                                    <h5 class="ui green">
                                                        Lunes-Viernes <br />
                                                        <?php echo $mostrar->horario_farmacia ?>
                                                    </h5>
                                                </td>
                                                <td class="center aligned">
                                                    <div class="ui large buttons">
                                                        <a class="ui button green" href="editarfarmacia.php"><i class="edit icon"></i></a>
                                                        <div class="or" data-text="o"></div>
                                                        <a class="ui button red"><i class="trash icon"></i></a>
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
            <!-- Footer -->
            <div class="ui inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui stackable inverted divided equal height stackable grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">About</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Sitemap</a>
                                <a href="#" class="item">Contact Us</a>
                                <a href="#" class="item">Religious Ceremonies</a>
                                <a href="#" class="item">Gazebo Plans</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Services</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Banana Pre-Order</a>
                                <a href="#" class="item">DNA FAQ</a>
                                <a href="#" class="item">How To Access</a>
                                <a href="#" class="item">Favorite X-Men</a>
                            </div>
                        </div>
                        <div class="seven wide column">
                            <h4 class="ui inverted header">Footer Header</h4>
                            <p>
                                Extra space for a call to action inside the footer that could
                                help re-engage users.
                            </p>
                        </div>
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
    </script>
</body>

</html>