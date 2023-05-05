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