<?php
/* Smarty version 3.1.29, created on 2016-04-23 02:09:02
  from "C:\xampp\htdocs\Website-Alexander\styles\templates\public\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571abd1e2e96d8_90850482',
  'file_dependency' => 
  array (
    '191d3ff4ee709b670535d5e75a726c08a6ba6f11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\styles\\templates\\public\\login.tpl',
      1 => 1461370136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571abd1e2e96d8_90850482 ($_smarty_tpl) {
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
	<link rel="icon" href="">
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/mdb.min.css">
	<link rel="stylesheet" href="styles/css/main.css">
</head>
<body class="login-bg">	
	<div class="authentication-box">
		<div class="authentication-box-wrapper">
			<div id="ajax-message"></div>
			<div class="panel panel-default">
				<div class="">
					<div class="authentication-header">
						<div class="logo-box logo-box-primary-light padding-top-4">
							<div class="logo">
								<b>B</b>
							</div>
						</div>
						<span class="center-block text-center">Acceso de Admin</span>
					</div>
					<div class="authentication-body">
							<div class="form">
								<div class="input-field form-group floating-label">
									<input class="form-control" id="user" type="text">
									<label for="user">Username</label>
								</div>
								<div class="input-field form-group floating-label">
									<input class="form-control" id="pass" type="password">
									<label for="pass">Password</label>
								</div>

								<button id="send" type="button" class="btn default-color-dark white-text waves-effect waves-light btn-block">Sign in</button>
								<div class="authentication-body-footer">
									<div class="text-right">
										<a href="#!" style="color: #00695c;">Forgot password?</a>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="styles/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/js/mdb.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/js/ajax.js"><?php echo '</script'; ?>
><?php echo '</script'; ?>
>
	<!--<?php echo '<script'; ?>
>
	<?php echo '<script'; ?>
>
		window.onload = function(){
			document.getElementById('send').onclick = function(){
				var connect, usuario, password, data, result;

				usuario = document.getElementById('user').value;
				password = document.getElementById('pass').value;

				if (usuario != '' && password != '') {
					// SE establece los datos a enviar al servidor
					data = "user="+usuario+"&pass="+password;
					// Propiedades del objeto XMLHttpRequest
					if (window.XMLHttpRequest ) {
						connect =  new XMLHttpRequest();
					} else {
						connect = new ActiveXObject('Microsoft.XMLHTTP');
					}
					// Metodo que detecta los eventos que se producen en la peticion
					connect.onreadystatechange = function(){
						if (connect.readyState == 4 && connect.status == 200) {
							if (parseInt(connect.responseText) == 1) {
								// Se ha conectado con exito							
								location.href ='?view=panel_admin';
							}else{
								// Los datos son incorrectos
								alert(connect.responseText);
								console.log(connect);
								result = '<div class="alert alert-danger white-text red darken-1 alert-dismissible" role="alert">';
								result += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
								result += '<b>Error!</b> Los datos son incorrectos.</div>';				  
								document.getElementById('ajax-message').innerHTML = result;
							}
						} 					
						else if(connect.readyState != 4) {
							// Procesando ...
							result = '<div class="alert alert-info white-text blue darken-1 alert-dismissible" role="alert">';
							result += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
							result += 'Procesando petición ...</div>';				  
							document.getElementById('ajax-message').innerHTML = result;
						}
					}
					connect.open('POST','?view=login',true);
					connect.setRequestHeader('Content-Type','aplication/x-www-form-urlencoded');
					connect.send(data);
				} else {
					result = '<div class="alert alert-danger white-text red darken-1 alert-dismissible" role="alert">';
					result += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
					result += '<b>Error!</b> El usuario o la contraseña no pueden estar vacios.</div>';				  
					document.getElementById('ajax-message').innerHTML = result;
				}				 
			}
		}
	<?php echo '</script'; ?>
>-->
</body>
</html><?php }
}
