<?php
/*
=========================================================
 EXERCÍCIO 1: Leitura e Média de Vetor (Básico)
=========================================================

PSEUDOCÓDIGO:

INÍCIO
   DECLARE notas[5]: VETOR DE REAL
   DECLARE soma, media: REAL
   DECLARE acima: INTEIRO
   soma <- 0
   acima <- 0

   PARA i DE 0 ATÉ 4 FAÇA
      ESCREVA "Digite a nota do aluno ", i+1
      LEIA notas[i]
      soma <- soma + notas[i]
   FIM PARA

   media <- soma / 5

   PARA i DE 0 ATÉ 4 FAÇA
      SE notas[i] > media ENTÃO
         acima <- acima + 1
      FIM SE
   FIM PARA

   ESCREVA "Média da turma: ", media
   ESCREVA "Quantidade de notas acima da média: ", acima
FIM

=========================================================
 CÓDIGO PHP (rodar via terminal: php exercicio1.php)
=========================================================
*/

$notas = [];
$soma = 0;

for ($i = 0; $i < 5; $i++) {
    $notas[$i] = (float) readline("Digite a nota do aluno " . ($i + 1) . ": ");
    $soma += $notas[$i];
}

$media = $soma / 5;
$acima = 0;

foreach ($notas as $nota) {
    if ($nota > $media) {
        $acima++;
    }
}

echo "\n";
echo "Média da turma: " . number_format($media, 2) . "\n";
echo "Notas acima da média: " . $acima . "\n";
