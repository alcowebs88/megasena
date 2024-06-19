<style>
	.dezena{
		border:1px #ccc solid;
		border-radius:50%;
		padding:2px;
		width:80px;
		height:80px;
		font-size:30px;
		font-weight:bold;
	
		justify-content:center;
		align-items:center;
		margin:5px;
		
	}
</style>


<img class="mb-5" src="imgs/mega-sena.png" width="400"/>
	
	<p class="fs-5 h3">
		Consurso:
		<span class="badge bg-success"><?=$resultado['numero']?></span>
	</p>

	<p class="fs-5 h4">
		Data de apuração:
		<span class="badge bg-success"><?=$resultado['dataApuracao']?></span>
	</p>


	<p class="h4">
		Resultador:
		<span class="badge bg-success"><?=$resultado['acumulado'] ? 'Acumulado':'Premiado' ?></span>
	</p>


<p class="h3">
	<strong>
		Desenas sorteadas:
	</strong>
</p>

<div class="d-flex justify-content-center">
	
	<?php 
		foreach ($resultado['listaDezenas'] as $dezena) {
			echo '<span class="dezena">'.$dezena.'</span>';
	
		}
	 ?>
	
	
</div>