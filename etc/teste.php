
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
<font size="4"><a href="../index.html">home</a> / <a href="../texts.html">texts</a></font>
    <br>
        <br>
        <br>
    <h1>

 <?php
            //Variables for connecting to your database.
            //These variable values come from your hosting account.
            $hostname = "patavinas2012.db.5402458.hostedresource.com";
            $username = "patavinas2012";
            $dbname = "patavinas2012";

            //These variable values need to be changed by you before deploying
            $password = "Db013512!!!";
            $usertable = "disciplinas";
            $yourfield = "disciplina";
        
            //Connecting to your database
            mysql_connect($hostname, $username, $password) OR DIE ("Unable to 
            connect to database! Please try again later.");
            mysql_select_db($dbname);

            //Fetching from your database table.
            $query = "SELECT * FROM $usertable";
            $result = mysql_query($query);



            if ($result) {
                while($row = mysql_fetch_array($result)) {
                    $name = $row[2];
                    echo "<b>discplina:</b> $name <br>";
                    $sala = $row[22];
                    echo "<b>sala:</b> $sala<br>";
                    $prof = $row[23];
                    echo "<b>professor:</b> $prof<br>";
                    $predio = $row[21];
                    echo "<b>predio:</b> $predio<br>";
                    $dia = $row[18];
                    echo "<b>dia:</b> $dia<br>";
                    $hinic = date("H:i", strtotime($row[19]));
                    echo "<b>inicio:</b> $hinic<br>";
                    $hfim = date("H:i", strtotime($row[20]));
                    echo "<b>fim:</b> $hfim<br>";
                    $turma = $row[15];
                    echo "<b>turma:</b> $turma<br>";
                    $creditos = $row[16];
                    echo "<b>creditos:</b> $creditos<br>";
                    $ha = $row[17];
                    echo "<b>horas/aula:</b> $ha<br>";
                    echo "<br>";
                    echo "<br>";
                }
            }

if (!$result) {
    echo 'Não foi possível executar a consulta: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

echo $row[0]; // 42
echo $row[1]; // o valor do email



            ?>
            

    </h1>
  </div>


    <div id="container" style="position:absolute; top:0px; left:0px">
      <canvas datasrc="../conf/rabisco.pjs">  </canvas>
    </div>


  

  </body>
</html>