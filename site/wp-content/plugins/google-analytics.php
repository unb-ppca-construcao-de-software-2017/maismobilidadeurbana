<?php
/*
Plugin Name: Google Analytics Plugin by Haroldo
Plugin URI: http://maismobilidadeurbana.com.br
Description: Adiciona o código de Track do Gooogle Analytics ao <head> do tema usando o gatilho wp_head
Author: Haroldo Mendes
Author URI: haroldo_mendes@globo.com
Version: 1.0
 */

function google_analytics() { ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-102169992-1', 'auto');
	  ga('send', 'pageview');

	</script>
<?php }

add_action( 'wp_head', 'google_analytics', 10 );

?>