<?php
session_start();

// Gerar o texto do CAPTCHA
$captchaText = generateCaptchaText();

// Salvar o texto do CAPTCHA na sessão
$_SESSION['captcha_text'] = $captchaText;

// Gerar a imagem do CAPTCHA
$font = __DIR__ . '/fonts/arial.ttf'; // Caminho para o arquivo de fonte TrueType
$image = imagecreatetruecolor(200, 80); // Criar uma nova imagem com as dimensões desejadas

// Definir cores
$backgroundColor = imagecolorallocate($image, 255, 255, 255); // Fundo branco
$textColor = imagecolorallocate($image, 0, 0, 0); // Texto preto

// Preencher o fundo com a cor definida
imagefill($image, 0, 0, $backgroundColor);

// Desenhar o texto na imagem
imagettftext($image, 40, 0, 20, 60, $textColor, $font, $captchaText);

// Definir o cabeçalho da resposta como uma imagem PNG
header('Content-type: image/png');

// Enviar a imagem para o navegador
imagepng($image);

// Liberar memória
imagedestroy($image);

// Função para gerar o texto do CAPTCHA
function generateCaptchaText($length = 6)
{
    $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789'; // Caracteres permitidos (excluindo semelhantes como I, 1, O, 0)
    $captchaText = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $captchaText .= $characters[$index];
    }

    return $captchaText;
}
