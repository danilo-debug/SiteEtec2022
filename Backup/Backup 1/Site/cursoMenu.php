<?php 
 $acao = 'recuperar';
 require_once "curso.control.php";


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
			<div class="col-lg-9 col-md-12 coordenadorMenuColor coordenadorHeight rounded ">
				<div class="row d-flex justify-content-center">
					<div class="col-11 bg-white rounded shadow-lg mt-2">
						
						<!-- Tabela incio -->
						
						<table class="table ">
						  <thead class="thead">
						    <tr>
						      <th scope="col">id</th>
						      <th scope="col">id_usuario</th>
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
								<td> <!-- usuario_id -->
								<?= $value->usuario_id?>
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