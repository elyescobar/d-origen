<?php
session_start();
if(!isset($_SESSION['contador'])) {
  $_SESSION['contador']=0; }
?>
<!DOCTYPE HTML>
<html>
<head>


<title>D' ORIGEN</title>

<link rel="icon" type="image/jpeg" href="img/logodeorigen.jpeg">
<link rel="Stylesheet" href="css/pcwin.css" media='screen and (min-width: 801px) and (max-width: 4000px)'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cultivation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="text/javascript" src="js/jquery.js">
  jQuery(document).on(function($) {
    $(".scroll").click(function(event){
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
    });
  });
  <!--Animation-->
  jQuery(function($) {
    $(".swipebox").swipebox();
  });

  new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/codigo.js"></script>
<script type="application/x-javascript">
  addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>

</head>
<body>
 <div class="header head-top " id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
  		<span class="menu"><img src="img/nav.png" alt=""/> </span>
  		<ul>

      <li><a href="index.php" class="active">INICIO</a></li><label>/</label>
      <li><a href="nosotros.php">NOSOTROS</a></li><label>/</label>
    	<li><a href="promociones.php">PROMOCIONES</a></lPROMOCIONESi><label>/</label>
  	<li><a href="productos.php">PRODUCTOS</a></li><label>/</label>
     	<li><a href="noticias.php">NOTICIAS</a></li><label>/</label>
     	<li><a href="contacto.php">CONTACTO</a></li>

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
     <!-- 3 div cerrarse -->
