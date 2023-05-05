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

    <form>
        <div>
            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" placeholder="Celular" required>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div>
            <button type="submit" onclick="window.location.href = 'validacaoemail.php'">Continuar</button>
        </div>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados enviados pelo formulário
        $celular = $_POST["celular"];
        $email = $_POST["email"];
        // Prepara a query de inserção
        $sql = "INSERT INTO usuarios (celular, email) VALUES ('$celular', '$email')";
        // Executa a query
        if ($conn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir os dados: " . $conn->error;
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