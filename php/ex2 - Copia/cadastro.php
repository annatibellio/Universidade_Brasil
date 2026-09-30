<?php
    include 'conexao.php';
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nome = $conexao->real_escape_string($_POST['nome']);
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $_POST['senha'];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO table1 (nome, email, senha) VALUES (?, ?, ?)";

        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sss",$nome, $email, $senha_hash);

        if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso! <a href='index.php'>Faça login</a>";
        } else {
        echo "Erro ao cadastrar.";
        }
        $stmt->close();
        $conexao->close();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 50px;
    }
    
    input {
      padding: 8px;
      font-size: 16px;
      width: 100%;
      max-width: 300px;
      box-sizing: border-box;
    }
    /* Estilos para os requisitos da senha */
    ul {
      list-style-type: none;
      padding: 0;
      font-size: 14px;
      margin-top: 5px;
    }
    li {
      color: red;
      margin-bottom: 3px;
    }
    li.valid {
      color: green;
    }
  </style>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="email">E-Mail</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$"><br>
        <button type="submit">Cadastrar</button>
    </form>
    <!-- Lista visual para orientar o usuário em tempo real -->
    <ul id="requisitos">
      <li id="length">Mínimo de 8 caracteres</li>
      <li id="lowercase">Pelo menos uma letra minúscula</li>
      <li id="uppercase">Pelo menos uma letra maiúscula</li>
      <li id="number">Pelo menos um número</li>
      <li id="special">Pelo menos um caractere especial</li>
    </ul>
    <script>
    const inputSenha = document.getElementById('senha');
    
    // Elementos da lista de requisitos
    const reqLength = document.getElementById('length');
    const reqLowercase = document.getElementById('lowercase');
    const reqUppercase = document.getElementById('uppercase');
    const reqNumber = document.getElementById('number');
    const reqSpecial = document.getElementById('special');

    
    function validarRegra(elemento, condicao) {
      if (condicao) {
        elemento.classList.add('valid');
      } else {
        elemento.classList.remove('valid');
      }
    }
    inputSenha.addEventListener('input', function() {
      const valor = inputSenha.value;

      // Valida cada regra individualmente para atualizar o visual
      validarRegra(reqLength, valor.length >= 8);
      validarRegra(reqLowercase, /[a-z]/.test(valor));
      validarRegra(reqUppercase, /[A-Z]/.test(valor));
      validarRegra(reqNumber, /\d/.test(valor));
      validarRegra(reqSpecial, /[\W_]/.test(valor));
    });
  </script>
    <?php 
        if(!empty($mensagem)){
            echo "<p>$mensagem</p>";
        }
    ?>
</body>
</html>