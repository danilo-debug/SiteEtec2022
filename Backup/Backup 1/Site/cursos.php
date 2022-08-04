<?php 
 $acao = 'recuperar';
 require_once "curso.control.php";
?>

          
            <article class="row d-flex justify-content-center main-card"> <!-- Artigos Cursos Inicio -->
             
              <div id="postCurso" class="col-9 bg-white  rounded shadow"> <!-- Curso incio -->


                <div class="card-columns">
                   <?php 
                   foreach ($curso as $key => $value) 
                   {
                   ?>
                    <div class="card shadow-lg mt-5 mb-5 ">
                    <a href="index.php?link=19&id=<?= $value->id?>">

                       <img class="card-img card-curso" src="imagem/<?= $value->logotipo ?>">
                    
                   
                    </a>
                    <h4 class="card-title d-flex justify-content-center"><?= $value->titulo ?></h4>
                    </div>
                 
                   <?php }?>
                  
               
               
                
                  </div>
                
              
              
              </div> <!-- Curso fim -->

             

          </article> <!-- Artigos Cursos Fim -->





















