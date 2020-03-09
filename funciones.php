<?php


function calcularEdad($nacimiento, $actual){
    $edad = $actual-$nacimiento;
    return ($edad);
    
    }

function calcularBiotipo($biotipo)
{
    if($biotipo<1.70){
        echo("Para una altura de ".$biotipo." su Biotipo es bajo<br>");
        
    }
    elseif ($biotipo>1.70 && $biotipo<1.80)
    {
        echo("Para una altura de ".$biotipo." su Biotipo es promedio<br>");
    }
    else
    {
        echo("Para una altura de ".$biotipo." su Biotipo es alto");
    }
}







?>