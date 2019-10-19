<?php 

    // Função: Exibir Menu Responsivo
    includeMenu();

	session_start();

	if( isset($_GET['p']) ){
		if( (isset($_SESSION['tutorial'])) && ($_SESSION['tutorial']=='on') ){
			// aqui vem algo para executar o tutorial
			echo "<script>$(function(){ $('#modalTutorial').modal('show'); }); </script>";
			$_SESSION['tutorial']='off';
			session_unset();
		}
	}

	require_once('pages/tutorial.php');
    require_once('pages/creditos.php');
?>