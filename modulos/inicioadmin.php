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
  <!-- CCS Properties -->
  <link rel="stylesheet" href="../css/home/homeadmin.css" />

</head>

<body>
  <?php
  //conexion a la base de datos
  require('conexion.php');
  session_start();

  //include 'conexion.php';
  ?>
  
  <!-- sidebar -->
  <?php include './includes/pages/sidebarmenu.php' ?>
  <!-- sidebar -->
  <!-- top nav -->
  <?php include './includes/pages/topnav.php' ?>
  <!-- top nav -->

  <div class="pusher">
    <div class="main-content">
      <!-- HEADER -->
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
        <div class="ui middle aligned stackable grid container">
          <div class="row">
            <div class="eight wide column">
              <h3 class="ui header">We Help Companies and Companions</h3>
              <p>
                We can give your company superpowers to do things that they
                never thought possible. Let us delight your customers and
                empower your needs...through pure data analytics.
              </p>
              <h3 class="ui header">We Make Bananas That Can Dance</h3>
              <p>
                Yes that's right, you thought it was the stuff of dreams, but
                even bananas can be bioengineered.
              </p>
            </div>
            <div class="six wide right floated column">
              <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image" />
            </div>
          </div>
          <div class="row">
            <div class="center aligned column">
              <a class="ui huge button">Check Them Out</a>
            </div>
          </div>
        </div>
      </div>
      <div class="ui grid stackable padded">
        <div class="ui equal width stackable internally celled grid">
          <div class="center aligned row">
            <div class="column">
              <h3>"What a Company"</h3>
              <p>That is what they all say about us</p>
            </div>
            <div class="column">
              <h3>"I shouldn't have gone with their competitor."</h3>
              <p>
                <img src="assets/images/avatar/nan.jpg" class="ui avatar image" />
                <b>Nan</b> Chief Fun Officer Acme Toys
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="ui grid stackable padded">
        <div class="ui text container">
          <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
          <p>
            Instead of focusing on content creation and hard work, we have
            learned how to master the art of doing nothing by providing massive
            amounts of whitespace and generic content that can seem massive,
            monolithic and worth your attention.
          </p>
          <a class="ui large button">Read More</a>
          <h4 class="ui horizontal header divider">
            <a href="#">Case Studies</a>
          </h4>
          <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
          <p>
            Yes I know you probably disregarded the earlier boasts as
            non-sequitur filler content, but its really true. It took years of
            gene splicing and combinatory DNA research, but our bananas can
            really dance.
          </p>
          <a class="ui large button">I'm Still Quite Interested</a>
        </div>
      </div>
      <!-- Footer -->
      <div class="ui grid stackable padded">
        <div class="column"></div>
      </div>
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