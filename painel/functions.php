<?php 
session_start();
require_once('config.php');
$con = new DBConnection();

function verificaLogin(){
	global $con, $nome_usuario, $login_usuario, $id_usuario_logado, $acesso_usuario, $email_usuario, $status;
    if(isset($_SESSION['login_usuario_bg']) && isset($_SESSION['senha_usuario_bg'])){
			$stat = $con->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
			$stat->execute(array($_SESSION['login_usuario_bg'],$_SESSION['senha_usuario_bg']));
			$count = $stat->rowCount();
			if ($count == 1){
				$rowa = $stat->fetch(PDO::FETCH_ASSOC);
				$nome_usuario = $rowa['nome'];
				$id_usuario_logado = $rowa['id'];
				$login_usuario = $rowa['login'];
				$acesso_usuario = $rowa['acesso'];
				$email_usuario = $rowa['email'];
				$status = true;
			}else{
				session_destroy();
				$status = false;
				echo "<script>window.location='../index.php';</script>";	
			}
	}else{
		$status = false;
		echo "<script>window.location='../index.php';</script>";			
	}	
}
function getData(){
	global $today, $todayTotal, $inicioMes, $anoAtual;
	$today = getdate(); 
	if($today['mon'] < 10) { 
		$today['mon'] = '0'.$today['mon'];
	} else { 
		$today['mon'] = $today['mon'];
	} 
	if($today['mday'] < 10){ 
		$today['mday'] = '0'.$today['mday']; 
	}else{ 
		$today['mday'] = $today['mday']; 
	}  
	$todayTotal = $today['year'].'-'.$today['mon'].'-'.$today['mday'];
    $inicioMes = $today['year'].'-'.$today['mon'].'-01';
    $anoAtual = $today['year'];
}
?>