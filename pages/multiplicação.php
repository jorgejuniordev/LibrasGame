<?php 

	// incluir
	include_once("include/conect.php");
	include_once("include/functions.php");
	include_once("inc.php");
	include_once("block.php");

	if(isset($_POST['opção'])){
		$randPOST = $_POST['rand'];
		$varPOST = $_POST['var'];
		$opção = $_POST['opção'];
		if($randPOST * $varPOST == $opção){
			require_once("include/success.php");
		}else{
			require_once("include/error.php");
		}
	}

	// GERADOR DE NÚMEROS
	if(isset($_GET['nivel'])){
		if($_GET['nivel'] == 'facil'){
			$rand = rand(0,10);
			$var = rand(0,10);
		}elseif($_GET['nivel'] == 'medio'){
			$rand = rand(0,100);
			$var = rand(0,10);
		}elseif($_GET['nivel'] == 'dificil'){
			$rand = rand(0,100);
			$var = rand(0,100);
		}else{
			$rand = rand(0,10);
			$var = rand(0,10);
		}
	}else{
		$rand = rand(0,10);
		$var = rand(0,10);
	}

	// MULTIPLICAÇÃO
	$total = $rand * $var;

?>
<!-------------------------------------------------------------------------------------------------------------->
<div class="container-fluid">
<!-------------------------------------------------------------------------------------------------------------->
<?php require_once('logo.php'); ?>
<!-------------------------------------------------------------------------------------------------------------->
	<div class="row align-items-center justify-content-center margin-top-1">

			<?php 
		    	$array = str_split($rand);
				foreach ($array as $x) {
			?>
			<div class="button-f ajustar-button">
				<img src="images/nums/<?=$x;?>.png" class="ajustar-imagem" alt="<?=$x;?>">
			</div>
			<?php } ?>

			<div class="button-f ajustar-button">
				<img src="images/nums/multiplicação.png" class="ajustar-imagem" alt="multiplicação">
			</div>

			<?php 
		    	$array = str_split($var);
				foreach ($array as $x) {
			?>
			<div class="button-f ajustar-button">
				<img src="images/nums/<?=$x;?>.png" class="ajustar-imagem" alt="<?=$x;?>">
			</div>
			<?php } ?>

			<div class="button-f ajustar-button">
				<img src="images/nums/igual.png" class="ajustar-imagem" alt="igual">
			</div>

			<div class="button-f ajustar-button col-sg-2">
				<img src="images/nums/pergunta.png" class="ajustar-imagem" alt="pergunta">
			</div>
	
	</div>
<!-------------------------------------------------------------------------------------------------------------->
	<div class="col-md-12">
		<div class="quest">
			<img src="images/gifs/resposta.gif" height="150">
		</div>
	</div>
<!-------------------------------------------------------------------------------------------------------------->
<div class="container">
	<div class="row align-items-center justify-content-center margin-top-1 text-center">
		<form method="POST" action="">
			<input type="hidden" name="rand" value="<?=$rand;?>">
			<input type="hidden" name="var" value="<?=$var;?>">
			<?php 
				$opções=Array($total-2, $total-1, $total, $total+1, $total+2);
		        shuffle($opções);
		        for($i=0; $i<5; $i++){
		    ?>
			    <button type="submit" class="button-t ajustar-button-submit" name="opção" value="<?=$opções[$i];?>">
				    <?php 
			        	//$tam = strlen($opções[$i]);
			        	$array = str_split($opções[$i]);
			        	foreach ($array as $x) {
			        ?>
							<img src="images/nums/<?=$x;?>.png" class="ajuste tamanho" alt="<?=$x;?>">

			        <?php
						}
					?>
				</button>
			<?php }	?>
		</form>
	</div>
</div>
<!-------------------------------------------------------------------------------------------------------------->
	<div class="row align-items-center justify-content-center">
		<div class="col-lg-12">
			<div class="footer"></div>
		</div>
	</div>
<!-------------------------------------------------------------------------------------------------------------->
</div>
