<?php
include 'template.php';
?>
<form>
    <div>
        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celular" required>
    </div>

    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <button type="submit" onclick="window.location.href = 'validacaoemail.php'">Continuar</button>
    </div>
</form>