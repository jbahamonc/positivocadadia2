<?php 

/**
* Clase que controla la comunicacion con la base de datos
*/
class Conexion extends mysqli{
	
	function __construct(){
		parent::__construct('localhost','root','','positivocadadia');
		//$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('ERROR: Fallo la conexion a la base de datos') : null;
	}

	public function rows($x)	{
		return mysqli_num_rows($x);
	}

	public function recorrer($x)	{
		return mysqli_fetch_array($x);
	}

	public function liberar($x)	{
		return mysqli_free_result($x);
	}
}

?>