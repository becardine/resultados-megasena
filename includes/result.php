<img class="mb-5" src="./img/logo-megasena.png" width="400px" alt="Logo da Megasena">

<p class="fs-1">
    Consurso:
    <span class="badge bg-success"><?=$resultado['numero']?></span>
</p>

<p class="fs-5">
    Data de apuração:
    <span class="badge bg-success"><?=$resultado['dataApuracao']?></span>
</p>

<p class="fs-5">
    Resultado:
    <span class="badge bg-success"><?=($resultado['acumulado'] ? 'Acumulado' : 'Premiado')?></span>
</p>

<p class="fs-3 mt-5 fw-bold">Dezenas sorteadas:</p>

<div class="d-flex justify-content-center">
    <?php
        foreach($resultado['listaDezenas'] as $dezena) {
            echo '<span class="dezena">'.$dezena.'</span>';
        }
    ?>
</div>