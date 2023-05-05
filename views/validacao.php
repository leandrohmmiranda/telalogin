<form>
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