<?php

echo "Bem-vindo ao screen match!\n";

$nomeFilme = "Top Gun - Marverick";
$anoLancamento = $argv[1] ?? 2020;
$notaFilme = 8.8;
$incluidoNoPlano = true;

echo "Nome do filme: $nomeFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
  echo "Esse filme é um lançamento!";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
  echo "Esse filme ainda é novo\n";
} else {
  echo "Esse filme não é um lançamento\n";
}
