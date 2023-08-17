<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Serenatto - Cadastro de ususários</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
    <h1>Cadastro de usuários</h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <section class="container-form">
  <form method="POST">

  <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>

    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" required>

    <input type="submit" class="botao-cadastrar" value="Cadastrar usuário"/>
  </form>

  </section>
</main>
</body>
</html>

<?php
    include 'conexao.php';
    include 'usuario.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $senha = $_POST["senha"];

      //conexão com o banco de dados
      $usuario = new Usuario($conn);

      //cadastrar usuario
      if ($usuario->cadastrar($nome, $email, $senha)) {
        //redirecionar para a página de sucesso após o cadasrtro
        header("Location: cadastrar-usuario-sucesso.php");
        exit();
      } else{
        echo "Erro! Tente novamente!";
      }
    }
    
  ?>