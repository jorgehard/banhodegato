<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
	verificaLogin();
	if(@$ac == 'insert'){
		$sql = $con->prepare("INSERT INTO postos_coleta (cidade, uf, nome_local, endereco) VALUES (?, ?, ?, ?)");
		$sql->execute(array($cidade, $uf, $nome_local, $endereco));
		if(@$sql) { 
			echo '<div class="alert alert-success text-center" role="alert"><strong>Sucesso!!!</strong> Informações foram cadastradas!!  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			echo '<script>$("#containerDiv").animate({ scrollTop: 0 }, "fast");</script>';
		} else { 
			echo '<div class="alert alert-danger text-center" role="alert"><strong>Error!</strong> Algo deu errado, favor verificar e tentar novamente.  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		} 
	}
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h3">Novo Voluntario</h1>
</div>
<div class="ajaxVoluntarios"></div>
	<form id="formularioVoluntario" action="javascript:void(0)" onSubmit="postFile(this,'insert-voluntarios.php','.ajaxVoluntarios');" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for='selecao-arquivo' style="width:100%; cursor: pointer;">
                          <small>Imagem (png, jpg):</small><br/>
                            <input id="selecao-arquivo" type="file" accept="image/jpeg, image/png" class="form-control input-sm fileCustom" name="anexoImagem" style="height:45px" required />
                        </label>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="form-group">
						<b>Nome Sobrenome:</b><br/>
						<input type="text" name="nomeInput" placeholder="Ex: João Ribeiro" class="form-control input-sm" style="height:45px" required />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Descrição:</b><br/>
						<textarea id="summernoteText1" name="descricaoInput" required></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group text-center">
						<input type="submit" name="submit" value="+ Cadastrar Novo" class="btn btn-md btn-success w-50"/>
					</div>
				</div>
			</div>
		</div>
  	</form>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h3">Lista de voluntarios</h1>
	</div>
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">Id</th>
		  <th scope="col">Foto</th>
		  <th scope="col">Nome Sobrenome</th>
		  <th scope="col">Descrição</th>
		  <th scope="col">Editar</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
		$stm = $con->query("SELECT * FROM `voluntarios`");
		while($col = $stm->fetch()){
			echo '<tr>';
			echo '<td>'.$col['id'].'</td>';
			echo '<td><img src="../../imagens/voluntarios/'.$col['imagem'].'" class="img-responsive" width="100px"/></td>';
			echo '<td>'.$col['nome'].'</td>';
			echo '<td>'.$col['descricao'].'</td>';
			echo '<td><a href="#" onclick=\'$(".modal-body").load("editar-voluntario.php?&id='.$col['id'].'")\' data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-xs">Editar</a></td>';
			echo '</tr>';
		}
		?>
	  </tbody>
	</table>
				<script>
				$(document).ready(function() {
					$('#summernoteText1').summernote({
					fontNames: ['Roboto', 'Arial'],
					height: 150,
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
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar informações</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>