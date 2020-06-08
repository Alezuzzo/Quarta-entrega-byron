<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css">
  
  <!-- Google Font -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

	<?php wp_head(); ?>

</head>

<body>

<header>

    <div class="navbar-fixed">
            <nav class="white">            
                <div class="nav-wrapper">

                    <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="brand-logo center black-text">Logo</a>

                    <ul id="nav-mobile" class="right">
                        <li><a href="sass.html" class="black-text">Produtos</a></li>
                        <li><a href="sass.html" class="black-text">Contato</a></li>
                    </ul>  

                    <a href="" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons black-text">menu</i></a>

                </div>                

            </nav>    
        </div>

        <ul class="sidenav" id="mobile-links">
            <li><a href="sass.html" class="black-text">Produtos</a></li>
            <li><a href="sass.html" class="black-text">Contato</a></li>
        </ul>

    </header>


<div class="header">
	<div class="wrap">
		<h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">Lorem Ipsum</a></h1>
		<div class="info">
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			<a href="" class="custom-button">Leia mais</a>
			
		</div>
	</div>

<section class="sidenav-1">

  <nav class="SIDE"> CONTATOS </nav>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="assets/images/headerimg.jpg">
      </div>
      <a href="#user"><img class="circle" src="https://icons-for-free.com/iconfiles/png/512/business+face+people+icon-1320086457520622872.png"></a>
      <a href="#name"><span class="black-text-text name">Thalles Alexsander</span></a>
      <a href="#email"><span class="black-text email">Thallesander@hotmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

</section>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        })
    </script>



