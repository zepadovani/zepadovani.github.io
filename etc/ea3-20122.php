
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
            $usertable = "20122EA3";
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
  echo "   <h2>
EA3 - 2012.2 - relatório individual de notas at&eacute; o momento</a></h2>
    <h1>
 <table border=\"0\" width=\"640px\" cellspacing=\"0\">
  <tr><td>
    <p style=\"text-align:justify\">
<b> Atenção: </b> <br><br>As informações aqui contidas servem apenas
para agilizar o acompanhamento das notas pelo(a) aluno(a) e <b>não refletem
necessariamente sua situação real em determinado momento do semestre
  ou mesmo ao final do mesmo</b>. <br><br>
Para conferir suas notas, ou em caso de dúvida com relação a alguma nota/trabalho/avaliação/exercício, contate o professor <b> exclusivamente via
e-mail</b>.<br><br>
<b>Importante:</b> Esta página serve para facilitar seu acompanhamento
    individual. O endereço (URL) da página e o conteúdo abaixo foram enviados exclusivamente
    para você, estando ambos inacessíveis a sites de busca de maneira a
    proteger sua privacidade. <b>Não divulgue o link com suas notas para ningu&eacute;m se não
   quiser que as mesmas sejam vistas por outras pessoas.</b><br>
</p>
    </td></tr>
    </table>
--------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
  
  echo "<br>";
  echo "<table border=\"0\" width=\"700px\" cellspacing=\"0\">
      <col width=\"400px\">
      <col width=\"300px\">
  
    ";
  echo "<tr> <td>";    
  echo "<b>nome:</b>";
  echo "</td><td> <b>";    
  echo $row[4];
  echo "</b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br> <b>AV1</b> - peso
            3.5: <br>m&eacute;dia avaliação 1 (prova) [0 a 10]";
echo "</td><td><b>";        
  echo $row[16];
  echo "</b></td></tr>";  

  echo "<tr> <td>";   
  echo "<br><b>AV2</b> - peso 3.5: <br>
        m&eacute;dia avaliação 2 (seminário) [0 a 10]";
echo "</td><td><b>";       
  echo $row[17];
  echo "</b></td></tr>";  

  echo "<tr> <td>";     
  echo "<br><b>EF</b> - peso 2 <br>
    m&eacute;dia Exercícios de Fixação [0 a 10] <br>
            (OBS: excluindo pior nota)";
echo "</td><td><b>";       
  echo $row[18];
  echo "</b></td></tr>";  
  
  echo "<tr> <td>";     
  echo "<br><b>NP</b> - peso 1 <br> nota de participação [0 a 10] ";
echo "</td><td><b>";    
  echo $row[19];
  echo "</b></td></tr>";  

  echo "<tr> <td>";     
  echo "<br><b> NS</b><br>
    nota no semestre at&eacute; o momento [0 a 10]<br> (NS =
            AV1*0.35+AV2*0.35+EF*0.2+NP*0.1)";
echo "</td><td><b><big>";        
  echo $row[20];
  echo "</big></b></td></tr>";

  echo "<tr> <td>";    
  echo "<br><b>NEF</b><br>nota no exame final [0 a 10] <b>(quando for o
  caso!)</b>";
echo "</td><td><b><big>";        
  echo $row[21];
  echo "</big></b></td></tr>"; 

  echo "<tr> <td>";    
  echo "<br><b>NF</b><br>nota final [0 a 10]
  <br>OBS: NF &eacute; igual a
  NS se...<br>
    1. NS for maior ou igual a 7 (aprovado) <br>
    2. NS for menor que 4 (reprovado).<br>
  Se 4<=NS<7 (i.e., <b>Exame Final</b>): NF=NS*0.6+NEF*0.4) <br><br>
    Pelas regras do CONSEPE (RESOLUÇÃO Nº 49/80), em caso de <b>Exame Final</b> &eacute; aprovado(a) o(a) aluno(a)
  que obter <b>NF</b> maior ou igual a 5.";
echo "</td><td><b><big><big>";        
  echo $row[22];
  echo "</big></big></b></td></tr>";

//  echo "<tr> <td>";      
//  echo "<br><b> OBS, quando houver</b>:";
//  echo "</td></tr>";
//  echo "<tr> <td>";   
//  echo htmlspecialchars($row[23]);
//  echo nl2br($row[23]);
//  echo "</td> </tr> </table>";

  echo "<tr> <td>";
  echo "<br><b> Situação do(a) aluno(a):</b>: <br>";
  echo "</td><td><br><b><big>";
  echo nl2br($row[23]);
  echo "</big></b></td></tr>";    
  echo "</table> <br><br><br>";
  echo
  "<br><br>---------------------------------------------------------------------------------------------------------------------------------------------------------------
  <br>";
  echo "Última atualização das notas: ";
  echo nl2br($row[24]);
  
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