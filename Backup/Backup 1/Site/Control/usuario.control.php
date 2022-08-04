<?php 
 require_once "Conexao/conexao.php";
 require_once "Model/usuario.model.php";
 require_once "Service/usuario.service.php";

 $usuario1 = 'verificaPagina';
 require_once "verificaPagina.php";
 


 @$acao = isset($_GET['acao'])? $_GET['acao'] : $acao;
 @$id = isset($_GET['id']) ? $_GET['id'] : $id;

 if($acao == 'inserir')
 {
 	$usuario = new USUARIO();
  
 	$usuario->__set('nome',$_POST['nome']);
 	$usuario->__set('email',$_POST['email']);
 	$usuario->__set('senha',$_POST['senha']);

 	$conexao = new Conexao();

 	$usuarioService = new UsuarioService($conexao,$usuario);
 	$usuarioService->inserir();

  echo "<script>window.location.href = 'index.php?link=14&metodo=inserir' </script>";
 }


 else if($acao == 'recuperar')
 {
  $usuario = new Usuario();
  $conexao = new Conexao();

  $usuarioService = new UsuarioService($conexao,$usuario);
  $usuario = $usuarioService->recuperar();
    
 }


 else if($acao == 'recuperarUsuario')
 {
 $usuario = new Usuario();
 $conexao = new Conexao();

 $usuarioService = new UsuarioService($conexao, $usuario);
 $usuario = $usuarioService->recuperarUsuario($id);

 }
 
 else if($acao == 'alterar')
 {
 $usuario = new Usuario();
 $usuario->__set('id',$_POST['id']);
 $usuario->__set('nome',$_POST['nome']);
 $usuario->__set('email',$_POST['email']);
 $usuario->__set('senha',$_POST['senha']);

 $conexao = new Conexao();
 $usuarioService = new UsuarioService($conexao,$usuario);
 $usuarioService->alterar();
 echo "<script>window.location.href = 'index.php?link=13' </script>";
 }

 else if($acao == 'alterarTipo')
 {
 $usuario = new Usuario();
 $usuario->__set('id',$_GET['id']);
 $usuario->__set('nome',$_GET['nome']);
 $usuario->__set('email',$_GET['email']);
 $usuario->__set('senha',$_GET['senha']);
 $usuario->__set('tipo',$_GET['tipo']);

 $conexao = new Conexao();
 $usuarioService = new UsuarioService($conexao,$usuario);
 $usuarioService->alterarTipo();
 echo "<script>window.location.href = 'index.php?link=13' </script>";
 }
 
 else if($acao == 'excluir')
 {
  $usuario = new Usuario();
  $usuario->__set('id',$_GET['id']);

  $conexao = new Conexao();

  $usuarioService = new UsuarioService($conexao,$usuario);
  $usuarioService->excluir();
  echo "<script>window.location.href = 'index.php?link=13' </script>";
 }?>