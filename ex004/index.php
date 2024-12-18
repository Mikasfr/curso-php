<!-- Quatro formatos de Stings


double quoted - aspas duplas // existe uma interpretação da string -->

<?php 

    function breakLine(){
        echo "<br> <br>";
    };

    $x = "Curso";
    $v = "php";

    echo "Estou fazendo o $x . $v do curso em video! e aqui estou usando aspas duplas!";  // concatenando em php 
    // double quote interpreta meu codigo fazendo com que o que imprime na telas seja 
    // Estou fazendo o Cursophp do curso em video

    breakLine();

    echo 'Estou fazendo o $x . $v do curso em video! aqui estou usando aspas simples!';

    breakLine();

    const ESTADO = "RJ";
    echo "moro no " . ESTADO; // note que com contantes, para semre impressa na tela é necessario a concatenação fora da String

    breakLine();

    echo "Utilizando aspas dentro de aspas: ";

    $nome = "Michael";
    $snome = "Reques";
    $apelido = "mika";

    echo "$nome \"$apelido\" $snome" // note que usamos a barra invertida (\) para um sinal de escape, fazendo com que não seja interpretado as "

?>


<!-- Sintaxe Heredoc  -->

<?php 

    breakLine();

    $curso = "PHP";
    $ano = date('Y');
    echo <<< TESTE

        Olá galera, estou estudando $curso no ano de $ano

    TESTE; // dessa forma ira ter interpretação 

?>


<!-- Sintaxe Nowdoc -->

<?php 

    breakLine();

    $curso = "PHP";
    $ano = date('Y');
    echo <<< 'TESTE'

        Olá galera, estou estudando $curso no ano de $ano

    TESTE; //note que dessa forma não terá interpretação 

?>