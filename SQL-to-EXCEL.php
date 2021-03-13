<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library
-->

<?
// SQL TABLE

//  CREATE TABLE `contactform` (
//  `id` int(11) NOT NULL,
//  `name` text,
//  `email` text,
//  `phone` text,
//  `formdate` text,
//  `ip` text
//  ) ENGINE=MyISAM DEFAULT CHARSET=utf8;

?>

<?php error_reporting(0);  
ob_start();
  $host          = 'localhost';
  $username   = 'DB_USERNAME';
  $password = 'DB_PASSWORD';
  $databasename          = 'DB_NAME';

  @ $sql = mysql_connect($host,$username,$password,$databasename);
  @ mysql_select_db("$databasename",$sql) or die ("Database Error");
  
mysql_query("SET NAMES 'utf8'"); 
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");  


if (mysql_errno())
  {
    echo 'Error: Unable to Connect to Database .. Please Try Again.';
    exit;
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SQL TO EXCEL LOCATION</title>

</head>
<body>

<?
function exportExcel($filename='ExportExcel',$columns=array(),$data=array(),$replaceDotCol=array()){
    header('Content-Encoding: UTF-8');
    header('Content-Type: text/plain; charset=utf-8'); 
    header("Content-disposition: attachment; filename=".$filename.".xls");
    echo "\xEF\xBB\xBF"; // UTF-8 BOM
      
    $say=count($columns);
      
    echo '<table border="1"><tr>';
    foreach($columns as $v){
        echo '<th style="background-color:#CCC; font-size:16px;">'.trim($v).'</th>';
    }
    echo '</tr>';
  
    foreach($data as $val){
        echo '<tr>';
        for($i=0; $i < $say; $i++){
  
            if(in_array($i,$replaceDotCol)){
                echo '<td style="font-size:16px;">'.str_replace('.',',',$val[$i]).'</td>';
            }else{
                echo '<td style="font-size:16px;">'.$val[$i].'</td>';
            }
        }
        echo '</tr>';
    }
}

 
$columns=array();
$data=array();


$columns=array(
    'List Number',
    'ID',
    'Name',
    'Email',
    'Phone'
);

$sip_ex=@mysql_query("SELECT * FROM contactform"); 
$a=1;
while($exc = mysql_fetch_array($sip_ex)){

$data[]=array($a,$exc['id'],$exc['name'],$exc['email'],$exc['phone']);
$a++; 

}
exportExcel('excel_file_name',$columns,$data,$replaceDotCol);
?>
</body>
</html>
