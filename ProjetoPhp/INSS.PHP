<?php 
// você devera mostrar no final
// salário folha  R$
//Desconto inss :  R$
// Desconto imposto de renda : R$
// Salário Líquido : R$

$salario = 2790;
$descontoINSS;
$descontoIR;
print "Salário bruto : $salario <br>" ;
print"calculando desconto e INSS e IR";


function inss ($salarioInss){
if ($salarioInss >= 1518  || $salarioInss <27893.89 ){
    $descontoINSS = ($salarioInss *0.075 );


}
}

  $ChamadaInss = inss ($salario)
?>