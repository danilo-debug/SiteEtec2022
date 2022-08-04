<?php 
 require_once 'Model/curso.model.php';
 require_once 'Service/curso.service.php';
 require_once 'Conexao/conexao.php';
 


 @$acao = isset($_GET['acao'])? $_GET['acao'] : $acao;
 @$id = isset($_GET['id']) ? $_GET['id'] : $id;

 if($acao == 'inserir')
 {
 	$curso = new Curso();
  
 	$curso->__set('titulo',$_POST['titulo']);
 	$curso->__set('logotipo',$_FILES['logotipo']['name']);
 	$curso->__set('capa',$_FILES['capa']['name']);
  $curso->__set('descricao',$_POST['descricao']);


 	$conexao = new Conexao();

 	$cursoService = new CursoService($conexao,$curso);
 	$cursoService->inserir();

  echo "<script>window.location.href = 'index.php?link=16&metodo=inserir' </script>";
 }


 else if($acao == 'recuperar')
 {
  $curso = new Curso();
  $conexao = new Conexao();

  $cursoService = new CursoService($conexao,$curso);
  $curso = $cursoService->recuperar();
    
 }


 else if($acao == 'recuperarCurso')
 {
 $curso = new Curso();
 $conexao = new Conexao();

 $cursoService = new CursoService($conexao, $curso);
 $curso = $cursoService->recuperarCurso($id);

 }

 else if($acao == 'alterar')
 {
 $curso = new Curso();
 $curso->__set('id',$_POST['id']);
 $curso->__set('titulo',$_POST['titulo']);
 if($_FILES['logotipo']['name'] != '')
 {
   $curso->__set('logotipo',$_FILES['logotipo']['name']);
 }
 else
 {
   $curso->__set('logotipo',$_SESSION['logotipo']);
 }
 
 if($_FILES['capa']['name'] != '')
 {
   $curso->__set('capa',$_FILES['capa']['name']);
 }
 else
 {
   $curso->__set('capa',$_SESSION['capa']);
 }


 $curso->__set('descricao',$_POST['descricao']);

 $conexao = new Conexao();
 $cursoService = new CursoService($conexao,$curso);
 $cursoService->alterar();
 echo "<script>window.location.href = 'index.php?link=18' </script>";
 }
  
 
 else if($acao == 'excluir')
 {
  $curso = new Curso();
  $curso->__set('id',$_GET['id']);

  $conexao = new Conexao();

  $cursoService = new CursoService($conexao,$curso);
  $cursoService->excluir();
  echo "<script>window.location.href = 'index.php?link=18' </script>";
  
 }?>