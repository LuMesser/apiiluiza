<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dados do Formulário</title>
        <link rel="stylesheet" type="text/css" href="css/util.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>

        <h1>Dados do Formulário</h1>
        <p>Os dados preenchidos serão impressos abaixo:</p><br>

        <?php
            /*
            Método isset, em português significa: "está setado?"
            Caso a variável $_GET["nomeDoUsuario"] tenha algum valor setado
            o método retorna true, senão retorna false
            */

            if(isset($_GET["nome"]) == true){
                $nome = $_GET["nome"]; //pego o conteúdo e jogo em uma variável
                echo "O nome da pessoa é: " . $nome . "<br>"; //imprimo uma mensagem para o usuário
            }

            if(isset($_GET["sexo"]) == true){
                $sexo = $_GET["sexo"]; 
                echo "O sexo é: " . $sexo . "<br>"; 
            }

            if(isset($_GET["cordosolhos"]) == true){
                $cor = $_GET["cordosolhos"]; 
                echo "A cor dos olhos é: " . $cor . "<br>"; 
            }

            if(isset($_GET["marque"]) == true){
                $vetorMarque = $_GET["marque"]; 
                echo "Vetor marque: " . count($vetorMarque) . "<br>";
                
                foreach($vetorMarque as $marque2){
                        echo " " . $marque2 . "<br>";
                }
            }

            if(isset($_GET["msg"]) == true){
                $msg = $_GET["msg"]; 
                echo "As habilidades atléticas são: " . $msg . "<br>";
            }

        ?>
                </form>

    </body>
</html>