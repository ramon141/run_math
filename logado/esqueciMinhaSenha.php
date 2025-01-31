<?php
	$mensagem = "";

	if($_POST){
		require_once("../php/conexao.php");

		$erro = false;
		$comprou = $_POST['radios'];
		$nome = $_POST['nome'];
		$email = $_POST['emailCompleto'];
		$dataDeNascimento = $_POST['dataDeNascimento'];
		$nomeDeUsuario = $_POST['nomeDeUsuario'];
		$total = 0;
		$mensagem = "";


		$query = mysqli_query($connection, "select * from `usuario` WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
		$query2 = mysqli_query($connection, "select * from contato where usuario_nome_de_usuario = '$nomeDeUsuario'");

		$tem = mysqli_num_rows($query);

		if($tem == 1){
			$total = $total + 15;

			while ($fetch2 = mysqli_fetch_row($query2)) {
				if(strcmp($fetch2[1]."", "NULL") == 0){
					$mensagem = "Sem email";
                                        $erro = true;
				} else if(strcmp($fetch2[1]."", $email) == 0){
					$total = $total + 24;
				} else {
                                        $erro = true;
					$mensagem = "O email cadastrado na sua conta não corresponde ao informado.";
				}
			}

			while ($fetch = mysqli_fetch_row($query)) {
				if(strcmp($fetch[0]."", $nome) == 0){
					$total = $total + 24;
				}
				if(strcmp($fetch[3]."", $dataDeNascimento) == 0){
					$total = $total + 24;
				}
				if($comprou == 0){
					$total = $total + 15;
			
				}

			}


			if($total >= 70 && $erro == false){
				$senhaSem = substr(md5(uniqid(rand())), 5);	
				$senha = md5($senhaSem);
				$query = mysqli_query($connection, "UPDATE `usuario` SET `senha` = '$senha' WHERE `usuario`.`nome_de_usuario` = '$nomeDeUsuario'");
				

				header("Location: http://localhost/run_math_site/php/email/PHPMailer/sendMail.php?para=". $email. "&senha=" . $senhaSem . "&assunto=Ops... Esqueci minha Senha" . "&page=../../../logado/esqueciMinhaSenha.php&sucesso=1&motivo=forgetPassword");
                        } else if ($erro == false){
				$mensagem = "Infelizmente os dados coletados não são sufucientes para comprovar que essa conta seja sua.";
			}
		} else {
			$mensagem="Não há nenhum registro de um nome de usuário chamado: " . $nomeDeUsuario;
		}

		if($connection){
				mysqli_close($connection);
		}


	} else {
            if ($_GET && $_GET['sucesso'] == 1){
                $mensagem = "A Senha foi alterada com sucesso!";
            } else if ($_GET && $_GET['sucesso'] == 0){
                $mensagem = "Erro ao alterar a senha";
            }
        }
        
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../img/favicon.png" type="image/png">
        <title>Esqueci minha senha</title>
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
        
    </head>
    <body class="upcoming_games">

		<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
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
								 aria-expanded="false">Páginas</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="price.html">Preço</a>
									<li class="nav-item"><a class="nav-link" href="games.html">Jogos</a>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contate-nos</a></li>
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="primary_btn">Login</a></li>
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
			echo "<h2 style='color: red; text-align: center;''>".$mensagem."</h2>";
		 ?>



		<!--================Start Form ===========================-->

		<form class="form-horizontal" action="esqueciMinhaSenha.php" method="post">
			<fieldset class="border border-primary" style="width: 500px; margin: 190px auto; color: black; border-width: 5px !important; border-radius: 10px; border-color: blue;">

			<h3 style="color: green; text-align: center;">Por favor para recuperar sua senha responda algumas perguntas</h3> <br>
			

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Nome</label>  
			  <div class="col-md-12">
			  <input id="nome" name="nome" type="text" placeholder="Digite seu nome..." class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Nome de Usuário</label>  
			  <div class="col-md-12">
			  <input id="nome" name="nomeDeUsuario" type="text" placeholder="Digite o seu id..." class="form-control input-md" required="">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="emailCompleto">E-mail</label>  
			  <div class="col-md-12">
			  <input id="emailCompleto" name="emailCompleto" type="text" placeholder="Digite seu email" class="form-control input-md">
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label">Data de Nascimento </label>  
			  <div class="col-md-12">
			  	<input type="date" name="dataDeNascimento">
			  </div>
			</div>


			<!-- Multiple Radios -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="radios">Você comprou um personagem?</label>
			  <div class="col-md-12">
			  <div class="radio">
			    <label for="radios-0">
			      <input type="radio" name="radios" id="radios-0" value="0" checked="checked">
			      Não, estou usando o padrão.
			    </label>
				</div>
			  <div class="radio">
			    <label for="radios-1">
			      <input type="radio" name="radios" id="radios-1" value="1">
			      Sim, eu comprei!
			    </label>
				</div>
			  </div>
			</div>


			<p style="color: red; text-align: center;">Preencha a maior quantidade de campos possíveis</p>
			<p style="color: red; text-align: center;">Deixe em branco o(s) campo(s) que não souber</p>
			<p style="color: red; text-align: center;">As informações devem ser correspondentes a sua conta <i>Run Math</i></p>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnEsqueci"></label>
			  <div class="col-md-12">
			    <button id="btnEsqueci" name="btnEsqueci" class="btn btn-danger">Cancelar</button>
			    <button id="btnReceber" name="btnReceber" type="submit" class="btn btn-success">Mudar senha</button>
			  </div>
			</div>

			</fieldset>
		</form>


		<!--================End Form =============================-->

	


		<!--================ Start Newsletter Area ================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="newsletter_inner">
						<h1>Tenha acesso antecipado!</h1>
						<p>Increva-se e receba um e-mail com a versão 1.0 do Run Math</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<aside class="newsletter_widget">
						

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://gmail.us4.list-manage.com/subscribe/post?u=108323f3432958d491aabe33a&amp;id=718bfa3a48" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	

<div class="mc-field-group">
	<label for="mce-EMAIL">E-mail  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_108323f3432958d491aabe33a_718bfa3a48" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="RECEBER" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='MMERGE6';ftypes[6]='number'; /**
 * Translated default messages for the $ validation plugin.
 * Locale: PT_PT
 */
$.extend($.validator.messages, {
	required: "Campo de preenchimento obrigat&oacute;rio.",
	remote: "Por favor, corrija este campo.",
	email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
	url: "Por favor, introduza um URL v&aacute;lido.",
	date: "Por favor, introduza uma data v&aacute;lida.",
	dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
	number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
	digits: "Por favor, introduza apenas d&iacute;gitos.",
	creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
	equalTo: "Por favor, introduza de novo o mesmo valor.",
	accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
	maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
	minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
	rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
	range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
	max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
	min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area ================-->
	
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