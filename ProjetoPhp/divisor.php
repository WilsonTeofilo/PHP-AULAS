<?php 
$num1 = 15;
$dividendo10 = $num1 /10;
$dividendo5 = $num1 /5;
$dividendo2 = $num1 /2;

if ($dividendo10 >0 ){
    print "Número divisivel por 10";
    print "Resultado $dividendo10";
}

if ($dividendo5 >0){
    print"Número divisivel por 5";
    print "Resultado: $dividendo5";

}

if ($dividendo2 >0){
    print"Número Dívisivel por 2";
    print "resultado: $dividendo2";
}

else if ($dividendo10 <0|| $dividendo5 <0 ||$dividendo2 <0){
    print "Nenhum deles são divisiveis";
}



?>