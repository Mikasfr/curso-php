tipos primitivos

o tipo é definido de forma dinamica, com o andamento do projeto as variaveis podem variar seu tipo

existem três classes de tipos

escalares - compostos - especiais


tipos primitivos escalares:

<?php

    $sobrenome = "Silva"; // String - sequencia de letras, números e símbolos, sempre representados entre aspas 

    $idade = 34; // int ou interger - um valor numerico inteiro, aquele que vem sem a parte decimal

    $peso = 85.8; // float, double - Um valor numerico Real, que vem com a parte decimal depois do ponto flutuante 

    $casado = true; // bool ou boolean - Um valor logico ou booleano, que aceita apenas valores verdadeiro ou falso (true or false)

?>

tipos primitivos compostos:

<?php 

    $vet = [6, 7, 8, 7, 5]; // array - listas de dados  

    class Pessoa{
        private string $nome;
    }

    $p = new Pessoa;    // obeject 

?>