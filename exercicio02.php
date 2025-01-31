<?php


echo "\n*** chatbot de empresa biribinha tecnologia ***\n";
echo "opções disponíveis: \n\n";
echo "1 -> informação\n";
echo "2 -> reclamação\n";
echo "3 -> elogios \n";
echo "4 -> status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

//condicional encadeada


switch($opcao){
	case 1:
	 $acao = "\nO que deseja saber? ";
	 break;
    case 2:
	 $acao =  "\nPuxa, que pena... o que houve?";
     break;
	case 3:
	 $acao = "\nBacana! pode falar";
	break;
	case 4:
    $acao = "\nOk, um monmento...";
	break;
	default:
	$acao = "\nNão entedi... vou chamar um atendente.";
	break;
}
	
echo "\n";

echo "--------\n";
echo $acao;
echo "--------\n";