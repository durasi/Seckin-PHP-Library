<!--
//2023-01-24
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library
-->
<?php
	SELECT unvan, COUNT(unvan) AS kac_adet FROM `build_users_bayi` GROUP BY unvan HAVING COUNT( * ) >1
?>