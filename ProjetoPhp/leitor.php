<?php

print"Caso o resultado da soma seja MAIOR que 20, Será acrescentado ao resultado  + 20 <br>" ;
print"Caso o resultado da soma seja MENOR OU IGUAL A 20, Será subtraido a a ele -5 <br>";
print "Insira os dois numeros  a ser calculado aqui:";
$num1 = 22;
$num2 = 23;
$soma = $num1 + $num2;


if ($soma >20){
    $soma += 20;
    echo"resultado maior que 20, ACRESCENTADO + 20 AO RESULTADO: $soma";
}






?>