<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="login.style.css">

<body>
    <h1 class="title">Seja bem vindo a tela de Login!</h1>
    <div class="header headerLightBig clearFix">
        <img class="logo" src="/img/logo.png" alt="" />
    </div>
    <p>Acesso ao Sistema</p>
    <!-- Formulario de login -->
    <div>
        <form action="">
            <div>
                <div class="title">CPF</div>
                <div><input maxlength="64" class="pwdLoginTextbox" type="text" id="login" name="login" required /></div>
            </div>
            <div>
                <div class="title">Senha</div>
                <div><input maxlength="64" class="pwdLoginTextbox" type="password" id="pwd" name="pwd" required /></div>
            </div>
            <div>
                <div><span class="pseudolink" onclick="AuthManager.ShowPwdReminderDialog()">Esqueceu sua senha? Clique aqui!</span></div>
                <div><input class="highLinkButton signIn" id="loginButton" type="submit" value="Entrar" /></div>
            </div>
            <!-- Primeiro acesso? Clique aqui! -->
            <!-- captcha -->
            <!-- Área reservada para mensagens
                O infoconsig melhorou, agora você utiliza o número do seu CPF para acessar o sistema, com a mesma senha cadastrada anteriormente.
            -->
            <!-- Área reservada para avisos
                Importante:
                Se você já cadastrou sua senha no APP infoconsig, utilize a mesma para seu acesso aqui!-->

            <!-- Proxima tela de cadastro de dados de validacao -->
            <!-- Data de nascimento -->
            <!-- Matricula -->
            <!-- botao continuar -->
            <!-- avisos -->

            <!-- Proxima tela de cadastro do celular e do e-mail -->
            <!-- Celular -->
            <!-- E-mail -->
            <!-- botao continuar -->
            <!-- avisos -->

            <!-- Proxima tela de validação email -->
            <!-- Primeiro acesso > Cadastro > Confirmação do e-mail -->
            <!-- Enviamos um código para o e-mail que você informou. Digite abaixo o codígo recebbido. -->
            <!-- 6 campos para inserir o codigo -->
            <!-- botao Validar e-mail -->
            <!-- Reenviar código (60sg) -->
            <!-- Atenção! Se não recebeu o token, verifique se o e-mail informado está correto. -->
            <!-- avisos -->

            <!-- Proxima tela de cadastro de senha -->
            <!-- Primeiro acesso > Cadastro > Senha -->
            <!-- Quase lá! Só falta criar sua senha -->
            <!-- Contendo no minímo 8 caracteres -->
            <!-- Com pelo menos três dos seguintes:
                *Letras maiúsculas
                *Letras minúsculas
                *Caracteres especiais -->
            <!-- Senha -->
            <!-- Confirme a senha -->
            <!-- botao Continuar -->
            <!-- avisos -->

            <!-- Proxima tela de Recuperação de senha -->
            <!-- Esqueci minha Senha -->
            <!-- Opção 1: Esqueci minha senha -->
            <!-- Opção 2: Esqueci meu e-mail cadastrado para recuperação de senha -->
            <!-- Opção 3: Desejo cadastrar novo e-mail para recuperação de senha -->
            <!-- Voltar a tela anterior -->
        </form>
    </div>

    <div id="studioFooter">
        <div class="mainPageLayout">
            <span class="footerCopyright">&copy; Sttórico Sitemas <?php echo date("Y") ?></span>
        </div>
    </div>
    <script>
        /*Área de scripts javascript*/
    </script>
</body>

</html>