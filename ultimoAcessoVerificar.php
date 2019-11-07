<?php
    require_once 'php/conexao.php';
    
    session_start();
    
    $nomeDeUsuario = $_SESSION['nomeUsuario'];
    $dataAtual = date('Y-m-d');
    $horaAtual = date('H:i:s');
    
    $query = mysqli_query($connection, "SELECT * FROM `lastacess` where usuario_nome_de_usuario = '$nomeDeUsuario'");
    while($fetch = mysqli_fetch_row($query)){
        $rangeHora = dateDiff($fetch[1], $horaAtual, '%H');
        $rangeData = dateDiff($fetch[2], $dataAtual, '%d');
    }
    
    if($rangeHora > 6 && $rangeData > 1){
        echo "envia um email";
    } else {
        echo "nao envia email";
    }
    
    function dateDiff( $dateStart, $dateEnd, $format = '%a' ) {
        $d1     =   new DateTime( $dateStart );
        $d2     =   new DateTime( $dateEnd );
        $diff   =   $d1->diff($d2, true);   
        return $diff->format( $format );
    }