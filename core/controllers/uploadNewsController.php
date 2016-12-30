<?php  

	if (isset($_GET['view'])) {
		$db = new Conexion();
		$fileLocal = $_FILES['fileLocal'];
		$titulo = $_POST["titulo"];
		$resumen = $_POST['resumen'];
		$categoria = $_POST['categoria'];
		$contenido = $_POST['contenido'];
		$tags = $_POST['tags'];
		if (empty($contenido)) {
			header("Location: ?view=admin&error=Ingrese el contenido de la noticia");
		}		
		$dir_subida = 'files/uploads/';
		$fichero_subido = $dir_subida . basename($_FILES['fileLocal']['name']);
		if (move_uploaded_file($_FILES['fileLocal']['tmp_name'], $fichero_subido)) {
			$fecha = date('d/m/Y');
			$db->query("INSERT INTO noticias(titulo,resumen,contenido,file_principal,id_categoria,fecha,tags) VALUES('$titulo','$resumen','$contenido','$fichero_subido','$categoria','$fecha','$tags');") or die("No se ejecuto la consulta en insertar---->".$db->error);
			$sql = $db->query("SELECT MAX(n.id_noticia) as max FROM noticias n");
			$max = $db->recorrer($sql)['max'];
			$db->query("INSERT INTO shared(id_noticia) VALUES($max);") or die("No se ejecuto la consulta en insertar en shared ---->".$db->error);
			$db->close();
			header("Location: index.php");
		} else {
			header("Location: ?view=admin&error=No se pudo subir la imagen al servidor");
		}
		
	} else {
		header("Location: index.php");
	}
	

?>