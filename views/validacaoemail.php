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
        <button type="submit">Validar E-mail</button>
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
include 'template.php';
?>