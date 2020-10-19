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
                <div class="ui two column centered grid">
                    <div class="column">
                        <div class="ui inverted segment">
                            <h2 class="ui green inverted header">
                                Editar Farmacia
                            </h2>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui inverted segment">
                            <div class="ui inverted form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Farmacia</label>
                                        <input placeholder="Farmacia" type="text">
                                    </div>
                                    <div class="field">
                                        <label>Dirección</label>
                                        <input placeholder="Dirección" type="text">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Ubicacion en el mapa</label>
                                    <textarea placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.4491243093175!2d-58.17769638531427!3d-26.182064469431456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e512cf841d%3A0xb4fad74281163a5f!2sFarmacia%20Ferreyra!5e0!3m2!1ses-419!2sar!4v1603064894659!5m2!1ses-419!2sar"></textarea>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>Horario Matutino</label>
                                        <div class="two fields">
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="card[expire-month]">
                                                    <option value="">08:00hs</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="card[expire-month]">
                                                    <option value="">12:00hs</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eight wide field">
                                        <label>Horario Vespertino</label>
                                        <div class="two fields">
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="card[expire-month]">
                                                    <option value="">16:00hs</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <select class="ui fluid search dropdown" name="card[expire-month]">
                                                    <option value="">20:00hs</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Horario de turnos</label>
                                    <div class="two fields">
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="card[expire-month]">
                                                <option value="">08:00hs</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="card[expire-month]">
                                                <option value="">12:00hs</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="inline field">
                                    <div class="ui checkbox">
                                        <input type="checkbox" tabindex="0" class="">
                                        <label>I agree to the terms and conditions</label>
                                    </div>
                                </div>
                                <div class="ui submit button">Submit</div>
                            </div>
                        </div>
                    </div>
                    <div class="four column centered row">
                        <div class="column"></div>
                        <div class="column"></div>
                    </div>
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
        $('.ui.checkbox')
            .checkbox();
    </script>
</body>

</html>