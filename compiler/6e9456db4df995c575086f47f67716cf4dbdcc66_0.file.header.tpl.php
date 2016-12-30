<?php
/* Smarty version 3.1.29, created on 2016-09-13 22:07:35
  from "C:\xampp\htdocs\Website-Alexander\styles\templates\overall\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d85c871f3633_77476849',
  'file_dependency' => 
  array (
    '6e9456db4df995c575086f47f67716cf4dbdcc66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\styles\\templates\\overall\\header.tpl',
      1 => 1473796585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d85c871f3633_77476849 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
	<title><?php if (isset($_smarty_tpl->tpl_vars['noti']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['noti']->value['titulo'];?>
 <?php } else { ?> Bienvenidos a Topdelasemana<?php }?> | Top de la semana</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['noti']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['noti']->value['resumen'];?>
 <?php } else { ?> Top de la semana es un sitio web donde reune las noticias mas importantes del momento en distintas categorias<?php }?>">
	<base href="http://localhost:8080/Website-Alexander/">
	<?php if (isset($_smarty_tpl->tpl_vars['noti']->value)) {?>
	<!-- Meta Facebook -->
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="<?php echo $_smarty_tpl->tpl_vars['noti']->value['titulo'];?>
" />
	<meta property="og:description"        content="<?php echo $_smarty_tpl->tpl_vars['noti']->value['resumen'];?>
" />
	<meta property="og:image"              content="http://www.topdelasemana.com/<?php echo $_smarty_tpl->tpl_vars['noti']->value['file_principal'];?>
" />
	<!-- /Meta Facebook -->
	<?php }?>
	<link rel="icon" href="favicon.ico">	
	<link rel="stylesheet" href="styles/css/ionicons.min.css">
	<link rel="stylesheet" href="styles/css/component.min.css">
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/mdb.min.css">
	<link rel="stylesheet" href="styles/css/main.min.css">
</head>
<body>
	<div id="fb-root"></div>
	<?php echo '<script'; ?>
>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_CO/sdk.js#xfbml=1&version=v2.6&appId=1738871472992018";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
	<div id="st-container" class="st-container">
		<!-- Navegacion para moviles -->			
		<nav class="st-menu st-effect-2" id="menu-2">
			<h2 class="icon icon-stack white-text">MENU</h2>
			<ul>
				<li><a class="icon icon-data" href="./">Inicio</a></li>
				<li><a class="icon icon-location" href="news/fitness">Top fitness</a></li>
				<li><a class="icon icon-study" href="news/futbol">Top futbol</a></li>
				<li><a class="icon icon-photo" href="news/noticias">Top noticias</a></li>
				<li><a class="icon icon-wallet" href="news/curiosidades">Top curiosidades</a></li>
			</ul>
		</nav>
		<!-- /Navegacion para moviles -->
		<!--Header section-->
		<div class="st-pusher">
			<div class="st-content">
				<header>
					<div class="middle-header light-blue hidden-xs">
						<div class="container">
							<div class="row centrado-v">
								<div class="col-lg-6 col-lg-offset-3">
									<div class="brand-logo text-center">
										<a class="white-text" href="./">
											<img class="" width="200" src="styles/img/logo1.png" alt="">
											<h1 class="h2 text-shadow">TOP DE LA SEMANA</h1>
											<h6 class="no-margin">Fitness,Deportes,Noticias,Curiosidades</h6>
										</a>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="bottom-header  light-blue darken-1 hidden-xs">
						<div class="container">
							<nav class="navbar no-margin">
				                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-2">
				                    <ul class="nav navbar-nav">
				                        <li><a href="./">Inicio <span class="sr-only">(current)</span></a></li>
				                        <li><a href="news/fitness">Top Fitness</a></li>
				                        <li><a href="news/futbol">Top Futbol</a></li>
				                        <li><a href="news/noticias">Top Noticias</a></li>
				                        <li><a href="news/curiosidades">Top Curiosidades</a></li>
				                    </ul>
				                </div>
					        </nav>
						</div>
					</div>	
					<div class="visible-xs panel-body light-blue darken-1">				
						<h1 id="st-trigger-effects" class="h3 white-text text-center no-margin" style="font-weight:300;">
							<button class="ion-navicon white-text pull-left" data-effect="st-effect-2" style="font-size: 25px;background: transparent;
    border: none;"></button> TOP DE LA SEMANA</h1>
					</div>		
				</header>
				<!--/Header section-->
<?php }
}
