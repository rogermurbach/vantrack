<?php

$mobile = FALSE;
$user_agents = array("iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");

foreach($user_agents as $user_agent){
    if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== FALSE) {
        $mobile = TRUE;
        $modelo	= $user_agent;
        break;
    }
}

if (isset($_POST['BTEnvia'])) {

	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	//====================================================

	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//====================================================
	$email_remetente = "fale@vantrack.com.br"; // deve ser uma conta de email do seu dominio
	//====================================================

	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "contato@vantrack.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email";
	$email_assunto = "Contato via site VanTrack"; // Este será o assunto da mensagem
	//====================================================

	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n";
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n";
	$email_conteudo .= "Mensagem = $mensagem \n";
	//====================================================

	//Seta os Headers (Alterar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================

	//Enviando o email
	//====================================================
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
					$msg = "Sua mensagem foi enviada com sucesso.";
					echo "<script>alert('$msg');window.location.assign('http://www.vantrack.com.br/#contact');</script>";
					}
			else{
				$msg = "Erro ao enviar a mensagem.";
				echo "<script>alert('$msg');window.location.assign('http://www.vantrack.com.br/#contact');</script>";
					}
	//====================================================
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - VanTrack</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">VanTrack</a><button class="navbar-toggler float-right" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#download">Download</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#features">RECURSOS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">CONTATO</a></li>
                    <ul class="nav navbar-collapse" id="navbarResponsive" style="<?php if($mobile){ echo "margin-left: auto; margin-right: auto; margin-top: 15px; margin-bottom: 15px;"; } else{ echo "margin-left: 30px"; } ?>">
                        <li class="nav-item" role="presentation"><a class="btn btn-light action-button" href="#" style="color: black; font-size: 11px;">LOGIN</a></li>

                    </ul>
                </ul>
        </div>
        </div>
    </nav>
    <header class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 class="mb-5">Vem aí uma nova forma de rastreio de transporte escolar. Totalmente novo!<br>Totalmente revolucionário!</h1><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#contact">Mantenha-se atualizado</a></div>
                </div>
                <div class="col-lg-5 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device" style="background-image:url('assets/img/iphone_6_plus_white_port.png');">
                                <div class="screen"><img class="img-fluid" src="assets/img/intro_vantrack.png"></div>
                                <div class="button"></div>
                            </div>
                        </div>
                    </div>
                    <div class="iphone-mockup"></div>
                </div>
            </div>
        </div>
    </header>
    <section id="download" class="download text-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="section-heading">Em breve, nas principais lojas de apps</h2>
                    <p>Nosso aplicativo estará disponível apenas para Android e iOS.</p>
                    <div class="badges"><a href="#" class="badge-link"><img src="assets/img/google-play-badge.svg"></a><a href="#" class="badge-link"><img src="assets/img/app-store-badge.svg"></a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Recursos para facilitar sua vida!</h2>
                <p class="text-muted">Veja abaixo algumos das funções</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device" style="background-image:url('assets/img/iphone_6_plus_white_port.png');">
                                <div class="screen"><img class="img-fluid" src="assets/img/intro_vantrack.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item"><i class="fa fa-bullhorn text-primary"></i>
                                    <h3>WarnBefore</h3>
                                    <p class="text-muted">Aviso de proximidade do transporte escolar.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item"><i class="fa fa-envira text-primary"></i>
                                    <h3>EcoTrack</h3>
                                    <p class="text-muted">Modo economia de dados, evitando gastos excessivos de dados.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item"><i class="fa fa-street-view text-primary"></i>
                                    <h3>WeRound</h3>
                                    <p class="text-muted">Atualização automática de usuários presente no transporte</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item"><i class="fa fa-map-signs text-primary"></i>
                                    <h3>Routes</h3>
                                    <p class="text-muted">Crie rotas com múltiplos destinos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta" style="background-image:url('assets/img/bg-cta.jpg');">
        <div class="cta-content">
            <div class="container">
                <h2>Quer saber mais?</h2><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#contact">contate-nos!</a></div>
        </div>
        <div class="overlay"></div>
    </section>
    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2><span>Mantenha-se atualizado</span><span></span></h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item social-google-plus"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <BR>
          <BR>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Contate-nos</h1>
                    <form action="<? $PHP_SELF; ?>" method="POST">
                        <div class="form-group"><label>Nome</label><input class="form-control" type="text" name="nome" placeholder="Seu nome"></div>
                        <div class="form-group"><label>E-mail </label><input class="form-control" type="email" name="email" placeholder="Seu endereço de e-mail"></div>
                        <div class="form-group"><label>Telefone</label><input class="form-control" type="tel" name="telefone" placeholder="Seu numero de telefone"></div>
                        <div class="form-group"><label>Mensagem</label><textarea class="form-control" rows="5" name="mensagem" placeholder="Sua mensagem aqui!"></textarea></div><button class="btn btn-light" type="button" style="background-color: rgb(123,218,126);">enviar</button></form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>©&nbsp;VanTrack 2018. Todos os direitos reservados.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacidade</a></li>
                <li class="list-inline-item"><a href="#">Termos</a></li>
                <li class="list-inline-item"><a href="#">FAQ</a></li>
            </ul>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>
