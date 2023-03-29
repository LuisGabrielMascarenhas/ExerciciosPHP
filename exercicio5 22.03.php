<?php 
/*Criar  um  sistema que  efetue  o  cálculo  do  salário  líquido  de  um  professor.  
Os dados  fornecidos  serão:  valor  da  hora  aula,  número  de  aulas  dadas  no  mês  e percentual de desconto do INSS*/

$sl=0;//Salário Liquido
$sb=0;//Salário Bruto
$ta=40;//Valor da hora aula
$na=20;//Aulas dadas no mês
$inss=9;

echo "Cálculo do Salário Líquido de um Professor<br/>";

echo"Fórmula<br/>";
echo"Salário Bruto = Valor da Hora aula * Aulas dadas no mês <br/>";
echo"Salário Líquido = Salário Bruto * INSS <br/>	";
print("Salário Bruto =".$sb = $ta * $na."<br/>");

echo"<br/>Dados<br/>";
print("Salário Bruto = ".$sb);
print("Valor da Hora aula = ".$ta."<br/>");
print("Aulas dadas no mês = ".$na."<br/>");
print("INSS = ".$inss."/10");

print("Salário Líquido = ".$sl = $sb * $inss/10);

 ?>