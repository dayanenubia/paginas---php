<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="tformulario">
   
    <h1>Logar no Sistema</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="img">
      <img id="login-image" src="../login/img/user.jpg" alt="Login Image">
    </div>
    <div class="conteudo">
      <label>Nome de Usuário:</label>
      <input type="text" id="1" required="required" name="username" size="40">

      <label>Senha:</label>
      <input type="password" id="2" required="required" name="password" size="40">

      <div id="button-container">
        <input type="submit" value="Acessar" class="botao"/>
        <input type="button" value="Limpar" class="botao" onclick="limparCampo()">
      </div>
  
   

    

    

      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Dados do formulário
          $username = $_POST["username"];
          $password = $_POST["password"];

          // Validação (exemplo simples, substitua pela sua lógica de autenticação)
          if ($username == "admin" && $password == "admin123") {
            echo "<p style='color:green;'>Login efetuado com sucesso!</p>";
          } else {
            echo "<p style='color:red;'>Erro: Nome de usuário ou senha incorretos.</p>";
          }
        }
      ?>

      <script>
        function limparCampo() {
          document.getElementById("1").value = "";
          document.getElementById("2").value = "";
        }
      </script>
    </form>
    </div>
  </div>
</body>
</html>
