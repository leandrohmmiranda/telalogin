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
    <div class="mainPageLayout">
        <div id="studio_sidePanelUpHeight20" style="height: 20px;"></div>
        <div class="clearFix">
            <div class="topMargin"></div>
            <div class="mainContainer clearFix">
                <div style="margin-bottom: 10px">
                    <div id="GreetingBlock" class="authForm">
                        <div class="header headerLightBig clearFix">
                            <img class="logo" src="../img/logo.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1>Quase lá! Só falta criar sua senha</h1>
    <p>Contendo no mínimo 8 caracteres e com pelo menos três dos seguintes:</p>
    <ul>
        <li>Letras maiúsculas</li>
        <li>Letras minúsculas</li>
        <li>Caracteres especiais</li>
    </ul>

    <form>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" minlength="8" placeholder="Senha" required>
        </div>
        <div>
            <label for="confirmarSenha">Confirme a senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" minlength="8" placeholder="Confirme a senha" required>
        </div>
        <div>
            <button type="submit">Continuar</button>
        </div>
    </form>
    <!-- Mensagens -->
    <div class="message-area">
        <p>O infoconsig melhorou, agora você utiliza o número do seu CPF para acessar o sistema, com a mesma senha cadastrada anteriormente.</p>
    </div>
    <!-- Avisos -->
    <div class="warning-area">
        <p>Importante: Se você já cadastrou sua senha no APP infoconsig, utilize a mesma para seu acesso aqui!</p>
    </div>
    <div id="studioFooter">
        <div class="mainPageLayout">
            <span class="footerCopyright">&copy; Sttórico Sistemas 2023</span>
        </div>
    </div>
</body>

</html>