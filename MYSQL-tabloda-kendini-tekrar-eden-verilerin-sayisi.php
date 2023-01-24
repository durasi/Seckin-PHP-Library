<!--
//2023-01-24
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library
-->
<?php
	SELECT ad, COUNT(ad) AS kac_adet FROM `uye` GROUP BY ad HAVING COUNT( * ) >1
?>