

    </script>
          <div class="container-login">
            <div class="row mb-5"> 
              <div class="col-12 d-flex justify-content-center mb-5 "> <!-- Container login inicio -->

                <div class="card card-main-login d-flex mb-5">
                  <div class="card-header d-flex d-inline bg-dark">
                    <h1 id="login-titulo" class="text-white">
                    Login
                    </h1>
                    <div class="d-flex ml-auto button-login">
               
                    <button  class="btn btn-lg btn-danger">
                      <h1><i class="bi bi-person-workspace"></i></h1>
                    </button>
                 
                    </div>
                   
                  </div>
                  <div class="card-body">
                  
                    <form action="index.php?link=10" method="post">
                      <input id="email" class="form-login form-control form-control-lg" type="email" name="email" placeholder="E-mail">

                      <input id="senha" class="form-control form-control-lg  mt-2" type="password" name="senha" placeholder="Senha">
                      <div class="d-flex d-inline">
                        <input class="btn btn-danger mt-2" type="submit" name=""> <span  class="ml-auto" id="loginInvalido"></span>
                      </div>
                      
                      <?php 
                      if(isset($_GET['acao']) && $_GET['acao'] == 'loginInvalido'){?>

                      <script type="text/javascript">
                        document.getElementById('email').style.color = 'red';
                        document.getElementById('senha').style.color = 'red';
                        document.getElementById('loginInvalido').style.color = 'red';
                        document.getElementById('loginInvalido').innerHTML = '<h5> Login Invalido </h5>'
                      </script>
                      <?php }?>

                      <?php 
                      if(isset($_GET['acao']) && $_GET['acao'] == 'loginIndefinido'){?>

                      <script type="text/javascript">
                        document.getElementById('email').style.color = 'red';
                        document.getElementById('senha').style.color = 'red';
                        document.getElementById('loginInvalido').style.color = 'red';
                        document.getElementById('loginInvalido').innerHTML = '<h5> Preencha o formulario para efetuar o login </h5>'
                      </script>
                      <?php }?>


                    </form>

                  </div>
                </div>

              </div> <!-- Container login fim -->
            </div>
          </div>
           






   

