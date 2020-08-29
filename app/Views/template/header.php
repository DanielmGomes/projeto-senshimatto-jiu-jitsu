<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Senshi Matto &mdash; Competições de Jiu-Jitsu</title>

		<!-- css -->
		<link rel="stylesheet" href="<?php echo base_url('public/css/animate.css'); ?>">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="<?php echo base_url('public/css/icomoon.css'); ?>">
		<!-- Simple Line Icons -->
		<link rel="stylesheet" href="<?php echo base_url('public/css/simple-line-icons.css'); ?>">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="<?php echo base_url('public/css/owl.carousel.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/css/owl.theme.default.min.css'); ?>">
		<!-- Style -->
		<link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
		<!-- select com pesquisa -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />	
		<!-- navs cadastro competição -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

	</head>

	<body>
	<!-- menu -->
	<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
 					<a class="navbar-brand" href="<?php echo site_url(); ?>">Senshi Matto</a> 
				</div>
				<div>
					<ul id="menu" class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php echo site_url('home'); ?>"><span>Home</span></a></li>
						<li><a  href="<?php echo site_url(); ?>"><span>Quem Somos</span></a></li>
						<li><a href="<?php echo site_url(); ?>"><span>Competições</span></a></li>
						<li><a href="<?php echo site_url(); ?>" data-nav-section="testimony"><span>Filiações</span></a></li>
						<li><a href="<?php echo site_url(); ?>" data-nav-section="pricing"><span>Ranking</span></a></li>
						<ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
							<li><a href="#"><span>Cadastrar-se</span></a>       				
								<ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            						<li><a href="<?php echo base_url('cadastro_atleta'); ?>">Atleta</a></li>
            						<li><a href="<?php echo base_url('cadastro_academia'); ?>">Academia</a></li>
            						<li><a href="<?php echo base_url('cadastro_administrador'); ?>">Administrador</a></li>
        						</ul>
    						</li>  
						</ul>
						<ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
							<li><a href="#"><span>Acessar Conta</span></a>       				
								<ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            						<li><a href="<?php echo base_url('loginAtleta'); ?>">Atleta</a></li>
            						<li><a href="<?php echo base_url('loginAcademia'); ?>">Academia</a></li>
            						<li><a href="<?php echo base_url('loginAdministrador'); ?>">Administrador</a></li>
        						</ul>
    						</li>  
						</ul>					
					</ul>
				</div>
			</nav>
	  </div>
	</header>
	<!-- // menu -->
