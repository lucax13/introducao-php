<?php

$curso = readline("informe o curso: ");
$cargaHoraria = readline ("qual a carga horaria do curso:" );

$faltasPermitidas = $cargaHoraria *0.25 ;

echo "\ncurso ".$curso."\n";
echo "\ncarga horaria: ".$cargaHoraria."h \n"; 
echo "faltas Permitidas: ". $faltasPermitidas."h";