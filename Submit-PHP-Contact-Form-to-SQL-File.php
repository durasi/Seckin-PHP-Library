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

<?
    if(isset($_POST['name']))
    {
        
        $name=$_POST["name"];
        $email=$_POST["email"];


        $phoneclear = trim($_POST["phone"]);

        $phonefirst3= substr($phoneclear,0,3);
        $phonefirst2= substr($phoneclear,0,2);
        $phonefirst1= substr($phoneclear,0,1);
        

        if($phonefirst3=="+90")
        {
            $phone=$phoneclear;
        }
        else if($phonefirst2=="90")
        {
            $phone="+".$phoneclear;
        }
        else if($phonefirst1=="0")
        {
            $phone="+9".$phoneclear;
        }
        else
        {
            $phone="+90".$phoneclear;
        }




        $formdate=time();
                                
            if(empty($name) || empty($email) || empty($phone)) 
            {
                echo "Please fill in the relevant fields.";
            }
            else
            {
                    $link = mysql_connect('localhost', 'USERNAME', 'PASSWORD');
                    if (!$link)
                    {
                        
                        die('Could not connect: ' . mysql_error());
                    }
                    mysql_select_db('DBNAME', $link) or die('Could not select database.');
                    
                    $insert = mysql_query("INSERT INTO contactform SET name ='{$name}',email = '{$email}',phone = '{$phone}', formdate = '{$formdate}', ip='".$_SERVER["REMOTE_ADDR"]."'");
                    
                    if ( $insert )
                    {
                        echo '<p>Your application has been received, thank you.</p>';                                         
                    }else{
                        echo 'Error: Your request could not be received. Please try again.'; 
                    }
                                    
            }
    }
    else
    {
        echo '
            <form method="POST" class="form-horizontal">
                    <input type="text" class="form-control" name="name" required placeholder="YOUR NAME" /><br>
                    <input type="text" class="form-control" name="email" required placeholder="E-MAIL" /><br>
                    <input type="text" class="form-control" name="phone" required placeholder="Phone +90" /><br>
                    <button type="submit" class="btn btn-info" name="send" class="btn btn-lg">SEND</button>
            </form>
            ';
    }  
?>
