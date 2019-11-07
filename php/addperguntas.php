<?php
	require_once("conexao.php");
	if ($_POST) {
		$per = $_POST['pergunta'];
		$dic = $_POST['dica'];
		$pert = $_POST['pertence'];
		$o1 = $_POST['op1'];
		$o2 = $_POST['op2'];
		$o3 = $_POST['op3'];
		$o4 = $_POST['op4'];
		$o5 = $_POST['op5'];
		$resp = $_POST['resposta'];
		
		
		
		
		$query= mysqli_query($connection,"INSERT INTO `perguntas` (`id_perguntas`, `perguntas`, `dicas`, `pertence_fase`, `op1`, `op2`, `op3`, `op4`, `op5`, `resposta`) VALUES (NULL, '$per', '$dic', '$pert' , '$o1', '$o2', '$o3', '$o4', '$o5', '$resp')");
		if($query){
			echo "Vamos adicionar mais perguntas";

		} else {

			echo "Erro ao adicionar a pergunta";
		}
	}
	if($connection){
		mysqli_close($connection);
	}
	
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Run Math Questions Add</title>
	</head>
	<body>
		<fieldset style="width: 400px">
			<form method="post" action="addperguntas.php">
				<pre>Pergunta:        <input type="text" name="pergunta" required></pre>
				<pre>Dica:            <input type="text" name="dica" required></pre>
				<pre>Fase da Pergunta:<input type="number" name="pertence" required></pre>
				<pre>Opção A:         <input type="text" name="op1" required></pre>
				<pre>Opção B:         <input type="text" name="op2" required></pre>
				<pre>Opção C:         <input type="text" name="op3" required></pre>
				<pre>Opção D:         <input type="text" name="op4" required></pre>
				<pre>Opção E:         <input type="text" name="op5" required></pre>
				<pre>Resposta:        <select name="resposta"></br>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
				</select></br></br>
				<input value="Adicionar Pergunta" type="submit">
			</form>
		</fieldset>
	</body>
</html>