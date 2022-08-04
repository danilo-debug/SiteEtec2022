<?php 
$usuario2 = 'verificaCoordenador';

require_once 'usuario.control.php';
if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
{
	
	foreach ($usuario as $key => $value) 
	{
		$id = $value->id;
		$nome = $value->nome;
		$email = $value->email;
		$senha = $value->senha;
		$tipo = $value->tipo;
	}

}
?>

<div class="usuarioArea-Main ">
	<div class="container ">
		<div class="row usuario-row2 ">
			<!-- Menu inicio -->
			<div class="col-lg-3 col-md-12 coordenadorMenuColor rounded">
				<ul class="list-group mt-2 shadow">
					<li class="list-group-item d-flex justify-content-center ">
						<a class="list-group-link" href="index.php?link=13">
							Todos os usuários
						</a>
					</li>
					<li class="list-group-item d-flex justify-content-center active">
						<a class="list-group-link  text-white" href="index.php?link=14">
							<?php 
							if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo "Alterar um usuário";
						 	}
						 	else
						 	{
						 		echo "Cadastrar um usuário";
						 	}
							?>
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
						<form action="index.php?link=15&acao=<?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						{
							echo "alterar";
						}
						else
						{
							echo "inserir";
						}
					    ?>" method="post">
					

						 <div class="form-group">
						 	<label for="nome">Nome</label>
						 	<input value =
						 	"<?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo $nome;
						 	}
						 	?>" id="nome" class="form-control" type="text" name="nome" placeholder="Digite seu nome">
						 </div>
						 <div class="form-group">
						 	<label for="email">Email</label>
						 	<input value = 
						 	"<?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo $email;
						 	}
						 	?>"

						 	 id="email" class="form-control" type="email" name="email" placeholder="Digite seu email">
						 </div>
						 <div class="form-group">
						 	<label for="senha">Senha</label>
						 	<input value = 
						 	"<?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo $senha;
						 	}
						 	?>" id="senha" class="form-control" type="password" name="senha" placeholder="Digite sua senha">
						 </div>
						
						<input type="hidden" id='id' name="id" value="<?=$id?>">
						 <button type="submit" class="btn btn-info mb-2">
						 	<?php 
						 	if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo "Alterar";
						 	}
						 	else
						 	{
						 		echo "Cadastrar";
						 	}
						 	?>
						 </button>
						</form>
						
						<span style="clear: both;"></span>
						
						<!-- Tabela fim -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<span style="clear: both;"></span>