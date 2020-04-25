
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="keywords" content="josé henrique padovani velloso">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="initial-scale=0.5">
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

// VIA GOOGLE SPREADSHEETS / CSV!
  
$url = "https://docs.google.com/spreadsheets/d/1w_q27PufIU6tdqpvVxM08dplWwzCy4rH-w2oFJBA4fc/export?gid=0&format=csv";

//$url = "https://docs.google.com/spreadsheets/d/1jFufkP8dKpAYnRPPlU02QLaXEb8mFeZ_4UPw5YgBx0g/export?gid=0&format=csv";

$cod = $_GET["cod"];  

if (($handle = fopen($url, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
  $num = count($data);

  if ($data[4] == $cod){

    echo "<h2>
 EA3 - 2014.1 - relatório individual de notas e faltas at&eacute; o momento</a></h2>
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
  echo "</td><td> <b>
    ";    
  echo $data[2];
  echo "
    </b></td></tr>";


   echo "<tr> <td>";    
  echo "<b>matrícula:</b>";
  echo "</td><td> <b>
    ";    
  echo $data[1];
  echo "
    </b></td></tr>";  

  echo "<tr> <td>";    
  echo "<b>número de faltas:</b><sup><b>*</b></sup><br>
    <small>
<b>*</b> para o sistema da UFPB, o que conta &eacute; apenas se a
  frequência foi suficiente (4 ou menos faltas) ou insuficiente (mais que 4
  faltas)
</small>
    <br>
    ";
  echo "</td><td> <b>
    ";    
  echo $data[19];
  echo "
    </b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 1:</b> <br>(Schubert,
  <em>Erlkönig</em>)";
echo "</td><td><br><b>
  ";        
  echo $data[20];
  echo "
  </b></td></tr>";

  echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 2:</b> <br>(Schubert,
  <em>Heimweh</em>)";
echo "</td><td><br><b>
  ";        
  echo $data[21];
  echo "
  </b></td></tr>";

 echo "<tr> <td>"; 
  echo "<br><b> Exercício de Fixação 3 [se optou por fazê-lo]:</b> <br>(Schubert,
  <em>Am Meer</em>)";
echo "</td><td><br><b>
  ";        
  echo $data[22];
  echo "
  </b></td></tr>";

   echo "<tr> <td><b>"; 
  echo "- - - - - - - - - - - - - - - - - - ";
   echo "</b></td></tr>";
   
  echo "<tr> <td>"; 
  echo "<br><b> MEFx </b> (peso 2)<sup><b>*</b></sup>:<br>
    <small>
  <b>*</b>se <u>não fez exercício 3</u>: equivale &agrave; melhor nota dos
  exercícios acima <br> se <u>fez exercício 3</u>: equivale &agrave;
  m&eacute;dia das melhores duas notas
  dos exercícios acima</small>
    ";
echo "</td><td><b><big>
  ";           
  echo $data[24];
  echo "
  </big></b></td></tr>"; 
  
  echo "<tr> <td>"; 
  echo "<br><b> Avaliação 1 (peso 3.5)</b>: <br>";
echo "</td><td><b><big>
  ";            
  echo $data[25];
  echo "
  </big></b></td></tr>"; 

  echo "<tr> <td>"; 
  echo "<br><b> Avaliação 2 (peso 3.5)</b>: <br>(seminário)";
echo "</td><td><b><big>
  ";     
  echo $data[26];
  echo "
  </big></b></td></tr>"; 

  echo "<tr> <td>"; 
  echo "<br><b> Participação (peso 1)</b>:";
echo "</td><td><b><big>
  ";           
  echo $data[30];
  echo "
  </big></b></td></tr>"; 

   echo "<tr> <td><b>"; 
  echo "- - - - - - - - - - - - - - - - - - ";
   echo "</b></td></tr>";  

 echo "<tr> <td>";     
  echo "<br><b> MF (m&eacute;dia final):</b><br>
  nota no semestre at&eacute; o momento [0 a 10]<br> (MF =
            AV1*0.35+AV2*0.35+MEFx*0.2+NP*0.1)";
echo "</td><td><b><big><big>
  ";        
  echo $data[31];
  echo "
  </big></big></b></td></tr>";

 echo "<tr> <td>";     
  echo "<br><b> NEF:</b><br>
  nota no Exame Final [0 a 10]<br>";
echo "</td><td><b><big><big>
  ";        
  echo $data[32];
  echo "
  </big></big></b></td></tr>";

 echo "<tr> <td>";     
  echo "<br><b> NF:</b><br>
  Nota Final [0 a 10]<br> OBS: NF &eacute; igual a MF caso MF>=7 ou
  MF=4; já em caso de
  Exame Final, NF = (MF*0.6) + (NEF*0.4).";
echo "</td><td><b><big><big>
  ";     
  echo $data[33];
  echo "
  </big></big></b></td></tr>";     

  echo "<tr> <td>";
  echo "<br><b> Situação do(a) aluno(a)</b>: <br></b>";
  echo "</td><td><br><big>
    ";
  echo nl2br($data[34]);
  echo "
    </big></td></tr>";  

     echo "</table>";
 echo "<br>";
  echo
  "---------------------------------------------------------------------------------------------------------------------------------------------------------------
  <br>";
  echo "<b>Última atualização das notas/faltas: </b>
     ";
  echo nl2br($data[35]);
  echo "
     ";


//  echo "<b> .... $data[4] .... </b></br></br>";
//     for ($c=0; $c < $num; $c++) {
//         echo $data[$c] . "<br />\n";
//        }
  
  };

    }
    fclose($handle);
}

 
  
            ?>

 
  </div>

  

  </body>
</html>
