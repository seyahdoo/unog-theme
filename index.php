

<title>ÜNOG Oyun Gelistirici Toplulugu</title>

<style>

	html {
		height: 100%;
	}
	
	body{
		height: 100%;
		margin: 0;
	}

	#overlay{
    	width: 100%; /* Full width */
    	height: 100%; /* Full height */
    	background-color: rgb(0,0,0); /* Fallback color */
    	background-color: rgba(1,0,0,0.5); /* Black w/ opacity */
		background-image: url("<?php echo get_template_directory_uri();?>/images/unog-background.svg");
		background-size: cover;
		background-position: center;
	}
	
	.unog-logo-wrapper {
		width: 100%;
		position: relative;
	}

	.unog-logo svg {
		width: 100%;
		height: 100%;
	}

	.mini-wrapper-margin-fix {
		height: 1.5vw;
		max-height: 1.5vh;
	}

	.mini-wrapper {
		position: relative;
		padding: 0;
  		margin-left: auto;
		margin-right: auto;
		margin-top: 0;  
  		text-align: center;
	}

	@media (orientation: landscape) {
		.unog-logo {
			width: 70vw;
			height: calc(70vw * 769 / 1359);
			max-height: 80vh;
		}

  		.mini-logo {
			height: 5vw;
			width: 5vw;
			max-height: 10vh;
			max-width: 10vh;
  		}
		
		.mini-wrapper{
			width: 100%;
			height: 7%;
		}
	}

	@media (orientation: portrait) {
		.unog-logo {
			width: 90vw;
			height: calc(90vw * 769 / 1359);
			max-height: 70vh;
		}

 		.mini-logo {
			height: 10vw;
			width: 10vw;
			max-height: 13vh;
			max-width: 13vh;
  		}

		.mini-wrapper{
			width: 100%;
			height: 15%;
		}
	}

	.mini-logo {
		display: inline-block;
		vertical-align: middle;
		
	}

	.mini-logo svg {
		width: 100%;
		height: 100%;
	}

	.mini-logo svg path{
	 	fill: white !important;
	}

	.mini-logo svg text{
	 	fill: white !important;
	}

	#centerer {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		height: 100%;
	}

	
</style>


<div id="overlay">
	<div id="centerer">

		<div class="unog-logo">
			<?php echo file_get_contents(get_template_directory()."/images/unog-logo.svg") ?>
		</div>

		<div class="mini-wrapper-margin-fix"></div>
		
		<div class="mini-wrapper">
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/facebook"> <?php echo file_get_contents(get_template_directory()."/images/facebook-logo.svg") ?> </a>
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/twitter"> <?php echo file_get_contents(get_template_directory()."/images/twitter-logo.svg") ?> </a>
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/instagram"> <?php echo file_get_contents(get_template_directory()."/images/instagram-logo.svg") ?> </a>
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/linkedin"> <?php echo file_get_contents(get_template_directory()."/images/linkedin-logo.svg") ?> </a>
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/youtube"> <?php echo file_get_contents(get_template_directory()."/images/youtube-logo.svg") ?> </a>
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/discord"> <?php echo file_get_contents(get_template_directory()."/images/discord-logo.svg") ?> </a>
			<a class="mini-logo" href="<?php echo get_site_url(); ?>/steam"> <?php echo file_get_contents(get_template_directory()."/images/steam-logo.svg") ?> </a>
		</div>
		

	</div>
	
</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141128884-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141128884-1');
</script>


