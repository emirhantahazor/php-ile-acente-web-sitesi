<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$ad = isset($_POST['ad']) ? $_POST['ad'] : null;
$soyad = isset($_POST['soyad']) ? $_POST['soyad'] : null;
$telefon = isset($_POST['telefon']) ? $_POST['telefon'] : null;
$mesaj = isset($_POST['mesaj']) ? $_POST['mesaj'] : null;

$email = 'emirhantahazor@gmail.com';

$mail = new PHPMailer(true);
try {
    $mail->setLanguage('tr');
    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.yandex.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cbtyazilim@yandex.com';
    $mail->Password = 'bitsindayeter123';
    
    $mail->SMTPSecure  = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    // Maili gönderen kişi
    $mail->setFrom('cbtyazilim@yandex.com', 'CBT Sigorta');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'İletişim Formu';
    $mail->Body = 'Ad: ' . $ad . '<br>' .
                  'Soyad: ' . $soyad . '<br>' .
                  'Telefon: ' . $telefon . '<br>' .
                  'Mesaj: ' . $mesaj;

    $mail->send();

    echo "Mail gönderme işlemi başarıyla gerçekleşti.";

} catch (Exception $e){
    echo $e->getMessage();
}
