<?php
	require_once("conexao.php");

	$query = mysqli_query($connection, "SELECT * FROM usuario ORDER BY score DESC LIMIT 100");
	
	while($fetch = mysqli_fetch_row($query)){
        	echo $fetch[1]."-".$fetch[6].",";
    	}		

		
	if($connection) mysqli_close($connection);
?>