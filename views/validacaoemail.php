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

    <h1>Confirmação do E-mail</h1>
    <p>Enviamos um código para o e-mail que você informou. Digite abaixo o código recebido:</p>
    <form>
        <div>
            <input type="text" id="codigo1" name="codigo1" maxlength="1" required>
            <input type="text" id="codigo2" name="codigo2" maxlength="1" required>
            <input type="text" id="codigo3" name="codigo3" maxlength="1" required>
            <input type="text" id="codigo4" name="codigo4" maxlength="1" required>
            <input type="text" id="codigo5" name="codigo5" maxlength="1" required>
            <input type="text" id="codigo6" name="codigo6" maxlength="1" required>
        </div>
        <div>
            <button type="submit" onclick="window.location.href = 'cadastrosenha.php'">Validar E-mail</button>
        </div>
    </form>

    <p id="countdown"></p>
    <p id="resend-info">Atenção! Se não recebeu o código, verifique se o e-mail informado está correto.</p>

    <script>
        // Definir o tempo de expiração do código (em segundos)
        var expirationTime = 60;
        // Obter a referência para o elemento de contagem regressiva
        var countdownElement = document.getElementById("countdown");
        // Iniciar a contagem regressiva
        var countdown = expirationTime;
        countdownElement.textContent = formatTime(countdown);
        var countdownInterval = setInterval(function() {
            countdown--;
            countdownElement.textContent = formatTime(countdown);
            if (countdown === 0) {
                clearInterval(countdownInterval);
                document.getElementById("resend-info").innerHTML = "O código expirou. <a href='#'>Clique aqui</a> para reenviar o código.";
            }
        }, 1000);
        // Função auxiliar para formatar o tempo em MM:SS
        function formatTime(time) {
            var minutes = Math.floor(time / 60);
            var seconds = time % 60;
            return minutes.toString().padStart(2, "0") + ":" + seconds.toString().padStart(2, "0");
        }
    </script>

    <?php
    // Função para gerar um código aleatório
    function gerarCodigo()
    {
        $caracteres = '0123456789';
        $tamanho = 6;
        $codigo = '';

        for ($i = 0; $i < $tamanho; $i++) {
            $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }

        return $codigo;
    }

    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recuperar o código digitado pelo usuário
        $codigo = $_POST['codigo1'] . $_POST['codigo2'] . $_POST['codigo3'] . $_POST['codigo4'] . $_POST['codigo5'] . $_POST['codigo6'];

        // Verificar se o código está correto (você precisa implementar a lógica de validação)
        if ($codigo === "123456") { // Exemplo: código correto é "123456"
            // Código válido, redirecionar o usuário para a página de cadastro/senha
            header("Location: cadastrosenha.php");
            exit();
        } else {
            // Código inválido, redirecionar o usuário de volta para a página de confirmação com uma mensagem de erro
            header("Location: validacaoemail.php?error=1");
            exit();
        }
    } else {
        // Verificar se a página foi acessada com um código expirado
        $codigoExpirado = isset($_GET['expired']) && $_GET['expired'] === '1';

        if ($codigoExpirado) {
            // Código expirado, enviar um novo código para o e-mail do usuário
            $novoCodigo = gerarCodigo();

            // Código para enviar o e-mail com o novo código (você precisa configurar a função de envio de e-mail corretamente)
            $emailUsuario = 'exemplo@email.com';
            $assunto = 'Novo Código de Confirmação de E-mail';
            $mensagem = 'Seu novo código de confirmação é: ' . $novoCodigo;
            mail($emailUsuario, $assunto, $mensagem);
        }
    }
    ?>

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