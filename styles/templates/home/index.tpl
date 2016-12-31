{include 'overall/header.tpl'}
<main>
	<section class="main-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-xs-12">
					<div class="row">				
			       		<!--Card-->
			            <div class="col-md-6 col-xs-12">
			            	{if !empty($news1)}
								{foreach from=$news1 item=n}
					                <div class="elegant-card z-depth-1 hoverable">
					                    <!-- Image wrapper -->
					                    <div class="card-up view overlay hm-white-slight">
					                        <h5 class="card-label"> <span class="label light-blue">{$n.categoria}</span></h5>
					                        <a href="news/{$n.categoria}/{$n.url}_{$n.id_news}.html"><img src="{$n.img_prin}" class="img-responsive" width="100%"></a>
					                    </div>
					                    <!-- Button -->
					                    <a class="btn-floating btn-large waves-effect waves-light light-blue" href="news/{$n.categoria}/{$n.url}_{$n.id_news}.html"><i class="ion-ios-arrow-right"></i></a>
					                    <!-- Content -->
					                    <div class="card-content">
					                        <h5>{$n.titulo}</h5>
					                        <p>{$n.resumen}</p>
					                    </div>
					                    <!-- Footer -->
					                    <div class="card-footer light-blue darken-2">
					                        <ul class="list-inline">
					                            <li><i class="fa fa-clock-o"></i>{$n.fecha}</li>
					                            <li><i class="ion-social-facebook"></i> {$n.facebook}</li>
					                            <li><i class="ion-social-twitter"> </i> {$n.twitter}</li>
					                            <li><i class="ion-social-googleplus"> </i> {$n.google_plus}</li>
					                        </ul>
					                    </div>
					                </div>
								{/foreach}
							{else}
								<h4>No hay noticias cargadas</h4>
							{/if}
			            </div>
			            <!--/.Card-->   
			            <!--adsense-->
			            <div class="col-md-6 col-xs-12">		
							{if !empty($news2)}
								{foreach from=$news2 item=n2}
					                <div class="elegant-card z-depth-1 hoverable">
					                    <!-- Image wrapper -->
					                    <div class="card-up view overlay hm-white-slight">
					                        <h5 class="card-label"><span class="label light-blue">{$n2.categoria}</span></h5>
					                        <a href="news/{$n2.categoria}/{$n2.url}_{$n2.id_news}.html"><img src="{$n2.img_prin}" class="img-responsive"></a>
					                    </div>
					                    <!-- Button -->
					                    <a class="btn-floating btn-large waves-effect waves-light light-blue" href="news/{$n2.categoria}/{$n2.url}_{$n2.id_news}.html"><i class="ion-ios-arrow-right"></i></a>
					                    <!-- Content -->
					                    <div class="card-content">
					                        <h5>{$n2.titulo}</h5>
					                        <p>{$n2.resumen}</p>
					                    </div>
					                    <!-- Footer -->
					                    <div class="card-footer light-blue darken-2">
					                        <ul class="list-inline">
					                            <li><i class="fa fa-clock-o"></i>{$n2.fecha}</li>
					                            <li><i class="ion-social-facebook"></i> {$n2.facebook}</li>
					                            <li><i class="ion-social-twitter"> </i> {$n2.twitter}</li>
					                            <li><i class="ion-social-googleplus"> </i> {$n2.google_plus}</li>
					                        </ul>
					                    </div>
					                </div>
								{/foreach}
							{/if}
			            </div>
			            <!--/.adsense-->    
					</div>
					<div class="row text-center">
						<div class="btn-group" role="group" aria-label="...">
							{if !isset($smarty.get.pag)}						    	
							    {if $paginas > 1}
							    	<a href="#" class="btn blue white-text disabled">Anterior</a>
							    	{if isset($smarty.get.categoria)}
										<a href="news/{$smarty.get.categoria}/2" class="btn blue white-text">Siguiente</a>
							    	{else}
							    		<a href="pag/2" class="btn blue white-text">Siguiente</a>
							    	{/if}
							    {else}	
							    	<a href="#" class="btn blue white-text hide">Siguiente</a>	
							    {/if}	
							{else}
								{if $smarty.get.pag <= 1}
									<a href="#" class="btn blue white-text disabled">Anterior</a>
								{else}
									{if isset($smarty.get.categoria)}
										<a href="news/{$smarty.get.categoria}/{$smarty.get.pag - 1}" class="btn blue white-text">Anterior</a>
									{else}
									<a href="pag/{$smarty.get.pag - 1}" class="btn blue white-text">Anterior</a>
									{/if}
								{/if}
								{if $paginas > 1 and $smarty.get.pag >= 1 and $smarty.get.pag < $paginas}
									{if isset($smarty.get.categoria)}
										<a href="news/{$smarty.get.categoria}/{$smarty.get.pag + 1}" class="btn blue white-text">Siguiente</a>
									{else}
										<a href="pag/{$smarty.get.pag + 1}" class="btn blue white-text">Siguiente</a>
									{/if}
								{else}
									<a href="#" class="btn blue white-text disabled">next</a>
								{/if}
								
						    {/if}
						</div>
					</div>
					<!-- Noticias aleatorias -->
					<div class="row">
						{if !empty($newsBottom)}
							<hr>
							<h5 style="margin-bottom: 2rem;padding-left: 1rem !important;">Mas noticias de interes</h5>
							{foreach from=$newsBottom item=d}
							<div class="col-md-3 col-xs-12" style="margin-bottom: 10px;">
								<div class="box-content-news">
									<div class="panel-heading">
										<div class="head white-text">
											<span style="text-transform: uppercase;">{$d.categoria}</span>
										</div>
									</div>
									<div class="panel-body">
										<h6>{$d.titulo}</h6>
										<div><span class="ion-ios-calendar-outline"> &nbsp;&nbsp;{$d.fecha}</span></div>
										<p>{$d.resumen} </p>
										<a class="btn btn-popular" href="news/{$d.categoria}/{$d.url}_{$d.id}.html">Leer mas</a>
									</div>
								</div>
							</div>
							{/foreach}
						{/if}
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
					            	{if !empty($pop)}
						                {foreach from=$pop item=p}
							                <!--row-->
							                <a href="news/{$p.categoria}/{$p.url}_{$p.id}.html">
							                    <div class="row hoverable">
							                        <div class="col-sm-4 col-xs-12">
							                            <img src="{$p.img}" class="img-responsive z-depth-2">
							                        </div>
							                        <div class="col-sm-8 col-xs-12">
							                            <h6 class="title">{$p.titulo}</h6>
							                            <ul class="list-inline item-details">
							                                <li><i class="ion-ios-calendar-outline"> {$p.fecha}</i></li>
							                                <li><i class="ion-ios-eye-outline"> {$p.views}</i></li>
							                            </ul>
							                        </div>
							                    </div>
							                </a>
						                {/foreach}
						            {else}
						            	<h6>No hay noticias</h6>
						            {/if}
					            </div>
					        </div>
					        <!--Second tab-->
					        <div id="menu2" class="tab-pane fade">
					            <!--Horizontal listing-->
					            <div class="horizontal">
					            	{if !empty($rnd)}
						            	{foreach from=$rnd item=o}
						                	<!--row-->
							                <a href="news/{$o.categoria}/{$o.url}_{$o.id}.html">
							                    <div class="row hoverable">
							                        <div class="col-sm-4 col-xs-12">
							                            <img src="{$o.img}" class="img-responsive z-depth-2">
							                        </div>
							                        <div class="col-sm-8 col-xs-12">
							                            <h6 class="title">{$o.titulo}</h6>
							                            <ul class="list-inline item-details">
							                                <li><i class="ion-ios-calendar-outline"> {$o.fecha}</i></li>
							                                <li><i class="ion-ios-eye-outline"> {$o.views}</i></li>
							                            </ul>
							                        </div>
							                    </div>
							                </a>
						                {/foreach}
						            {else}
						            	<h6>No hay noticias</h6>
						            {/if}
					            </div>
					        </div>
					    </div>
					</div>
					<!-- widget adsense -->
					<!-- widget -->
					<div class="widget">
					    <div class="card-panel text-center">
					    	{if isset($smarty.get.categoria) and $smarty.get.categoria == "noticias"}
					    	<!-- widget google plus -->
							<div class="g-page" data-width="250" data-href="https://plus.google.com/u/0/106974087983199973382" data-rel="publisher"></div>
							<!-- widget YouTube -->
							<div class="g-ytsubscribe" data-channelid="UCboqy3nRqWuUX0K3i31Ib5Q" data-layout="full" data-count="default" style="margin-top:15px;"></div>
							{else}
							<!-- widget google plus -->
							<div class="g-page" data-width="250" data-href="https://plus.google.com/117366625607320297721" data-rel="publisher"></div>
							<!-- widget YouTube -->
							<div class="g-ytsubscribe" data-channelid="UCYCNgMLom4u6lGlIfxXqTfg" data-layout="full" data-count="default" style="margin-top:15px;"></div>
							{/if}
					    </div>					    
					</div>
				</div>
			</div>			
		</div>
	</section>
</main>
{include 'overall/footer.tpl'}