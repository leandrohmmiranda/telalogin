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
include 'template.php';
?>

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