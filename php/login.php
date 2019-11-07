<?php

	require_once("conexao.php");

	$nome = $_GET['nome'];
	$senha = $_GET['senha'];
	$senha = md5($senha);


	$query = mysqli_query($connection, "select * from usuario where nome_de_usuario = '$nome' and senha = '$senha'");
	$tem = mysqli_num_rows($query);

	if($tem == 1){
		echo "logado";

	} else {
		echo "nao logado";

	}
	if($connection){
		mysqli_close($connection);
	}
?>