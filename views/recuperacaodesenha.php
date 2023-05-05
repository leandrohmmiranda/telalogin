<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <!-- Logo -->
  <header>
    <div class="col-sx-12">
      <img class="logo" src="../img/logo.png">
    </div>
  </header>

  <h1>Recuperação de Senha</h1>
  <p>Escolha uma das opções abaixo:</p>

  <div>
    <p><a href="#" onclick="showPopup('senha')">Esqueci minha senha</a></p>
    <p><a href="#" onclick="showPopup('email')">Esqueci meu e-mail cadastrado para recuperação de senha</a></p>
    <p><a href="#" onclick="showPopup('novo_email')">Desejo cadastrar novo e-mail para recuperação de senha</a></p>
  </div>

  <button onclick="history.go(-1)">Voltar à tela anterior</button>

  <div id="popupSenha" class="popup">
    <!-- Conteúdo da pop-up para redefinição de senha -->
    <label for="redefinirsenha">Redefinir Senha:</label>
    <input type="password" id="redefinirsenha" name="redefinirsenha" minlength="8" placeholder="Redefinir Senha" required>
    <button type="submit">Continuar</button>
  </div>

  <div id="popupEmail" class="popup">
    <!-- Conteúdo da pop-up para recuperação de e-mail -->
    <label for="redefiniremail">Redefinir e-mail:</label>
    <input type="email" id="redefiniremail" name="redefiniremail" minlength="8" placeholder="Redefinir e-mail" required>
    <button type="submit">Continuar</button>
  </div>

  <div id="popupNovoEmail" class="popup">
    <!-- Conteúdo da pop-up para cadastro de novo e-mail -->
    <label for="cadastrarnovoemail">Cadastrar novo e-mail:</label>
    <input type="email" id="cadastrarnovoemail" name="cadastrarnovoemail" minlength="8" placeholder="Cadastrar novo e-mail" required>
    <button type="submit">Continuar</button>
  </div>

  <script>
    function showPopup(popupId) {
      var popup = document.getElementById("popup" + popupId);
      if (popup) {
        popup.style.display = "block";
      }
    }
  </script>
  <!-- Mensagens -->
  <div class="message-area">
    <p class="message-text">O infoconsig melhorou, agora você utiliza o número do seu CPF para acessar o sistema, com a mesma senha cadastrada anteriormente.</p>
  </div>
  <!-- Avisos -->
  <div class="warning-area">
    <p class="warning-text">Importante: Se você já cadastrou sua senha no APP infoconsig, utilize a mesma para seu acesso aqui!</p>
  </div>
  <div id="studioFooter">
    <div class="mainPageLayout">
      <span class="footerCopyright">&copy; Sttórico Sistemas 2023</span>
    </div>
  </div>
</body>

</html>