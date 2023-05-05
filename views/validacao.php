<?php
include 'template.php';
?>
<form>
  <!-- Campos de cadastro de dados de validação -->

  <div>
    <label for="dataNascimento">Data de Nascimento:</label>
    <input type="date" id="dataNascimento" name="dataNascimento" required>
  </div>

  <div>
    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required>
  </div>

  <div>
    <button type="submit" onclick="window.location.href = 'cadastro_celular_email.php'">Continuar</button>
  </div>
</form>