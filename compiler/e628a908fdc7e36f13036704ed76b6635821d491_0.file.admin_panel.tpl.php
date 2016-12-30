<?php
/* Smarty version 3.1.29, created on 2016-05-21 03:53:30
  from "C:\xampp\htdocs\Website-Alexander\site\styles\templates\admin\admin_panel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573fbf9a1d3682_03366173',
  'file_dependency' => 
  array (
    'e628a908fdc7e36f13036704ed76b6635821d491' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\site\\styles\\templates\\admin\\admin_panel.tpl',
      1 => 1463795606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_573fbf9a1d3682_03366173 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
	<title>Acceso de Administrdores</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Desscripcion de la pagina">
	<link rel="icon" href="../site/favicon.ico">
	<link rel="stylesheet" href="../site/styles/css/ionicons.min.css">
	<link rel="stylesheet" href="../site/styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="../site/styles/css/mdb.min.css">
	<link rel="stylesheet" href="../site/styles/css/main.css">
	<style>
		body,html{
			height: 100%;
			width: 100%;
		}
		header{
			height: 20rem;
			box-shadow: none;
		}
		.navbar .navbar-brand{
			height: auto;
		}
		.content{
			margin-top: -10rem;
			border-radius: 0.12rem;
			box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24);
			margin-bottom: 2rem;
			padding-bottom: 2rem;
		}
		h1{
			font-size: 3rem;
			font-weight: 300;
		}
		.admin-news h5{
			margin-bottom: 1.5rem;
		}
		.file_input {
		  float: left;
		}

		#file_input_text_div {
		  	margin-left: 8px;
		  	width: calc(100% - 64px);
			display: inline-block;
		}

		.none {
		  display: none !important;
		}
		.mdl-button--fab {
			border-radius: 50%;
			font-size: 24px !important;
			height: 56px;
			margin: auto;
			top: 0 !important;
			left: 0 !important;
			min-width: 56px;
			width: 56px;
			background: rgb(53, 162, 255);
			color: rgb(255,255,255) !important;
			box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24);
			position: relative !important;
			cursor: pointer;
		}
			
		.admin-news input[type="text"], .admin-news textarea {
			font-size: 1.2em;
			padding: 15px 10px !important;
			box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12) !important;
			border-color: transparent;
			border-radius: 3px;
			height: auto;
			border:none;
			color: #7B7B7B;
			width: calc(100% - 20px);
		}
		.admin-news textarea{
			width: 100%;
		}
		.admin-news .row{
			margin-bottom: 2rem;
		}
	</style>
</head>
<body>
	<header class=" light-blue darken-1">
		<div class="bottom-header light-blue darken-1">
			<div class="container">
				<nav class="navbar no-margin">
	                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-2">
	                	<a class="navbar-brand waves-effect waves-light" href="./">
	                		<img class="img-responsive" width="60" src="../site/styles/img/logo1.png" alt="">
	                	</a>
	                    <ul class="nav navbar-nav">
	                        <li><a href="?view=inicio">Inicio <span class="sr-only">(current)</span></a></li>
	                        <li><a href="?view=fitness">Top Fitness</a></li>
	                        <li><a href="?view=futbol">Top Futbol</a></li>
	                        <li><a href="?view=noticias">Top Noticias</a></li>
	                        <li><a href="?view=curiosidades">Top Curiosidades</a></li>
	                    </ul>
	                </div>
		        </nav>
			</div>
		</div>
	</header>
	<div class="container content white">
		<div class="main-wrapper">
			<h1 class="text-center">Panel de administración de noticias</h1>
			<hr>			
			<form action="" class="admin-news">
				<div class="row">
					<h5 class="text-center">Imagen o video principal</h5>
					<div class="col-md-6">	
					    <div class="file_input">
					        <label class="centrado-v mdl-button--fab">
						        <i class="ion-upload center-block"></i>
						        <input id="file_input_file" class="none" type="file" placeholder="Archivo local">
					        </label>
					    </div>
					    <div id="file_input_text_div">
						    <input class="form-control" type="text" id="file_input_text" placeholder="Archivo local">
					    </div>						
					</div>
					<div class="col-md-6">
						<input type="text" id="URL" class="form-control" placeholder="Enlace Externo">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-center">Titulo de la noticia</h5>
						<input type="text" placeholder="Ingrese el titulo" class="form-control" id="titulo_news">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-center">Resumen de la noticia</h5>
						<textarea id="" class="form-control" placeholder="Ingrese el resumen de la noticia"></textarea>
					</div>
				</div>
				<div class="row">
					<h5 class="text-center">Contenido de la noticia</h5>
					<textarea id="content_news" rows="15" class="form-control" placeholder="Ingrese el contenido de la noticia"></textarea>
				</div>
				<div class="row text-center">
					<button type="button" class="btn btn-primary btn-lg">guardar noticia</button>
				</div>
			</form>
		</div>
	</div>	
	<?php echo '<script'; ?>
>
		var fileInputTextDiv = document.getElementById('file_input_text_div');
		var fileInput = document.getElementById('file_input_file');
		var fileInputText = document.getElementById('file_input_text');
		fileInput.addEventListener('change', changeInputText);
		fileInput.addEventListener('change', changeState);

		function changeInputText() {
		  var str = fileInput.value;
		  var i;
		  if (str.lastIndexOf('\\')) {
		    i = str.lastIndexOf('\\') + 1;
		  } else if (str.lastIndexOf('/')) {
		    i = str.lastIndexOf('/') + 1;
		  }
		  fileInputText.value = str.slice(i, str.length);
		}

		function changeState() {
		  if (fileInputText.value.length != 0) {
		    if (!fileInputTextDiv.classList.contains("is-focused")) {
		      fileInputTextDiv.classList.add('is-focused');
		    }
		  } else {
		    if (fileInputTextDiv.classList.contains("is-focused")) {
		      fileInputTextDiv.classList.remove('is-focused');
		    }
		  }
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
