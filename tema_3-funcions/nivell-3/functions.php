<?php
function CribaErastostenes($num){
    
    $nombre_primers = getAllNumbers($num);
    
    foreach ($nombre_primers AS $key=>$value){
        if ($key>2 && $value){ // el dos l'obviem i mirem que no estigui tatxat
            if (($key*$key)>$num){ // comprovem que el quadrat estigui per sota de $num
                return PrintPrimers($nombre_primers);
            }else{
                foreach ($nombre_primers AS $key2=>$value2){
                    if ($key2%$key==0 && $key2>$key){
                        $nombre_primers[$key2]=false;
                    }
                }
            }
        }
    }
}

function getAllNumbers($num){
    $nombre_primers[2]=true;
    for ($x=3;$x<=$num;$x++){
        if ($x%2!=0){
            $nombre_primers[$x]=true;
        }
    }
    return $nombre_primers;
}

function PrintPrimers($nombre_primers){
    $primers = array();
    foreach ($nombre_primers AS $key=>$value){
        if ($value){
            array_push($primers,$key);
        }
    }
    return implode(",",$primers);
}
