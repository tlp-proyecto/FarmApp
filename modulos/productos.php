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

        <a href="iniciocliente.php" class="item">
            <div>
                <i class="icon home blue"></i>
                Inicio
            </div>
        </a>

        <a class="item" href="farmaciasclientes.php">
            <div>
                <i class="icon plus green"></i>
                Farmacias
            </div>
        </a>

        <a class="item active" href="productos.php">
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
            <a href="#" class="header item"> FarmApp </a>
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
        <!-- HeADER -->
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
            <!-- Tarjeta de productos -->
            <div class="ui grid stackable padded">
                <!-- Primera Tarjeta de productos -->
                <div class="four wide computer eight wide tablet sixteen wide mobile column">
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui right floated header teal">
                                <i class="icon leaf"></i>
                            </div>
                            <div class="header">
                                <div class="ui teal header">Shampoo Dove</div>
                                <div class="sub header">$91.00</div>
                            </div>
                            <div class="meta blue">x 200ml</div>
                            <div class="description">
                                Shampoo y acondicionador 
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui teal button">Ver en Farmacias</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Segunda Tarjeta de productos -->
                <div class="four wide computer eight wide tablet sixteen wide mobile column">
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui right floated header purple">
                                <i class="icon paint brush"></i>
                            </div>
                            <div class="header">
                                <div class="ui purple header">Esmalte Estrella</div>
                                <div class="sub header">$96.50</div>
                            </div>
                            <div class="meta blue">x 100ml</div>
                            <div class="description">
                                Nueva linea de quitaesmaltes
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui purple button">Ver en Farmacias</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Terceera Tarjeta de productos -->
                <div class="four wide computer eight wide tablet sixteen wide mobile column">
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui right floated header green">
                                <i class="icon medkit"></i>
                            </div>
                            <div class="header">
                                <div class="ui green header">Cepillo Oral-B</div>
                                <div class="sub header">$200.00</div>
                            </div>
                            <div class="meta">x 100ml</div>
                            <div class="description">
                                Pro-Gengiva 35 Suave
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui green button">Ver en Farmacias</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cuarta Tarjeta de productos -->
                <div class="four wide computer eight wide tablet sixteen wide mobile column">
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="ui right floated header purple">
                                <i class="icon paint brush"></i>
                            </div>
                            <div class="header">
                                <div class="ui purple header">In Your Face</div>
                                <div class="sub header">$889.82</div>
                            </div>
                            <div class="meta blue">SET x 3 unidades</div>
                            <div class="description">
                                Chocolate + Gloss + Baby Pink
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui purple button">Ver en Farmacias</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de productos -->
            <div class="ui grid stackable padded">
                <div class="four wide computer eight wide tablet sixteen wide mobile center aligned column">
                    <div class="ui red statistic">
                        <div class="value">2500+</div>
                        <div class="label">PRODUCTOS</div>
                    </div>
                </div>
                <div class="four wide computer eight wide tablet sixteen wide mobile center aligned column">
                    <div class="ui green statistic">
                        <div class="value">2000+</div>
                        <div class="label">USUARIOS</div>
                    </div>
                </div>
                <div class="four wide computer eight wide tablet sixteen wide mobile center aligned column">
                    <div class="ui teal statistic">
                        <div class="value">800+</div>
                        <div class="label">FARMACIAS</div>
                    </div>
                </div>
                <div class="four wide computer eight wide tablet sixteen wide mobile center aligned column">
                    <div class="ui purple statistic">
                        <div class="value">1000+</div>
                        <div class="label">CONSULTAS DIARIAS</div>
                    </div>
                </div>
            </div>
            <!-- MENÚ PAGINACIÓN -->
            <div class="ui grid stackable padded">
                <div class="ui center aligned content column">
                    <div class="ui pagination inverted menu">
                        <a class="icon item">
                            <i class="left arrow green fade icon"></i>
                        </a>
                        <a class="item active inverted">1</a>
                        <a class="item inverted">2</a>
                        <a class="item">3</a>
                        <a class="icon item disabled ">
                            <i class="ellipsis horizontal green fade icon"></i>
                        </a>
                        <a class="icon item">
                            <i class="right arrow green fade icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- FIN MENÚ PAGINACIÓN -->
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