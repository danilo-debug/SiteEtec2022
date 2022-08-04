<?php 
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- Style/CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Icon Page-->
    <link rel="icon" href="https://fatweb.s3.amazonaws.com/vestibulinhoetec/assets/img/favicon/favicon-32x32.png">


 
    <title>Home page</title>
  </head>
  <body>
    

    <header class="container-fluid ">  <!-- Incio do Cabeçario -->
      <div class="row">
        <div class="col-12 bg-dark  fixed-top">
          
          <nav class="navbar navbar-expand-lg navbar-dark "> <!-- Inicio do Navbar -->
            <!-- Logo -->
            <div class="container">
            <a class="navbar-brand" href="index.php?link=1"><img class="logo" src="Imagem/logo_badran.png"></a>
            <!-- Hamburge Button -->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navegação -->
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav ml-auto">
                <li  id="home" class="nav-item">
                  <a class="nav-link" href="index.php?link=1">Home</a>
                </li>
              
                <li id="cursos" class="nav-item">
                  <a  class="nav-link"href="index.php?link=3">Cursos</a>
                </li>
                <li id="vestibulinho" class="nav-item">
                  <a  class="nav-link"href="index.php?link=4">Vestibulinho</a>
                </li>
            
                <li id="estagio" class="nav-item">
                  <a  class="nav-link"href="index.php?link=6">Estágio</a>
                </li>


                 <li id="area_do_aluno" class="nav-item">
                  <a  class="nav-link"href="http://etec.sp.gov.br/view/Default.aspx?link=8">Área do Aluno</a>
                </li>

                <li>
                  <div class="dropdown">
                  <a class=" btn text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quem Somos
                  </a>
                  <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                    <a  class="dropdown-item text-white bg-secondary" href="index.php?link=2">
                    Nossa Hístoria
                    </a>
                    <a  class="dropdown-item text-white bg-secondary" href="index.php?link=5">
                    Nossa Estrutura
                    </a>
                    <a  class="dropdown-item text-white bg-secondary" href="index.php?link=7">
                    Nosso Contato
                   </a>
                  </div>
                  </div>

                </li>
            
                <li>
                 <?php 
                 if(!isset($_SESSION['Autenticado']))
                 {
                  $_SESSION['Autenticado'] = "NÃO";
                  header('location:index.php?link=1');
                 }
                 else if(isset($_SESSION['Autenticado']) && $_SESSION['Autenticado'] == "NÃO" )
                 {
                  echo
                  "
                  <a href='index.php?link=9'>
                   <button class='btn btn-secondary'>
                     <i class='text-white bi bi-person-fill'></i>
                   </button>
                  </a>
                  ";
                 }
                else if(isset($_SESSION['Autenticado']) && $_SESSION['Autenticado'] == "SIM" )
                 {
                  echo
                  "
                  <div class='dropdown'>
                  <button class='btn btn-secondary ' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                   <i class='text-white bi bi-person-fill'></i>
                   </button>
                  <div class='dropdown-menu bg-dark' aria-labelledby='dropdownMenuButton'>
                    <a class='bg-secondary text-white dropdown-item' href='index.php?link=11'>ÁreaAdm</a>
                    <a class='bg-secondary text-white dropdown-item' href='index.php?link=12'>Sair</a>
                  </div>
                </div>
                  ";
                 }
                 ?>
                </li>

             
              </ul>
            </div>
            </div>

          </nav> <!-- Fim do Navbar -->

        </div>
      </div>
    </header> <!-- Fim do Cabeçario -->



    <div class="container-fluid main-container "> <!-- Container Principal Incio -->
      <div class="row">
        <div class="col-12  background-color-main">
          
              <?php $link = @$_GET['link'];
              $pag[1]='principal.php';
              $pag[2]='historia.php';
              $pag[3]='cursos.php';
              $pag[4]='vestibulinho.php';
              $pag[5]='estrutura.php';
              $pag[6]='estagio.php';
              $pag[7]='contato.php';
              $pag[8]='http://etec.sp.gov.br/view/Default.aspx';
              $pag[9]='login.php';
              /*<---Verifica login incio --->*/
              $pag[10]='verificaLogin.php';
              /*<---Verifica login fim --->*/

              /*<---areaAdm incio --->*/
              $pag[11]='areaAdm.php';
              $pag[12]='logoff.php';
              $pag[13]='usuarioMenu.php';
              $pag[14]='form.usuario.php';
              $pag[15]='usuario.control.php';
             
              /*<---areaAdm fim --->*/
              
              /*<-- Cursos Inicio -->*/
              $pag[16]='form.curso.php';
              $pag[17]='curso.control.php';
              $pag[18]='cursoMenu.php';
              $pag[19]='Pagina_do_curso.php';


              /*<-- Cursos Fim-->*/



              
              if(!empty($link)){
                if(@file_exists($pag[$link])){
                  include $pag[$link];
                }else{
                  trim(include 'principal.php');
                }
              }else{
                trim(include 'principal.php');
              }
              $value = 0;
              if($link = 1)
              {
                $value = 1;
              }
              else if(!$link = 1)
              {
                $value = 0;
              }
    
                 
              ?>
   

        </div>
      </div>
    </div> <!-- Container Principal Fim -->

    <footer class="container-fluid bg-white">
      <div class="row">
        <div class="col-12 bg-dark d-flex justify-content-center p-3">
         <p class="text-white">
           Todos os direitos reservados | 2022 | Site desenvolvido pelo Curso de Informatica.
         </p>
        </div>
      </div>
    </footer>




























    <!-- Requisição de Pagina Style -->
    <script type="text/javascript" src="Style.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>