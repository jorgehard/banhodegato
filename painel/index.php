<?php 
	session_start();
	include("config.php");
    $con = new DBConnection();
    
	if((isset($_SESSION['login_usuario_bg']) && isset($_SESSION['senha_usuario_bg']))){
		echo "<script>window.location='restrito/';</script>";
	}
	if(isset($_POST["submit"])) {
		$username_posbg = preg_replace('/[^[:alnum:]_\-@.]/', '',$_POST['username_bg']);
		$password_posbg = preg_replace('/[^[:alnum:]_]/', '',$_POST['password_bg']);
        $md5password = md5($password_posbg);
        
		$stat = $con->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
		$stat->execute(array($username_posbg,$md5password));
        $count = $stat->rowCount();
		if($count)
		{   
			$row = $stat->fetch(PDO::FETCH_ASSOC);
			$_SESSION['id_usuario_bg'] = $row['id'];
			$_SESSION['login_usuario_bg'] = $username_posbg;
			$_SESSION['senha_usuario_bg'] = $md5password;
			echo "<script>window.location='restrito/';</script>";
		}else{
			echo '	
			<div class="container" style="text-align:center; margin-top:20px; opacity:0.9">
				<div class="alert alert-danger">
					<strong>Login inválido!</strong> Senha ou Login incorretos, tente novamente!.
				</div>
            </div>';
		}
	}
	
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Banho de Gato"/>
    <title>Painel Admin - Banho de Gato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/painel.css">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon" />
</head>
  <body>
    <div class="container-fluid formulario text-center">
        <form class="form-signin" method="post">
        <img class="mb-4" src="../imagens/logo 1.png" alt="" width="72" height="72">
        <h1 class="h4 mb-3 font-weight-normal">Acesso restrito</h1>

        <label for="inputEmailbg" class="sr-only">Usuario</label>
            <input type="text" id="inputEmailbg" name="username_bg" class="form-control" placeholder="Nome de usuario" required autofocus>
        <br/>
        <label for="inputPasswordbg" class="sr-only">Senha</label>
            <input type="password" id="inputPasswordbg"  name="password_bg" class="form-control" placeholder="Senha" required>

        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Entrar" />
        <p class="mt-5 mb-3 text-muted">&copy; Banho de Gato</p>
        </form>
    </div>
  </body>
</html>
