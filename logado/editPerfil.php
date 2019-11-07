<?php

	session_start();
	if(!$_SESSION){
			header("Location: naoLogado.php");
	} else {
		if(!strcmp($_SESSION['login'], "ok") == 0){
			header("Location: naoLogado.php");
		}
	}

        
        $planoMsg = "Gratuito";
        $plano = $_SESSION['plano'];

        if($plano > 0){

            $dataDia = substr($plano,0, 2);
            $dataMes = substr($plano,2,2);
            $dataAno = substr($plano,4,6);
            $data = $dataDia . "-" .$dataMes . "-" . $dataAno;
            
            $dataAtual = date('d-m-y');
            
            if($dataAtual <= $data){
                $planoMsg = "Plus";
            }
            
        }
//        echo $planoMsg;
        
        $nomeDeUsuario = $_SESSION['nomeUsuario'];
        $mensagem = "";
        
        
        
        
        
        
	if($_POST){
            require_once("../php/conexao.php");
            $senha = md5($_POST['senhaNova']);

            $dataDeNas = $_POST['datadenacimentoNova'];
            $nome = $_POST['nomeNovo'];		
            $nomeDeUsuario = $_SESSION['nomeUsuario'];
            $plusBD = "0"; 
            $telefone = "0";
            $emailNovo = "NULL";
            

            if(strcmp($_POST['planoHidden'], "1") == 0){                    
                $plusBD = date('d-m-y', strtotime('+1 month'));
                $plusBD = str_replace("-", "" , $plusBD);
            }
            
            if(!empty($_POST['telefoneNovo'])){
                $telefone = $_POST['telefoneNovo'];
            }
            if(!empty($_POST['emailNovo'])){
                $emailNovo = $_POST['emailNovo'];
            }
            
            $idContato = $_SESSION['idContato'];
            
                
            $query = mysqli_query($connection, "UPDATE `usuario` SET `nome` = '$nome', `senha` = '$senha', `data_de_nascimento` = '$dataDeNas', `plus` = '$plusBD' WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
            $query4 = mysqli_query($connection, "UPDATE `contato` SET `email` = '$emailNovo', `telefone` = '$telefone' WHERE `contato`.`idContato` = '$idContato'");
                        
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            $_SESSION['dataDeNascimento'] = $dataDeNas;
            $_SESSION['plano'] = $plusBD;
            
            if(strcmp($emailNovo, "NULL") == 0){
                $_SESSION['email'] = "";
            } else {
                $_SESSION['email'] = $emailNovo;
            }

            if(strcmp($telefone, "0") == 0){
                $_SESSION['telefone'] = "";
            } else {
                $_SESSION['telefone'] = $telefone;
            }
            
            
            
            
            if($query && $query4){
                $mensagem = "<h1 style='color: green; float: left; margin-left:21%;'>A atualização de dados foi concluida com sucesso</h1>";
            } else {
                $mensagem = "<h1 style='color: red; float: left; margin-left:13%;'>Houve um erro ao atualizar os dados, <a href='contato.html'><u style='color: blue;'>entre em contato conosco</u></a></h1>";
            }

            if($connection){
                    mysqli_close($connection);
            }
                
                
                
                
	} else {
            if(strcmp($planoMsg, "Gratuito") == 0){
            require_once("../php/conexao.php");
            $query = mysqli_query($connection, "UPDATE `usuario` SET `plus` = '0' WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
            if ($connection) {
                mysqli_close($connection);
            }
        }
        }
//        die;
?>

<script>
    
    function changeForPlus(){
        document.getElementById("alterarPlano").innerHTML = "Alterar para o plano Plus";
        $('#planosModal').modal('hide');
            
        document.getElementById("planoHidden").value = "1";
    }
    
    function changeForFree(){
       document.getElementById("alterarPlano").innerHTML = "Alterar para o plano gratuito";
       $('#planosModal').modal('hide');
       document.getElementById("planoHidden").value = "0";
    }
</script>




<!doctype html>
<html lang="en">
    
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <title>Run Math</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        
        
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
    </head>
    <body class="upcoming_games">

        
		<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="../img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="index.html">Início</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.html">Sobre</a></li>
							<li class="nav-item"><a class="nav-link" href="gallery.html">Empresa</a>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contate-nos</a></li>
							


							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nome'] ?></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">STATUS DO JOGO</a></li>
									<li class="nav-item"><a class="nav-link" href="blog.html">DESEMPENHO</a></li>
									<li class="nav-item"><a class="nav-link" href="blog.html">EDITAR PERFIL</a></li>
                                                                        <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
								</ul>
							</li>
						</ul>
						

						



					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
	
		<!--================Home Banner Area =================-->
		<section class="banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<div class="page_link">
							<a href="index.html">Início</a>
							<a href="games.html">Baixar</a>
						</div>
						<h2>Baixar Run Math</h2>
					</div>
				</div>
			</div>
		</section>
		<!--================End Home Banner Area =================-->
	
                <?php
                    echo $mensagem;
                ?>
                
                
		<!--================Start Form ===========================-->

<fieldset class="border border-primary" style="width: 500px; margin: 190px auto; color: black; border-width: 5px !important; border-radius: 10px; border-color: blue;">
		<form class="form-horizontal" action="editPerfil.php" method="post">
		
                    
                    

		<!-- Form Name -->
		

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="nomeNovo">Nome</label>  
		  <div class="col-md-12">
		  <input id="nomeNovo" name="nomeNovo" type="text" placeholder="Digite seu nome aqui" class="form-control input-md" required="" value="<?php echo $_SESSION['nome']?>">
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="nomeUsuario">Nome de Usuário</label>  
		  <div class="col-md-12">
		  <input id="nomeUsuario" name="nomeUsuario" type="text" placeholder="Nome de usuário" class="form-control input-md" required="" readonly=""  value="<?php echo $_SESSION['nomeUsuario']?>">
		    
		  </div>
		</div>

		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="senhaNova">Senha</label>
		  <div class="col-md-12">
		    <input id="senhaNova" name="senhaNova" type="password" placeholder="Digite sua senha aqui" class="form-control input-md" required=""  value="<?php echo $_SESSION['senha']?>">
		    
		  </div>
		</div>

		<!-- Birth input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="senhaNova">Data de Nascimento</label>
		  <div class="col-md-10">
		    <input id="datadenacimentoNova" name="datadenacimentoNova" type="date" required=""  value="<?php echo $_SESSION['dataDeNascimento']?>">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="emailNovo">E-mail</label>  
		  <div class="col-md-12">
		  <input id="emailNovo" name="emailNovo" type="email" placeholder="Digite seu e-mail aqui" class="form-control input-md"  value="<?php echo $_SESSION['email']?>">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="telefoneNovo">Telefone</label>  
		  <div class="col-md-12">
		  <input id="telefoneNovo" name="telefoneNovo" type="text" placeholder="Digite seu telefone aqui" class="form-control input-md"  value="<?php echo $_SESSION['telefone']?>">
		    
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="plano">Plano</label>
		  <div class="col-md-12">
                      <input id="planoHidden" name="planoHidden" value="<?php if(strcmp("Gratuito", $planoMsg) == 0){echo "0";} else {echo "1";} ?>" type="hidden">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#planosModal" id="alterarPlano">Alterar Plano</button>
                      <?php echo "Plano atual ".$planoMsg; ?>
                      
		  </div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-2 control-label" for="cancelar"></label>
		  <div class="col-md-12">
		    <button id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
		    <button id="salvar" type="submit" name="salvar" class="btn btn-success">Salvar Alterações</button>
		  </div>
		</div>
		</form>
		</fieldset>
                
                
		<!--================End Form =================-->

        <!--===============Start Modal=========================-->
	<br><br><br><br><br><br>
            <div class="container">
              

              <!-- Modal -->
              <div class="modal fade" id="planosModal" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body" id="corpoModal">
                            
                            
                            
                            
                            
                            <!--================ Start Pricing Plans Area ================-->
	<section class="pricing_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Planos</h2>
						<h1>Planos</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="pricing_item">
						<h3 class="p_title">Gratuito</h3>
						<h1 class="p_price">R$ 0.00</h1>
						<div class="p_list">
							<ul>
								<li>Jogue por tempo ilimitado</li>
								<li>Aproveite o Run Math em qualquer plataforma</li>
							</ul>
						</div>
						<div class="p_btn">
                                                    <a class="gradient_btn" onclick="changeForFree()"><span id="mudarParaEste">Mudar para este!</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="pricing_item active">
						<h3 class="p_title">Plus</h3>
						<h1 class="p_price">R$3.00</h1>
						<div class="p_list">
							<ul>
								<li>Envio de desempenho por e-mail ou site</li>
								<li>Recomendações no estudo matemático</li>
								<li>Envio de desempenho por telefone</li>
								<li>Gráficos de análise de desempenho</li>
								<li>M$ 5000 em sua conta Run Math</li>
							</ul>
						</div>
						<div class="p_btn">
                                                    <a class="gradient_btn" onclick="changeForPlus()"><span id="comprarAgora">Comprar Agora!</span></a>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!--================ End Pricing Plans Area ================-->

                        </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>

                </div>
              </div>

            </div>


	<!--===============End Modal=========================-->
                
                
	
		<!--================Footer Area =================-->
		<footer class="footer_area section_gap_top">
			<div class="container">
				<div class="row single-footer-widget">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copy_right_text">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by Ramon Barbosa</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="social_widget">
						<a href="http://bit.ly/face_runmath"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="http://bit.ly/ytrunmath"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
		<!--================End Footer Area =================-->
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="vendors/isotope/isotope-min.js"></script>
		<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
		<script src="vendors/counter-up/jquery.counterup.min.js"></script>
		<script src="js/mail-script.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
</html>


