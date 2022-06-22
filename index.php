<?php


//autoload de classes do composer
require __DIR__.'/vendor/autoload.php';

//dependencias do projeto
use \App\Caixa\Loteria;

//concurso
$concurso = $_GET['concurso'] ?? null;

//execulta a consulta dos dados do concurso
$resultado = Loteria::consultarResultado('megasena', $concurso);


//header
include __DIR__.'/includes/header.php';

//result
include  isset($resultado['numero']) ? 
        __DIR__.'/includes/result.php' : 
        __DIR__.'/includes/error.php';

//footer
include __DIR__.'/includes/footer.php';
