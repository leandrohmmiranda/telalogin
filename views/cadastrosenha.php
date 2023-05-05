<h1>Quase lá! Só falta criar sua senha</h1>
<p>Contendo no mínimo 8 caracteres e com pelo menos três dos seguintes:</p>
<ul>
    <li>Letras maiúsculas</li>
    <li>Letras minúsculas</li>
    <li>Caracteres especiais</li>
</ul>

<form>
    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" minlength="8" placeholder="Senha" required>
    </div>
    <div>
        <label for="confirmarSenha">Confirme a senha:</label>
        <input type="password" id="confirmarSenha" name="confirmarSenha" minlength="8" placeholder="Confirme a senha" required>
    </div>
    <div>
        <button type="submit">Continuar</button>
    </div>
</form>
<?php
include 'template.php';
?>