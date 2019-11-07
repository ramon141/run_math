<?php

    if ( session_status() !== PHP_SESSION_ACTIVE )
    {
        session_start();
    }


  if(!$_SESSION){
      header("Location: ../naoLogado.php");
      exit();
  } else {
    if(!strcmp($_SESSION['login'], "ok") == 0){
      header("Location: ../naoLogado.php");
      exit();
    }
  }

    if($_GET || $_SESSION){
        if($_GET && isset($_GET['idDesempenho'])){
            $idDesempenho = $_GET['idDesempenho'];
        } else if($_SESSION && isset($_SESSION['idDesempenho'])) {
            $idDesempenho = $_SESSION['idDesempenho'];
        } else {
            header("Location: ../naoLogado.php");
            exit();
        }
    }
  
  require_once("../../php/conexao.php");
  $query = mysqli_query($connection, "select * from desempenho where id_desemprenho = $idDesempenho");

  while($fetch = mysqli_fetch_row($query)){
    $perguntas_respondidas = $fetch[2];
    $perguntas_acertadas = $fetch[3];
    $tempo_medio_responder = $fetch[4];
    $tempo_total_de_jogo = $fetch[5];
    $media_diaria = $fetch[6];
  }
  $perguntas_erradas = $perguntas_respondidas - $perguntas_acertadas;
?>


<html>
  <head>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {"packages":["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          <?php echo "['Perguntas', 'Acertadas x Erradas'],
                    ['Acertadas',     $perguntas_acertadas],
                    ['Erradas',     $perguntas_erradas]" ?>
          
        ]);

        var options = {
          title: "Perguntas Acertadas x Erradas"
        };

        var chart = new google.visualization.PieChart(document.getElementById("piechart"));

        chart.draw(data, options);
      }

    </script>
    
    
    <?php 
        if($_GET && isset($_GET['idDesempenho'])){
            echo "<script>
                    function imprimir(){
                        window.print();
                    }
                    imprimir();
                </script>";
        }
    
    
    ?>
    
    
    <style>
        
        .obs-mal{
            color: red;
        }
        .info{
            color: blue;
        }
        .obs-bom{
            color: green;
        }

    </style>
  </head>
  <body>
      
      <img
    <?php
        if($_GET && isset($_GET['idDesempenho'])){
            echo "Nome: ".$_SESSION['nome']."<br>";
            echo "Nome de Usuário: ".$_SESSION['nomeUsuario']."<br>";
            echo "Data Atual: ". date('d/m/y')."<br>";
        }
    
      if($perguntas_respondidas > 0){
        echo "<div id='piechart' style='width: 900px; height: 500px;'></div>";
        if($perguntas_erradas > $perguntas_acertadas){
          echo "<p class='obs-mal'>Obs: Burro</p><br>";
        } else if (($perguntas_acertadas / $perguntas_respondidas) < 0.69) {
          echo "<p class='obs-mal'>Obs: Semiburro</p><br>";
        } else {
          echo "<p class='obs-mal'>Obs: Inteligente</p><br>";
        }

        echo "<p class='info'>A criança que está usando este aplicativo demora em média $tempo_medio_responder segundos para responder uma questão</p>";
        if($tempo_medio_responder > 120){
          echo "<p class='obs-mal'>Obs: Recomendamos que a criança estude e pratique mais um pouco, para que possa ser mais rápido com a resolução das questões</p><br>";
        } else if($tempo_medio_responder > 60){
          echo "<p class='obs-mal'>Obs: Recomendamos que a criança matenha a rotina de estudos, o seu nível está obs-bom</p><br>";
        } else {
          echo "<p class='obs-bom'>Obs: A criança apresenta um ótimo desempenho</p><br>";
        }

        echo "<p class='info'>A criança jogou Run Math por $tempo_total_de_jogo minutos Run Math</p>";
        if ($tempo_total_de_jogo > 2000) {
          echo "<p class='obs-mal'>Obs: Você já jogou bastante agora é hora de estudar</p><br>";
        } else if ($tempo_total_de_jogo > 1000) {
          echo "<p class='obs-mal'>Obs: Notei que está com dificuldade, recomendamos que estude um pouco mais</p><br>";
        } else if ($tempo_total_de_jogo > 0) {
          echo "<p class='obs-mal'>Obs: tempo total entre 0 e 99</p><br>";
        } else {
          echo "<p class='obs-mal'>Obs: tempo total 0</p><br>";
        }

        echo "<p class='info'>A criança está jogando $media_diaria minutos por dia</p>";
        if($media_diaria > 400){
          echo "<p class='obs-mal'>Obs: Atenção! Você tem que descansar outra hora nos vemos</p><br>";
        } else if($media_diaria > 60){
          echo "<p class='obs-mal'>Obs: Você está em um bom ritmo de jogo</p><br>";
        } else if($media_diaria > 0){
          echo "<p class='obs-mal'>Obs: A criança joga por um curto período de tempo</p><br>";
        } else {
          echo "<p class='obs-mal'>Obs: Jogou 0 segundos</p><br>";
        }

        $mensagemFinal = "";
        //comeco dos ifs da inteligencia artificil de lixo que vou tentar criar
        if($perguntas_acertadas < $perguntas_erradas){
            $mensagemFinal .= "Já é notável um desenvolvimento em sua capacidade de resolver questões, entretando ainda é necessário trabalhar duro. ";
            if($tempo_medio_responder > 60){
                $mensagemFinal .= "Tente praticar um pouco mais, procura resolver contas mais rapidamente, sem errá-las.";
            } else if ($tempo_medio_responder > 30){
                $mensagemFinal .= "Você está em um tempo bom, tente se dedicar mais em acertar as questões, do que se preocupar com o tempo.";
            } else if ($tempo_medio_responder >= 0){
                $mensagemFinal .= "E seu tempo está ótimo, mas tente é acertar mais questões, pois lembre-se \"A pressa é inimiga da perfeição\".";
            }
            
            
            
            
            
            
        } else if($perguntas_acertadas >= $perguntas_erradas && ($perguntas_acertadas / $perguntas_respondidas) < 0.68){
            $mensagemFinal .= "Seus esforços estão começando a dar resultado, não pense em parar continue no mesmo ritmo.";
            if($tempo_medio_responder > 60){
                $mensagemFinal .= "Não é necessário, mas se possível procure resolver as questões mais rapidamente.";
            } else if ($tempo_medio_responder > 30){
                $mensagemFinal .= "Tente focar mais em reponder as questões corretamente, deixe o esqueça um pouco do tempo.";
            } else if ($tempo_medio_responder >= 0){
                $mensagemFinal .= "Você conseguiu um ótimo tempo, mas infelizmente acertou somente $perguntas_acertadas das $perguntas_respondidas, tente focar mais no acertar do que no tempo.";
            }
            
            
            
        } else if (($perguntas_acertadas / $perguntas_respondidas) < 0.69 && ($perguntas_acertadas / $perguntas_respondidas) > 0.9){
            $mensagemFinal .= "Você apresentou um alto rendimento em nosso jogo, continue da mesma forma, e um dia conseguirá chegar ao topo. ";
            if($tempo_medio_responder > 60){
                $mensagemFinal .= "Porém, tente resolver as questões mais rapidamente sem perder a qualidade das suas respostas, vá com calma um dia conseguirá. ";
            } else if ($tempo_medio_responder > 30){
                $mensagemFinal .= "Você apresentou um ótimo tempo, com uma quantidade de acetos considerados bons, tente se enforçar um pouco mais, mas nao se sinta pressionado. ";
            } else if ($tempo_medio_responder >= 0){
                $mensagemFinal .= "Você conseguiu um tempo de respostas incrível, agora é hora de evoluir tente responder mais questões corretamente. ";
            }
            
            
            
            
            
            
        } else {
            $mensagemFinal .= "O seu desempenho em nosso jogo foi ótimo, conseguiu apresenta uma quantidade de acertos de " . (($perguntas_acertadas / $perguntas_respondidas) * 100) . "%. ";
            if($tempo_medio_responder > 60){
                $mensagemFinal .= "Porém, tente resolver as questões mais rapidamente.";
            } else if ($tempo_medio_responder > 30){
                $mensagemFinal .= "Você apresenta um tempo quase perfeito, continue estudando.";
            } else if ($tempo_medio_responder >= 0){
                $mensagemFinal .= "Você conseguiu um tempo de resposta e uma quantidade de acertos incríveis ";
            }
            
            
            
        }
            
        echo $mensagemFinal;
        
        
        
        //fim dos ifs da inteligencia artificil de lixo que vou tentar criar
        
        
        
        
      } else {
        echo "<p class='obs-mal'>Obs: Nenhuma questão foi respondida ainda! Reponda no mínimo uma para gerar um relatório</p>";
      }
      
      if($_GET && isset($_GET['idDesempenho'])){
        echo "<br><br><br><br><p style='float: left; margin-left: 27%;'>Relatório gerado por Run Math: Conhecimento a um click</p>";
      }
    ?>
    
  </body>
</html>