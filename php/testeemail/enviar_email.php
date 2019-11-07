<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	//Define que será usado SMTP
	$mail->IsSMTP();
	
	//Enviar e-mail em HTML
	$mail->isHTML(true);
	
	//Aceitar carasteres especiais
	$mail->Charset = 'UTF-8';
	
	//Configurações
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	
	//nome do servidor
	$mail->Host = 'nome-do-servidor';
	//Porta de saida de e-mail 
	$mail->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$mail->Username = 'ramonbarbosa123456789@gmail.com';
	$mail->Password = '0/@/e$01_11@1$_11e/h0r';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$mail->From = 'usuario@dominio.com';
	
	//Nome do Remetente
	$mail->FromName = 'Celke';
	
	//Assunto da mensagem
	$mail->Subject = 'Titulo - Recuperar Senha';
	
	//Corpo da Mensagem
	$mail->Body = 'Conteudo do E-mail';
	
	//Corpo da mensagem em texto
	$mail->AltBody = 'conteudo do E-mail em texto';
	
	//Destinatario 
	$mail->AddAddress('cliente@dominio.com');
	
	if($mail->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $mail->ErrorInfo;
	}
	
?>



