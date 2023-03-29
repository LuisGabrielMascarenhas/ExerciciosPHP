<?php 
$sb = 0; //salário bruto
$horasT = 5; //Horas trabalhadas
$st = 100; //salário hora
$nd = 3; //Número de dependentes
$inss = 0;
$ir = 0; //Imposto de Renda
$sl = 0; //Salário Liquido
echo "Cálculos<br/>";
echo "Horas Trabalhadas: ".$horasT." horas<br/>";
echo "Salário por hora: R$".$st."<br/>";
echo "Número de dependentes: ".$nd."<br/>";
echo "<br/>Salário Bruto é de R$:";
$sb = $horasT * $st +(50 * $nd);
print($sb);

if ($sb <= 1000) {
	$inss = $sb * 8.5/100;
	
	echo "<br/>Desconto do INSS é de R$:";
	print($inss);
}else{
	$inss = $sb * 9/100;
	
echo "<br/>Desconto do INSS é de R$:";
	print($inss. "<br/>");
}
if ($sb <= 500) {
	$ir = 0;
	echo "<br/>Não há desconto de Imposto de Renda";
}else if ($sb > 500 && $sb<= 1000) {
	$ir = $sb * 5/100;
	echo "<br/> Desconto de Imposto de Renda R$:".$ir;
}else{
	$ir = $sb * 7/100;
	echo "Desconto de Imposto de Renda R$:".$ir;}
$sl = $sb - $inss - $ir;
echo "<br/><br/>Salário Liquido é de R$:".$sl;
 ?>
