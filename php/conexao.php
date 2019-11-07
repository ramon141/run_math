<?php
	$connection = mysqli_connect('localhost', 'root', '') or die ('Erro ao conectar');
	$bd = mysqli_select_db($connection, 'eagles-site') or die ("base de dados nao selecionada");
?>