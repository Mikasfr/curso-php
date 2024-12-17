<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        echo "Hoje é dia: " . date("d/M/Y");
        echo " e a hora atual é: " . date("G:i:s");

        // variáveis e constantes em PHP

        $nome = "Michael";
        $sobrenome = "Reques";
        echo " Muito prazer, $nome $sobrenome";

        const country = "Brasil";
        echo " Você mora no " . country;

        // regras para identificadores de variáveis e constantes 
        // 1 - sempre começa com $
        // 2 - O segundo caractere poder ser letra ou símbolo _
        // 3 - Aceita caracteres [a-z],[A-Z], [0-9] e [_]
        // 4 - Aceita caracteres da tabela ASCII a partir de 128
        // 5 - Aceita caracteres acentuados 
        // 6 - A linguagem é case sensitive em relação aos nomes 
        // 7 - Nomes especiais como $this não podem ser usados 

        // exemplos 

    ?>
</body>

</html>