
<!doctype html>
<html lang="es">
  <head>
    <title>D' ORIGEN</title>
    <link rel="icon" type="image/jpeg" href="img/logodeorigen.jpeg">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="Stylesheet" href="css/movil.css" media='screen and (min-width: 1px) and (max-width: 800px)'>

    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/swipebox.css">
    <link href="css/animate.css" rel='stylesheet' type='text/css' />
    <meta http-equiv="content-type"; content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="Cultivation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/codigo.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script>
      $(function() {
          var pull = $('#pull');
          menu = $('nav ul');
          menuHeight = menu.height();

          $(pull).on('click', function(e) {
              e.preventDefault();
              menu.slideToggle();
          });
      });

      $(window).resize(function(){
          var w = $(window).width();
          if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
          }
      });

      jQuery(document).ready(function($) {
			  $(".scroll").click(function(event){
				      event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			   });
		  });
      <!---End-smoth-scrolling---->
      jQuery(function($) {
        $(".swipebox").swipebox();
      });
      <!--Animation-->
      new WOW().init();
    </script>

  </head>
  <body>
    <div class="header" id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
		<span class="menu"><img src="img/nav.png" alt=""/> </span>
		<ul>
      <li><a href="index.php" class="active">INICIO</a>
      </li><label>/</label>
      <li><a href="nosotros.php">NOSOTROS</a>
      </li><label>/</label>
  	  <li><a href="promociones.php">PROMOCIONES</a>
      </lPROMOCIONESi><label>/</label>
	    <li><a href="productos.php">PRODUCTOS</a>
      </li><label>/</label>
   	  <li><a href="noticias.php">NOTICIAS</a>
      </li><label>/</label>
   	  <li><a href="contacto.php">CONTACTO</a>
      </li>
    </ul>
     <!-- script for menu -->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			</div>
    <div class="clearfix"></div>
