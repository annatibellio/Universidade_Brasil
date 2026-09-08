<?php
/*
=========================================================
 EXERCÍCIO 2: Busca de Elemento no Vetor (Intermediário)
=========================================================

PSEUDOCÓDIGO:

INÍCIO
   DECLARE numeros[10]: VETOR DE INTEIRO
   DECLARE busca: INTEIRO
   DECLARE encontrado: LÓGICO
   encontrado <- FALSO

   PARA i DE 0 ATÉ 9 FAÇA
      ESCREVA "Digite o número ", i+1
      LEIA numeros[i]
   FIM PARA

   ESCREVA "Digite o número que deseja buscar:"
   LEIA busca

   PARA i DE 0 ATÉ 9 FAÇA
      SE numeros[i] = busca ENTÃO
         ESCREVA "Número encontrado na posição ", i
         encontrado <- VERDADEIRO
      FIM SE
   FIM PARA

   SE encontrado = FALSO ENTÃO
      ESCREVA "Número não encontrado no vetor."
   FIM SE
FIM

=========================================================
 CÓDIGO PHP (rodar via terminal: php exercicio2.php)
=========================================================
*/

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[$i] = (int) readline("Digite o número " . ($i + 1) . ": ");
}

$busca = (int) readline("\nDigite o número que deseja buscar: ");
$encontrado = false;

for ($i = 0; $i < 10; $i++) {
    if ($numeros[$i] == $busca) {
        echo "Número encontrado na posição $i\n";
        $encontrado = true;
    }
}

if (!$encontrado) {
    echo "Número não encontrado no vetor.\n";
}
