<?php  

	if ($_POST) {
		$db = new Conexion();
		$id = $_POST['id_not'];
		$type = $_POST['type'];
		$db->query("UPDATE shared s SET s.$type = s.$type + 1 WHERE s.id_noticia = $id;");
		echo $id;
	}

?>