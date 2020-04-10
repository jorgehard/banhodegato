<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
	verificaLogin();
	if(@$ac == 'update'){
		$sql = $con->prepare("UPDATE mochila SET texto_1 = ?, texto_2 = ? WHERE id = ?");
		$sql->execute(array($texto_1Input, $texto_2Input, $id_moc));
		if(@$sql) { 
			echo '<div class="alert alert-success text-center" role="alert"><strong>Sucesso!!!</strong> Informações atualizadas com sucesso!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			echo '<script>$("#containerDiv").animate({ scrollTop: 0 }, "fast");</script>';
		} else { 
			echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Algo deu errado, favor verificar e tentar novamente.  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		} 
		exit;
	}
	$stmz = $con->query("SELECT * FROM `mochila`");
	$moc = $stmz->fetch();
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Mochila</h1>
</div>
<div class="ajaxMochila"></div>
	<form action="javascript:void(0)" onsubmit="post(this,'mochila.php?ac=update&id_moc=<?= $moc['id'];?>','.ajaxMochila')">
		<div class="form-group">
			<b>Mochila Amiga:</b><br/>
			<textarea id="summernoteText1" name="texto_1Input" required><?= $moc['texto_1'] ?></textarea>
		</div>
		<div class="form-group">
			<b>A mochila sempre carrega:</b><br/>
			<textarea id="summernoteText2" name="texto_2Input" required><?= $moc['texto_2'] ?></textarea>
		</div>
		<div class="form-group text-center">
			<input type="submit" name="submit" value="Alterar Informações" class="btn btn-md btn-success w-50"/>
		</div>
  	</form>
			<script>
				$(document).ready(function() {
					$('#summernoteText1, #summernoteText2').summernote({
					fontNames: ['Roboto', 'Arial'],
					height: 250,
					toolbar: [
						['style', ['style']],
						['font', ['bold', 'underline', 'clear']],
						['fontname', ['fontname']],
						['color', ['color']],
						['para', ['ul', 'ol', 'paragraph']],
						['insert', ['link', 'video']],
						['view', ['codeview']],
					],
					});
				});
    		</script>