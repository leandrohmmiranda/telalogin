<?php
session_start();

// Gerar o texto do captcha
$captchaText = generateCaptchaText();

// Armazenar o texto do captcha na sessão
$_SESSION['captcha'] = $captchaText;

// Gerar a imagem do captcha
$width = 150;
$height = 40;
$image = imagecreatetruecolor($width, $height);
$background = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, $width - 1, $height - 1, $background);
imagettftext($image, 20, 0, 10, 30, $textColor, 'path/to/font.ttf', $captchaText);

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

function generateCaptchaText()
{
    $length = 6; // Comprimento do texto do captcha
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Caracteres permitidos
    $captchaText = '';

    // Gerar o texto do captcha com base no comprimento desejado
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $captchaText .= $characters[$randomIndex];
    }

    return $captchaText;
}
