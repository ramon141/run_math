<?php
	require_once("conexao.php");

	$nome               = $_GET['nome'];
	$nome_de_usuario    = $_GET['nome_de_usuario'];
	$senha              = $_GET['senha'];
	$data_de_nascimento = $_GET['data_de_nascimento'];
	$email              = $_GET['email'];
	$telefone           = $_GET['telefone'];
	$senha              = md5($senha);
	
	$query= mysqli_query($connection,"SELECT * FROM usuario WHERE nome_de_usuario = '{$nome_de_usuario}'");
	if(mysqli_num_rows($query) == 1){
			echo "ja cadastrado";
	} else {

		$query = mysqli_query($connection, "INSERT INTO `eagles-site`.`usuario` (`nome`, `nome_de_usuario`, `senha`, `data_de_nascimento`, `fase_atual`, `plus`, `score`, `mathcoin`, `quantDicas`, `comprouPersonagem`) VALUES ('$nome', '$nome_de_usuario', '$senha', '$data_de_nascimento', 1, 0, 0, 1000, 5, 0)");

		$query1 = mysqli_query($connection, "INSERT INTO `eagles-site`.`desempenho` (`id_desemprenho`, `nome_de_usuario_usuario`, `perguntas_respondidas`, `perguntas_acertadas`, `tempo_medio_responder`, `tempo_total_de_jogo`, `media_diaria`) VALUES (DEFAULT, '$nome_de_usuario', 0, 0, 0, 0, 0)");

		$query2 = mysqli_query($connection, "INSERT INTO `eagles-site`.`contato` (`idcontato`, `email`, `telefone`, `usuario_nome_de_usuario`) VALUES (DEFAULT, '$email', $telefone, '$nome_de_usuario')");

		$dataAtual = date('Y-m-d');
		$horaAtual = date('H:i:s');

		$query3 = mysqli_query($connection, "INSERT INTO `lastacess` (`idlastAcess`, `horaUltimoAcesso`, `diaUltimoAcesso`, `usuario_nome_de_usuario`) VALUES (NULL, '$horaAtual', '$dataAtual', '$nome_de_usuario')");
		
		if($query3){
			echo "sucesso";
		} else {
			echo "sei la";
		}
	}
	if($connection) mysqli_close($connection);
?>