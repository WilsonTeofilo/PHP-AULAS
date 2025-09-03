<?php 
// você devera mostrar no final
// salário folha  R$
//Desconto inss :  R$
// Desconto imposto de renda : R$
// Salário Líquido : R$

$salario = 2760;
$descontoINSS;
$descontoIR;
print "Salário bruto : $salario <br>" ;
print"calculando desconto e INSS e IR";

function inss($salario){
    return $descontoINSS= ($salario * 14) /100;
}


  $ChamadaInss = inss ($salario);
  echo "Salário = $salario R$, desconto INSS: $ChamadaInss R$,  <br> Salário com desconto inss: " ; 
  $salario -= $ChamadaInss;
  echo "Salario descontado INSS: $salario"

    
?>