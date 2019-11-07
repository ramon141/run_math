<?php
    require_once 'PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->isSMTP();
    $mail -> SMTPDebug = 2;
    $mail -> Host = "smtp.gmail.com";
    $mail -> SMTPSecure = "tls";
    $mail -> Port = 587;
    $mail -> SMTPAuth = true;
    $mail -> Username = 'ramonbarbosa123456789@gmail.com';
    $mail -> Password = 'zyjumxzaoirorqhd';
    $mail -> setFrom("ramonbarbosa123456789@gmail.com", "Ramon Teste");
    $mail -> addAddress("ramonbarbosa123456789@gmail.com");
    $mail -> Subject = "Email de teste";
    
    $mail->msgHTML(file_get_contents('email.html'), __DIR__);
    
    $mail->AltBody = 'se der erro vai aparecer isso';
    $mail->addAttachment('e.png');
    
    if($mail->send()){
        echo "deu tudo certo";
    } else {
        echo "deu tudo errado";
    }

?>