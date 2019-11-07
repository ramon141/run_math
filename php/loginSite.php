<?php

	require_once("conexao.php");

	session_start();
	$nome = $_POST['nome'];
	$senhaSem = $_POST['senha'];
	$senha = md5($senhaSem);

	$query = mysqli_query($connection, "select * from usuario where nome_de_usuario COLLATE latin1_bin = '$nome' and senha = '$senha'");
	$query2 = mysqli_query($connection, "select * from contato where usuario_nome_de_usuario = '$nome'");
	$query3 = mysqli_query($connection, "select id_desemprenho from desempenho where nome_de_usuario_usuario = '$nome'");

	$tem = mysqli_num_rows($query);

	if($tem == 1){
		$_SESSION['login'] = "ok";
		while($fetch = mysqli_fetch_row($query)){
			$_SESSION['nomeUsuario'] = $fetch[1];
			$_SESSION['nome'] = $fetch[0];
			$_SESSION['dataDeNascimento'] = $fetch[3];
			$_SESSION['senha'] = $senhaSem;
                        $_SESSION['plano'] = $fetch[5];
		}

		while($fetch = mysqli_fetch_row($query2)){
			
			$_SESSION['idContato'] = $fetch[0];

			if(strcmp($fetch[1]."", "NULL") == 0){
				$_SESSION['email'] = "";
			} else {
				$_SESSION['email'] = $fetch[1];
			}

			if(strcmp($fetch[2]."", "0") == 0){
				$_SESSION['telefone'] = "";
			} else {
				$_SESSION['telefone'] = $fetch[2];
			}
		}

		while($fetch = mysqli_fetch_row($query3)){
			$_SESSION['idDesempenho'] = $fetch[0];

		}

		echo "nome: " .$_SESSION['nome'] . "<br>";
		echo "nomeUsuario: " .$_SESSION['nomeUsuario'] . "<br>";
		echo "senha: " .$_SESSION['senha'] . "<br>";
		echo "dataDeNascimento: " .$_SESSION['dataDeNascimento'] . "<br>";
		echo "idContato: " .$_SESSION['idContato'] . "<br>";
		echo "plano: " .$_SESSION['plano'] . "<br>";
		echo "email: " .$_SESSION['email'] . "<br>";
		echo "telefone: " .$_SESSION['telefone'] . "<br>";
		echo "idDesempenho: " .$_SESSION['idDesempenho'] . "<br>";


                if($connection){
                    mysqli_close($connection);
                }
                
                if($_GET && isset($_GET['page'])){
                    header("Location: " . $_GET['page']);
                } else {
                    header("Location: ../logado/index.php");
                }
                exit();
	} else {
                if($connection){
                   mysqli_close($connection);
                }
		header("Location: ../index.php?mensagem=0");
        exit();
	}
	
?>