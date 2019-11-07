<?php
	$connection = mysqli_connect('localhost', '20172291103', '20172291103') or die ('Erro ao conectar');
	$bd = mysqli_select_db($connection, '20172291103') or die ("base de dados nao selecionada");

  if($_POST){
  	$nome               = $_POST['nome'];
  	$nome_de_usuario    = $_POST['nome_de_usuario'];
  	$senha              = $_POST['senha'];
  	$data_de_nascimento = $_POST['data_de_nascimento'];
  	$email              = $_POST['email'];
  	$telefone           = $_POST['telefone'];


    $dia = substr($data_de_nascimento, -10, 2);
    $mes = substr($data_de_nascimento, -7, 2);
    $ano = substr($data_de_nascimento, -4, 4);
    $data_de_nascimento = $ano.$mes.$dia;

    header("Location: http://webdev.santarem.ifpa.edu.br/20172291103/run_math/cadastrosite.php?nome=".$nome."&nome_de_usuario=".$nome_de_usuario."&senha=".$senha."&data_de_nascimento=".$data_de_nascimento."&email=".$email."&telefone=".$telefone."&fase_atual=1");

  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		
		/* CSS reset */
*, *:before, *:after { 
  margin:0;
  padding:0;
  font-family: Arial,sans-serif;
}

body{
  margin:10px;
}

a{
  text-decoration: none;
}

/* esconde as ancoras da tela */
a.links{
  display: none;
}

/* content que contem os formulários */
.content{
  width: 500px;
  margin: 0px auto;
  position: relative;	
}

/* formatando o cabeçalho dos formulários */
h1{
  font-size: 48px;
  color: #066a75;
  padding: 10px 0;
  font-family: Arial,sans-serif;
  font-weight: bold;
  text-align: center;
  padding-bottom: 30px;
}
h1:after{
  content: ' ';
  display: block;
  width: 100%;
  height: 2px;
  margin-top: 10px;
  background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
  background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%); 
}

p{
  margin-bottom:15px;
}
p:first-child{
  margin: 0px;
}
label{
  color: #405c60;
  position: relative;
}

/**** advanced input styling ****/
/* placeholder */
::-webkit-input-placeholder  {
  color: #bebcbc; 
  font-style: italic;
}
input:-moz-placeholder,
textarea:-moz-placeholder{
  color: #bebcbc;
  font-style: italic;
} 
input {
  outline: none;
}

input:not([type="checkbox"]){
  width: 95%;
  margin-top: 4px;
  padding: 10px;	
  border: 1px solid #b2b2b2;
  
  -webkit-border-radius: 3px;
  border-radius: 3px;
  
  -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
  box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
  
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

/*estilo do botão submit */
input[type="submit"]{
  width: 100%!important;
  cursor: pointer;	
  background: #3d9db3;
  padding: 8px 5px;
  color: #fff;
  font-size: 20px;	
  border: 1px solid #fff;	
  margin-bottom: 10px;	
  text-shadow: 0 1px 1px #333;
  
  -webkit-border-radius: 5px;
  border-radius: 5px;
  
  transition: all 0.2s linear;
}
input[type="submit"]:hover{
  background: #4ab3c6;
}

/*marcando os links para mudar de um formulário para outro */
.link{
  position: absolute;
  background: #e1eaeb;
  color: #7f7c7c;
  left: 0px;
  height: 20px;
  width: 440px;
  padding: 17px 30px 20px 30px;
  font-size: 16px;
  text-align: right;
  border-top: 1px solid #dbe5e8;

  -webkit-border-radius: 0 0  5px 5px;
  border-radius: 0 0  5px 5px;
}
.link a {
  font-weight: bold;
  background: #f7f8f1;
  padding: 6px;
  color: rgb(29, 162, 193);
  margin-left: 10px;
  border: 1px solid #cbd518;

  -webkit-border-radius: 4px;
  border-radius: 4px;  

  -webkit-transition: all 0.4s linear;
  transition: all 0.4s  linear;
}
.link a:hover {
  color: #39bfd7;
  background: #f7f7f7;
  border: 1px solid #4ab3c6;
}

/* estilos para para ambos os formulários */
#cadastro{
  position: absolute;
  top: 0px;
  width: 88%;	
  padding: 18px 6% 60px 6%;
  margin: 0 0 35px 0;
  background: rgb(247, 247, 247);
  border: 1px solid rgba(147, 184, 189,0.8);
  
  -webkit-box-shadow: 5px;
  border-radius: 5px;
  
  -webkit-animation-duration: 0.5s;
  -webkit-animation-timing-function: ease;
  -webkit-animation-fill-mode: both;

  animation-duration: 0.5s;
  animation-timing-function: ease;
  animation-fill-mode: both;
}

#paracadastro:target ~ .content #cadastro{
  z-index: 2;
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;

  -webkit-animation-delay: .1s;
  animation-delay: .1s;
}

/*fadeInLeft*/
@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/*fadeOutLeft*/
@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(-20px);
  }
}
	</style>
</head>
<body>
<div class="container" >
    <a class="links" id="paracadastro"></a>
    
    <div class="content">    
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="http://localhost/download.php"> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Ramon" />
          </p>
          
          <p> 
            <label for="nome_cad">Nome de Usário</label>
            <input id="nome_cad" name="nome_de_usuario" required="required" type="text" placeholder="ramon" />
          </p>


          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="********"/>
          </p>

          <p> 
            <label for="senha_cad">Data de Nascimento</label>
            <input id="senha_cad" name="data_de_nascimento" required="required" placeholder="18/06/2003"/>
          </p>

          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="run.math.19@gmail.com"/> 
          </p>

          <p> 
            <label for="senha_cad">Telefone</label>
            <input id="senha_cad" name="telefone" required="required" placeholder="(00) 000000000"/>
          </p>
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
          
         
        </form>
      </div>
    </div>
  </div> 
</body>
</html>