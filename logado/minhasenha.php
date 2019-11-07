<?php

	session_start();
	if(!$_SESSION){
			header("Location: naoLogado.php");
	} else {
		if(!strcmp($_SESSION['login'], "ok") == 0){
			header("Location: naoLogado.php");
		}
	}
	
	if($_POST){
		require_once("../php/conexao.php");

		
		$comprou = $_POST['radios'];
		$nome = $_POST['nome'];
		$email = $_POST['emailCompleto'];
		$dataDeNascimento = $_POST['dataDeNascimento'];
		$nomeDeUsuario = $_POST['nomeDeUsuario'];
		$total = 0;
		$mensagem = "nula";


		$query = mysqli_query($connection, "select * from `usuario` WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
		$query2 = mysqli_query($connection, "select * from contato where usuario_nome_de_usuario = '$nomeDeUsuario'");

		$tem = mysqli_num_rows($query);

		if($tem == 1){
			$total = $total + 15;
			echo "nomeDeUsuario ok <br>";

			while ($fetch2 = mysqli_fetch_row($query2)) {
				if(strcmp($fetch2[2]."", "NULL") == 0){
					echo "Sem email";
					if($connection){
						mysqli_close($connection);
					}
					header("Location: sememail.php");
					exit();		
				} else if(strcmp($fetch2[1]."", $email) == 0){
					echo "email ok <br>";
					$total = $total + 24;
				} else {
					$mensagem = "O email cadastrado na sua conta não corresponde ao informado";
				}
			}

			while ($fetch = mysqli_fetch_row($query)) {
				if(strcmp($fetch[0]."", $nome) == 0){
					echo "nome ok <br>";
					$total = $total + 24;
				}
				if(strcmp($fetch[3]."", $dataDeNascimento) == 0){
					$total = $total + 24;
					echo "dataDeNascimento ok <br>";
				}
				if($comprou == 0){
					$total = $total + 15;
					echo "comprou ok <br>";
				}

			}

			echo $total."<br>";


			if($total >= 70){
				$senhaSem = substr(md5(uniqid(rand())), 5);	
				$senha = md5($senhaSem);
				$query = mysqli_query($connection, "UPDATE `usuario` SET `senha` = '$senha' WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
				

				header("Location: http://ramonbarbosa.dx.am/sendMail/index.php?email=". $email. "&senha=".$senhaSem);
			} else {
				$mensagem = "Infelizmente os dados coletados não são sufucientes para comprovar que essa conta seja sua";
			}
		} else {
			$mensagem="Não há nenhum registro de um nome de usuário chamado: " . $nomeDeUsuario;
		}

		echo $mensagem;

		if($connection){
				mysqli_close($connection);
		}


	}
?>