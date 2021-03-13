<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
-->

<?
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
	    foreach($wp_gelenVeri as $wp_gelenSatir): 
	     
	        $mevcut=$wp_gelenSatir->url;
	        $durum=$wp_gelenSatir->durum+1;
	        
	    endforeach;
	else:
		echo "";
	endif;
?>