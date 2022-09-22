<?php

function AnysOlimpics(int $any_inici,int $any_final){
    $anys = array();
    for ($x=$any_inici;$x<=$any_final;$x+=4){
        array_push($anys, $x);
    }
    return implode(",",$anys);
}

function ImportTrucada(int $minuts){
    $import = 10;
    $restants = $minuts - 3;
    if ($restants>0){
        $import += $restants*5;
    }
    return $import;
}

function ImportCompra(array $compra){
    $import = 0;
    $import += ($compra['xocolata']>0) ? preuXocolata($compra['xocolata']) : 0;
    $import += ($compra['xiclets']>0) ? preuXiclets($compra['xiclets']) : 0;
    $import += ($compra['caramels']>0) ? preuCaramels($compra['caramels']) : 0;
    return $import;
}

function preuXocolata($qty){
    return $qty*1;
}
function preuXiclets($qty){
    return $qty*0.50;
}
function preuCaramels($qty){
    return $qty*1.50;
}