<main>
    <section>
        <h2>Acesso ao Sistema</h2>
        <!-- Formulário de login -->
        <form onsubmit="event.preventDefault(); authenticateUser()">
            <div>
                <label for="login">CPF:</label>
                <input maxlength="64" class="pwdLoginTextbox" type="text" id="login" name="login" placeholder="CPF" required />
            </div>
            <div>
                <label for="pwd">Senha:</label>
                <input maxlength="64" class="pwdLoginTextbox" type="password" id="pwd" name="pwd" placeholder="Senha" required />
            </div>
            <div>
                <span class="pseudolink" onclick="AuthManager.ShowPwdReminderDialog()">Esqueceu sua senha? Clique
                    aqui!</span>
            </div>
            <div>
                <input class="highLinkButton signIn" id="loginButton" type="submit" value="Entrar" onclick="window.location.href = 'validacao.php'" />
            </div>
        </form>
    </section>
</main>
<p>Primeiro acesso? <a href="validacao.php">Clique aqui!</a></p>
<!-- captcha -->
<div class="captcha-container">
    <input type="text" id="captchaInput" placeholder="Digite o texto acima" required>
    <img id="captchaImage" src="captcha.php" alt="Captcha Image">
</div>
<script>
    /*Área de scripts javascript*/
    function authenticateUser() {
        // Capturar os valores dos campos de login e senha
        var login = document.getElementById('login').value;
        var password = document.getElementById('pwd').value;

        // Realizar a lógica de autenticação aqui

        // Exemplo básico de autenticação
        if (login === 'usuario' && password === 'senha') {
            // Autenticação bem-sucedida, redirecionar para a página principal, por exemplo
            window.location.href = 'pagina_principal.php';
        } else {
            // Autenticação falhou, exibir mensagem de erro
            alert('Credenciais inválidas. Tente novamente.');
        }
    }
</script>
</body>

</html>
<?php
include 'template.php';
?>