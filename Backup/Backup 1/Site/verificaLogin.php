<?php 
$acao = 'recuperar';
require_once 'usuario.control.php';

 foreach ($usuario as $key => $value) 
 {
     if($_POST['email'] == $value->email &&  $_POST['senha'] == $value->senha)
     {
        $_SESSION['Autenticado'] = "SIM";
        $_SESSION['id'] = $value->id;
        $_SESSION['cargo'] = $value->tipo;
        return header('location:index.php?link=11');
     }  
     else if($_POST['email'] == null && $_POST['senha'] == null)
     {
        $_SESSION['Autenticado'] = "NÃO";
        header('location:index.php?link=9&acao=loginIndefinido');
     }  

     else if($_POST['email'] != $value->email || $_POST['senha'] != $value->senha)
     {
        $_SESSION['Autenticado'] = "NÃO";
        header('location:index.php?link=9&acao=loginInvalido');
     }  

     
 }

$usuario1 = 'verificaPagina';
require_once 'verificaPagina.php';
?>	