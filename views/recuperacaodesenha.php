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
  <h2>Redefinir Senha</h2>
  <label for="novasenha">Nova Senha:</label>
  <input type="password" id="novasenha" name="novasenha" minlength="8" placeholder="Nova Senha" required>
</div>

<div id="popupEmail" class="popup">
  <!-- Conteúdo da pop-up para recuperação de e-mail -->
  <h2>Redefinir E-mail</h2>
  <label for="novoemail">Novo e-mail:</label>
  <input type="password" id="novoemail" name="novoemail" minlength="8" placeholder="Novo e-mail" required>
</div>

<div id="popupNovoEmail" class="popup">
  <!-- Conteúdo da pop-up para cadastro de novo e-mail -->
  <h2>Cadastrar Novo E-mail</h2>
  <label for="novoemail">Novo e-mail:</label>
  <input type="password" id="novoemail" name="novoemail" minlength="8" placeholder="Novo e-mail" required>
</div>

<script>
  function showPopup(popupId) {
    var popup = document.getElementById("popup" + popupId);
    if (popup) {
      popup.style.display = "block";
    }
  }
</script>

<?php
include 'template.php';
?>