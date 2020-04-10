<?php 
	require_once("../config.php");
	require_once("../functions.php");
	getData();
    
	$img = $_FILES['anexoImagem'];
	define ("filesplace","../../imagens/voluntarios/");
		 
	if (is_uploaded_file($_FILES['anexoImagem']['tmp_name'])) {
		if(($_FILES['anexoImagem']['size'] >= 5242880) || ($_FILES['anexoImagem']["size"] == 0)) {
			echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Permitido somente arquivos menores de 5 MB.
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			exit;
		}else{
			if($_FILES['anexoImagem']['type'] == "image/png" || $_FILES['anexoImagem']['type'] == "image/jpeg"){
				if(empty($_FILES) && empty($_POST) && isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) == 'post'){ 
					$postMax = ini_get('post_max_size');
					echo "Arquivo enviado excede: $postMax";
				} else {
					if(!preg_match("/^image\/(pjpeg|jpeg|png)$/", $img["type"])){
						$error[1] = "Isso não é uma imagem.";
                    } 
                    $pkCount = (is_array(@$error) ? count(@$error) : 0);
					if ($pkCount == 0) {
						preg_match("/\.(png|jpg|jpeg){1}$/i", $img["name"], $ext);
						
						$nome_imagem = "voluntario".md5(uniqid(time())) . "." . $ext[1];
						$destino_imagem = "../../imagens/voluntarios/" . $nome_imagem;
						//
						list($width, $height) = getimagesize($img['tmp_name']);
						$newwidth = 750;
						$newheight = (int)(($height/$width) * $newwidth);
						
						$info = getimagesize($img['tmp_name']);
						$thumb = imagecreatetruecolor($newwidth, $newheight);
						
						if ($info['mime'] == 'image/jpeg') {
							$source = imagecreatefromjpeg($img['tmp_name']);
						}else if ($info['mime'] == 'image/png') {
							$source = imagecreatefrompng($img['tmp_name']);
						}else{
							exit;
						}
						imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                        imagejpeg( $thumb, $destino_imagem , 50 ); 
						
			            $sqlza = $con->prepare("UPDATE `voluntarios` SET nome = ?, descricao = ?, imagem = ?, status = ? WHERE id = ?");
			            $sqlza->execute(array($nomeInput, $descricaoInput, $nome_imagem, $statusInput, $id_i));
						if(@$sqlza) { 
							echo '<div class="alert alert-success text-center" role="alert"><strong>Sucesso!!!</strong> Informações atualizadas com sucesso!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		
							echo '<script>$("#containerDiv").animate({ scrollTop: 0 }, "fast");</script>';
						} else { 
							echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Algo deu errado, favor verificar e tentar novamente.  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
						} 
					}
				} 
			}else{
				echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Tipo de arquivo não permitido, envie somente .jpg .png ou .pdf  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>';
				exit;
			}
		}
		exit;
	}else{
		$sqlza = $con->prepare("UPDATE `voluntarios` SET nome = ?, descricao = ?, status = ? WHERE id = ?");
		$sqlza->execute(array($nomeInput, $descricaoInput, $statusInput, $id_i));
		if(@$sqlza) { 
			echo '<div class="alert alert-success text-center" role="alert"><strong>Sucesso!!!</strong> Informações atualizadas com sucesso!! a <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            echo "<script>$('html, body').animate({scrollTop:$('#containerDiv').position().top}, 'fast');</script>";
		} else { 
			echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Algo deu errado, favor verificar e tentar novamente.  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		} 
	}
?>	