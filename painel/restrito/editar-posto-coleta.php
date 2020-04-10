<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
	verificaLogin();
	if(@$ac == 'update'){
		$sql = $con->prepare("UPDATE postos_coleta SET cidade = ?, uf = ?, nome_local = ?, endereco = ?, status = ? WHERE id = ?");
		$sql->execute(array($cidadeInput, $ufInput, $nome_localInput, $enderecoInput, $statusInput, $id));
		if(@$sql) { 
			echo '<div class="alert alert-success text-center" role="alert"><strong>Sucesso!!!</strong> Informações foram alteradas!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			echo '<script>$("#containerDiv").animate({ scrollTop: 0 }, "fast");</script>';
		} else { 
			echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Algo deu errado, favor verificar e tentar novamente.  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		} 
		exit;
	}
	$stmx = $con->query("SELECT * FROM `postos_coleta` WHERE id = '$id'");
	$postx = $stmx->fetch();
?>
<div class="ajaxEditColeta"></div>
	<form action="javascript:void(0)" onsubmit="post(this,'editar-posto-coleta.php?ac=update&id=<?= $id ?>','.ajaxEditColeta')">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<b>Cidade:</b><br/>
						<input type="text" name="cidadeInput" value="<?= $postx['cidade'] ?>"placeholder="Ex: Campinas" class="form-control input-sm" required />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<b>UF:</b><br/>
						<input type="text" name="ufInput" value="<?= $postx['uf'] ?>" placeholder="Ex: SP" class="form-control input-sm" minlength="2" maxlength="2" onkeyup="this.value = this.value.toUpperCase();" required />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Nome do local (Opcional):</b><br/>
						<input type="text" name="nome_localInput" value="<?= $postx['nome_local'] ?>" class="form-control input-sm" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Endereço Completo:</b><br/>
						<input type="text" name="enderecoInput" value="<?= $postx['endereco'] ?>" class="form-control input-sm" required />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Status:</b><br/>
						<select name="statusInput" class="form-control input-sm">
							<option value="0" <?= ($postx['status'] == 0 ? 'selected' : '')?>>ATIVO</option>
							<option value="1" <?= ($postx['status'] == 1 ? 'selected' : '')?>>INATIVO</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group text-center">
						<input type="submit" name="submit" value="Salvar Alterações" class="btn btn-md btn-success w-50"/>
					</div>
				</div>
			</div>
		</div>
  	</form>

