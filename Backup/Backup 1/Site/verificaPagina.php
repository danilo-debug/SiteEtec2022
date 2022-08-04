<?php 
@$usuario1 = isset($_GET['usuario1']) ? $_GET['usuario1'] : $usuario1; // Usuario não indentificado
@$usuario2 = isset($_GET['usuario2']) ? $_GET['usuario2'] : $usuario2; // Coordenador

 	if($usuario1 == 'verificaPagina')
 	{
 		if($_SESSION['Autenticado'] != 'SIM')
 		{
 			header('location:foradoAr.php');
 		}

 	}

 	
 	if($usuario2 == 'verificaCoordenador')
 	{

 		if($_SESSION['cargo'] == 'Coordenador')
 		{
 			echo "<script>window.location.href='foradoAr.php'</script>";
 		}
 	}


?>