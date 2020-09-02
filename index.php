<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Theme for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <!-- GitHub Button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script> 
</head> 

<body data-spy="scroll">
	
   

    <!---//Facebook button code-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">            
            <h1 class="logo float-left">
                <a class="scrollto" href="#promo">
                    <span class="logo-title">FarmApp</span>
                </a>
            </h1><!--//logo-->              
            <nav id="main-nav" class="main-nav navbar-expand-md float-right" role="navigation">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
                           
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item sr-only"><a class="nav-link" href="#home">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="./modulos/login.php">Registrarse</a></li>
                        <li class="nav-item"><a class="nav-link" href="./modulos/farmacias.html">Farmacias</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->
        </div>
    </header><!--//header-->
    
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">Farm<span class="highlight">App</span></h2>
            <p class="intro">A free Bootstrap 4 template designed to help developers
promote their personal projects</p>
            <div class="btns">
                <a class="btn btn-cta-secondary" href="https://themes.3rdwavemedia.com/" target="_blank">Demo</a>
                <a class="btn btn-cta-primary" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devaid-free-bootstrap-theme-for-developers-side-projects/" target="_blank">Download</a>
            </div>
            <ul class="meta list-inline">
                <li class="list-inline-item"><a href="https://github.com/xriley/devAid-Theme" target="_blank">View on GitHub</a></li>
                <li class="list-inline-item"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devaid-free-bootstrap-theme-for-developers-side-projects/" target="_blank">Full Documentation</a></li>
                <li class="list-inline-item">Created by: <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> at 3rd Wave Media</li>
            </ul><!--//meta-->
        </div><!--//container-->
        <div class="social-media">
            <div class="social-media-inner container text-center">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item twitter-follow"><a href="https://twitter.com/3rdwave_themes" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li><!--//twitter-follow-->
                    <li class="list-inline-item twitter-tweet">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_themes" data-hashtags="bootstrap">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </li><!--//twitter-tweet-->
                    <li class="list-inline-item facebook-like">
                         <div class="fb-like" data-href="https://themes.3rdwavemedia.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    </li><!--//facebook-like-->
                    <!--// Generate github buttons: https://github.com/mdo/github-buttons -->
                    <li class="list-inline-item github-star">
<a class="github-button" href="https://github.com/xriley/devaid-theme" data-icon="octicon-star" aria-label="Star xriley/devaid-theme on GitHub">Star</a></li>
                    <li class="list-inline-item github-follow"><!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/xriley" aria-label="Follow @xriley on GitHub">Follow @xriley</a></li>                   
                </ul>
            </div>
        </div>
    </section><!--//promo-->
    
    <!-- ******ABOUT****** --> 
    <section id="about" class="about section">
        <div class="container">
            <h2 class="title text-center">What is devAid?</h2>
            <p class="intro text-center">Explain your project in detail. Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            <div class="row">
                <div class="item col-lg-4 col-md-6 col-12">
                    <div class="icon-holder">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Designed for developers</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 1000+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-lg-4 col-md-6 col-12">
                    <div class="icon-holder">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Time saver</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 1000+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-lg-4 col-md-6 col-12">
                    <div class="icon-holder">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">UX-centred</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 1000+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->           
                <div class="clearfix visible-md"></div>    
                <div class="item col-lg-4 col-md-6 col-12">
                    <div class="icon-holder">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Mobile-friendly</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 1000+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->                
                <div class="item col-lg-4 col-md-6 col-12">
                    <div class="icon-holder">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">Easy to customise</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 1000+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->
                <div class="item col-lg-4 col-md-6 col-12">
                    <div class="icon-holder">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title">SCSS source files included</h3>
                        <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 1000+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                    </div><!--//content-->
                </div><!--//item-->               
            </div><!--//row-->            
        </div><!--//container-->
    </section><!--//about-->
    
    
    
    
    
    
    
    <!-- ******CONTACT****** --> 
    <section id="contact" class="contact section has-pattern">
        <div class="container">
            <div class="contact-inner">
                <h2 class="title  text-center">Contact</h2>
                <p class="intro  text-center">I hope you find this Bootstrap template useful. <br />Feel free to get in touch if you have any questions or suggestions.</p>
                <div class="author-message">                      
                    <!--<div class="profile">
                        <img class="img-fluid" src="assets/images/profile.png" alt="" />
                    </div>
                    <div class="speech-bubble">
                        <h3 class="sub-title">Love free Bootstrap themes and templates?</h3>
                        <p><a href="https://twitter.com/3rdwave_themes" target="_blank">Follow me on Twitter</a> so you don’t miss any future freebies! You can find all the freebies I made for developers <a href="https://themes.3rdwavemedia.com/bootstrap-templates/free/" target="_blank">here</a>.</p>
                        <p><strong>[Tip for developers]:</strong> If you take on freelance work you can put a tailored message here about your availability to attract potential clients. Be creative and good luck! :)</p> 
                        <div class="source">
                            <span class="name"><a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a></span>
                            <br />
                            <span class="title">UX/UI Designer</span>
                        </div>//source-->
                    </div><!--//speech-bubble-->                        
                </div><!-- //author-message-->
                <div class="clearfix"></div>
                <div class="info text-center">
                    <h4 class="sub-title">Get Connected</h4>
                    <ul class="social-icons list-inline">
                        <li class="list-inline-item"><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/3rdwavethemes" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        
                        <li class="list-inline-item"><a href="https://medium.com/@3rdwave_themes/" target="_blank"><i class="fab fa-medium-m"></i></a></li>  
                        <li class="list-inline-item"><a href="https://dribbble.com/Xiaoying" target="_blank"><i class="fab fa-dribbble"></i></a></li>   
                        <li class="list-inline-item last"><a href="https://themes.3rdwavemedia.com/contact/" target="_blank"><i class="fas fa-envelope"></i></a></li>              
                    </ul>
                </div><!--//info-->
            </div><!--//contact-inner-->
        </div><!--//container-->
    </section><!--//contact-->  
      
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
     
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-3.4.1.min.js"></script>   
    <script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>   
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>     
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
        
</body>
</html> 
