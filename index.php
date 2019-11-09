<?php
    session_start();
    if(isset($_SESSION['login']) && strcmp($_SESSION['login'], "ok") == 0){
        header("Location: logado/index.php");
    }
    
?>



<!doctype html>
<html lang="en">

<head>

<style type="text/css">
	.modal-header
 	{
            background-color: #FFFFFF;
 	}

 	.modal-body{
            background-color: #FFFFFF;
 	}
	.input-form-login{
            float: left;
            margin-left: 10%;
            width: 80%;
            height: 40px;
            border-width: 0px;	
            background-color: #e8f0fe;
            border-radius: 6px;
	}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->




	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Run Math</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>	<script src="https://www.youtube.com/iframe_api"></script>

<!-- End WOWSlider.com HEAD section -->
</head>

<body>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"108323f3432958d491aabe33a","lid":"718bfa3a48","uniqueMethods":true}) })</script>
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
							<li class="nav-item"><a class="nav-link" href="gallery.html">Blog</a>

							<li class="nav-item"><a class="nav-link" href="contact.html">Contate-nos</a></li>
							<li class="nav-item"><a class="nav-link"><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#visulUsuarioModal">
								Login
							</button></a></li>

							


							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="games.html" class="primary_btn">Baixar</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
	<br><br><br><br>
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/1.png" alt="" title="" id="wows1_0"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/2.png" alt="javascript slideshow" title="" id="wows1_1"/></a></li>
		<li><iframe width="100%" height="100%" src="https://www.youtube.com/embed/itwQLa7VjSY?autoplay=0&rel=0&enablejsapi=1&playerapiid=ytplayer&wmode=transparent" frameborder="0" allowfullscreen></iframe><img src="data1/images/itwqla7vjsy.png" alt="" title="" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/1.png" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/2.png" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/itwqla7vjsy.png" alt=""/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

	<!--================Start About Us Area =================-->
	<section class="about_us_area section_gap_top">
		<div class="container">
			<div class="row about_content align-items-center">
				<div class="col-lg-6">
					<div class="section_content">
						<h6>Sobre nós</h6>
						<h1>Somos membros da equipe Eagles</h1>
						<p>"Juntos" estamos desenvolvendo um sistema, cujo principal objetivo é o aprendizado de forma lúdica, porém sem perder a qualidade. Venha fazer parte conosco do jogo Run Math. Baixe e se divirta!</p>
						<a class="primary_btn" href="#">Ler Mais</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<img class="img-fluid w-100" src="img/logoAguia.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End About Us Area =================-->




	<!--===============Start Modal=========================-->
	<br><br><br><br><br><br>
		<div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="visulUsuarioModalLabel" style="float: left; margin-left: 45%;">Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="php/loginSite.php" method="post">
						<div class="modal-body">
						
						<tag style="float: left; margin-left: 40%;">Nome de Usuário:</tag><br>
						<input type="text" class="input-form-login" name="nome"><br><br>
						<tag style="float: left; margin-left: 45%;">Senha:</tag><br>
						<input type="password" class="input-form-login" name="senha">
						<br><br><br>
						<?php
							if($_GET){
								if(strcmp($_GET['mensagem'] ."", "0") == 0){
									echo "<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
										  <script type='text/javascript' src='js/bootstrap.js'></script>
										  <script type='text/javascript'>
										  $(window).load(function() {
										      $('#visulUsuarioModal').modal('show');
										  });
										  </script>";
										  echo "<tag style='float: left; margin-left: 30%;color:red;'>Usuário e/ou senha inválido(s)</tag><br><br>";
								}
							}
						?>
						<a style="float: left; margin-left: 35%;" href="logado/esqueciMinhaSenha.php">Esqueci minha senha</a>
						</div>
						<br>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!--===============End Modal=========================-->




	<!--================First Upcoming Games Area =================-->
	<section class="upcoming_games_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>POR QUE USAR O RUN MATH?</h2>
						<h1>POR QUE USAR O RUN MATH?</h1>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/per.gif" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Divirta-se aprendendo no Run Math</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/caderno.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Técnicas de aprendizado para garantir boas notas em matemática</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map3.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Aprenda sobre continenetes e cidades</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/trofeu.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Garanta o primeiro lugar na Calçada da Fama</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Upcoming Games Area =================-->

	




	<!--========== Start Testimonials Area ==================-->
	<section class="testimonials_area section_gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="testi_item">
					<img src="img/quote.png" alt="">
					<h4>Run Math</h4>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							Descubra todos os benefícios que Run Math oferece
							Baixe ou jogue nossa versão online!
						</p>
					</div>
				</div>
				<div class="testi_item">
					<img src="img/logoEagles.png" alt="">
					<h4>Eagles</h4>
					<ul class="list">
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							A equipe Eagles orgulha-se de todos os esforços utilizados para a realização desse sistema<br>
							Divirta-se com o primeiro jogo da franquia!
						</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End Testimonials Area ================-->


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
								<li>Cadastre-se e ganhe M$1000</li>
								<li>Aproveite o Run Math em qualquer plataforma</li>
							</ul>
						</div>
						<div class="p_btn">
							<a class="gradient_btn" href="#"><span>Cadastrar Agora!</span></a>
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
							<a class="gradient_btn" href="#"><span>Comprar Agora!</span></a>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!--================ End Pricing Plans Area ================-->


	<!--================ Start Frequently Asked Questions Area ================-->
	<section class="frequently_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Perguntas Frequentes</h2>
						<h1>Perguntas Frequentes</h1>
					</div>
				</div>
			</div>
			<div class="row frequent_inner">
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3>O Run Math é gratuito?</h3>
						<p>Sim nosso jogo é 100% gratuito, oferecendo planos semestrais e anuais com um ótimo custo benefício confira nossos planos acima.<br><br><br></p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item">
						<h3>Como vou saber se meu filho realmente aprende?</h3>
						<p>Você irá receber dados semanais via e-mail, telefone, ou aqui mesmo no site; mostrando relatórios e até mesmo abservações e recomendacões para o correto aprendizado da matéria de matemática.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3>O que eu ganho com os planos pagos?</h3>
						<p>Cada plano tem seus benefícios suba um pouco e veja o plano que mais lhe agrada. Estamos lhe esperando.<br><br></p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item">
						<h3>Por quê usar o Run Math ao invés de outros?</h3>
						<p>Nosso sistema foi desenvolvido com toda a caltela e cuidado que sua criança precisa. Temos o orgulho de oferecer um produto gratuito e de qualidade. Teste-o e aproveite!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Frequently Asked Questions Area ================-->

	<!--================ Start Blog Area ================-->
	<section class="blog_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Útimas Postagens</h2>
						<h1>Útimas Postagens</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/blog_img1.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="blog.html">Os Benefícios da aproximação da educação com a Informática.</a>
							<p>As tecnologias trouxeram outras perspectivas para o ensino da informática nas escolas, mudaram as práticas pedagógicas...</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>15 de Nov.</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/blog_img2.jpg" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="https://drive.google.com/open?id=1W1WzFlXL0Ss0oqszOaVx7dJpZIzy2NCy">Veja nosso artigo</a>
							<p>Tenha acesso a todos os nossos objetivos, expectativas, e limitações. Venha descobrir
							um pouco mais sobre a equipe Eagles<br><br></p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>15 de Nov.</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 hidden-md">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/blog_img3.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="blog.html">Portable Fashion for women</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>13th Dec </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area ================-->

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
			<div class="row footer_inner">
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>About Farfly</h4>
						</div>
						<ul>
							<li><a href="#"></a>For Business</a></li><a href="#">
								<li><a href="#"></a>Premium Plans
							</a></li>
							<li><a href="#"></a>Reviews</a></li>
							<li><a href="#"></a>How it Works</a></li>
							<li><a href="#"></a>Farfly Blog</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Company</h4>
						</div>
						<ul>
							<li><a href="#"></a>Product Tour</a></li><a href="#">
								<li><a href="#"></a>Pricing
							</a></li>
							<li><a href="#"></a>Founding Members</a></li>
							<li><a href="#"></a>Case Studies</a></li>
							<li><a href="#"></a>Product Updates</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Support</h4>
						</div>
						<ul>
							<li><a href="#"></a>Documentation</a></li><a href="#">
								<li><a href="#"></a>Data Securiry
							</a></li>
							<li><a href="#"></a>Site Performance</a></li>
							<li><a href="#"></a>Action Plan</a></li>
							<li><a href="#"></a>Resources</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Legal</h4>
						</div>
						<ul>
							<li><a href="#"></a>Terms and conditions</a></li><a href="#">
								<li><a href="#"></a>Privacy Policy
							</a></li>
							<li><a href="#"></a>Cookie Information</a></li>
							<li><a href="#"></a>Opt - Out</a></li>
						</ul>
					</aside>
				</div>
			</div>
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