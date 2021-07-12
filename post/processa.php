<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu primeiro formulário</title>
    </head>

    <body>

    <h1>Dados do Formulário</h1>
    <p>Os dados preenchidos serão impressos abaixo:</p>

    <?php
        /*
        Método isset, em português significa: "está setado?"
        Caso a variável $_GET["nomeDoUsuario"] tenha algum valor setado
        o método retorna true, senão retorna false
        */

        if(isset($_POST["nome"]) == true){
            $nome = $_POST["nome"]; //pego o conteúdo e jogo em uma variável
            echo "o nome da pessoa é: " . $nome . "<br>"; //imprimo uma mensagem para o usuário
        }

        if(isset($_POST["cpf"]) == true){
            $cpf = $_POST["cpf"]; 
            echo "o cpf da pessoa é: " . $cpf . "<br>"; 
        }

        if(isset($_POST["endereco"]) == true){
            $end = $_POST["endereco"]; 
            echo "o endereço da pessoa é: " . $end . "<br>"; 
        }
    ?>
    </body>
</html>