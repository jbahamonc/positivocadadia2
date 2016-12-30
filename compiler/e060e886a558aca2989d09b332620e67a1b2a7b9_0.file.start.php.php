<?php
/* Smarty version 3.1.29, created on 2016-05-22 22:57:34
  from "C:\xampp\htdocs\Website-Alexander\core\libs\facebook_login_v.5.0\app\start.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57421d3eeef110_60846696',
  'file_dependency' => 
  array (
    'e060e886a558aca2989d09b332620e67a1b2a7b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\core\\libs\\facebook_login_v.5.0\\app\\start.php',
      1 => 1463950175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57421d3eeef110_60846696 ($_smarty_tpl) {
echo '<?php  

	';?>session_start();
	require '../config-facebook.php';
	require '../vendor/autoload.php';

	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookRequestException;
	use Facebook\GraphUser;
	use Facebook\GraphObject;

	FacebookSession::setDefaultApplication($config['app_id'], $config['app_secret']);
	$helper = new FacebookRedirectLoginHelper('http://localhost:8080/Website-Alexander/?view='.$_GET['contenido'].'&categoria='.$_GET['categoria'].'&id='.$_GET['id']);

	try {
		
		$session = $helper->getSessionFromRedirect();
		if ($session) {
			$_SESSION['user'] = $session->getToken();
		}

	} catch (Exception $e) {
		
	}catch (FacebookRequestException $e) {
		
	}

<?php echo '?>';
}
}
