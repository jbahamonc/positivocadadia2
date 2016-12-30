<?php  

	$db = new Conexion();
	$cat = $db->query("SELECT * FROM categoria");	
	$template = new Smarty();
	$template->assign("cat",$cat);
	$template->display('admin/admin_panel.tpl');
	$db->liberar($cat);
	$db->close();

?>