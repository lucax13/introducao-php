<?php

echo "\n*** chatbot de empresa biribinha tecnologia ***\n";
echo "opções disponíveis: \n\n";
echo "1 -> informação\n";
echo "2 -> reclamação\n";
echo "3 -> elogios \n";
echo "4 -> status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

//echo "\n".$opccao;

//condicional encadeada
if($opcao == 1){
	$acao = "\nO que deseja saber? ";
	
} elseif($opcao == 2){
	$acao =  "\nPuxa, que pena... o que houve?";
	
} elseif($opcao == 3){
	$acao = "\nBacana! pode falar";
	
} elseif($opcao == 4){
	$acao = "\nOk, um monmento...";
	
} else {
	$acao = "\nNão entedi... vou chamar um atendente.";
}

echo "\n";

echo "--------\n";
echo $acao;
echo "--------\n";