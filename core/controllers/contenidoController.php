<?php 

	$id =  isset($_GET['id'])? explode("_", $_GET['id'])[1] : 0;
	if (is_numeric($id) and $id > 0 and isset($_GET['categoria'])) {
		$db = new Conexion();
		$template = new Smarty();
//////// Actualizamos la cantidad de visitas a la noticia ////////////////////////////////////////////////////////////////////
		$db->query("UPDATE noticias n SET n.views = (n.views + 1) WHERE n.id_noticia = $id;");
//////// Sleccionamos la noticia ///////////////////////////////////////////////////////////////////////////////////////////////////
		$sql = $db->query("SELECT c.id_noticia,c.titulo,c.resumen,c.contenido,ca.nombre,c.file_principal,c.fecha,c.views,c.tags FROM noticias c inner join categoria ca on ca.id_categoria = c.id_categoria WHERE c.id_noticia = $id;");
		if ($db->rows($sql) > 0) {
			$vec = $db->recorrer($sql);
			$vec['tags'] = explode(',', $vec['tags']);
			$vec['url'] = urls_amigables($vec['titulo']);
			$template->assign("noti",$vec);
		}	
///////// Ejecutamos la consulta de las noticias mas populares dada una categoria/////////////////////////////////////////////
		$cat = $_GET['categoria'];
		$sql2 = $db->query("SELECT n.id_noticia,n.titulo,n.file_principal,n.fecha,n.views,c.nombre FROM noticias n inner join categoria c on n.id_categoria= c.id_categoria WHERE c.nombre = '$cat' ORDER BY views DESC LIMIT 5;");
		while ($not = $db->recorrer($sql2)) {
			$popular[] = array(
				'id' => $not['id_noticia'],
				'titulo' => $not['titulo'],
				'img' => $not['file_principal'],
				'categoria' => strtolower($not['nombre']),
				'fecha' => $not['fecha'],
				'views' => $not['views'],
				'url' => urls_amigables($not['titulo'])
			);
		}
		$template->assign('pop',$popular);
//////// Ejecutamos la consulta de las noticias aleatorias dada una categoria ///////////////////////////////////////////////
		$max_row = $db->query("SELECT COUNT(id_noticia) FROM noticias n inner join categoria c on n.id_categoria = c.id_categoria WHERE c.nombre = '$cat';");
		$random =  rand(0,$db->recorrer($max_row)[0]-1);
		$sql3 = $db->query("SELECT n.id_noticia,n.titulo,n.file_principal,n.fecha,n.views,c.nombre FROM noticias n inner join categoria c on n.id_categoria = c.id_categoria WHERE c.nombre = '$cat'  LIMIT $random,5;");
		while ($not1 = $db->recorrer($sql3)) {
			$older[] = array(
				'id' => $not1['id_noticia'],
				'titulo' => $not1['titulo'],
				'img' => $not1['file_principal'],
				'categoria' => strtolower($not1['nombre']),
				'fecha' => $not1['fecha'],
				'views' => $not1['views'],
				'url' => urls_amigables($not1['titulo'])
			);
		}
//////// fin de las consultas ////////////////////////////////////////////////////////////////////////////////////////////////
		$template->assign('old',$older);
		$db->liberar($sql);
		$db->liberar($sql2);
		$db->liberar($sql3);
		$db->liberar($max_row);
		$db->close();
		$template->display('news/noticia.tpl');

	} else {
		header("Location: /index.php");
	}

	function urls_amigables($url) {
		// Tranformamos todo a minusculas
		$url = strtolower($url);
		//Reemplazamos caracteres especiales latinos
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'ç');
		$repl = array('a', 'e', 'i', 'o', 'u', 'n', 'c');
		$url = str_replace ($find, $repl, $url);
		// Añaadimos los guiones
		$find = array(' ', '&', '\r\n', '\n', '+');
		$url = str_replace ($find, '-', $url);
		// Eliminamos y Reemplazamos demás caracteres especiales
		$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
		$repl = array('', '-', '');
		$url = preg_replace ($find, $repl, $url);
		return $url;
	}

?>