<?php

session_start();
if (!$_SESSION) {
    header("Location: naoLogado.php");
} else {
    if (!strcmp($_SESSION['login'], "ok") == 0) {
        header("Location: naoLogado.php");
    }
}

if ($_GET && isset($_GET['plano'])) {
    require_once("../php/conexao.php");
    $nomeDeUsuario = $_SESSION['nomeUsuario'];
    $dataDia = date('d');
    $dataMes = date('m');
    $dataAno = date('y');
    $data = $dataDia . $dataMes . $dataAno;
    
    echo $data;
    
    if(strcmp($_GET['plano'], "0")==0){
        $data = "0";
        
    }
    
    $query = mysqli_query($connection, "UPDATE `usuario` SET `plus` = '$data' WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
    
    
    
    if ($connection) {
        mysqli_close($connection);
    }
    if ($query) {
        header("Location: editPerfil.php?mensagem=" . $_GET['plano']);
    }
}
?>