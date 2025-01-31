<?php
// Entradas (direta, atribuída)
$produto = readline("informe o produto: ");
$precoInicial = readline("preço inicial: ");
$desconto = readline("desconto em reais: ");

// Processamento
$precoFinal = $precoInicial - $desconto;

// Saída concatenada [O preço final é: valor]
echo "O preço final é: ". $precoFinal;