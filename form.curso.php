<?php 
 if(isset($_GET['metodo']))
 {
 @$metodo = $_GET['metodo'];
 @$id = $_GET['id'];
 $acao = 'recuperarCurso';
 require_once 'curso.control.php';
 foreach ($curso as $key => $value) 
 {
 	@$id = $value->id;
 	$titulo = $value->titulo;
 	$logotipo = $value->logotipo;
 	$capa = $value->capa;
 	$descricao = $value->descricao;
 	$_SESSION['logotipo'] = $logotipo;
 	$_SESSION['capa'] = $capa;
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
						<a class="list-group-link" href="index.php?link=18">
							Todos os Cursos
						</a>
					</li>
					<li class="list-group-item d-flex justify-content-center active">
						<a class="list-group-link  text-white" href="index.php?link=14">
							<?php 
							if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo "Alterar um Curso";
						 	}
						 	else
						 	{
						 		echo "Cadastrar um Curso";
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
						<form action="index.php?link=17&acao=<?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						{
							echo "alterar";
						}
						else
						{
							echo "inserir";
						}
					    ?>" enctype="multipart/form-data" method="post">
					

						 <div class="form-group">
						 	<label for="titulo">Titulo</label>
						 	<input value =
						 	"<?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo $titulo;
						 	}
						 	?>" id="titulo" class="form-control" type="text" name="titulo" placeholder="Digite seu título">
						 </div>
						 <div class="form-group">
						 	<label for="logotipo">Logotipo</label>
						 	<input id="logotipo" class="form-control-file" type="file" name="logotipo">
						 	 <br>
						 	  <?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar'){ ?>
						 	 	 <img style="width: 100px; height: 100px;" src="imagem/<?= $logotipo?>">
						 	 <?php }?>
						 </div>
						 <div class="form-group">
						 	<label for="capa">Capa</label>
						 	<input id="capa" class="form-control-file" type="file" name="capa">
						 	<br>
						 	 <?php if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar'){ ?>
						 	 	 <img style="width: 100px; height: 100px;" src="imagem/<?= $capa?>">
						 	 <?php }?>
						 </div>

						 <div class="form-group">
						 	<label for="descricao">Descrição</label>
						 	<br>
						 	<textarea class="form-control" id="descricao" name="descricao" ><?php 
						 	if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo $descricao;
						 	}
						 	 ?>
						 		
						 	</textarea>
						 </div>
						
						<input type="hidden" id='id' name="id" value="<?=$id?>">
						
						 <button type="submit" class="btn btn-info mb-2">
						 	<?php 
						 	if(isset($_GET['metodo']) && $_GET['metodo'] == 'alterar')
						 	{
						 		echo "Alterar Curso";
						 	}
						 	else
						 	{
						 		echo "Cadastrar Curso";
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