<?php 

require_once "usuario.control.php";
print_r($_SESSION);

?>
    
    <div class="container-fluid main-areaAdm-container"> <!-- Container Principal Incio -->
     <div class="row">
       <div class="col-12  background-color-main">
          
          <div class="row d-flex justify-content-center">
            <div class="col-8 bg-light shadow-lg">
               
               

                
                <?php if($_SESSION['cargo'] == 'Administrador'){?>
                 <div class="card">
                  <img class="card-img-bottom img-adm" src="http://seradministrador.com.br/wp-content/uploads/2019/09/topo_op%C3%A7%C3%A3o_33-1280x583.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center"> Direitos de usuário</h5>
                  <div class="d-flex justify-content-center">
                    <a href="index.php?link=13">
                    <button class="btn btn-info adm_buttons">
                      Ver todos os usuário
                    </button>
                    </a>
                    <a href="index.php?link=14">
                    <button class="btn btn-info ml-2 adm_buttons">
                      Cadastrar um usuário
                    </button>
                    </a>
                  

                  </div>
                  </div>
                  </div>
                 <?php }?>




              
                <div class="card mt-5">
                  <img class="card-img-top img-adm img-fluid" src="imagem/capa_cursos_adm.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Cursos</h5>
                    <div class="d-flex justify-content-center">
                      
                      <a href="index.php?link=18">
                      <button class="btn btn-info adm_buttons ml-2">Ver todos os cursos
                      </button>
                      </a> 
                     
                      <a href="index.php?link=16">
                         <button class="btn btn-info adm_buttons ml-2">
                          Cadastrar um curso
                         </button>
                      </a>
                       
                      <a href="">
                        <button class="btn btn-info adm_buttons ml-2">
                        Curso/Usuario
                       </button> 
                      </a>
                    </div>
                                     
                  </div>
                </div>
                  <!--
                <div class="card">
                  <img class="card-img-top img-adm" src="https://www.remessaonline.com.br/blog/wp-content/uploads/2018/07/RM_BL_S27-1200x900.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Cursos</h5>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-info">Acessar Cursos</button>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <img class="card-img-bottom img-adm" src="https://diariodonoroeste.com.br/wp-content/uploads/2022/02/image.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Estágio</h5>
                  <div class="d-flex justify-content-center">
                    <button class="btn btn-info">Acessar Estágio</button>
                  </div>
                  </div>
                </div>
              </div>
           
            </div>

            <div class="col-8 bg-light"> 

               -->
              <!-- Outra Coluna inicio -->
             <!--
               <div class="card-deck mt-5">
                <div class="card">
                  <img class="card-img-top img-adm" src="https://vestibulinhoetec.inf.br/wp-content/uploads/2020/04/11.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Vestibulinho</h5>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-info ">Acessar Vestibulinho</button> 
                    </div>
                                     
                  </div>
                </div>

                <div class="card">
                  <img class="card-img-top img-adm" src="https://startupi.com.br/wp-content/uploads/2018/03/Estrutura.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Estrutura</h5>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-info">Acessar Estrutura</button>
                    </div>
                  </div>
                </div>
                -->
               
              </div>

            </div> <!-- Outra Coluna Fim -->
          
         
      </div>
     </div>
   </div>
  
