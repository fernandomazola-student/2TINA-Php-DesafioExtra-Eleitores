<?php

function gravar($total, $brancos, $nulos, $validos){

    $pbrancos = ($brancos * 100) / $total;
    $pnulos = ($nulos * 100) / $total;
    $pvalidos = ($validos * 100) / $total;

    $Array = [$pbrancos, $pnulos, $pvalidos];

    return $Array;
}

?>
