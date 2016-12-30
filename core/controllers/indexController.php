<?php  

	$template = new Smarty();
	$db = new Conexion();
	//paginado de las noticias
	if(isset($_GET['pag']) and is_numeric($_GET['pag']) and $_GET['pag'] > 0){
		$paginaAct = $_GET['pag'];
	}else{
		$paginaAct = 1;
	}
	
	$paginado = 10;

	if (isset($_GET['categoria'])) {
		$cat = $_GET['categoria'];
		// Consulta para las noticias principales de una categoria
		$cantidadPag = $db->query("SELECT COUNT(*) FROM noticias n,categoria c, shared s WHERE n.id_categoria = c.id_categoria AND s.id_noticia = n.id_noticia AND c.nombre = '$cat';");
		$inicio = ($paginaAct - 1) * $paginado;
		$sql = $db->query("SELECT n.id_noticia,n.titulo,n.resumen,n.file_principal,n.fecha,s.facebook,s.twitter,s.google_plus FROM noticias n,categoria c, shared s WHERE n.id_categoria = c.id_categoria AND s.id_noticia = n.id_noticia AND c.nombre = '$cat' LIMIT $inicio,$paginado;");
		cargarNoticiasPrincipal($sql, $cat);
		// Ejecutamos la consulta de las noticias mas populares del panel derecho
		$sql2 = $db->query("SELECT n.id_noticia,n.titulo,n.file_principal,n.fecha,n.views FROM noticias n,categoria c WHERE n.id_categoria = c.id_categoria AND c.nombre = '$cat' ORDER BY views DESC LIMIT 5;");
		cargarNoticiasPopulares($sql2, $cat);
		// Ejecutamos la consulta de las noticias aleatorias 
		$max_row = $db->query("SELECT COUNT(id_noticia) FROM noticias n, categoria c WHERE n.id_categoria = c.id_categoria AND c.nombre = '$cat';");
		$random =  rand(0,$db->recorrer($max_row)[0]-1);
		$sql3 = $db->query("SELECT n.id_noticia,n.titulo,n.file_principal,n.fecha,n.views FROM noticias n,categoria c WHERE n.id_categoria = c.id_categoria AND c.nombre = '$cat' LIMIT $random,5;");
		cargarNoticiasAleatorias($sql3, $cat);
		// Noticias aleatorias bottom
		$random =  rand(0,$db->recorrer($max_row)[0]-1);
		$sql4 = $db->query("SELECT n.id_noticia,n.titulo,n.resumen,n.fecha,c.nombre FROM noticias n,categoria c WHERE n.id_categoria = c.id_categoria AND c.nombre = '$cat' LIMIT $random,4;");		
		cargarNoticiasAleatoriasBottom($sql4);

	}else{
		// Consulta para mostrar todas las noticias principales
		$cantidadPag = $db->query("SELECT COUNT(*) FROM noticias;");
		$inicio = ($paginaAct - 1) * $paginado;
		$sql = $db->query("SELECT n.id_noticia,n.titulo,n.resumen,n.file_principal,n.fecha,c.nombre,s.facebook,s.twitter,s.google_plus FROM categoria c,noticias n,shared s WHERE n.id_categoria = c.id_categoria AND s.id_noticia = n.id_noticia ORDER BY n.fecha DESC LIMIT $inicio,$paginado;");
		cargarNoticiasPrincipal($sql,'index');
		// Consulta de las noticias mas populares del panel derecho 
		$sql2 = $db->query("SELECT n.id_noticia,n.titulo,n.file_principal,n.fecha,n.views,c.nombre FROM noticias n,categoria c WHERE n.id_categoria = c.id_categoria ORDER BY views DESC LIMIT 5;");
		cargarNoticiasPopulares($sql2, 'index');
		// Ejecutamos la consulta de las noticias aleatorias 
		$max_row = $db->query("SELECT COUNT(id_noticia) FROM noticias;");
		$random =  rand(0,$db->recorrer($max_row)[0]-1);
		$sql3 = $db->query("SELECT n.id_noticia,n.titulo,n.file_principal,n.fecha,n.views,c.nombre FROM noticias n,categoria c WHERE n.id_categoria = c.id_categoria LIMIT $random,5;");
		cargarNoticiasAleatorias($sql3, 'index');	
		// Noticias aleatorias bottom
		$random =  rand(0,$db->recorrer($max_row)[0]-1);
		$sql4 = $db->query("SELECT n.id_noticia,n.titulo,n.resumen,n.fecha,c.nombre FROM noticias n,categoria c WHERE n.id_categoria = c.id_categoria LIMIT $random,4;");		
		cargarNoticiasAleatoriasBottom($sql4);	
	}

	$result = $db->recorrer($cantidadPag)[0];
	$paginas = ceil($result / $paginado);
	$template->assign("paginas",$paginas);
	$template->display('home/index.tpl');
	$db->liberar($sql);
	$db->liberar($sql2);
	$db->liberar($sql3);
	$db->liberar($sql4);
	$db->close();

	function cargarNoticiasPrincipal($sql,$type){
		global $db,$template;
		if ($type == 'index') {
			$num_rows = $db->rows($sql);
			$fin = 0;
			$count = 0;
			if ($num_rows > 0) {
				$fin = ($num_rows % 2 == 0)? intval(($num_rows/2) - 1) : intval(($num_rows/2));
				while ($x = $db->recorrer($sql)) {
					if($count <= $fin) { 
						$news1[] = array(
							'id_news' => $x['id_noticia'],
							'titulo' => $x['titulo'],
							'resumen' => $x['resumen'],
							'fecha' => $x['fecha'],
							'img_prin' => $x['file_principal'],
							'categoria' => strtolower($x['nombre']),
							'url' => urls_amigables($x['titulo']),
							'facebook' => $x['facebook'],
							'twitter' => $x['twitter'],
							'google_plus' => $x['google_plus']
						);
						$count ++;
					}else{
						$news2[] = array(
							'id_news' => $x['id_noticia'],
							'titulo' => $x['titulo'],
							'resumen' => $x['resumen'],
							'fecha' => $x['fecha'],
							'img_prin' => $x['file_principal'],
							'categoria' => strtolower($x['nombre']),
							'url' => urls_amigables($x['titulo']),
							'facebook' => $x['facebook'],
							'twitter' => $x['twitter'],
							'google_plus' => $x['google_plus']
						);			
					}
				}
				if (!empty($news1) and !empty($news2)) {
					$template->assign('news1',$news1);
					$template->assign('news2',$news2);
				}
				else if (!empty($news1) and empty($news2)) {
					$template->assign('news1',$news1);
					$template->assign('news2',null);
				}
				else if (empty($news1) and !empty($news2)) {
					$template->assign('news1',null);
					$template->assign('news2',$news2);
				}
					
			}
		}
		else if ($type != 'index') {		
			$num_rows = $db->rows($sql);
			$fin = 0;
			$count = 0;
			if ($num_rows > 0) {
				$fin = ($num_rows % 2 == 0)? intval(($num_rows/2) - 1) : intval(($num_rows/2));
				while ($x = $db->recorrer($sql)) {
					if($count <= $fin) { 
						$news1[] = array(
							'id_news' => $x['id_noticia'],
							'titulo' => $x['titulo'],
							'resumen' => $x['resumen'],
							'fecha' => $x['fecha'],
							'img_prin' => $x['file_principal'],
							'categoria' => strtolower($type),
							'url' => urls_amigables($x['titulo']),
							'facebook' => $x['facebook'],
							'twitter' => $x['twitter'],
							'google_plus' => $x['google_plus']
						);
						$count ++;
					}else{
						$news2[] = array(
							'id_news' => $x['id_noticia'],
							'titulo' => $x['titulo'],
							'resumen' => $x['resumen'],
							'fecha' => $x['fecha'],
							'img_prin' => $x['file_principal'],
							'categoria' => strtolower($type),
							'url' => urls_amigables($x['titulo']),
							'facebook' => $x['facebook'],
							'twitter' => $x['twitter'],
							'google_plus' => $x['google_plus']
						);			
					}
				}
				if (!empty($news1) and !empty($news2)) {
					$template->assign('news1',$news1);
					$template->assign('news2',$news2);
				}
				else if (!empty($news1) and empty($news2)) {
					$template->assign('news1',$news1);
					$template->assign('news2',null);
				}
				else if (empty($news1) and !empty($news2)) {
					$template->assign('news1',$null);
					$template->assign('news2',$news2);
				}
					
			}
		}
	}

	function cargarNoticiasPopulares($sql2, $type){
		global $db,$template;
		$popular = array();
		if ($type == 'index') {
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
		}
		else if ($type != 'index') {
			while ($not = $db->recorrer($sql2)) {
				$popular[] = array(
					'id' => $not['id_noticia'],
					'titulo' => $not['titulo'],
					'img' => $not['file_principal'],
					'categoria' => strtolower($type),
					'fecha' => $not['fecha'],
					'views' => $not['views'],
					'url' => urls_amigables($not['titulo'])
				);
			}
		}
		$template->assign('pop',$popular);
	}

	function cargarNoticiasAleatorias($sql3, $type){
		global $db,$template;
		$older = array();
		if ($type == 'index') {
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
		}
		else if ($type != 'index') {
			while ($not1 = $db->recorrer($sql3)) {
				$older[] = array(
					'id' => $not1['id_noticia'],
					'titulo' => $not1['titulo'],
					'img' => $not1['file_principal'],
					'categoria' => strtolower($type),
					'fecha' => $not1['fecha'],
					'views' => $not1['views'],
					'url' => urls_amigables($not1['titulo'])
				);
			}
		}			
		$template->assign('rnd',$older);
	}

	function cargarNoticiasAleatoriasBottom($sql4){
		global $db,$template;
		$data = array();
		while ($d = $db->recorrer($sql4)) {
			$data[] = array(
				'id' => $d['id_noticia'],
				'titulo' => $d['titulo'],
				'categoria' => $d['nombre'],
				'resumen' => $d['resumen'],
				'fecha' => $d['fecha'],
				'url' => urls_amigables($d['titulo'])
			);
		}
		$template->assign('newsBottom', $data);
	}

	function urls_amigables($url) {
		// Tranformamos todo a minusculas
		$url = strtolower($url);
		//Reemplazamos caracteres especiales latinos
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'ç');
		$repl = array('a', 'e', 'i', 'o', 'u', 'n', 'c');
		$url = str_replace ($find, $repl, $url);
		// Añadimos los guiones
		$find = array(' ', '&', '\r\n', '\n', '+');
		$url = str_replace ($find, '-', $url);
		// Eliminamos y Reemplazamos demás caracteres especiales
		$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
		$repl = array('', '-', '');
		$url = preg_replace ($find, $repl, $url);
		return $url;
	}

?>