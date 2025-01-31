<?php
 /*loop do whilw semelhante*/
 
 
$contador = 1;

do{
	$numero = readline("informe número: ");
	$resultado = $numero * 3;
	
	echo "\n".$resultado."\n\n";
	
	$contador++;
	
} while($contador <= 3);