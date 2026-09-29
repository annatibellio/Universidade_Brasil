<?php
    include 'conexao.php';
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nome = $conexao->real_escape_string($_POST['nome']);
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = sha1($_POST['senha']);

        if(!empty($nome) && !empty($email) && !empty($senha)){
            $sql_insert = "INSERT INTO table1 (nome,email,senha) VALUES ('$nome', '$email', '$senha')";

            if($conexao->query($sql_insert)===TRUE){
                $mensagem = "Cadastro efetuado com sucesso";
            }else{
                $mensagem = "Erro: " .$conexao->error;
            }

        }else{
            $mensagem = "Preencha todos os campos";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="email">E-Mail</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha"><br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php 
        if(!empty($mensagem)){
            echo "<p>$mensagem</p>";
        }
    ?>
</body>
</html>