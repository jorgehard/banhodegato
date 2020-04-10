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
	<h1 class="h3">Cadastrar novo posto de coleta</h1>
</div>
<div class="ajaxColeta"></div>
	<form action="javascript:void(0)" onsubmit="post(this,'postos-coleta.php?ac=insert','.conteudo')">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<b>Cidade:</b><br/>
						<input type="text" name="cidade" placeholder="Ex: Campinas" class="form-control input-sm" required />
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<b>UF:</b><br/>
						<input type="text" name="uf" placeholder="Ex: SP" class="form-control input-sm" minlength="2" maxlength="2" onkeyup="this.value = this.value.toUpperCase();" required />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<b>Nome do local (Opcional):</b><br/>
						<input type="text" name="nome_local" class="form-control input-sm" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm">
					<div class="form-group">
						<b>Endereço Completo:</b><br/>
						<input type="text" name="endereco" class="form-control input-sm" required />
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
		<h1 class="h3">Lista de postos de coleta</h1>
	</div>
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">Id</th>
		  <th scope="col">Cidade / UF</th>
		  <th scope="col">Nome local</th>
		  <th scope="col">Endereço Completo</th>
		  <th scope="col">Status</th>
		  <th scope="col">Editar</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
		$stm = $con->query("SELECT * FROM `postos_coleta`");
		while($col = $stm->fetch()){
			echo '<tr>';
			echo '<td>'.$col['id'].'</td>';
			echo '<td>'.$col['cidade'].' - '.$col['uf'].'</td>';
			echo '<td>'.$col['nome_local'].'</td>';
			echo '<td>'.$col['endereco'].'</td>';
			echo '<td>'.($col['status'] == 0 ? '<label class="badge badge-success">ATIVO</label>' : '<label class="badge badge-danger">INATIVO</label>').'</td>';
			echo '<td><a href="#" onclick=\'$(".modal-body").load("editar-posto-coleta.php?&id='.$col['id'].'")\' data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-xs">Editar</a></td>';
			echo '</tr>';
		}
		?>
	  </tbody>
	</table>
	
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