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
	<link rel="icon" href="../favicon.ico">
	<link rel="stylesheet" href="../styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/css/mdb.min.css">
	<link rel="stylesheet" href="../styles/css/main.min.css">
	<style>
		body,html{
			height: 100%;
			width: 100%;
		}
	</style>
</head>
<body class="light-blue darken-2 centrado-v">	
	<div class="authentication-box center-block">
		<div class="authentication-box-wrapper">
			<div id="ajax-message"></div>
			<div class="panel panel-default no-border">
				<div class="">
					<div class="authentication-header light-blue darken-1">
						<div class="logo-box logo-box-primary-light padding-top-4">
							<div class="logo">
								<img class="img-responsive" src="../styles/img/logo1.png" alt="">
							</div>
						</div>
						<span class="center-block text-center">Acceso de Admin</span>
					</div>
					<div class="authentication-body">
						<div class="form">
							<div class="input-field form-group floating-label">
								<input class="form-control" id="user" type="text" placeholder="Nombre de usuario">
							</div>
							<div class="input-field form-group floating-label">
								<input class="form-control" id="pass" type="password" placeholder="Contraseña">
							</div>

							<button id="send" type="button" class="btn light-blue darken-2 white-text waves-effect waves-light btn-block">Sign in</button>
							<div class="authentication-body-footer">
								<div class="text-center">
									<a href="#!">Olvidaste tu contraseña?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../styles/js/login.min.js"></script>
</body>
</html>