<!--
//2021-06-27
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library
-->


<?
	$jsondata=file_get_contents("http://www.floatrates.com/daily/usd.json");
	$data=json_decode($jsondata,1);

	echo "AED ".$data["aed"]["rate"];
?>
<br>
<?
	echo "AZN ".$data["azn"]["rate"];
?>
<br>
<?
	echo "EGP ".$data["egp"]["rate"];
?>
<br>
<?
	echo "UAH ".$data["uah"]["rate"];
?>
<br>
<?
	echo "TRY ".$data["try"]["rate"];
?>
<br>
<?
	echo "GBP ".$data["gbp"]["rate"];
?>
<br>
<?
	echo "EUR ".$data["eur"]["rate"];
?>
<br>
<?
	echo "INR ".$data["inr"]["rate"];
?>
<br>
<?
	echo "CNY ".$data["cny"]["rate"];
?>
<br>
<?
	echo "JPY ".$data["jpy"]["rate"];
?>
<br>
<?
	echo "KRW ".$data["krw"]["rate"];
?>
<br>
<?
	echo "RUB ".$data["rub"]["rate"];
?>
<br>
<?
	echo "RON ".$data["ron"]["rate"];
?>
<br>
<?
	echo "BGN ".$data["bgn"]["rate"];
?>
<br>
<?
	echo "NOK ".$data["nok"]["rate"];
?>
<br>
<?
	echo "CAD ".$data["cad"]["rate"];
?>
<br>
<?
	echo "SEK ".$data["sek"]["rate"];
?>
<br>
<?
	echo "CHF ".$data["chf"]["rate"];
?>
<br>
<?
	echo "DKK ".$data["dkk"]["rate"];
?>
<br>
<?
	echo "AUD ".$data["aud"]["rate"];
?>
<br>
<?
	echo "PLN ".$data["pln"]["rate"];
?>
<br>
<?
	echo "BRL ".$data["brl"]["rate"];
?>
<br>
<?
	echo "ILS ".$data["ils"]["rate"];
?>
<br>
<?
	echo "MXN ".$data["mxn"]["rate"];
?>
<br>
<?
	echo "MYR ".$data["myr"]["rate"];
?>
<br>
<?
	echo "NZD ".$data["nzd"]["rate"];
?>
<br>
<?
	echo "SGD ".$data["sgd"]["rate"];
?>
<br>
<?
	echo "ZAR ".$data["zar"]["rate"];
?>
<br>
<?
	echo "QAR ".$data["qar"]["rate"];
?>
<br>
<?
	echo "PKR ".$data["pkr"]["rate"];
?>
<br>
<?
	echo "SAR ".$data["sar"]["rate"];
?>

