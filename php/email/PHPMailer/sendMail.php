<?php
    $sucesso = 0;
    if($_GET && isset($_GET['assunto']) && isset($_GET['para']) && isset($_GET['page'])){
        
        $str = "Sem nada";
        
        if(isset($_GET['motivo']) && strcmp($_GET['motivo'], "forgetPassword") == 0){
            $senhaAt = $_GET['senha'];
            $str = "<!DOCTYPE html><html lang='pt'><head><meta charset='UTF-8'><title>Run Math | Suporte</title></head><body>"
                 . "A sua senha atualizada é: $senhaAt"
                 . "</body></html>";
        }
        
        $de = "";
        $para = $_GET['para'];
        $assunto = $_GET['assunto'];
        $page = $_GET['page'];
        
        $pagecmp = $page;
        
        if(isset($_GET['motivo']) && strcmp($_GET['motivo'], "contato") == 0){
            $para = "run.math.19@gmail.com";
            $de = $_GET['email'];
            $logo = 'img/logo.png';
            $nomec = $_GET['nome'];
            $menssage = $_GET['message'];
            $assunto = "Contato | $assunto";
            $str = "<!DOCTYPE html><html lang='pt'><head><meta charset='UTF-8'><title>Run Math | Suporte</title></head><body>";
            $str .= "Mensagem de Contato<br><br>";
            $str .= "Nome: $nomec<br>";
            $str .= "Email: $de<br>";
            $str .= "Mensagem: \"$menssage\"<br><br>";
            $str .= "Fim da mensagem de contato";
            $str .= "</body></html>";
            
            $page = "sendMail.php?assunto=Recebemos seu E-mail&para=$de&page=$page&motivo=emaildevolta";
        }
        
        
        
        if(isset($_GET['motivo']) && strcmp($_GET['motivo'], "emaildevolta") == 0){
            $str = "<!DOCTYPE html><html lang='pt'><head><meta charset='UTF-8'><title>Run Math | Suporte</title></head><body>";
            $str .= "Recebemos seu email e estamos felizes em contar com sua participação no projeto Run Math.<br>";
            $str .= "Continue assim e relate todos os erros que encontrar. Contamos com você!!";
            $str .= "</body></html>";
        }
        
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
        
        $mail->msgHTML($str);

        $mail->AltBody = 'Erro ao carregar mensagem :(';

        
        
        if($mail->send()){
            if(strcmp($page, "sendMail.php?assunto=Recebemos seu E-mail&para=$de&page=$pagecmp&motivo=emaildevolta") == 0){
                header("Location: $page");
            }else {
                header("Location: $page?sucesso=1");
            }
            exit();
        } else {
          header("Location: $page?sucesso=0");
          exit();
        }
    } else {
        
    }
    
?>