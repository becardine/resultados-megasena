<?php


//autoload de classes do composer
require __DIR__.'/vendor/autoload.php';

//dependencias do projeto
use \App\Caixa\Loteria;

//execulta a consulta dos dados do concurso
$resultado = Loteria::consultarResultado('megasena');