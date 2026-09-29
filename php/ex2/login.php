<?php
    include 'conexao.php';
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = sha1($_POST['senha']);

    $sql_select = "SELECT nome, email FROM table1 WHERE email='$email' and senha='$senha'";
    $resultado = $conexao->query($sql_select);

    if($resultado->num_rows > 0){
        $row = $resultado->fetch_assoc();
        // Correção aplicada aqui: removemos as aspas internas ou usamos concatenação
        echo "<p>Olá, " . $row['nome'] . "! Seu e-mail é " . $row['email'] . "</p>";
        
    } else {
        echo "<p>Nenhum usuário encontrado</p>";
    }
    
    // O close() foi movido para fora do if/else para fechar a conexão sempre
    $conexao->close();
?>