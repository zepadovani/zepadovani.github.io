
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
 
<link rel="stylesheet" type="text/css" href="../estilo2.css">
</head>

<body style="overflow: auto;" onload="init();">
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setCookieDomain", "*.zepadovani.info"]);
  _paq.push(["setDomains", ["*.zepadovani.info"]]);
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://zepadovani.info/piwiki/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4244359-2");
pageTracker._trackPageview();
} catch(err) {}</script>

<div id="texto">
    <br>
<?php
            //Variables for connecting to your database.
            //These variable values come from your hosting account.
            $hostname = "patavinas2012.db.5402458.hostedresource.com";
            $username = "patavinas2012";
            $dbname = "patavinas2012";

            //These variable values need to be changed by you before deploying
            $password = "Db013512!!!";
            $usertable = "EA420141";
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
            $query = "SELECT * FROM $usertable WHERE hash =
            '".$_GET["cod"]."'";
 
//  echo $cod;
//   echo " <br> ";
//  echo $query;  
            $result = mysql_query($query);
            if ($result) {
                while($row = mysql_fetch_array($result)) {
  echo 
"
      <h2>
EA4 - 2014.1 - relatório individual de notas e frequência at&eacute; o momento</a></h2>
    <h1>
 <table border=\"0\" width=\"640px\" cellspacing=\"0\">
  <tr><td>
    <p style=\"text-align:justify\">
<b> Atenção: </b> <br><br>As informações aqui contidas servem apenas
para agilizar o acompanhamento das notas e da frequência pelo(a) aluno(a) e <b>não refletem
necessariamente sua situação real em determinado momento do semestre
  ou mesmo ao final do mesmo</b>. <br><br>
Para conferir suas notas, ou em caso de dúvida com relação a alguma
    nota/trabalho/avaliação/exercício, contate o professor <b> exclusivamente via
e-mail</b>.<br><br>
<b>Importante:</b> Esta página serve para facilitar seu acompanhamento
    individual. O endereço (URL) da página e o conteúdo abaixo foram enviados exclusivamente
    para você, estando ambos inacessíveis a sites de busca de maneira a
    proteger sua privacidade. <b>Não divulgue o link com suas notas para ningu&eacute;m se não
   quiser que as mesmas sejam vistas por outras pessoas.</b><br>
</p>
    </td></tr>
    </table>
--------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>
    ";

  
  echo "<br>";
  echo "<table border=\"0\" width=\"700px\" cellspacing=\"10\">
      <col width=\"400px\">
      <col width=\"300px\">
  
    ";
  echo "<tr> <td>";    
  echo "<b>nome:</b>";
  echo "</td><td> <b>";    
  echo $row[2];
  echo "</b></td></tr>";

  echo "<tr> <td>";    
  echo "<b>matrícula:</b>";
  echo "</td><td> <b>";    
  echo $row[1];
  echo "</b></td></tr>";  

  echo "<tr> <td>";    
  echo "<b>faltas no semestre:</b>";
  echo "</td><td> <b>";    
  echo $row[5];
  echo "</b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 1:</b> <br>(Schubert,
  <em>Erlkönig</em>)";
echo "</td><td><br><b>";        
  echo $row[6];
  echo "</b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 2:</b> <br>(Schubert,
  <em>Heimweh</em>)";
echo "</td><td><br><b>";        
  echo $row[7];
  echo "</b></td></tr>";

 echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 3:</b> <br>(Schumann,
  <em>Aus meinen Tränen spriessen</em>)";
echo "</td><td><br><b>";        
  echo $row[8];
  echo "</b></td></tr>";
  
  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 4:</b> <br>(Chopin,
  <em>Prelúdio 9 (op.28)</em>)";
echo "</td><td><br><b>";        
  echo $row[9];
  echo "</b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 5: </b> <br>(respostas a
  pergunta do grupo 2)";
echo "</td><td><br><b>";        
  echo $row[10];
  echo "</b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 6: </b> <br>(resposta a
  pergunta do grupo 3)";
echo "</td><td><br><b>";        
  echo $row[11];
  echo "</b></td></tr>";

   echo "<tr> <td><b>"; 
  echo "- - - - - - - - - - - - - - - - - - ";
   echo "</b></td></tr>";
   
  echo "<tr> <td>"; 
  echo "<br><b> MEFx </b> (peso 2):<br>(m&eacute;dia dos exercícios
  de fixação [pior nota dos exercícios acima foi excluída do cálculo])";
echo "</td><td><b><big>";           
  echo $row[14];
  echo "</big></b></td></tr>"; 
  
  echo "<tr> <td>"; 
  echo "<br><b> Avaliação 1 (peso 3.5)</b>: <br>";
echo "</td><td><b><big>";            
  echo $row[16];
  echo "</big></b></td></tr>"; 

  echo "<tr> <td>"; 
  echo "<br><b> Avaliação 2 (peso 3.5)</b>: <br>(seminário)";
echo "</td><td><b><big>";     
  echo $row[18];
  echo "</big></b></td></tr>"; 

  echo "<tr> <td>"; 
  echo "<br><b> Participação (peso 1)</b>:";
echo "</td><td><b><big>";           
  echo $row[15];
  echo "</big></b></td></tr>"; 

   echo "<tr> <td><b>"; 
  echo "- - - - - - - - - - - - - - - - - - ";
   echo "</b></td></tr>";  

 echo "<tr> <td>";     
  echo "<br><b> MF (m&eacute;dia final):</b><br>
  nota no semestre at&eacute; o momento [0 a 10]<br> (NS =
            AV1*0.35+AV2*0.35+MEFx*0.2+NP*0.1)";
echo "</td><td><b><big><big>";        
  echo $row[20];
  echo "</big></big></b></td></tr>";

 echo "<tr> <td>";     
  echo "<br><b> NEF:</b><br>
  nota no Exame Final [0 a 10]<br>";
echo "</td><td><b><big><big>";        
  echo $row[21];
  echo "</big></big></b></td></tr>";

 echo "<tr> <td>";     
  echo "<br><b> NF:</b><br>
  Nota Final [0 a 10]<br> OBS: NF &eacute; igual a NS caso NS>=7 ou
  NS=4; já em caso de
  Exame Final, NF = (NS*0.6) + (NEF*0.4).";
echo "</td><td><b><big><big>";     
  echo $row[22];
  echo "</big></big></b></td></tr>";     

  echo "<tr> <td>";
  echo "<br><b> Situação do(a) aluno(a)</b>: <br></b>";
  echo "</td><td><br><big>";
  echo nl2br($row[23]);
  echo "<br><b>";
  echo nl2br($row[24]);
  echo "</b> ";  
  echo nl2br($row[25]);
  echo " ";
  echo "</big></td></tr>";  

 


  

  echo "</table>";
  echo "<br>";
  echo
  "---------------------------------------------------------------------------------------------------------------------------------------------------------------
  <br>";
  echo "<b>Última atualização das notas/faltas: </b>";
  echo nl2br($row[26]);
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
