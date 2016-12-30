<?php
/* Smarty version 3.1.29, created on 2016-05-08 19:44:07
  from "C:\xampp\htdocs\Website-Alexander\styles\templates\overall\toolbar-left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572f7ae76230f3_59585097',
  'file_dependency' => 
  array (
    'c67a40472eece1478754481d076a11f5bb14c49f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Website-Alexander\\styles\\templates\\overall\\toolbar-left.tpl',
      1 => 1462729442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572f7ae76230f3_59585097 ($_smarty_tpl) {
?>
<!-- widget news -->
<div class="widget">
    <!--Tabs navigation-->
    <ul class="nav nav-tabs tabs-3">
        <li class="active"><a data-toggle="tab" href="#home">Populares</a></li>
        <li><a data-toggle="tab" href="#menu1">compartidas</a></li>
        <li><a data-toggle="tab" href="#menu2">mas antiguas</a></li>
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
                <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
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
                                <li><i class="ion-ios-clock"> <?php echo $_smarty_tpl->tpl_vars['p']->value['fecha'];?>
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
        <div id="menu1" class="tab-pane fade">
            <!--Horizontal listing-->
            <div class="horizontal">
                <!--Second row-->
                <a href="">
                    <div class="row hoverable">
                        <div class="col-sm-4">
                            <img src="http://mdbootstrap.com/images/regular/nature/img%20(40).jpg" class="img-responsive z-depth-2">
                        </div>
                        <div class="col-sm-8">
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <ul class="list-inline item-details">
                                <li><i class="ion-ios-clock"> 05/10/2015</i></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <!--Third row-->
                <a href="">
                    <div class="row hoverable">
                        <div class="col-sm-4">
                            <img src="http://mdbootstrap.com/images/regular/nature/img%20(41).jpg" class="img-responsive z-depth-2">
                        </div>
                        <div class="col-sm-8">
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <ul class="list-inline item-details">
                                <li><i class="ion-ios-clock"> 05/10/2015</i></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <!--Fourth row-->
                <a href="">
                    <div class="row hoverable">
                        <div class="col-sm-4">
                            <img src="http://mdbootstrap.com/images/regular/nature/img%20(42).jpg" class="img-responsive z-depth-2">
                        </div>
                        <div class="col-sm-8">
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <ul class="list-inline item-details">
                                <li><i class="ion-ios-clock"> 05/10/2015</i></li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!--Third tab-->
        <div id="menu2" class="tab-pane fade">
            <!--Horizontal listing-->
            <div class="horizontal">
                <!--Second row-->
                <a href="">
                    <div class="row hoverable">
                        <div class="col-sm-4">
                            <img src="http://mdbootstrap.com/images/regular/nature/img%20(43).jpg" class="img-responsive z-depth-2">
                        </div>
                        <div class="col-sm-8">
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <ul class="list-inline item-details">
                                <li><i class="ion-ios-clock"> 05/10/2015</i></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <!--Third row-->
                <a href="">
                    <div class="row hoverable">
                        <div class="col-sm-4">
                            <img src="http://mdbootstrap.com/images/regular/nature/img%20(44).jpg" class="img-responsive z-depth-2">
                        </div>
                        <div class="col-sm-8">
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <ul class="list-inline item-details">
                                <li><i class="ion-ios-clock"> 05/10/2015</i></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="row hoverable">
                        <div class="col-sm-4">
                            <img src="http://mdbootstrap.com/images/regular/nature/img%20(45).jpg" class="img-responsive z-depth-2">
                        </div>
                        <div class="col-sm-8">
                            <h6 class="title">Lorem ipsum dolor</h6>
                            <ul class="list-inline item-details">
                                <li><i class="ion-ios-clock"> 05/10/2015</i></li>
                            </ul>
                        </div>
                    </div>
                </a>
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
</div><?php }
}
