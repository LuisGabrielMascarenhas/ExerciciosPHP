<?php 
$vol = 0;
$pi = 3.14159;
$r= 5;
$h = 5;

echo "Volume de uma lata de óleo<br/>";
echo "Fórmula:<br/> V = Pi x R² x h<br/>";
echo "<br/>Dados de cada valor <br/>Pi = ".$pi."<br/>r = ".$r."<br/>h = ".$h."cm³";
$vol = $pi * ($r * $r) * $h;
echo"<br/>Resultado é: ".$vol;
 ?>