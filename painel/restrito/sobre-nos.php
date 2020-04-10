<?php
	require('../config.php');
	require('../functions.php');
	$con = new DBConnection();
	verificaLogin();

	$stma = $con->query("SELECT * FROM sobre_nos");
	$sobre = $stma->fetch();
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Sobre nós</h1>
</div>
<div class="ajaxSobre"></div>
            <form id="formularioSobre" action="javascript:void(0)" onSubmit="postFile(this,'upload-sobreNos.php?id_sobre=<?= $sobre['id'] ?>','.ajaxSobre');" method="POST">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td width="40%"><img src="../../imagens/sobre/<?=$sobre['imagem'];?>" class="img-fluid" width="100%" alt="Imagem Banner" /></td>
                    <td>                    
                      <div class="form-group">
                        <label for='selecao-arquivo' style="width:100%; cursor: pointer;">
                          <small>Mudar Imagem (png, jpg):</small><br/>
                            <input id="selecao-arquivo" type="file" accept="image/jpeg, image/png" class="form-control input-sm fileCustom" name="anexoImagem" style="height:45px" />
                        </label>
                      </div>              
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1"><b>Descrição Banner:</b></label>
                        <textarea class="form-control" name="textoInput" id="exampleFormControlTextarea1" rows="3" required><?= $sobre['texto']; ?></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <b>Descrição Sobre nós:</b><br/>
                      <textarea id="summernote" name="sobre_nosInput" required><?= $sobre['sobre_nos'] ?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="form-group text-center">
                        <input type="submit" name="submit" value="Alterar Informações" class="btn btn-md btn-success w-50"/>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
			<script>
				$(document).ready(function() {
					$('#summernote').summernote({
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