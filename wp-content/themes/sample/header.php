<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( 'title' ); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Sample project">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Asap|Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<?php wp_head(); ?>
</head>
<body>
	<div class="container">

		<section>
			<div class="row advertise">
				<div class="col-md-12 no-pad">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/banner.png" alt="Imagem publicidade" class="hidden-xs">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/banner-mobile.png" alt="Imagem publicidade" class="hidden-md hidden-lg">
					</figure>
				</div>
			</div>
		</section>
		<header>
			<div class="row primary-content">
				<div class="col-xs-3 hidden-lg hidden-md search">
					
					<div class="box-search-mobile hidden-md hidden-lg">
						<span>
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
						<form style="display: none;">
							<input type="text" name="search" placeholder="PESQUISAR">
						</form>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<div class="box-logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo">
					</div>			
					<div class="box-social-medias hidden-xs" style="display: none;">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-fb.png" alt="Icone facebook" title="Seguir no Facebook">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-instagram.png" alt="Icone instagram" title="Seguir no Instagram">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-twitter.png" alt="Icone twitter" title="Seguir no Twiter">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icon-abril.png" alt="Icone abril" title="Grupo Abril">
					</div>
				</div> 
				<div class="col-xs-3 col-md-8 menu">
					<nav>
						<span class="hidden-lg hidden-md icon-menu" style="display: block;">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
						<span class="hidden-lg hidden-md icon-close" style="display: none;">
							<i class="fa fa-times" aria-hidden="true"></i>
						</span>
						<ul class="hidden-xs">
							<li id="carros">
								<p>carros</p>
								<span>
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<div class="menu-flag"></div>
							</li>
							<li id="testes">
								<p>testes</p>
								<span>
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
								<div class="menu-flag"></div>
							</li>
							<li>
								<p>notícias</p>
								<span>
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<p>auto-serviço</p>
								<span>
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<p>guia de compras</p>
								<span>
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<p>tabela fipe</p>
								<span>
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</span>
							</li>
							<li>
								<p>assine</p>
							</li>
						</ul>
					</nav>
					<div class="box-search hidden-xs">
						<form>
							<input type="text" name="search" placeholder="PESQUISAR">
							<span>
								<i class="fa fa-search" aria-hidden="true"></i>
							</span>
						</form>
					</div>
					<div class="box-button hidden-xs" style="display: none;">
						<button>assine</button>
					</div>
				</div>
			</div>			
			<div class="box-submenu carros hidden-sm hidden-xs">
				<button>ver todos os carros</button>
				<ul>
					<li>Audi</li>
					<li>Bentley</li>
					<li>BMW</li>
					<li>Chevrolet</li>
					<li>Chrysler</li>
					<li>Chevrolet</li>
					<li>Dodge</li>
					<li>Ferrari</li>
					<li>Fiat</li>
					<li>Ford</li>
					<li>Honda</li>
					<li>Hyundai</li>
					<li>JAC Motos</li>
					<li>Jaguar</li>
					<li>Jeep</li>
					<li>Kia</li>
					<li>Lamborghini</li>
					<li>Mercedes-Benz</li>
					<li>Mitsubishi</li>
					<li>Volkswagem</li>
				</ul>
			</div>
			<div class="box-submenu testes hidden-sm hidden-xs"> 
				<ul>
					<li class="active">Ver tudo de testes 
						<span>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
					<li>
						Comparativos
						<span style="display: none;">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
					<li>
						Impressões
						<span style="display: none;">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
					<li>
						Longa duração
						<span style="display: none;">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
					<li>
						Teste de pista 
						<span style="display: none;">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>				
				</ul>
				<div class="box-content">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/sample-testes-1.jpg" alt="Carros Imagem" title="Ford Focus Fastback Titanium Plus">
					<p>Ford Focus Fastback <wbr/> Titanium Plus</p>
				</div>
				<div class="box-content">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/sample-testes-2.jpg" alt="Carros Imagem" title="Audi A6 2.0 TFSI">
					<p>Audi A6 2.0 TFSI</p>
				</div>
				<div class="box-content"> 
					<p>Ford EcoSport 1.6 Powershift</p>
					<p class="highlight">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
				</div>
				<div class="box-content"> 
					<img src="<?php echo get_template_directory_uri(); ?>/assets/sample-testes-4.jpg" alt="Carros Imagem" title="Audi Q3 1.4">
					<p>Audi Q3 1.4</p> 
				</div>
				<div class="box-content"> 
					<img src="<?php echo get_template_directory_uri(); ?>/assets/sample-testes-5.jpg" alt="Carros Imagem" title="BMW 420i Cabriolet">
					<p>BMW 420i Cabriolet</p> 
				</div>
			</div>
			<div class="row secondary-content hidden-xs">
				<div class="col-md-2 no-pad">
					<p>+ acessados</p>
					<span>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
					</span>
					<span>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
					</span> 
					<span>
						<i class="fa fa-caret-right" aria-hidden="true"></i>
					</span> 
				</div>
				<div class="col-md-10">
					<ul>
						<li>salão do automovel</li>
						<li>renegade</li>
						<li>novo sandero</li>
						<li>novo fox</li>
						<li>hb 20</li>
						<li>duster</li>
						<li>golf</li>
						<li>corolla</li>
						<li>civic</li>
						<li>| A - Z |</li>
					</ul>
				</div>
			</div>
		</header>

		<ul class="navmenu-mobile hidden-md hidden-lg" style="display: none;">
			<li>
				<p>carros</p>
				<span>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</span> 
			</li>
			<li>
				<p>testes</p>
					<span>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
			</li>
			<li>
				<p>notícias</p>
				<span>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</span>
			</li>
			<li>
				<p>auto-serviço</p>
				<span>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</span>
			</li>
			<li>
				<p>guia de compras</p>
				<span>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</span>
			</li>
			<li>
				<p>tabela fipe</p>
				<span>
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</span>
			</li>
			<li>
				<p>assine</p>
			</li>
		</ul>

		<div class="loading" style="display: none;"></div>
		<div class="screen-unsupported" style="display: none;"></div>