<?
//2019-09-26
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library

	$algilananurl=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$kural = $algilananurl;
	if(strstr($kural, "/soru/")) 
	{
		$kisaalgilananurl=$_SERVER['REQUEST_URI'];
		$anawebsite=ltrim($kisaalgilananurl,"/soru");
?>
		<a href="https://www.seckin.co/<?echo$anawebsite;?>">Buradan ilgili adrese ulaşabilirsiniz.</a>		
<?				
	}
?>	
