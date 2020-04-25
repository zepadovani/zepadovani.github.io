
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="keywords" content="josé henrique padovani velloso">
    <title>josé henrique padovani</title>
<script type="text/javascript" src="conf/init.js"></script>
<script type="text/javascript" src="conf/processing.min.js"></script>
 
<link rel="stylesheet" href="../estilo.css"/>
</head>

<body style="overflow: hidden;" onload="init();">
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4244359-2");
pageTracker._trackPageview();
} catch(err) {}</script>

<div id="texto" >
    <br>


 <?php
            //Variables for connecting to your database.
            //These variable values come from your hosting account.
            $hostname = "patavinas2012.db.5402458.hostedresource.com";
            $username = "patavinas2012";
            $dbname = "patavinas2012";

            //These variable values need to be changed by you before deploying
            $password = "Db013512!!!";
            $usertable = "EA320132";
            $yourfield = "nome";
        
            //Connecting to your database
            $link = mysql_connect($hostname, $username, $password) OR
            DIE ("Não foi possível conectar &agrave; base de
            dados. Por favor tente mais tarde.");
            mysql_set_charset('utf8',$link);
            mysql_select_db($dbname);
            $cod = $_GET["cod"];
            mysql_query("SET character_set_client = 'utf8';");
            mysql_query("SET character_set_result = 'utf8';");
            mysql_query("SET OBS 'utf8'");
            
  //Fetching from your database table.
//            $query = "SELECT * FROM $usertable WHERE hash =
//            '".$_GET["cod"]."'";
            $query = "SELECT * FROM $usertable";
            $result = mysql_query($query);

              if ($result) {
                while($row = mysql_fetch_array($result)) {



//$md5ed1 = md5($row[1]);
//$md5ed2 = md5($row[2]);
//$md5ed3 = md5($row[3]);
$shahash = hash('sha384',($row[1] . $row[2] . "patavinas"));  
//$str = $md5ed1 . $md5ed2 . $md5ed3 . $row[1];
echo "$row[1] ";
echo "$row[2] ";
echo "$row[3] ";   
//echo "$row[3] ";
//echo "$str";
//echo "      ";  
//echo "$shateste";
echo "http://zepadovani.info/etc/EA3-20131.php?=" . $shahash; 
echo "</br></br>";

mysql_query("UPDATE $usertable SET hash = '$shahash' WHERE ID = '$row[0]'");

usleep(2000);
  
  
  
  }
  }
 
//  $result = mysql_query($query);
// $row = mysql_fetch_row($result);

 

//            if ($result) {
//                while($row = mysql_fetch_array($result)) {
//                    $name = $row[4];
//                    echo "<b>nome:</b> $name <br>";
//                    echo "<br>";
//                   echo "<br>";
//                }
//            }
            ?>


    </h1>
  </div>





  

  </body>
</html>