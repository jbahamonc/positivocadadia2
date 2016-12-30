<?php  
	
	if ($_POST) {
		include('core/models/class.Acceso.php');	
		$acceso = new Acceso();
		$acceso->login();
		exit(); // Detener la ejecucion del script
	}

?>