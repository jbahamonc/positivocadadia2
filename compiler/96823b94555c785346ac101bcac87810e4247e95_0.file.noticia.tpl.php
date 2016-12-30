<?php
/* Smarty version 3.1.29, created on 2016-07-24 00:44:51
  from "C:\xampp\htdocs\Website-Alexander\styles\templates\news\noticia.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5793f36315d7a2_40990704',
  'file_dependency' => 
  array (
    '96823b94555c785346ac101bcac87810e4247e95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\styles\\templates\\news\\noticia.tpl',
      1 => 1469047085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/header.tpl' => 1,
    'file:overall/footer.tpl' => 1,
  ),
),false)) {
function content_5793f36315d7a2_40990704 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main-wrapper">
	<div class="container-fluid">
		<div class="row">
			<!-- Columna noticia -->
			<div class="col-lg-8 col-xs-12">
			<?php if (isset($_smarty_tpl->tpl_vars['noti']->value)) {?>
				<!-- Content img noticia -->
				<div class="z-depth-1 center">
					<a><img width="100%" src="<?php echo $_smarty_tpl->tpl_vars['noti']->value['file_principal'];?>
" alt=""></a>
				</div>
				<!-- seccion titulo -->
				<div class="card-panel text-center">
					<h3><?php echo $_smarty_tpl->tpl_vars['noti']->value['titulo'];?>
</h3>
					<div class="metadata">
						<span class=" publicado ion-ios-clock-outline"> <?php echo $_smarty_tpl->tpl_vars['noti']->value['fecha'];?>
</span>	
						<span class=" publicado ion-eye"> <?php echo $_smarty_tpl->tpl_vars['noti']->value['views'];?>
</span>				
					</div>
					<hr>
					<div class="text-center hidden-xs">
                        <a class="btn-floating btn-large fb-bg waves-effect waves-light shared" data-type="facebook"><i class="ion-social-facebook"> </i></a>
                        <a class="btn-floating btn-large tw-bg waves-effect waves-light shared" data-type="twitter"><i class="ion-social-twitter"> </i></a>
                        <a class="btn-floating btn-large gplus-bg waves-effect waves-light shared" data-type="google_plus"><i class="ion-social-googleplus"> </i></a>
                    </div>
				</div>
				<!-- desc noticia -->
				<p class="medium-500"><?php echo $_smarty_tpl->tpl_vars['noti']->value['resumen'];?>
</p>
				<div id="contenido-news"><?php echo $_smarty_tpl->tpl_vars['noti']->value['contenido'];?>
</div>
				<div class="card-panel">
					<div class="fb-comments" data-href="http://www.topdelasemana.com/news/<?php echo $_smarty_tpl->tpl_vars['noti']->value['nombre'];?>
/<?php echo $_smarty_tpl->tpl_vars['noti']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['noti']->value['id_noticia'];?>
.html" data-width="100%" data-numposts="5"></div>
				</div>
			<?php }?>
			</div>
			<!-- Columna izquierda -->
			<div class="col-lg-4 col-xs-12">
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
$__foreach_p_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
					                <!--row-->
					                <a href="news/<?php echo $_smarty_tpl->tpl_vars['p']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
.html">
					                    <div class="row hoverable">
					                        <div class="col-sm-4 col-xs-12">
					                            <img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['img'];?>
" class="img-responsive z-depth-2">
					                        </div>
					                        <div class="col-sm-8 col-xs-12">
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
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_local_item;
}
if ($__foreach_p_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_0_saved_item;
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
$__foreach_o_1_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_o_1_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
				                	<!--row-->
					                <a href="news/<?php echo $_smarty_tpl->tpl_vars['o']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['o']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
.html">
					                    <div class="row hoverable">
					                        <div class="col-sm-4 col-xs-12">
					                            <img src="<?php echo $_smarty_tpl->tpl_vars['o']->value['img'];?>
" class="img-responsive z-depth-2">
					                        </div>
					                        <div class="col-sm-8 col-xs-12">
					                            <h6 class="title"><?php echo $_smarty_tpl->tpl_vars['o']->value['titulo'];?>
</h6>
					                            <ul class="list-inline item-details">
					                                <li><i class="ion-ios-calendar-outline"> <?php echo $_smarty_tpl->tpl_vars['o']->value['fecha'];?>
</i></li>
					                                <li><i class="ion-ios-eye-outline"> <?php echo $_smarty_tpl->tpl_vars['o']->value['views'];?>
</i></li>
					                            </ul>
					                        </div>
					                    </div>
					                </a>
				                <?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_1_saved_local_item;
}
if ($__foreach_o_1_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_1_saved_item;
}
?>
				            </div>
				        </div>
				    </div>
				</div>
				<!-- widget  -->
				<div class="widget">
				    <div class="card-panel text-center">
				    	<!-- widget google plus -->				  
						<div class="g-page" data-width="250" data-href="https://plus.google.com/117366625607320297721" data-rel="publisher"></div>
						<!-- widget YouTube -->
						<div class="g-ytsubscribe" data-channelid="UCYCNgMLom4u6lGlIfxXqTfg" data-layout="full" data-count="default" style="margin-top:15px;"></div>
				    </div>
				</div>
				<!-- tags -->
				<div class="widget">
				    <div class="card-panel">				  
						<?php if (isset($_smarty_tpl->tpl_vars['noti']->value)) {?>
							<?php
$_from = $_smarty_tpl->tpl_vars['noti']->value['tags'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_t_2_saved_item = isset($_smarty_tpl->tpl_vars['t']) ? $_smarty_tpl->tpl_vars['t'] : false;
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$__foreach_t_2_saved_local_item = $_smarty_tpl->tpl_vars['t'];
?>
								<span class="chip"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</span>
							<?php
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_2_saved_local_item;
}
if ($__foreach_t_2_saved_item) {
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_2_saved_item;
}
?>
						<?php }?>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	$(".shared").on('click', function(){
		var type = $(this).attr('data-type');
		var url = document.URL;
		var idUlt = url.split('_')[1];
		var id = idUlt.split('.')[0];
		var urlRed = "";
		//console.log(id);
		$.ajax({
			type: 'POST',
			url: '?view=sharer',
			data: 'id_not='+id+'&type='+type,
			success: function(res){
				if (type == 'facebook') {			
					urlRed = 'http://www.facebook.com/sharer.php?u=';
				} 
				else if (type == 'twitter'){
					urlRed = 'https://twitter.com/?status=Mira esto y mucho mas en ';
				}
				else if (type == 'google_plus'){
					urlRed = 'https://plus.google.com/share?url=';
				}
				window.open(urlRed+encodeURIComponent(url),"Compartir","toolbar=0,status=0,width=626,height=436");
				return false;
			}
		});
	});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(function(){
		var height = $("#contenido-news").height();
		var nodPub = $("#publicidad");
		if (height < 1200) {
			nodPub.hide();
		}
	});
<?php echo '</script'; ?>
><?php }
}
