
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
            $usertable = "EA320131";
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
//            $query = "SELECT * FROM $usertable WHERE hash = '".$_GET["cod"]."'";
            $query = "SELECT * FROM $usertable ";
            $result = mysql_query($query);


            if ($result) {
                while($row = mysql_fetch_array($result)) {

$to      = $row[3];
$subject = '[EA3-20131] ERRATA! link individual para notas/faltas';
$message = 
"[favor desconsiderar e-mail anterior (algumas pessoas receberam link inválido)]"
. "\r\n" . 
"Caro(a) aluno(a) "
  . $row[2] 
. "\r\n\r\n" . 
"Disciplina: Estruturação e Análise Musical III" . "\r\n" .
"Matrícula: " . $row[1] . "\r\n" .
"E-mail: "   . $row[3]  . "\r\n\r\n" .

"segue o link individual para acompanhamento de suas notas e faltas na disciplina." 
. "\r\n\r\n" .
"http://zepadovani.info/etc/EA3-20131.php?cod=" .
  $row[4]
. "\r\n\r\n" .
"As informações da página servem apenas para agilizar o acompanhamento das suas notas e frequência e não refletem necessariamente sua situação real em determinado momento do semestre ou mesmo ao final do mesmo." 
. "\r\n\r\n" .
"Para conferir suas notas, ou em caso de dúvida contate o professor ou o monitor no final da aula ou via e-mail (padovani.ufpb@gmail.com)." 
. "\r\n\r\n" . 
"Importante: A página serve para facilitar seu acompanhamento individual. O endereço (URL) da página e o conteúdo da mesma foram enviados exclusivamente para você, estando ambos inacessíveis a sites de busca de maneira a proteger sua privacidade. Não divulgue o link com suas notas para ninguém se não quiser que as mesmas sejam vistas por outras pessoas." 
. "\r\n\r\n" .
 "Lembrando que faltar mais de 4 aulas, independentemente do motivo, acarreta em reprovação por frequência insuficiente." 
. "\r\n \r\n" .
"Outras informações importantes estão em http://zepadovani.info/ufpb/ufpb20131.html" 
. "\r\n \r\n" .
"Prof. José Henrique Padovani"
;

$headers = 'From: padovani.ufpb@gmail.com' . "\r\n" .
      'Bcc: padovani.ufpb@gmail.com' . "\r\n" .
    'Reply-To: padovani.ufpb@gmail.com' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/plain; charset=utf-8' . "\r\n" 
  //    'X-Mailer: PHP/' . phpversion()
;

mail($to, $subject, $message, $headers);
//2 segundos
usleep(2000000);  
  
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
<br>
<br>

    </h1>
  </div>


    <div id="container" style="position:absolute; top:0px; left:0px">
      <canvas datasrc="../conf/rabisco.pjs">  </canvas>
    </div>


  

  </body>
</html>