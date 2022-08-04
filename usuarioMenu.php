<?php 
 
 
 
 $acao = 'recuperar'; 
 $usuario2 = 'verificaCoordenador';
 require_once "usuario.control.php";
 


?>

<div class="usuarioArea-Main ">
	<div class="container">
		<div class="row usuario-row1 ">
			<!-- Menu inicio -->
			<div class="col-lg-3 col-md-12 coordenadorMenuColor rounded">
				<ul class="list-group mt-2 shadow">
					<li class="list-group-item d-flex justify-content-center active">
						<a class="list-group-link text-white" href="index.php?link=13">
							Todos os usuários
						</a>
					</li>
					<li class="list-group-item d-flex justify-content-center">
						<a class="list-group-link" href="index.php?link=14&metodo=inserir">
							Cadastrar um usuário
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
						      <th scope="col">nome</th>
						      <th scope="col">ADM</th>
						      <th scope="col">COORD</th>
						      <th scope="col">crud</th>
						    </tr>
						  </thead>
						  	<tbody>
						 <?php 
						 foreach($usuario as $key => $value) 
						 { 
						 ?>
							<tr>
								<td> <!-- id -->
								<?= $value->id?>
								</td>
								<td> <!-- nome -->
								<?= $value->nome?>
								</td>



								<!-- Cargo Inicio -->
								
								<td> <!-- Administrador -->
								<input
								onclick="<?php 
								echo "window.location.href= 'index.php?link=15&acao=alterarTipo&id=$value->id&nome=$value->nome&email=$value->email&senha=$value->senha&tipo=Administrador'";
								?>"

								 class="ml-3" <?php if($value->tipo == 'Administrador'){echo"checked";} else{echo" ";}?> type="radio" >

								</td>

								<td> <!-- Coordenador -->
								<input 
								onclick="<?php 
								echo "window.location.href= 'index.php?link=15&acao=alterarTipo&id=$value->id&nome=$value->nome&email=$value->email&senha=$value->senha&tipo=Coordenador'";
								?>"

								 class="ml-3" <?php if($value->tipo == 'Coordenador'){echo"checked";} else{echo" ";}?> type="radio" >
								</td>

								<!-- Cargo Fim -->



								<td> <!-- crud -->
								<ul class="list-group  ">
									<div class="d-flex d-inline">
										
										<a href="index.php?link=14&metodo=alterar&acao=recuperarUsuario&id=<?= $value->id?>"> <!-- Alterar -->
										<i class="bi bi-pencil-square"></i>
									</a>
									<a href="index.php?link=15&acao=excluir&id=<?= $value->id?>"> <!-- Excluir -->
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