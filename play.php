<?php 

	// incluir
	include_once("include/conect.php");
	include_once("include/functions.php");

?>
<!DOCTYPE html>
<html lang="pt/br">
<head>
	<meta name="charset" content="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Jogue e divirta-se aprendendo libras com matemática básica.">
	<meta name="keywords" content="Libras Game, Jogo de Libras, Libras, Jogo, Game, Game em Libras, Aprenda Matemática com Libras, Matemática Libras Game">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Jorge Junior">
	<title><?=title;?> - <?=subtitle;?></title>
	<link rel="shortcut icon" type="image/png" href="icon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<script type="text/javascript" language="javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Ação para ocultar divs success/warning em segundos -->
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function(){ 
			setTimeout(function() {
				$(".alert").fadeOut().empty();
			}, 2000); // 2 segundos
		}, false);
	</script>

	<?php 

		// REPORTAR ERROS
		error_reporting(0);

		// INCLUIR A FUNÇÃO PARA INDEXAR AS VARIAÇÕES DE PÁGINAS
		IndexPaginas(); 

		// INCLUIR ARQUIVO DAS MODALS
		include_once("pages/ModalNiveis.php");

	?>
</body>
</html>