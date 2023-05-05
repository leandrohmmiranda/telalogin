<main>
    <section>
        <h2>Acesso ao Sistema</h2>
        <!-- Formulário de login -->
        <form onsubmit="event.preventDefault(); authenticateUser()">
            <div>
                <label for="login">CPF:</label>
                <input maxlength="14" class="pwdLoginTextbox" type="text" id="login" name="login" placeholder="CPF" required />
            </div>
            <div>
                <label for="pwd">Senha:</label>
                <input maxlength="64" class="pwdLoginTextbox" type="password" id="pwd" name="pwd" placeholder="Senha" required />
            </div>
            <div>
                <span>Esqueceu sua senha? <a href="recuperacaodesenha.php">Clique aqui!</a></span>
            </div>
            <div>
                <input class="highLinkButton signIn" id="loginButton" type="submit" value="Entrar" onclick="window.location.href = '#'" />
            </div>
            <span>Primeiro acesso?<a href="validacao.php">Clique aqui!</a></span>
        </form>
    </section>
</main>

<!-- captcha -->
<div class="captcha-container">
    <input type="text" id="captchaInput" placeholder="Digite o texto acima" required>
    <img id="captchaImage" src="captcha.php" alt="Captcha Image">
</div>
<!-- Área de scripts javascript -->
<script>
    function refreshCaptcha() {
        var captchaImage = document.getElementById('captchaImage');
        captchaImage.src = 'captcha.php?' + new Date().getTime();
    }

    function authenticateUser() {
        var captchaInput = document.getElementById('captchaInput').value;

        // Fazer a comparação com o texto do captcha armazenado na sessão
        var captchaText = '<?php echo $_SESSION["captcha"]; ?>';

        if (captchaInput === captchaText) {
            // Autenticação bem-sucedida, redirecionar para a página principal
            window.location.href = '#';
        } else {
            // Autenticação falhou, exibir mensagem de erro
            alert('Captcha inválido. Tente novamente.');
            refreshCaptcha();
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        // Aplicar a máscara para o campo CPF
        $('#login').mask('000.000.000-00');
    });

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