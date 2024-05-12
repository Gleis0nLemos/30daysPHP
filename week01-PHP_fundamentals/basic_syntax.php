<?php // tag de abertura de qualquer código PHP
  
// Este é um comentário de uma linha em PHP

  /*
  Este é um comentário 
  de várias linhas em PHP.
  Pode ter várias linhas
  */

  /**
 * Este é um comentário com o 
 * objetivo de documentar código
 */

  ///// VARIÁVEIS \\\\\\
/*  Começam com um "$"
    Podem conter letras, números e sublinhados, mas
    devem começar com uma letra ou sublinhado

    Variáveis em PHP não precisam ser declaradas
    com um tipo espeçifico. O tipo é determinado automáticamente 
    pelo valor atribuído à varíavel

    Exemplo abaixo:
*/

$nome = "João";
$idade = 25;


  ///// TIPOS DE DADOS \\\\\\
/*  PHP suporta uma variedade de tipos de dados,
    incluindo strings, números inteiros e de ponto
    flutuantes, booleanos, arrays, objetos, entre outros

    Exemplo abaixo:
*/

$nome = "Maria"; // String
$idade = 30; // Inteiro
$altura = 1.75; // Ponto flutuante
$isEstudante = true; // Booleano


  ///// OPERADORES \\\\\\
/*  PHP suporta uma variedade de operadores, como:
    aritméticos(
      +, -, *, /
    ),
    de comparação(
      ==, !=, <, >, <=, >=)
    ),
    lógicos(
      &&, ||, !
    ),
    de atribuição(
      =, +=, -=, *=, /=
    )
    Exemplo abaixo:
*/

$a = 10;
$b = 5;
$soma = $a + $b; // Operador de adição
$resultado = ($a > $b) ? "A é maior que B" : "A não é maior que B"; // Operador ternário
//echo($resultado);

  ///// ESTRUTURAS DE CONTROLE \\\\\\
/*  PHP suporta estruturas de controle como, 
    condicionais(
      if, else, elseif
    ),
    loops(
      for, while, do-while, foreach
    ),
    estruturas de controle de fluxo(
      break, continue
    )

    Exemplo abaixo:
*/

$idade = 20;
if ($idade >= 18) {
  echo "Você é maior de idade.";
} else {
  echo "Você é menor de idade";
}