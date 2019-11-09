<?php
    $sucesso = 0;
    if($_GET && isset($_GET['assunto']) && isset($_GET['para']) && isset($_GET['page'])){
        
        $str = "Sem nada";
        
        if(isset($_GET['motivo']) && strcmp($_GET['motivo'], "forgetPassword") == 0){
            $str = "A sua senha atualizada é: " . $_GET['senha'];
        }
        
        
        $para = $_GET['para'];
        $assunto = $_GET['assunto'];
        
        require_once 'PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail ->isSMTP();
        //$mail -> SMTPDebug = 2;
        $mail -> Host = "smtp.gmail.com";
        $mail -> SMTPSecure = "tls";
        $mail -> Port = 587;
        $mail -> SMTPAuth = true;
        $mail -> Username = 'run.math.19@gmail.com';
        $mail -> Password = 'wlmucxyycytefbdc';
        $mail -> setFrom("run.math.19@gmail.com", "Run Math Suporte");
        $mail -> addAddress("$para");
        $mail -> Subject = "$assunto";
        
        $html1 = htmlentities($str);
        $mail->msgHTML($html1);

        $mail->AltBody = 'Erro ao carregar mensagem :(';

        if($mail->send()){
            header("Location: /run_math_site/logado/esqueciMinhaSenha.php?sucesso=1");
            exit();
        } else {
          header("Location: /run_math_site/logado/esqueciMinhaSenha.php?sucesso=0");
          exit();
        }
    } else if ($sucesso == 0){
        header("Location: /run_math_site/logado/esqueciMinhaSenha.php");
        exit();
    }
    
?>