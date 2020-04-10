<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
	verificaLogin();
	
	$stmv = $con->query("SELECT * FROM `voluntarios` WHERE id = '$id'");
	$volu = $stmv->fetch();
?>
<div class="ajaxEditVoluntario"></div>
	<form id="formularioVoluntario" action="javascript:void(0)" onSubmit="postFile(this,'update-voluntarios.php?id_i=<?= $volu['id'] ?>','.ajaxEditVoluntario');" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<img src="../../imagens/voluntarios/<?=$volu['imagem'];?>" class="img-fluid" width="100%" alt="Imagem Banner" />
					</div>
				</div>
				<div class="col-sm-8">
					<div class="form-group">
						<label for='selecao-arquivo' style="width:100%; cursor: pointer;">
                          <small>Imagem (png, jpg):</small><br/>
                            <input id="selecao-arquivo" type="file" accept="image/jpeg, image/png" class="form-control input-sm fileCustom" name="anexoImagem" style="height:45px" />
                        </label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Nome completo:</b><br/>
						<input type="text" name="nomeInput" value="<?= $volu['nome'] ?>" class="form-control input-sm" />
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Descrição:</b><br/>
						<textarea id="summernoteText3" class="form-control input-sm" name="descricaoInput" style="height:140px" required><?= $volu['descricao']; ?></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Status:</b><br/>
						<select name="statusInput" class="form-control input-sm">
							<option value="0" <?= ($volu['status'] == 0 ? 'selected' : '')?>>ATIVO</option>
							<option value="1" <?= ($volu['status'] == 1 ? 'selected' : '')?>>INATIVO</option>
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
