<?php 

$nome =['wilson','Salve', 'Juremo', 'Pastel Do Võ zé', 'Pc da china', 'Luuqeta', 'Jamelão vai pro canto', 'gostaria de jantar um hamburguer', 'Chat gpt de souza', 
'Gemini Teofilo neves'];
$idades = [23,22,21,15,18,16,15,14,18,22,];
$cidade = ['São paulo', 'Santos', 'Osasco', 'São caetano do sul', 'Ribeirão Preto','São paulo', 'Santos', 'Osasco', 'São caetano do sul', 'Ribeirão Preto',];

    echo "idade e nome de todos usuários cadastrados: <br>";

for ($cont = 0; $cont<10; $cont++){
echo "Nome: ". $nome[$cont]. ", ".  $idades[$cont]. " anos"."<br> -" ;
}



for ($conta = 0 ; $conta<count ($idades); $conta++){
if ($idades [$conta] >18){
    echo "🔞". $nome[$conta]. " é maior de idade, tem: " . $idades[$conta]. " anos de idade <br>" ;
 }
}


?>