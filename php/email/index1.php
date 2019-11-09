<?php
	if($_POST){
		$email = $_GET['email'];
		$senha = $_GET['senha'];

		$from = "run.math.19@gmail.com";

		ini_set('display_errors', 1);

		error_reporting(E_ALL);

		$from = "run.math.19@ramonbarbosa.dx.am";

		$to = $email;

		$subject = "Puts. Esqueci minha senha!";

		$message = "Sua senha foi alterada com sucesso. Sua nova senha é: ".$senha;

		$headers = "De:". $from;

		mail($to, $subject, $message, $headers);

		header("Location: /localhost/comodo");
		exit();

	} else {
		echo "nao entrou";
	}
?>