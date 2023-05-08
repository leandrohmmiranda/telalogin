<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <input style="display:none;" name="" />

    <div id="studioContent">
        <div id="studioPageContent">
            <div class="studioTopNavigationPanel clearFix">
                <div class="systemSection mainPageLayout clearFix">
                </div>
            </div>

            <div class="mainPageLayout">
                <div id="studio_sidePanelUpHeight20" style="height: 20px;"></div>
                <div class="clearFix">
                    <div class="topMargin"></div>
                    <div class="mainContainer clearFix">
                        <div style="margin-bottom: 10px">
                            <div id="GreetingBlock" class="authForm">
                                <div class="header headerLightBig clearFix">
                                    <img class="logo" src="../img/logo.png" />
                                    <h1 class="title">Seja bem Vindo!</h1>
                                </div>
                                <div>
                                    <h2>Acesso ao Sistema</h2>
                                </div>

                                <!-- Formulário de login -->
                                <div id="authForm">
                                    <div id="authMessage"></div>

                                    <form onsubmit="event.preventDefault(); authenticateUser()">
                                        <div id="ctl00_ctl00_PageContent_StudioPageContent__AuthByEmail" class="login">
                                            <label for="login">CPF:</label>
                                            <input maxlength="14" class="pwdLoginTextbox" type="text" id="login" name="login" placeholder="CPF" required />
                                        </div>
                                        <div class="password">
                                            <label for="pwd">Senha:</label>
                                            <input maxlength="64" class="pwdLoginTextbox" type="password" id="pwd" name="pwd" placeholder="Senha" required />
                                        </div>
                                        <div class="subtext">
                                            <span class="pseudolink" onclick="AuthManager.ShowPwdReminderDialog()">Esqueceu sua senha? <a href="recuperacaodesenha.php">Clique aqui!</a></span>
                                        </div>
                                        <div class="submenu clearFix">
                                            <div class="loginBlock clearFix">
                                                <div style="float: left;">
                                                    <input class="highLinkButton signIn" id="loginButton" type="submit" value="Login" />
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <input class="highLinkButton signIn" id="loginButton" type="submit" value="Entrar" onclick="window.location.href = '#'" />
                                        </div>
                                        <span>Primeiro acesso?<a href="validacao.php">Clique aqui!</a></span>
                                    </form>
                                </div>

                                <div id="studio_sidePanel" class="studioRightSidePanel" style="display:none;"></div>
                            </div>

                            <div id="container" style="position: absolute; top: 0px; left: 0px;"></div>
                            <div id="fullScreen" style="margin: 0; padding: 0;"></div>

                            <!-- captcha -->
                            <div class="captcha">
                                <input type="text" id="captchaInput" placeholder="Digite o texto acima" required>
                                <img id="captchaImage" src="captcha.php" alt="Captcha Image">
                            </div>
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
                                    <span class="footerCopyright">&copy; Sttórico Sitemas <?php echo date("Y") ?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Área de scripts javascript -->
    <script>
        function refreshCaptcha() {
            var captchaImage = document.getElementById('captchaImage');
            captchaImage.src = '../captcha.php?' + new Date().getTime();
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