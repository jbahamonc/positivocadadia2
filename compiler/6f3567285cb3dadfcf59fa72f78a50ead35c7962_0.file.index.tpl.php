<?php
/* Smarty version 3.1.29, created on 2016-12-29 19:24:14
  from "C:\xampp\htdocs\positivocadadia-project\styles\templates\home\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_586554cec0b8d5_08249124',
  'file_dependency' => 
  array (
    '6f3567285cb3dadfcf59fa72f78a50ead35c7962' => 
    array (
      0 => 'C:\\xampp\\htdocs\\positivocadadia-project\\styles\\templates\\home\\index.tpl',
      1 => 1483035852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/header.tpl' => 1,
    'file:overall/footer.tpl' => 1,
  ),
),false)) {
function content_586554cec0b8d5_08249124 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:overall/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
	<section class="main-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-xs-12">
					<div class="row">				
			       		<!--Card-->
			            <div class="col-md-6 col-xs-12">
			            	<?php if (!empty($_smarty_tpl->tpl_vars['news1']->value)) {?>
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
					                        <a href="news/<?php echo $_smarty_tpl->tpl_vars['n']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['id_news'];?>
.html"><img src="<?php echo $_smarty_tpl->tpl_vars['n']->value['img_prin'];?>
" class="img-responsive" width="100%"></a>
					                    </div>
					                    <!-- Button -->
					                    <a class="btn-floating btn-large waves-effect waves-light light-blue" href="news/<?php echo $_smarty_tpl->tpl_vars['n']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n']->value['id_news'];?>
.html"><i class="ion-ios-arrow-right"></i></a>
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
					                            <li><i class="ion-social-facebook"></i> <?php echo $_smarty_tpl->tpl_vars['n']->value['facebook'];?>
</li>
					                            <li><i class="ion-social-twitter"> </i> <?php echo $_smarty_tpl->tpl_vars['n']->value['twitter'];?>
</li>
					                            <li><i class="ion-social-googleplus"> </i> <?php echo $_smarty_tpl->tpl_vars['n']->value['google_plus'];?>
</li>
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
							<?php } else { ?>
								<h4>No hay noticias cargadas</h4>
							<?php }?>
			            </div>
			            <!--/.Card-->   
			            <!--adsense-->
			            <div class="col-md-6 col-xs-12">		
							<?php if (!empty($_smarty_tpl->tpl_vars['news2']->value)) {?>
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
					                        <a href="news/<?php echo $_smarty_tpl->tpl_vars['n2']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['n2']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n2']->value['id_news'];?>
.html"><img src="<?php echo $_smarty_tpl->tpl_vars['n2']->value['img_prin'];?>
" class="img-responsive"></a>
					                    </div>
					                    <!-- Button -->
					                    <a class="btn-floating btn-large waves-effect waves-light light-blue" href="news/<?php echo $_smarty_tpl->tpl_vars['n2']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['n2']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['n2']->value['id_news'];?>
.html"><i class="ion-ios-arrow-right"></i></a>
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
					                            <li><i class="ion-social-facebook"></i> <?php echo $_smarty_tpl->tpl_vars['n2']->value['facebook'];?>
</li>
					                            <li><i class="ion-social-twitter"> </i> <?php echo $_smarty_tpl->tpl_vars['n2']->value['twitter'];?>
</li>
					                            <li><i class="ion-social-googleplus"> </i> <?php echo $_smarty_tpl->tpl_vars['n2']->value['google_plus'];?>
</li>
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
							<?php }?>
			            </div>
			            <!--/.adsense-->    
					</div>
					<div class="row text-center">
						<div class="btn-group" role="group" aria-label="...">
							<?php if (!isset($_GET['pag'])) {?>						    	
							    <?php if ($_smarty_tpl->tpl_vars['paginas']->value > 1) {?>
							    	<a href="#" class="btn blue white-text disabled">Anterior</a>
							    	<?php if (isset($_GET['categoria'])) {?>
										<a href="news/<?php echo $_GET['categoria'];?>
/2" class="btn blue white-text">Siguiente</a>
							    	<?php } else { ?>
							    		<a href="pag/2" class="btn blue white-text">Siguiente</a>
							    	<?php }?>
							    <?php } else { ?>	
							    	<a href="#" class="btn blue white-text hide">Siguiente</a>	
							    <?php }?>	
							<?php } else { ?>
								<?php if ($_GET['pag'] <= 1) {?>
									<a href="#" class="btn blue white-text disabled">Anterior</a>
								<?php } else { ?>
									<?php if (isset($_GET['categoria'])) {?>
										<a href="news/<?php echo $_GET['categoria'];?>
/<?php echo $_GET['pag']-1;?>
" class="btn blue white-text">Anterior</a>
									<?php } else { ?>
									<a href="pag/<?php echo $_GET['pag']-1;?>
" class="btn blue white-text">Anterior</a>
									<?php }?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['paginas']->value > 1 && $_GET['pag'] >= 1 && $_GET['pag'] < $_smarty_tpl->tpl_vars['paginas']->value) {?>
									<?php if (isset($_GET['categoria'])) {?>
										<a href="news/<?php echo $_GET['categoria'];?>
/<?php echo $_GET['pag']+1;?>
" class="btn blue white-text">Siguiente</a>
									<?php } else { ?>
										<a href="pag/<?php echo $_GET['pag']+1;?>
" class="btn blue white-text">Siguiente</a>
									<?php }?>
								<?php } else { ?>
									<a href="#" class="btn blue white-text disabled">Siguiente</a>
								<?php }?>
								
						    <?php }?>
						</div>
					</div>
					<!-- Noticias aleatorias -->
					<div class="row">
						<?php if (!empty($_smarty_tpl->tpl_vars['newsBottom']->value)) {?>
							<hr>
							<h5 style="margin-bottom: 2rem;padding-left: 1rem !important;">Mas noticias de interes</h5>
							<?php
$_from = $_smarty_tpl->tpl_vars['newsBottom']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_d_2_saved_item = isset($_smarty_tpl->tpl_vars['d']) ? $_smarty_tpl->tpl_vars['d'] : false;
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$__foreach_d_2_saved_local_item = $_smarty_tpl->tpl_vars['d'];
?>
							<div class="col-md-3 col-xs-12" style="margin-bottom: 10px;">
								<div class="box-content-news">
									<div class="panel-heading">
										<div class="head white-text">
											<span style="text-transform: uppercase;"><?php echo $_smarty_tpl->tpl_vars['d']->value['categoria'];?>
</span>
										</div>
									</div>
									<div class="panel-body">
										<h6><?php echo $_smarty_tpl->tpl_vars['d']->value['titulo'];?>
</h6>
										<div><span class="ion-ios-calendar-outline"> &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['fecha'];?>
</span></div>
										<p><?php echo $_smarty_tpl->tpl_vars['d']->value['resumen'];?>
 </p>
										<a class="btn btn-popular" href="news/<?php echo $_smarty_tpl->tpl_vars['d']->value['categoria'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['url'];?>
_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
.html">Leer mas</a>
									</div>
								</div>
							</div>
							<?php
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_2_saved_local_item;
}
if ($__foreach_d_2_saved_item) {
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_2_saved_item;
}
?>
						<?php }?>
					</div>
				</div>
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
					            	<?php if (!empty($_smarty_tpl->tpl_vars['pop']->value)) {?>
						                <?php
$_from = $_smarty_tpl->tpl_vars['pop']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_3_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_3_saved_local_item = $_smarty_tpl->tpl_vars['p'];
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
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_3_saved_local_item;
}
if ($__foreach_p_3_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_3_saved_item;
}
?>
						            <?php } else { ?>
						            	<h6>No hay noticias</h6>
						            <?php }?>
					            </div>
					        </div>
					        <!--Second tab-->
					        <div id="menu2" class="tab-pane fade">
					            <!--Horizontal listing-->
					            <div class="horizontal">
					            	<?php if (!empty($_smarty_tpl->tpl_vars['rnd']->value)) {?>
						            	<?php
$_from = $_smarty_tpl->tpl_vars['rnd']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_o_4_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_o_4_saved_local_item = $_smarty_tpl->tpl_vars['o'];
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
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_4_saved_local_item;
}
if ($__foreach_o_4_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_o_4_saved_item;
}
?>
						            <?php } else { ?>
						            	<h6>No hay noticias</h6>
						            <?php }?>
					            </div>
					        </div>
					    </div>
					</div>
					<!-- widget adsense -->
					<!-- widget -->
					<div class="widget">
					    <div class="card-panel text-center">
					    	<?php if (isset($_GET['categoria']) && $_GET['categoria'] == "noticias") {?>
					    	<!-- widget google plus -->
							<div class="g-page" data-width="250" data-href="https://plus.google.com/u/0/106974087983199973382" data-rel="publisher"></div>
							<!-- widget YouTube -->
							<div class="g-ytsubscribe" data-channelid="UCboqy3nRqWuUX0K3i31Ib5Q" data-layout="full" data-count="default" style="margin-top:15px;"></div>
							<?php } else { ?>
							<!-- widget google plus -->
							<div class="g-page" data-width="250" data-href="https://plus.google.com/117366625607320297721" data-rel="publisher"></div>
							<!-- widget YouTube -->
							<div class="g-ytsubscribe" data-channelid="UCYCNgMLom4u6lGlIfxXqTfg" data-layout="full" data-count="default" style="margin-top:15px;"></div>
							<?php }?>
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
