<?php
/*
    Template Name: Page Home
     */

get_header(); ?>

	
    <div class="main">

        <div class="banner">
            <div class="banner-container">
            <div class="banner-info">
                <div class="banner-logo">
                
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-ondabrava.png">
                </div>

                <div class="banner-anuncios">
			
			<?php
		$args = array(
			'post_type' => 'anuncio',
			'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
			'posts_per_page' => 10,

		);
		$items = new WP_Query($args);
		if ($items->have_posts()) {
			?>
					<div class="anuncio-slider ">
					<?php while ($items->have_posts()) {
						$items->the_post();
					?>
						
					
							
									<?php if (has_post_thumbnail()) :
									$id = get_post_thumbnail_id($post->ID);
									$thumb_url = wp_get_attachment_image_src($id, 'large', true);
								?>
										
										
										<div class="anuncio-slide">
                                            <?php if(rwmb_meta('rw_anuncio_url')) : ?>
                                                <a href="<?php echo esc_url(rwmb_meta('rw_anuncio_url')); ?>" target="_blank">
                                                    <img src="<?php echo esc_url($thumb_url[0]) ?>" alt="<?php the_title() ?>">
                                                </a>
                                            <?php else : ?>
                                              
                                                 <img src="<?php echo esc_url($thumb_url[0]) ?>" alt="<?php the_title() ?>">
                                                
                                            <?php endif ?>
											
										</div>
											
										
									<?php endif; ?>
								
									
								
						
							
										
										<?php

								} ?>
						</div>
				
					


						<?php 
				}
				?>
            </div>
            

            <div class="player">
                <div class="player-container">
                <?php dynamic_sidebar('sidebar-player'); ?>

                
                    <div id="player">
                        
                            <div id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==" class="mytuner-widget" data-target="401842" data-requires_initialization="true" data-autoplay="true" data-hidehistory="false" style="width: 100%; max-width: 100%; overflow: hidden; max-height: 500px; border: 1px solid rgb(255, 255, 255); border-top-left-radius: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; border-bottom-left-radius: 6px;"><style type="text/css"> .mytuner-widget { all: initial; display: block; color: #3D3D3D; } .mytuner-widget, .mytuner-widget * { box-sizing: border-box; font-family: sans-serif; } .main-play-button { padding: 5px; border-radius: 20px; width: 40px; height: 40px; float: left; margin-left: 10px; margin-right: 15px; margin-top: 12.5px; cursor: pointer; background-color: #FFF; box-shadow: 1px 2px 6px -3px black; display: inline-block; } .main-play-button:hover { background-color: #EEE; } .main-play-button.disabled { filter: grayscale(1); cursor: not-allowed; } .main-play-button div { background: url("https://mytuner-radio.com/static/icons/widgets/BT_Play/BT_Play@2x.png") no-repeat center; background-size: 16px; width: 28px; height: 28px; margin-left: 3px; } .main-play-button.loading div { background: url("https://mytuner.global.ssl.fastly.net/static/images/sprite-loading.gif") no-repeat center; filter: grayscale(1); background-size: 28px; margin-left: 2px; } .main-play-button.playing div { background: url("https://mytuner-radio.com/static/icons/widgets/BT_Pause/BT_Pause@2x.png") no-repeat center; background-size: 16px; margin-left: 2px; } .main-play-button.error div { background: url("https://mytuner-radio.com/static/icons/widgets/BT_Error/erro@2x.png") no-repeat center; background-size: 16px; margin-left: 0; } .play-button { background: url("https://mytuner-radio.com/static/icons/widgets/BT_Play/BT_Play.png") no-repeat center; width: 40px; height: 40px; cursor: pointer; display: inline-flex; align-items: center; margin: auto 4px auto 19px; /* align with radio logo */ } .play-button.loading { background: url("https://mytuner.global.ssl.fastly.net/static/images/sprite-loading.gif") no-repeat center; filter: grayscale(1); background-size: 28px; } .play-button.playing { background: url("https://mytuner-radio.com/static/icons/widgets/BT_Pause/BT_Pause.png") no-repeat center; } .play-button.error { background: url("https://mytuner-radio.com/static/icons/widgets/BT_Error/erro.png") no-repeat center; background-size: 15px; } .play-button.disabled { opacity: 0.3; } .play-button.disabled:hover { cursor: not-allowed; } input[type=range][orient=vertical] { writing-mode: bt-lr; /* IE */ -webkit-appearance: slider-vertical; /* WebKit */ width: 8px; padding: 0 5px; } .volume-controls { width: 35px; height: 35px; display: inline-block; position: absolute; margin-left: 5px; margin-top: 14px; padding-top: 0; border-radius: 20px; box-sizing: content-box !important; z-index: 10; /* animation */ border: 1px solid transparent; transition: background 0.5s, padding 0.5s, margin 0.5s, border 0.5s; overflow: hidden; } .volume-controls:hover { padding-top: 140px; /* add original margin */ margin-top: -126px; background-color: #F2F2F2; border: 1px solid grey; transition: background 0.5s, padding 0.5s, margin 0.5s; } .volume-controls:hover > .volume-control { display: block; } .volume-controls .volume-control { opacity: 0; margin-top: -126px; margin-left: 13px; position: absolute; transition: 0.5s all; } .volume-controls:hover .volume-control { opacity: 1; } .volume-controls .volume-indicator { cursor: pointer; display: block; } .player-radio-link { width: calc(100% - 65px - 84px - 37px - 12px); } .player-radio-name { width: calc(100% - 74px - 10px); } .player-mytuner-logo { margin-left: 47px; } @media (max-width: 480px) { .player-radio-link { width: calc(100% - 65px - 84px - 12px); } .player-mytuner-logo { margin-left: 10px; } .volume-controls { display: none; } } </style><div id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==top-bar" style="background-color: rgb(0, 0, 0); height: 75px; width: 100%; display: block; padding: 5px; line-height: 65px; background-position: initial initial; background-repeat: initial initial;"><div id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==play-button" class="main-play-button disabled" data-id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ=="><div class="play-image"></div></div><a class="player-radio-link" href="https://mytuner-radio.com/es/emisora/onda-brava-401842/?utm_source=widget&utm_medium=player" rel="noopener" style="height: 100%; display: inline-block; line-height: 65px; cursor: pointer;"><img src="https://mytuner.global.ssl.fastly.net/media/tvos_radios/FehgU25FVs.png" alt="Onda Brava" style="float: left; height: 74px; margin-top: -5px; box-shadow: black 0px 0px 3px -1px;"><span class="player-radio-name" style="margin-left: 10px; color: rgb(255, 0, 0); font-weight: bold; font-size: 20px; float: left; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Onda Brava</span></a><div class="volume-controls"><input id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==volume-control" class="volume-control slider" max="100" min="1" orient="vertical" type="range" value="100"><svg id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==volume-indicator" class="volume-indicator" height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="fill: grey; margin: 2px;"><path d="M3 10v4c0 .55.45 1 1 1h3l3.29 3.29c.63.63 1.71.18 1.71-.71V6.41c0-.89-1.08-1.34-1.71-.71L7 9H4c-.55 0-1 .45-1 1zm13.5 2c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 4.45v.2c0 .38.25.71.6.85C17.18 6.53 19 9.06 19 12s-1.82 5.47-4.4 6.5c-.36.14-.6.47-.6.85v.2c0 .63.63 1.07 1.21.85C18.6 19.11 21 15.84 21 12s-2.4-7.11-5.79-8.4c-.58-.23-1.21.22-1.21.85z"></path></svg></div><a class="player-mytuner-logo" href="https://mytuner-radio.com?utm_source=widget&utm_medium=player" rel="noopener" style="display: inline-block; vertical-align: top;"><img src="https://mytuner-radio.com/static/icons/widgets/MyTuner_Logo/MyTunerLogo_Normal.png" alt="Listen on myTuner radio!" style="height: 36px; width: 84px; vertical-align: middle;"></a></div><ul id="K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==song-history" data-border="1" data-bordercolor="#ffffff" style="width: 100%; background-color: rgb(238, 238, 238); max-height: calc(415px); padding: 0px; margin: 0px; overflow-y: scroll;"></ul><script>
                            // var widget_id = widget_id || "K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==";
                            var mytuner_scripts = mytuner_scripts || {};
                            mytuner_scripts["player-v1.js_queue"] = mytuner_scripts["player-v1.js_queue"] || [];
                            if (mytuner_scripts["player-v1.js-imported"] == undefined) {
                                mytuner_scripts["player-v1.js-imported"] = false;
                                mytuner_scripts["player-v1.js"] = function(){};
                                var s = document.createElement("script");
                                s.type = "text/javascript";
                                s.src = "https://mytuner-radio.com/static/js/widgets/player-v1.js";
                                s.defer = true;
                                if (s.readyState){  //IE
                                    s.onreadystatechange = function(){
                                        if (s.readyState == "loaded" || s.readyState == "complete"){
                                            s.onreadystatechange = null;
                                            runQueue();
                                        }
                                    };
                                } else {  //Others
                                    s.onload = function(){ runQueue(); };
                                }
                                document.getElementsByTagName('head')[0].appendChild(s);

                                function runQueue() {
                                    mytuner_scripts["player-v1.js_queue"].forEach(function(func) {
                                        func();
                                    });
                                }
                                mytuner_scripts["player-v1.js_queue"].push(function(){mytuner_scripts["player-v1.js"]("K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==")});
                            } else {
                                let widget = document.getElementById("K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==");
                                if (widget && widget.dataset.requires_initialization === "true") {
                                    if (mytuner_scripts["player-v1.js-imported"]) {
                                        mytuner_scripts["player-v1.js"]("K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==");
                                        widget.dataset.requires_initialization = "false";
                                    } else {
                                        mytuner_scripts["player-v1.js_queue"].push(function(){
                                            mytuner_scripts["player-v1.js"]("K23DkMODwqtJT0NCIj/DnEvDomLDmUt7W8OYaQ==");
                                            widget.dataset.requires_initialization = "false";
                                        });
                                    }
                                }
                            }</script><script>
                            var mytuner_scripts = mytuner_scripts || {};
                            if (mytuner_scripts["widget-player-v1.js-imported"] == undefined) {
                                mytuner_scripts["widget-player-v1.js-imported"] = false;
                                var s = document.createElement("script");
                                s.type = "text/javascript";
                                s.src = "https://mytuner-radio.com/static/js/widgets/widget-player-v1.js";
                                s.defer = true;
                                document.getElementsByTagName('head')[0].appendChild(s);
                            }</script></div>

                        <!-- <audio controls preload="none" autoplay class="player-mobile"><source src="http://167.114.210.232:8221/;" type="audio/aac"></audio> -->
                        
                    
                    </div>
                    <span class="text-play">Dale play para escuchar <i class="fa fa-play"></i></span>

                </div>
                </div>

            
            </div>
            
            </div> 
            
        </div>

        
    </div>

<?php
/*get_sidebar();*/
get_footer();
