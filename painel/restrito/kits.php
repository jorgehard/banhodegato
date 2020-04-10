<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
	verificaLogin();
	if(@$ac == 'update'){
		$sql = $con->prepare("UPDATE kits SET descricao = ? WHERE id = ?");
		$sql->execute(array($descricaoInput, $id_kit));
		if(@$sql) { 
			echo '<div class="alert alert-success text-center" role="alert"><strong>Sucesso!!!</strong> Informações atualizadas com sucesso!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			echo '<script>$("#containerDiv").animate({ scrollTop: 0 }, "fast");</script>';
		} else { 
			echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Algo deu errado, favor verificar e tentar novamente.  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		} 
		exit;
	}
	$stm = $con->query("SELECT * FROM `kits`");
	$kit = $stm->fetch();
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Kits</h1>
</div>
<div class="ajaxKit"></div>
	<form action="javascript:void(0)" onsubmit="post(this,'kits.php?ac=update&id_kit=<?= $kit['id'];?>','.ajaxKit')">
		<div class="form-group">
			<b>Descrição:</b><br/>
			<textarea id="summernoteKits" name="descricaoInput" required><?= $kit['descricao'] ?></textarea>
		</div>
		<div class="form-group text-center">
			<input type="submit" name="submit" value="Alterar Informações" class="btn btn-md btn-success w-50"/>
		</div>
  	</form>
			<script>
				$(document).ready(function() {
					$('#summernoteKits').summernote({
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