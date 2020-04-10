<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
  verificaLogin();
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Banho de Gato"/>
    <title>Painel Admin - Banho de Gato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/restrito.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    
    <link rel="icon" href="../../imagens/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon" />
    <style>
      textarea{
        resize: none;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="./">Banho de Gato</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a href="" href="#" onclick="ldy('../logout.php?acao=true','.conteudo')" class="nav-link"><span data-feather="log-out"></span> Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>MENU</span>
            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="ldy('sobre-nos.php','.conteudo')">
                  <span data-feather="home"></span>
                  Sobre nós
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="ldy('kits.php','.conteudo')">
                  <span data-feather="package"></span>
                  Kits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="ldy('postos-coleta.php','.conteudo')">
                  <span data-feather="map-pin"></span>
                  Postos de Coleta
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="ldy('voluntarios.php','.conteudo')">
                  <span data-feather="users"></span>
                  Voluntarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="ldy('mochila.php','.conteudo')">
                  <span data-feather="briefcase"></span>
                  Mochila
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="ldy('parceiros.php','.conteudo')">
                  <span data-feather="thumbs-up"></span>
                  Parceiros
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" id="containerDiv" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<div class="container conteudo">
				<h4>Bem-vindo, ao painel administrativo do seu site.</h4>
            </div>
        </main>
      </div>
    </div>
    <div id="loading" class="hidden-print" style="width:100%; height:100%; display:none; position:fixed; top:0; background: rgba(255, 255, 255, 0.5); z-index:9999;">
			<div style="position:relative; top: 40%; text-align:center;">
				<img src="../imagens/loading.svg"  alt="" width="40px" />
				<h4 style="font-family: 'Lobster', sans-serif; font-size:15px; color: rgba(0, 0, 0, 0.5);">Carregando...</h4>
			</div>
		</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
    <script src="../js/all.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>

      feather.replace()

      $(document).ready(function(){
        $('.nav-link').click(function(event){
          $('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
      });
    </script>
</body>
</html>
