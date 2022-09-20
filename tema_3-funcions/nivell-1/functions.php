<?php

function ParellImparell($num){
    return ($num%2==0)?'parell':'imparell';
}

function Conta10(){
    for ($x=0;$x<=10;$x+=2){
        echo $x.'<br>';
    }
}

function Conta($num){
    for ($x=0;$x<=$num;$x+=2){
        echo $x.'<br>';
    }
}

function Contador($num=10){
    for ($x=0;$x<=$num;$x+=2){
        echo $x.'<br>';
    }
}

function CalculGrau($grau){
    if ($grau>=60){
        return 'Primera Divisió';
    }else if ($grau>=45 && $grau<=59){
        return 'Segona Divisió';
    }else if ($grau>=33 && $grau<=44){
        return 'Tercera Divisió';
    }else{
        return 'Reprovar';
    }
}

function isBitten(){
    return (rand(1,2)==1)?'true':'false';
}