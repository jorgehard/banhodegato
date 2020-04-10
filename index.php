<?php
	require('painel/config.php');
    $con = new DBConnection();
    
    $stm = $con->query("SELECT * FROM `sobre_nos`");
    $sobre = $stm->fetch();

    $stm2 = $con->query("SELECT * FROM `kits`");
    $kits = $stm2->fetch();
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158284985-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-158284985-1');
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Focado na população em situação de rua o projeto Banho de Gato vem desde 2016 fazendo um trabalho imenso com as pessoas que vivem em situação de vulnerabilidade. Começamos com as entregas no bairro da Luz e desde então não paramos a expansão. Hoje com pontos de coletas espalhados por São Paulo e alguns estados do Brasil como Belo horizonte, Rio grande do Sul, Rio de janeiro. Coletamos produtos de banho entregues em hotel, motel, avião, separamos esses produtos e montamos em forma de kit de banho." />
    <meta name="author" content="Banho de Gato"/>
    <title>Banho de Gato - Ajude</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a href="/" class="navbar-brand" style="background:#fff; height:100px; padding:0px 20px; ">
            <img src="imagens/logo 1.png" width="84px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse h4 justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#sobre-nos">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#kits">Kits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#coleta">Coleta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#voluntarios">Voluntários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#mochila">Mochila</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#parceiros">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button-nav" href="https://api.whatsapp.com/send?phone=5521976974848&text=Olá%20Lenon,%20vim%20pelo%20site%20e%20quero%20doar">Doar</a>
                </li>
            </ul>
        </div>
      </nav>
    <div class="p-3 mb-2 bg-secondary text-white banner-topo1" style="background: url(imagens/sobre/<?= $sobre['imagem'] ?>) no-repeat top center; background-size: cover;">
        <p data-aos="fade-right">
           <?= $sobre['texto']; ?>
        </p>
    </div>
    <!----------- SOBRE NÓS ---------->
    <div class="div-sobre-nos" id="sobre-nos">
        <h1 class="mb-0 h3 mb-4 text-center" id="titulos" data-aos="zoom-in">Projeto Banho de Gato</h1>
        <div class="lead" data-aos="zoom-in">
            <?= $sobre['sobre_nos']; ?>
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-1.jpg" data-aos="fade-right" width="90%" alt="Imagem de meios de transporte" />
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-seta.jpg" data-aos="fade-down" alt="Seta para baixo" />
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-2.jpg" width="80%" data-aos="fade-right" alt="Imagem de utensilios de limpeza pessoal" />
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-seta.jpg" data-aos="fade-down" alt="Seta para baixo" />
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-3.jpg" data-aos="fade-left" width="40%" alt="Imagem de caminhao" />
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-seta.jpg" data-aos="fade-down" alt="Seta para baixo" />
        </div>
        <div class="row d-flex justify-content-center p-4">
            <img src="imagens/sobre/imagem-4.jpg" width="30%" data-aos="fade-right" alt="Imagem de alguem feliz" />
        </div>
    </div>
    <!--------------- KITS -------------->
    <div class="div-kit-banho" id="kits">
        <h1 class="mb-0 h3 mb-4 text-center" id="titulos" data-aos="zoom-in">Kits de Banho</h1>
        <div data-aos="fade-right">
            <div class="lead"> 
                <?= $kits['descricao']; ?>
            </div>
        </div>
        <div class="container p-4 d-flex justify-content-center">
            <img src="imagens/ilustracao-viajante 1.jpg" class="img-corre img-fluid" data-aos="fade-left" width="90%" alt="Imagem cartonista de uma mulher com uma mala de viagem, ao fundo um avião voando" />
        </div>
    </div>
    <!----------- POSTOS DE DOAÇÕES ---------->
    <div class="div-postos-doacao" id="coleta">
        <h1 id="titulos" data-aos="fade-right">Postos de Coleta</h1>
        <h3 class="sub-title">Doe seu produto de higiene e apoie o projeto Banho de Gato.</h3>
        <div class="div-enderecos">
            <!-- Primeira coluna de endereços -->
			<div class="container" data-aos="fade-right">
				<div class="row">
					<!--- bloco --->
					<?php 
					    $stm3 = $con->query("SELECT * FROM `postos_coleta` WHERE status = '0'");
						while($coleta = $stm3->fetch()){
							echo '<div class="col-sm-6">
						<div id="bloco">
							<div class="col-2">
								<div id="numeros"><img src="imagens/pin.svg" alt="Pino de localização" width="80%" /></div>
							</div>
							<div class="col">
								<h3>'.$coleta['cidade'].' - '.$coleta['uf'].'</h3>
								<div class="sub-bloco">';
									if($coleta['nome_local'] != ''){
										echo '<h4>'.$coleta['nome_local'].'</h4>';
									}
									echo '<p>'.$coleta['endereco'].'</p>
								</div>
							</div>
						</div>
					</div>';
							
						}
					?>
				</div>
			</div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center endereco-correios" data-aos="zoom-in">
            <h1 id="titulos">Endereço Correios</h1>
            <h3 class="sub-title">Rua Barão do triunfo 314, apt. 74 <br/> Brooklyn - São Paulo/SP - 04602-000</h3>
            <a href="https://api.whatsapp.com/send?phone=5521976974848&text=Olá%20Lenon,%20vim%20pelo%20site%20e%20quero%20ser%20um%20posto%20de%20entrega" class="text-center mb-4" id="botao">
                Quero ser um posto de entrega
            </a>
        </div>
        <div class="container p-4 d-flex justify-content-center cr12">
            <img src="imagens/ilustracao-entrega-kit.jpg" data-aos="fade-right" width="90%" alt="Imagem cartonista de um homem doando um pacote para outro" />
        </div>
    </div>
    <!------ VOLUNTARIOS ----->
    <div class="div-voluntarios s-pad" id="voluntarios">
        <h1 id="titulos">Voluntários</h1>
        <div class="container">
			<?php 
			$stm5 = $con->query("SELECT * FROM `voluntarios` WHERE status = '0'");
			while($volu = $stm5->fetch()){
			?>
            <div class="row m-4" data-aos="fade-right">
                <div class="col-md-2">
                    <div class="perfil_vo" style="background-image: url(imagens/voluntarios/<?= $volu['imagem'] ?>)">&nbsp;</div>
                </div>
                <div class="col-md-10">
                    <div class="row align-items-center justify-content-center tem_voluntarios">
                        <div class="col-md-2 nome-voluntario text-center"><?= $volu['nome'] ?></div>
                        <div class="col-md-10 descricao-voluntario"><?= $volu['descricao'] ?></div>
                    </div>   
                </div> 
            </div>
			<?php } ?>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center endereco-correios">
            <a href="https://api.whatsapp.com/send?phone=5521976974848&text=Olá%20Lenon,%20vim%20pelo%20site%20e%20quero%20ser%20um%20voluntario" class="text-center mb-4" id="botao">
                Quero ser um Voluntário
            </a>
        </div>
    </div>
    <!------ MOCHILA ----->
	<?php
    $stm4 = $con->query("SELECT * FROM `mochila`");
    $moc = $stm4->fetch();
	?>
    <div class="p-3 mb-2 bg-secondary text-white banner-mochila">&nbsp;</div>
    <div class="div-voluntarios" id="mochila">
        <div class="div-sacola">
            <h1 class="h3 mb-4 text-center" id="titulos">Mochila Amiga</h1>
            <div class="lead"> 
                <?= $moc['texto_1']; ?>
            </div>
            <h1 class="h3 text-left" id="titulos" style="padding:10px 120px;">A mochila sempre carrega:</h1>
            <div class="lead">
                <?= $moc['texto_2']; ?>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center endereco-correios">
            <a href="https://api.whatsapp.com/send?phone=5521976974848&text=Olá%20Lenon,%20vim%20pelo%20site%20e%20quero%20saber%20mais%20sobre%20o%20projeto%20mochila" class="text-center mb-4" id="botao">
               + informações
            </a>
        </div>
    </div>
    <!------ Projetos Amigos ----->
    <div class="div-parceiros" id="parceiros">
        <div class="div-projetos">
            <h1 class="h3 mb-4 text-center" id="titulos">Projetos Amigos</h1>
            <div class="container d-flex justify-content-center">
                <div class="row" style="width:85%">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://www.techo.org/brasil/" target="_blank" class="text-center">
                            <img src="imagens/parceiros/logo-teto.png" alt="Logo Teto" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="#" target="_blank" class="text-center">
                            <img src="imagens/parceiros/sp.png" width="50%" alt="Logo SP" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="http://pimpmycarroca.com" target="_blank" class="text-center">
                            <img src="imagens/parceiros/pimp-my-carroca.png" alt="Logo Pimp my carroça" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/moradoresderuaeseuscaes/" target="_blank" class="text-center">
                            <img src="imagens/parceiros/mrsc.png" alt="Logo MRSC" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://www.facebook.com/minigentilezas/" target="_blank" class="text-center">
                            <img src="imagens/parceiros/mini-gentilezas.png" width="90%" alt="Logo Mini Gentilezas" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://www.aartesalva.com" target="_blank" class="text-center">
                            <img src="imagens/parceiros/arte-salva.png" alt="Logo Arte Salva" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center endereco-correios">
            <a href="https://api.whatsapp.com/send?phone=5521976974848&text=Olá%20Lenon,%20vim%20pelo%20site%20e%20quero%20entrar%20para%20a%20rede" class="text-center mb-4" id="botao">
                Quero entrar para a rede
            </a>
        </div>
    </div>
    <!------ Marcas Parceiras ----->
    <div class="div-parceiros">
        <div class="div-projetos2">
            <h1 class="h3 mb-4 text-center" id="titulos">Marcas Parceiras</h1>
            <div class="container d-flex justify-content-center">
                <div class="row" style="width:85%">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="http://www.dkt.com.br" target="_blank" class="text-center">
                            <img src="imagens/parceiros/dkt.png"  width="70%" alt="Logo Teto" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://www.idobrazil.com" target="_blank" class="text-center">
                            <img src="imagens/parceiros/idobrazil.png" width="60%" alt="Logo SP" />
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <a href="https://gama.academy" target="_blank" class="text-center">
                            <img src="imagens/parceiros/gama-academy.png" width="100%" alt="Logo Teto" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center endereco-correios">
            <a href="https://api.whatsapp.com/send?phone=5521976974848&text=Olá%20Lenon,%20vim%20pelo%20site%20e%20quero%20ser%20um%20patrocinador" class="text-center mb-4" id="botao">
                Quero ser um patrocinador
            </a>
        </div>
    </div>
    <footer>
        <div class="row m-4" data-aos="fade-right">
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <div class="perfil_vo2" style="background-image: url(imagens/Lenon-Volpini.jpeg)">&nbsp;</div>
            </div>
            <div class="col-md-10">
                <div class="row align-items-center justify-content-center tem_voluntarios ps-4">
                    <div class="col-md-2 nome-voluntario text-center">Lenon Volpini
                        Fundador</div>
                    <div class="col-md-10 descricao-voluntario">Eu sou o Lenon tenho 29 anos, trabalho profissionalmente como modelo e tenho um escritório de arquitetura. Já participei de alguns projetos sociais mas as maiores atividades com voluntariado foi com o TETO e o projeto Banho de Gato que fundei em 2016. Desde então venho atuado nas ruas e projetos sociais para tentar de alguma forma melhorar as condições das pessoas que deveriam ter o mínimo de direito garantido. Acredito muito que um banho pode fazer a diferença e mudar o dia de uma pessoa que basicamente vive esquecida pela sociedade. Acredito que o projeto ajuda a alertar a precariedade e a carência de quem vive nas ruas e o quanto a força do coletivo pode mudar essa triste realidade, mesmo que minimamente. Esses dias entreguei um kit e recebi um poema em troca, me mostrando mais uma vez a beleza do voluntariado.</div>
                </div>   
            </div> 
        </div>
        <div class="container box-instagram" style="padding:60px 0px">
            <a href="https://www.instagram.com/projetobanhodegato" target="_blank" alt="Instagram">
				<h3 class="user-instagram">@projetobanhodegato</h3>
			</a>
            <section class="regular slider">
                <div id="slide-item0">
                    <img src="http://placehold.it/150x150?text=1" width="90%">
                </div>
                <div id="slide-item1">
                    <img src="http://placehold.it/150x150?text=2" width="90%">
                </div>
                <div id="slide-item2">
                    <img src="http://placehold.it/150x150?text=3" width="90%">
                </div>
                <div id="slide-item3">
                    <img src="http://placehold.it/150x150?text=4" width="90%">
                </div>
                <div id="slide-item4">
                    <img src="http://placehold.it/150x150?text=5" width="90%">
                </div>
                <div id="slide-item5">
                    <img src="http://placehold.it/150x150?text=6" width="90%">
                </div>
                <div id="slide-item6">
                    <img src="http://placehold.it/150x150?text=7" width="90%">
                </div>
                <div id="slide-item7">
                    <img src="http://placehold.it/150x150?text=8" width="90%">
                </div>
              </section>
        </div>
        <div class="container p-4">
            <a href="https://pt-br.facebook.com/projetobanhodegato/" target="_blank" class="text-center mb-4"><img src="imagens/footer-facebook.jpg" alt="Imagem relacionada ao facebook" width="98%"/></a>
        </div>
        <div class="container text-center footer-social" style="padding-top:20px;">
            <h3>Redes Sociais</h3>
            <div>
                <a href="https://pt-br.facebook.com/projetobanhodegato/" target="_blank" class="text-center mb-4"> <img src="imagens/facebook.svg" alt="Logo do facebook" /></a>
                <a href="https://www.instagram.com/projetobanhodegato/" target="_blank" class="text-center mb-4"> <img src="imagens/instagram.svg" alt="Logo do instagram" /></a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="plugins/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="plugins/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        AOS.init();
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4
        });
    </script>
    
</body>
</html>
