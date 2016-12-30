<?php
/* Smarty version 3.1.29, created on 2016-07-28 02:36:58
  from "C:\xampp\htdocs\Website-Alexander\styles\templates\admin\admin_panel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579953aa9812d3_09918903',
  'file_dependency' => 
  array (
    'e51298211314d8d71dba72c72e19514c3bc6abe7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\styles\\templates\\admin\\admin_panel.tpl',
      1 => 1469666215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579953aa9812d3_09918903 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
	<title>Acceso de Administradores</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico">
 	<link rel="stylesheet" href="styles/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/css/ionicons.min.css">
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/mdb.min.css">
	<link rel="stylesheet" href="styles/css/main.min.css">
	<!-- Include Editor style. -->
    <link href="styles/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!-- Include Editor Plugins style. -->
	<link rel="stylesheet" href="styles/css/plugins/char_counter.css">
	<link rel="stylesheet" href="styles/css/plugins/code_view.css">
	<link rel="stylesheet" href="styles/css/plugins/colors.css">
	<link rel="stylesheet" href="styles/css/plugins/emoticons.css">
	<link rel="stylesheet" href="styles/css/plugins/file.css">
	<link rel="stylesheet" href="styles/css/plugins/fullscreen.css">
	<link rel="stylesheet" href="styles/css/plugins/image.css">
	<link rel="stylesheet" href="styles/css/plugins/image_manager.css">
	<link rel="stylesheet" href="styles/css/plugins/line_breaker.css">
	<link rel="stylesheet" href="styles/css/plugins/quick_insert.css">
	<link rel="stylesheet" href="styles/css/plugins/table.css">
	<link rel="stylesheet" href="styles/css/plugins/video.css">
	<style>
		body,html{
			height: 100%;
			width: 100%;
			background: #ECECEC;
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
			
		.admin-news input[type="text"], .admin-news textarea, .admin-news select {
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
		.admin-news select{
			width: 100%;
		}
		.admin-news .row{
			margin-bottom: 2rem;
		}
		.panel-heading.note-toolbar .note-color .dropdown-toggle{
			padding-left: 5px !important;
		}
		.note-btn{
			margin: 0;
			box-shadow: none;
			font-size: 14px !important;
			    padding: 5px 10px !important;
		}
		.note-btn:hover{
			background: white !important;
			color: #333 !important;			
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
	                		<img class="img-responsive" width="60" src="styles/img/logo1.png" alt="">
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
			<form action="?view=uploadNews" enctype="multipart/form-data" method="POST" id="form" class="admin-news">
				<div class="row">
					<h5 class="text-center">Imagen principal</h5>
					<div class="col-xs-12">	
					    <div class="file_input">
					        <label class="centrado-v mdl-button--fab">
						        <i class="ion-upload center-block"></i>
						        <input id="file_input_file" class="none" type="file" name="fileLocal" required>
					        </label>
					    </div>
					    <div id="file_input_text_div">
						    <input class="form-control" type="text" id="file_input_text" placeholder="Imagen local" required>
					    </div>						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-center">Titulo de la noticia</h5>
						<input type="text" placeholder="Ingrese el titulo" name="titulo" class="form-control" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-center">Resumen de la noticia</h5>
						<textarea name="resumen" class="form-control" placeholder="Ingrese el resumen de la noticia" required></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<h5 class="text-center">Categoria de la noticia</h5>
						<select name="categoria" id="" class="form-control">
							<option disabled selected>Seleccione una categoria</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['cat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_local_item;
}
if ($__foreach_c_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_item;
}
?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-center">Contenido de la noticia</h5>
						<textarea id="edit" name="contenido"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-center">Tags</h5>
						<input type="text" placeholder="Tags de la noticia" name="tags" class="form-control" required>
					</div>
				</div>
				<div class="row text-center">
					<button type="submit" class="btn btn-primary btn-lg" id="guardar">guardar noticia</button>
				</div>
			</form>
		</div>
	</div>		
	<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="styles/js/froala_editor.min.js"><?php echo '</script'; ?>
>
	<!-- Include Plugins. -->
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/align.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/char_counter.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/code_beautifier.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/code_view.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/colors.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/emoticons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/entities.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/file.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/font_family.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/font_size.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/fullscreen.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/image.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/image_manager.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/inline_style.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/line_breaker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/link.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/lists.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/paragraph_format.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/paragraph_style.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/quick_insert.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/quote.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/table.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/save.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/url.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="styles/js/plugins/video.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
        $(function() {
            $('#edit').froalaEditor({
            	height: 500,
            	imageUploadURL: 'image_uploadController.php'
            });
        });
    <?php echo '</script'; ?>
>
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
	<?php if (isset($_GET['error'])) {?>
		<?php echo '<script'; ?>
>
			location.href = "?view=admin";
		<?php echo '</script'; ?>
>
	<?php }?>
</body>
</html><?php }
}
