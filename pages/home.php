<!-- Ação para ocultar a div depois de 5 segundos -->
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function(){ 
		setTimeout(function() {
			$(".alert").fadeOut().empty();
		}, 5000);
	}, false);
</script>
<div class="container-fluid">
	<div class="row align-items-center justify-content-center">
		<div class="col-sg">
			<a href="index.php">
				<img class="logo" src="images/logo.png">
			</a>
		</div>
	</div>
	<div class="row align-items-center justify-content-center margin-top-5">
		<div class="col-sg-2">
			<div class="button adição" data-toggle="modal" data-target="#adiçãoModal">
				<img src="images/nums/adição.png" class="ajuste" alt="adição">
			</div>
		</div>
		<div class="col-sg-2">
			<div class="button subtração" data-toggle="modal" data-target="#subtraçãoModal">
				<img src="images/nums/subtração.png" class="ajuste" alt="subtração">
			</div>
		</div>
		<div class="col-sg-2">
			<div class="button multiplicação" data-toggle="modal" data-target="#multiplicaçãoModal">
				<img src="images/nums/multiplicação.png" class="ajuste" alt="multiplicação">
			</div>
		</div>
		<div class="col-sg-2">
			<div class="button divisão" data-toggle="modal" data-target="#divisãoModal">
				<img src="images/nums/divisão.png" class="ajuste" alt="divisão">
			</div>
		</div>
	</div>
	<div class="row align-items-center justify-content-center">
		<div class="col-lg-12">
			<div class="footer"></div>
		</div>
	</div>
</div>