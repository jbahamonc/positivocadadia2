{include 'overall/header.tpl'}
<div class="main-wrapper">
	<div class="container-fluid">
		<div class="row">
			<!-- Columna noticia -->
			<div class="col-lg-8 col-xs-12">
			{if isset($noti)}
				<!-- Content img noticia -->
				<div class="z-depth-1 center">
					<a><img width="100%" src="{$noti.file_principal}" alt=""></a>
				</div>
				<!-- seccion titulo -->
				<div class="card-panel text-center">
					<h3>{$noti.titulo}</h3>
					<div class="metadata">
						<span class=" publicado ion-ios-clock-outline"> {$noti.fecha}</span>	
						<span class=" publicado ion-eye"> {$noti.views}</span>				
					</div>
					<hr>
					<div class="text-center hidden-xs">
                        <a class="btn-floating btn-large fb-bg waves-effect waves-light shared" data-type="facebook"><i class="ion-social-facebook"> </i></a>
                        <a class="btn-floating btn-large tw-bg waves-effect waves-light shared" data-type="twitter"><i class="ion-social-twitter"> </i></a>
                        <a class="btn-floating btn-large gplus-bg waves-effect waves-light shared" data-type="google_plus"><i class="ion-social-googleplus"> </i></a>
                    </div>
				</div>
				<!-- desc noticia -->
				<p class="medium-500">{$noti.resumen}</p>
				<div id="contenido-news">{$noti.contenido}</div>
				<div class="card-panel">
					<div class="fb-comments" data-href="http://www.topdelasemana.com/news/{$noti.nombre}/{$noti.url}_{$noti.id_noticia}.html" data-width="100%" data-numposts="5"></div>
				</div>
			{/if}
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
				            </div>
				        </div>
				        <!--Second tab-->
				        <div id="menu2" class="tab-pane fade">
				            <!--Horizontal listing-->
				            <div class="horizontal">
				            	{foreach from=$old item=o}
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
						{if isset($noti)}
							{foreach from=$noti.tags item=t}
								<span class="chip">{$t}</span>
							{/foreach}
						{/if}
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
{include 'overall/footer.tpl'}
<script>
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
</script>
<script>
	$(function(){
		var height = $("#contenido-news").height();
		var nodPub = $("#publicidad");
		if (height < 1200) {
			nodPub.hide();
		}
	});
</script>