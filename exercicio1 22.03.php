<?php 
$cod = 3;
$valor = 36;
$res = 0;
$aum = 0;
print("Selecione um número para saber o aumento do seguinte produto<br/>");
print("O valor do produto é " . $valor ." reais<br/><br/>");

echo "1- Aumento de 10% <br/> 3- Aumento de 25%<br/> 4- Aumento de 30%<br/> 8- Aumento de 50%";

switch ($cod) {
	case 1:
		$aum = $valor * 0.1;
		$res = $valor * 1.10;
		
		break;
	case 3:
		$aum = $valor * 0.25;
		$res = $valor * 1.25;
		
		break;
	case 4:
		$aum = $valor * 0.30;
		$res = $valor * 1.30;
		
		break;
	case 8:
		$aum = $valor * 0.50;
		$res = $valor * 1.50;
		
		break;
	default:
		$res ="Opção Inválida";
		$aum = "Opção Inválida";
		break;
}
echo "<br/><br/>O aumento foi de R$ ". $aum. " e o novo valor é de R$ ". $res ;

 ?>