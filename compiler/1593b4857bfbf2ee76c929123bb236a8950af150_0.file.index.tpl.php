<?php
/* Smarty version 3.1.29, created on 2016-05-16 00:41:21
  from "C:\xampp\htdocs\Website-Alexander\site\styles\templates\home\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5738fb1154c3d8_62886255',
  'file_dependency' => 
  array (
    '1593b4857bfbf2ee76c929123bb236a8950af150' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\site\\styles\\templates\\home\\index.tpl',
      1 => 1463243736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/header.tpl' => 1,
    'file:overall/footer.tpl' => 1,
  ),
),false)) {
function content_5738fb1154c3d8_62886255 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
	<section class="main-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">				
			       		<!--Card-->
			            <div class="col-md-6">
							<?php
$_from = $_smarty_tpl->tpl_vars['news1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n_0_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_n_0_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?>
				                <div class="elegant-card z-depth-1 hoverable">
				                    <!-- Image wrapper -->
				                    <div class="card-up view overlay hm-white-slight">
				                        <h5 class="card-label"> <span class="label light-blue"><?php echo $_smarty_tpl->tpl_vars['n']->value['categoria'];?>
</span></h5>
				                        <a href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['n']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['id_news'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['n']->value['img_prin'];?>
" class="img-responsive"></a>
				                    </div>
				                    <!-- Button -->
				                    <a class="btn-floating btn-large waves-effect waves-light light-blue" href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['n']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['id_news'];?>
"><i class="ion-ios-arrow-right"></i></a>
				                    <!-- Content -->
				                    <div class="card-content">
				                        <h5><?php echo $_smarty_tpl->tpl_vars['n']->value['titulo'];?>
</h5>
				                        <p><?php echo $_smarty_tpl->tpl_vars['n']->value['resumen'];?>
</p>
				                    </div>
				                    <!-- Footer -->
				                    <div class="card-footer light-blue darken-2">
				                        <ul class="list-inline">
				                            <li><i class="fa fa-clock-o"></i><?php echo $_smarty_tpl->tpl_vars['n']->value['fecha'];?>
</li>
				                            <li><a class="white-text" href="#"><i class="ion-social-facebook"></i> 12</a></li>
				                            <li><a class="white-text" href="#"><i class="ion-social-twitter"> </i> 21</a></li>
				                            <li><a class="white-text" href="#"><i class="ion-social-googleplus"> </i> 5</a></li>
				                        </ul>
				                    </div>
				                </div>
							<?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_local_item;
}
if ($__foreach_n_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_0_saved_item;
}
?>
			            </div>
			            <!--/.Card-->   
			            <!--adsense-->
			            <div class="col-md-6">
			                <?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
							<!-- sas -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-0938300468188887"
							     data-ad-slot="8247426747"
							     data-ad-format="auto"></ins>
							<?php echo '<script'; ?>
>(adsbygoogle = window.adsbygoogle || []).push({});<?php echo '</script'; ?>
>
							<?php
$_from = $_smarty_tpl->tpl_vars['news2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n2_1_saved_item = isset($_smarty_tpl->tpl_vars['n2']) ? $_smarty_tpl->tpl_vars['n2'] : false;
$_smarty_tpl->tpl_vars['n2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n2']->value) {
$_smarty_tpl->tpl_vars['n2']->_loop = true;
$__foreach_n2_1_saved_local_item = $_smarty_tpl->tpl_vars['n2'];
?>
				                <div class="elegant-card z-depth-1 hoverable">
				                    <!-- Image wrapper -->
				                    <div class="card-up view overlay hm-white-slight">
				                        <h5 class="card-label"><span class="label light-blue"><?php echo $_smarty_tpl->tpl_vars['n2']->value['categoria'];?>
</span></h5>
				                        <a href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['n2']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['n2']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n2']->value['id_news'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['n2']->value['img_prin'];?>
" class="img-responsive"></a>
				                    </div>
				                    <!-- Button -->
				                    <a class="btn-floating btn-large waves-effect waves-light light-blue" href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['n2']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['n2']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n2']->value['id_news'];?>
"><i class="ion-ios-arrow-right"></i></a>
				                    <!-- Content -->
				                    <div class="card-content">
				                        <h5><?php echo $_smarty_tpl->tpl_vars['n2']->value['titulo'];?>
</h5>
				                        <p><?php echo $_smarty_tpl->tpl_vars['n2']->value['resumen'];?>
</p>
				                    </div>
				                    <!-- Footer -->
				                    <div class="card-footer light-blue darken-2">
				                        <ul class="list-inline">
				                            <li><i class="fa fa-clock-o"></i><?php echo $_smarty_tpl->tpl_vars['n2']->value['fecha'];?>
</li>
				                            <li><a class="white-text" href="#"><i class="ion-social-facebook"></i> 12</a></li>
				                            <li><a class="white-text" href="#"><i class="ion-social-twitter"> </i> 21</a></li>
				                            <li><a class="white-text" href="#"><i class="ion-social-googleplus"> </i> 5</a></li>
				                        </ul>
				                    </div>
				                </div>
							<?php
$_smarty_tpl->tpl_vars['n2'] = $__foreach_n2_1_saved_local_item;
}
if ($__foreach_n2_1_saved_item) {
$_smarty_tpl->tpl_vars['n2'] = $__foreach_n2_1_saved_item;
}
?>
			            </div>
			            <!--/.adsense-->    
					</div>
				</div>
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
$__foreach_p_2_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_2_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
						                <!--row-->
						                <a href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['p']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
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
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_2_saved_local_item;
}
if ($__foreach_p_2_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_2_saved_item;
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
$__foreach_o_3_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_o_3_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
					                	<!--row-->
						                <a href="?view=contenido&categoria=<?php echo $_smarty_tpl->tpl_vars['o']->value['categoria'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['o']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
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
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_3_saved_local_item;
}
if ($__foreach_o_3_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_3_saved_item;
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
	</section>
</main>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
