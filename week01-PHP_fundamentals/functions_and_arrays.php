<?php

  ///// FUNÇÕES \\\\\\
/* Em PHP, as funções são blocos de código que podem 
   ser chamados e executados em qualquer lugar do programa.

   As funções podem aceitar parâmetros (dados de entrada) 
   e retornar valores (dados de saída), mas também podem ser 
   void (sem, retorno),

   Exemplo abaixo:
*/

function saudacao($nome) {
  return "Olá, $nome"; // o valor de nome será atribuido como parâmetro
}

echo saudacao("João"); // Saída: Olá, João!


  ///// Arrays \\\\\\
/* Em PHP, os arrays são estruturas de dados que podem armazenar múltiplos
   valores em uma única variável.

   Os arrays em PHP podem ser indexados numericamente (arrays numéricos) 
   ou associativamente (arrays associativos).

   Exemplo abaixo:
*/

// Array numérico
$numeros = array(1, 2, 3, 4, 5);

// Acessando elementos do array
echo $numeros[0]; // Saída: 1

// Adicionando um elemento ao array
$numeros[] = 6;

// Array associativo
$pessoa = array("nome" => "Maria", "idade" => 30, "cidade" => "São Paulo");

// Acessando elementos do array associativo
echo $pessoa["nome"]; // Saída: Maria


  ///// PASSAGEM DE PARÂMETROS POR REFERÊNCIA \\\\\\
/* Em PHP, os parâmetros de função são passados por valor por padrão, o 
   que significa que uma cópia do valor original é passada para a função.

   No entanto, é possível passar parâmetros por referência, permitindo que a função
   altere o valor original da variável passada.

   Exemplo abaixo:
*/

function dobrar(&$numero) {
  $numero *= 2;
}

$valor = 10;
dobrar($valor);
echo $valor; // Saída: 20

// O símbolo "&" antes da variável atribui uma passagem de referência a variável
// ou seja, qualquer alteração feita à variável dentro da função, será refletida 
// fora da mesma.

// Exemplo de passagem por valor:
// function incrementar($numero) {
//   $numero++;
//   echo "Dentro da função: $numero\n"; // Saída: 11
// }

// $valor = 10;
// incrementar($valor);
// echo "Fora da função: $valor\n"; // Saída: 10

//Exemplo de passagem por referência
function incrementar(&$numero) {
  $numero++;
  echo "Dentro da função: $numero\n"; // Saída: 11
}

$valor = 10;
incrementar($valor);
echo "Fora da função: $valor\n"; // Saída: 11

// Outro exemplo
function adicionarElemento(&$array, $elemento) {
  $array[] =  $elemento;
}

$meuArray = array(1, 2, 3);
adicionarElemento($meuArray, 4);
print_r($meuArray); // Saída: Array ( [0] => 1, [1] => 2, [2] => 3, [3] => 4)


