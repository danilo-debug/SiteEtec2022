<?php 
 $acao = 'recuperar';
 require_once "curso.control.php";
 require_once "usuario.control.php";


?>

<div class="usuarioArea-Main ">
	<div class="container">
		<div class="row usuario-row1 ">
			<!-- Menu inicio -->
			<div class="col-lg-3 col-md-12 coordenadorMenuColor rounded">
				<ul class="list-group mt-2 shadow">
					<li class="list-group-item d-flex justify-content-center active">
						<a class="list-group-link text-white" href="index.php?link=18">
							Todos os Cursos
						</a>
					</li>
					<li class="list-group-item d-flex justify-content-center">
						<a class="list-group-link" href="index.php?link=16&metodo=inserir">
							Cadastrar um Curso
						</a>
					</li>
				</ul>
			</div>
			<span style="clear: both;"></span>
			<!-- Menu Fim -->
			<div class="col-lg-9 col-md-12 coordenadorMenuColor  rounded ">
				<div class="row d-flex justify-content-center">
					<div class="coordenadorHeight col-lg-11 bg-white rounded shadow-lg mt-2">
						
						<!-- Tabela incio -->
					
						<table class="table">
						  <thead class="thead">
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">coordenador</th>
						      <th scope="col">titulo</th>
						      <th scope="col">logotipo</th>
						      <th scope="col">capa</th>
						      <th scope="col">descrição</th>
						      <th scope="col">crud</th>
						    </tr>
						  </thead>
						  	<tbody>
						 <?php 
						 foreach($curso as $key => $value) 
						 { 
						 ?>
							<tr>
								<td> <!-- id -->
								<?= $value->id?>
								</td>
								<td> <!-- coord -->
								<select onchange="alert(document.getElementById('coord').value)" class="form-control" id="coord">
									<option value="0">--Vazio--</option>
									<?php 
									foreach ($usuario as $key => $value1) { if($value1->tipo == 'Coordenador')
										{?>
									<option  value="<?= $value1->id?>"><?= $value1->nome ?></option>

									<?php }}?>
								</select>
								</td>
								<td> <!-- titulo_id -->
								<?= $value->titulo?>
								</td>
								<td> <!-- logotipo -->
								<img style="width:60px; height:60px;" src="imagem/<?= $value->logotipo?>">
								</td>
								<td> <!-- capa -->
								<img style="width:60px; height:60px;" src="imagem/<?= $value->capa?>">
								</td>
								<td> <!-- descricao -->
								<div class="descricao_card">
									<?= $value->descricao?>
								</div>
								</td>


								<td> <!-- crud -->
								<ul class="list-group  ">
									<div class="d-flex d-inline">
										
										<a href="index.php?link=16&metodo=alterar&acao=recuperarCurso&id=<?= $value->id?>"> <!-- Alterar -->
										<i class="bi bi-pencil-square"></i>
									</a>
									<a href="index.php?link=17&acao=excluir&id=<?= $value->id?>"> <!-- Excluir -->
										<i class="text-danger bi bi-trash-fill"></i>
									</a>
									</div>
									
								</ul>
									

								</td>
							</tr>
						  <?php }?>
						

						
						   
						  </tbody>
						</table>
						<span style="clear: both;"></span>
						
						<!-- Tabela fim -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<span style="clear: both;"></span>