<?php
/*
=========================================================
 EXERCÍCIO 3: Matriz 3x3
=========================================================

PSEUDOCÓDIGO:

INÍCIO
   DECLARE matriz[3][3]: VETOR DE INTEIRO

   PARA i DE 0 ATÉ 2 FAÇA
      PARA j DE 0 ATÉ 2 FAÇA
         ESCREVA "Digite o valor da posição [", i, "][", j, "]:"
         LEIA matriz[i][j]
      FIM PARA
   FIM PARA

   ESCREVA "Matriz 3x3:"
   PARA i DE 0 ATÉ 2 FAÇA
      PARA j DE 0 ATÉ 2 FAÇA
         ESCREVA matriz[i][j], "  "
      FIM PARA
      ESCREVA "\n"
   FIM PARA
FIM

=========================================================
 CÓDIGO PHP (rodar via terminal: php exercicio3.php)
=========================================================
*/

$matriz = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = (int) readline("Digite o valor da posição [$i][$j]: ");
    }
}

echo "\nMatriz 3x3:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo str_pad($matriz[$i][$j], 4, " ", STR_PAD_LEFT);
    }
    echo "\n";
}
