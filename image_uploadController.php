<?php  
	
	// Extensiones permitidas.
    //$allowedExts = array("gif", "jpeg", "jpg", "png");

    // Obtenemos el nombre de la imagen.
    $temp = $_FILES["file"]["name"];

    // Obtenemos la extension.
    //$extension = end($temp);

    //$finfo = finfo_open(FILEINFO_MIME_TYPE);
    //$mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);

    //if ((($mime == "image/gif") || ($mime == "image/jpeg") || ($mime == "image/pjpeg") || ($mime == "image/x-png") || ($mime == "image/png"))
    //&& in_array(strtolower($extension), $allowedExts)) {
        // Generamos un nombre aleatorio.
        //$name = sha1(microtime()) . "." . $extension;

        // Guardamos el archivo en la direccion deseada.
        move_uploaded_file($_FILES["file"]["tmp_name"], "files/uploads/" . $name);

        // Generate response.
        //$response = new StdClass;
        //$response->link = "files/uploads/" . $name;
        //echo stripslashes(json_encode($response));
    //}

?>