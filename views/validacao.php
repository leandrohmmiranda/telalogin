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
include 'template.php';
?>

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