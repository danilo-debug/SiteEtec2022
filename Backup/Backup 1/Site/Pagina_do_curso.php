<?php 
 $acao = 'recuperarCurso';
 @$id = $_GET['id'];
 require_once "curso.control.php";

 foreach ($curso as $key => $value) 
 {
   $titulo = $value->titulo;
   $capa = $value->capa;
   $descricao = $value->descricao;
 }
?>

          
            <article class="row d-flex justify-content-center main-card"> <!-- Artigos Cursos Inicio -->
             
              <div id="postCurso" class="col-9 bg-white  rounded shadow"> <!-- Curso Administracao inicio -->

                <div class="jumbotron mt-5">
                <h1 class="display-4 d-flex justify-content-center"><?= $titulo ?></h1>
                <div class="d-flex justify-content-center">
                   <img class="img-fluid h-25" src="imagem/<?= $capa?>">
                </div>
               
                
                <hr class="my-4">
                <p class="lead">
                  <?= $descricao ?>
                </p>
                </div>
                </div> <!-- Curso Administracao fim -->

             

  
                <div class="col-9 bg-white  rounded shadow mt-5"> <!-- Curso Administracao Postagem inicio -->

                <h1 class="display-1"> POSTAGEM </h1>
            
                </div> <!-- Curso Administracao  fim -->
                
              
          

             

          </article> <!-- Artigos Cursos Fim -->

  