<?php
	// Dica de Leandro Alexandre -> www.leandro.adm.br
	// Open Source - Colaboração 
	// Indica o arquivo 
	  $linha=file("./logs/count.txt"); 

	// Inicio Zero
	  $visitas = $linha[0]; 

	// cada vez que é processado, adiciona a soma de mais 1 acesso
	  $visitas += 1;

	// Abre o arquivo para gravação de dados, depois fecha
	  $cf=fopen("./logs/count.txt","w"); 
	  fputs($cf,"$visitas"); 
	  fclose($cf);

?>

<div class="count">
	<div class="visitantes"><?=$visitas;?></div>
	Visitas
</div>