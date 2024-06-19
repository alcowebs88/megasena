<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Caixa\Loteria;


$concurso = $_GET['concurso'] ?? null;


$resultado = Loteria::consultarResultado('megasena',$concurso);

include __DIR__.'/includes/header.php';

include isset($resultado['numero']) ?  __DIR__.'/includes/result.php' : __DIR__.'/includes/error.php';

include __DIR__.'/includes/footer.php';


 ?>