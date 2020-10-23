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
    $consul = $pdo->prepare("DELETE FROM farmacias WHERE id_farmacias = ? ");
    $consul->execute([$id]);
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
                                Eliminar Farmacia
                            </h2>
                        </div>
                    </div>
                    <div class="column">
                        <div class="ui massive message">
                            Farmacia eliminada con éxito!!...
                        </div>
                    </div>
                    <div class="four column centered row">
                        <div class="column"></div>
                        <div class="column"></div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include './includes/pages/footer.php' ?>
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