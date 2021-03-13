<?
//2019-09-26
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-PHP-Library

    if(!isset($_GET['resolution'])) {     
        echo "<script language=\"JavaScript\">     
<!--      
    document.location=\"$PHP_SELF?resolution=1&width=\"+screen.width+\"&height=\"+screen.height;     
//-->     
</script>";     
    } else {
        if(isset($_GET['width']) && isset($_GET['height'])) {     
            echo "Width: " . $_GET['width'] . " and Height: " . $_GET['height'] . "<br />";
        } else {     
            echo "Çözünürlük algılanmadı.";
        }     
    }
?>
