<?php 

	// incluir
	include_once("include/conect.php");

	session_start();
	$_SESSION['tutorial'] = 'on';

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
<body height="100%">
	<?php 
		// Incluir o contador
		include("include/count.php");
	?>
<script>
	/*
		var playGame = new Audio();
		playGame.src = 'sounds/click.mp3';
	*/
</script>
	<div class="container-fluid">
		<div class="row align-items-center justify-content-center">
			<div class="col-sg">
				<img class="logo" src="images/logo.png">
			</div>
		</div>
		<div class="row align-items-center justify-content-center">
			<div class="col-sg">
				<img class="avatar" src="images/avatars.png">
			</div>
		</div>
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-12">
				<div class="footer">
					<a href="play.php?p=home">
						<button class="play" onmouseover="playGame.play()" onmousedown="playGame.play()"></button>
					</a>
				</div>
			</div>
		</div>
		<center>
			<a href="app/LibrasGame.apk">
				<img src="images/download.png" style="width: 60%;border-radius: 9px;opacity: 0.9;">
			</a>
			</br></br></br>
		</center>
	</div>
</body>
</html>