<?php  

/**
* Clase que controla el acceso de los administradores a la aplicacion
*/
class Acceso {
	
	private $users;
	private $pass;

	public function login()	{
		try {
			if (isset($_POST['user']) and isset($_POST['pass'])) {
				$db = new Conexion();
				$users = $_POST['user'];
				$pass = md5($_POST['pass']);
				$sql = $db->query("SELECT * FROM administradores WHERE nombre_usuario ='".$users."' AND contrasena ='".$pass."'") or die($db->error);
				if ($db->rows($sql) > 0) {
					echo 1;
				} else {
					throw new Exception("No se ejecuto la consulta");					
				}
				$db->liberar($sql);
				$db->close();
			} else {
				throw new Exception(" Faltan datos ");
				
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}	
	}

	public function recuperar()	{
		// Recuperar contraseña
	}
}

?>