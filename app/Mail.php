<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use ReCaptcha\ReCaptcha as ReCaptcha;

require '../vendor/autoload.php';
require 'template.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$reCaptcha = new \ReCaptcha\ReCaptcha($_POST['secret_key']);

if (!isset($_REQUEST["g-recaptcha-response"])) {
    echo json_encode([
        'success' => false,
        'message' => 'Captcha invalido'
    ]);
    return false;
}

$resp = $reCaptcha->verify($_REQUEST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

if ($resp->isSuccess()) {
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                               // Enable verbose debug output
        $mail->isSMTP();                                                    // Set mailer to use SMTP
        $mail->Host       = 'mail.crearperu.com';                           // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                           // Enable SMTP authentication
        $mail->Username   = 'crearperuhome@crearperu.com';                  // SMTP username
        $mail->Password   = "oG#%7UqbJ2S~";                                 // SMTP password
        $mail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 26;                                             // TCP port to connect to

        //Recipients
        $mail->setFrom('crearperuhome@crearperu.com', $_POST['company_name'] . " WEB");
        $mail->addAddress($_POST['email_recipient']);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Reclamo / Queja';
        $mail->Body    = $body;
        $mail->AltBody = $body;

        $mail->send();
        echo json_encode([
            'success' => true,
            'message' => 'Mensaje enviado'
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Mensaje no enviado, error del servidor',
            'phpmailer' => $mail->ErrorInfo,
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Captcha invalido'
    ]);
}
