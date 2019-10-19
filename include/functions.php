<?php 

	// CAMINHOS DE PÁGINAS;
	function IndexPaginas(){
	    if(!isset($_GET['p'])){
	        require_once('pages/home.php');
	    }else{
	        switch($_GET['p']){
	            case 'home': require_once('pages/home.php'); break;
	            case 'add': require_once('pages/adição.php'); break;
	            case 'sub': require_once('pages/subtração.php'); break;
	            case 'mul': require_once('pages/multiplicação.php'); break;
	            case 'div': require_once('pages/divisão.php'); break;
	            default: require_once('pages/home.php'); break;
	        }
	    }
	}

	function includeMenu(){
		require_once('pages/menu.php');
	}

?>