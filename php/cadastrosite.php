<?php
	require_once("conexao.php");

	$nome               = $_GET['nome'];
	$nome_de_usuario    = $_GET['nome_de_usuario'];
	$senha              = $_GET['senha'];
	$data_de_nascimento = $_GET['data_de_nascimento'];
	$email              = $_GET['email'];
	$telefone           = $_GET['telefone'];
	$fase_atual         = $_GET['fase_atual'];
	$senha              = md5($senha);
	
	$query= mysqli_query($connection,"SELECT * FROM usuario WHERE nome_de_usuario = '{$nome_de_usuario}'");
	if(mysqli_num_rows($query) == 1){
			echo "ja cadastrado";
	} else {
		$query = mysqli_query($connection, "insert into usuario (nome, nome_de_usuario, senha, data_de_nascimento, email, telefone, fase_atual) values ('$nome', '$nome_de_usuario' , '$senha', '$data_de_nascimento', '$email', '$telefone', '$fase_atual')");
		if($query){
			echo "sucesso";
		} else {
			echo "sei la";
		}
	}
	if($connection) mysqli_close($connection);
?>