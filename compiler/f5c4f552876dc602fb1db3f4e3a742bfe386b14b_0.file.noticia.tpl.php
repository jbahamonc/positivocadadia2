<?php
/* Smarty version 3.1.29, created on 2016-05-16 00:41:46
  from "C:\xampp\htdocs\Website-Alexander\site\styles\templates\news\noticia.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5738fb2ae0dd86_82335945',
  'file_dependency' => 
  array (
    'f5c4f552876dc602fb1db3f4e3a742bfe386b14b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\site\\styles\\templates\\news\\noticia.tpl',
      1 => 1463342711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/header.tpl' => 1,
    'file:overall/footer.tpl' => 1,
  ),
),false)) {
function content_5738fb2ae0dd86_82335945 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main-wrapper">
	<div class="container-fluid">
		<div class="row">
			<!-- Columna noticia -->
			<div class="col-lg-8">
			<?php if (isset($_smarty_tpl->tpl_vars['noticia']->value)) {?>
				<!-- Content img noticia -->
				<div class="z-depth-1 center">
					<a><img width="100%" height="400" src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
" alt=""></a>
				</div>
				<!-- seccion titulo -->
				<div class="card-panel text-center hoverable">
					<h3><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</h3>
					<div class="metadata">
						<span class=" publicado ion-ios-clock-outline"> <?php echo $_smarty_tpl->tpl_vars['noticia']->value['fecha'];?>
</span>	
						<span class=" publicado ion-eye"> <?php echo $_smarty_tpl->tpl_vars['noticia']->value['views'];?>
</span>				
					</div>
					<hr>
					<div class="text-center hidden-xs">
                        <a class="btn-floating btn-large fb-bg waves-effect waves-light"><i class="ion-social-facebook"> </i></a>
                        <a class="btn-floating btn-large tw-bg waves-effect waves-light"><i class="ion-social-twitter"> </i></a>
                        <a class="btn-floating btn-large gplus-bg waves-effect waves-light"><i class="ion-social-googleplus"> </i></a>
                    </div>
				</div>
				<!-- desc noticia -->
				<p class="medium-500"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['resumen'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</p>
				<!-- publicidad -->
				<div class="adsense-publicidad">
					<?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
						<!-- derecha -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-0938300468188887"
						     data-ad-slot="4485414743"
						     data-ad-format="auto"></ins>
						<?php echo '<script'; ?>
>
						(adsbygoogle = window.adsbygoogle || []).push({});
					<?php echo '</script'; ?>
>
				</div>
				<!-- comentarios -->
				<?php if (isset($_smarty_tpl->tpl_vars['ncon']->value)) {?>
				<div class="card-panel no-padding comments">
					<h6 class="text-center title">Comentarios <span class="count-comments"><?php echo $_smarty_tpl->tpl_vars['ncon']->value;?>
</span></h6>
					<hr>
					<div class="container-fluid">
						<?php
$_from = $_smarty_tpl->tpl_vars['comn']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
						<div class="row hoverable">
							<div class="col-sm-2">
								<img width="100" height="100" src="styles/img/<?php echo $_smarty_tpl->tpl_vars['c']->value['avatar'];?>
" class="img-responsive img-circle">
							</div>
							<div class="col-sm-10">
								<h6 class="title"><b><?php echo $_smarty_tpl->tpl_vars['c']->value['autor'];?>
</b></h6>
								<span class="ion-edit"> <?php echo $_smarty_tpl->tpl_vars['c']->value['fecha'];?>
</span>
								<p><?php echo $_smarty_tpl->tpl_vars['c']->value['comentario'];?>
</p>
							</div>
						</div>
						<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_local_item;
}
if ($__foreach_c_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_item;
}
?>
					</div>
				</div>
				<?php } else { ?>
				<div class="card-panel text-center comments">
					<h4>No hay comentarios</h4>
				</div>
				<?php }?>
			<?php }?>
				<!-- formulario comentario -->
				<?php if (isset($_SESSION['user'])) {?>
				<div class="card-panel reply-section hoverable">
                    <div class="row">
                        <h5 class="text-center">comenta algo</h5>
                        <hr>
                        <form class="col-md-12">
                            <div class="input-field">
                                <i class="ion-android-person prefix"></i>
                                <input id="reply-name" class="validate" type="text">
                                <label for="reply-name">Nombre</label>
                            </div>
                            <div class="input-field">
                                <i class="ion-email prefix"></i>
                                <input id="reply-mail" class="validate" type="email">
                                <label for="reply-mail">email</label>
                            </div>
                            <div class="input-field">
                                <input id="reply-www" class="validate" type="file">
                            </div>
                            <div class="input-field">
                                <i class="ion-edit prefix"></i>
                                <textarea id="reply-text" class="materialize-textarea"></textarea>
                                <label for="reply-text">Opina algo...</label>
                            </div>
                        </form>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
				<div class="card-panel hoverable">
					<h4 class="text-center">Inicia sesion para comentar</h4>
				</div>
				<?php }?>
			</div>
			<!-- Columna izquierda -->
			<div class="col-lg-4">
				<!-- widget news -->
				<div class="widget">
				    <!--Tabs navigation-->
				    <ul class="nav nav-tabs tabs-2">
				        <li class="active"><a data-toggle="tab" href="#home">Populares</a></li>
				        <li><a data-toggle="tab" href="#menu2">aleatorias</a></li>
				    </ul>
				    <!--Tabs content-->
				    <div class="tab-content card-panel">
				        <!--First tab-->
				        <div id="home" class="tab-pane fade in active">
				            <!--Horizontal listing-->
				            <div class="horizontal">
				                <?php
$_from = $_smarty_tpl->tpl_vars['pop']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_1_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_1_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
					                <!--row-->
					                <a href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['p']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
">
					                    <div class="row hoverable">
					                        <div class="col-sm-4">
					                            <img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['img'];?>
" class="img-responsive z-depth-2">
					                        </div>
					                        <div class="col-sm-8">
					                            <h6 class="title"><?php echo $_smarty_tpl->tpl_vars['p']->value['titulo'];?>
</h6>
					                            <ul class="list-inline item-details">
					                                <li><i class="ion-ios-calendar-outline"> <?php echo $_smarty_tpl->tpl_vars['p']->value['fecha'];?>
</i></li>
					                                <li><i class="ion-ios-eye-outline"> <?php echo $_smarty_tpl->tpl_vars['p']->value['views'];?>
</i></li>
					                            </ul>
					                        </div>
					                    </div>
					                </a>
				                <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_1_saved_local_item;
}
if ($__foreach_p_1_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_1_saved_item;
}
?>
				            </div>
				        </div>
				        <!--Second tab-->
				        <div id="menu2" class="tab-pane fade">
				            <!--Horizontal listing-->
				            <div class="horizontal">
				            	<?php
$_from = $_smarty_tpl->tpl_vars['old']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_o_2_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_o_2_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
				                	<!--row-->
					                <a href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['o']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['o']->value['url'];?>
">
					                    <div class="row hoverable">
					                        <div class="col-sm-4">
					                            <img src="<?php echo $_smarty_tpl->tpl_vars['o']->value['img'];?>
" class="img-responsive z-depth-2">
					                        </div>
					                        <div class="col-sm-8">
					                            <h6 class="title"><?php echo $_smarty_tpl->tpl_vars['o']->value['titulo'];?>
</h6>
					                            <ul class="list-inline item-details">
					                                <li><i class="ion-ios-calendar-outline"> <?php echo $_smarty_tpl->tpl_vars['o']->value['fecha'];?>
</i></li>
					                            </ul>
					                        </div>
					                    </div>
					                </a>
				                <?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_2_saved_local_item;
}
if ($__foreach_o_2_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_2_saved_item;
}
?>
				            </div>
				        </div>
				    </div>
				</div>
				<!-- widget adsense -->
				<div class="widget">
				    <div class="card-panel">
				    	<?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
				        <ins class="adsbygoogle"
				             style="display:block"
				             data-ad-client="ca-pub-0938300468188887"
				             data-ad-slot="8247426747"
				             data-ad-format="auto"></ins>
				        <?php echo '<script'; ?>
>(adsbygoogle = window.adsbygoogle || []).push({});<?php echo '</script'; ?>
>
				    </div>
				</div>
				<!-- widget google plus -->
				<div class="widget">
				    <div class="card-panel">
				        <div class="g-person center-block" data-width="400" data-href="//plus.google.com/u/0/108060129332797480114" data-rel="author"></div>
				    </div>
				</div>
			</div>
		</div>		

	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
