<?php
      session_start();
      require "conexao.php";
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $sql = "SELECT id, nome, email, senha from table1 where email=?";
      $stmt = $conexao->prepare($sql);
      $stmt->bind_param("s", $email);
      $stmt->execute();

      $resultado = $stmt->get_result();

      if ($usuario = $resultado->fetch_assoc()){

        if(password_verify($senha, $usuario['senha'])){
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
            exit;
        }else{
            echo "Senha incorreta";
        }
      } else{
        echo 'E-mail incorreto';
      }
    $stmt->close();
    $stmt->close();
    ?>