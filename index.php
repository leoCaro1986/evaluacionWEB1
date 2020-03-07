<?php

echo "TALLER 1 GENERALIDADES PHP. " ;
echo "<br> Elaborado por LEONARDO CARO <br>";

/*Punto 1 del taller*/
$numero1=15;
$numero2=34;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo "<br>Ejercicio #1 <br>";
echo ("<br>La suma de los numeros 15 + 34 es ".$suma);
echo ("<br> La resta de los numeros 15 - 34 es ".$resta);
echo ("<br> La multiplicación de los numeros 15 * 34 es ".$multiplicacion);
echo ("<br> La división de los numeros 15 / 34 es ".$division);


/*punto 2 del taller indice de masa corporal*/
echo "<br><br>Ejercicio #2 <br>";

$peso=85;
$estatura=1.78;
$imc=$peso/($estatura*$estatura);
echo "<br>Señor usuario su estatura es de: ".$estatura."m y su peso es de: ".$peso."Kg";
echo"<br>Su indice de masa corporal es de: ".$imc." por lo tanto usted tiene ";

if ($imc<=18.4 && $imc>0)
{
    echo " Insuficiencia de peso "; 
}elseif ($imc>=18.5 && $imc<=24.9)
{
    echo "peso normal ";
}elseif ($imc>=25 && $imc<=29.9)
{
    echo "sobrepeso ";
}elseif ($imc>=30 && $imc<=34.9)
{
    echo "Obesidad 1 ";
}elseif ($imc>=35 && $imc<=39.9)
{
    echo "Obesidad 2 ";
}else
{
    echo " <br> Obesidad 3 ";
}


/*punto tres, descuento por cantidadde pares comprados*/
echo "<br><br>Ejercicio 3 <br>";

$cantidadZapatosVendidos=5;
$valorporPar=150000;
$totalVenta=$cantidadZapatosVendidos*$valorporPar;
$descuento1=0.20;
/*$descuento2=0.20;
$descuento3=0.40;*/

echo "Cantidad vendida: ".$cantidadZapatosVendidos;
echo "<br>Costo Neto: ".$totalVenta;


if($cantidadZapatosVendidos<=3){
    $totalVenta*0.10==$descuento1;
    echo "<br>Descuento: 10%";
}elseif($cantidadZapatosVendidos>3||$cantidadZapatosVendidos<=5){
    $totalVenta*0.20==$descuento1;
    echo "<br>Descuento: 20%";
}elseif($cantidadZapatosVendidos>5){
    $totalVenta*0.40==$descuento1;
    echo "<br>Descuento: 40%";
}

$valorDescuento=$totalVenta*$descuento1;
$valorTotalPagar=$totalVenta-$valorDescuento;

echo "<br>Valor del descuento: ".$valorDescuento;
echo "<br>Valor total a pagar: ".$valorTotalPagar;



//punto 4 del taller
echo "<br><br>Ejercicio 4 <br>";
$numerodehoras=36;
$valorhora1=20000;
$valorhora2=25000;
$sueldoSemanal=0;

if($numerodehoras<=40)
{
    $sueldoSemanal=$numerodehoras*$valorhora1;
    echo "Para un total de: ".$numerodehoras." Horas, se obtiene un valor hora de: $".$valorhora1;
    echo "<br>El salario devengado en la semana es de: $".$sueldoSemanal;
}
elseif($numerodehoras>40)
{
    $sueldoSemanal=$numerodehoras*$valorhora2;
    echo "Para un total de: ".$numerodehoras." Horas, se obtiene un valor hora de: $".$valorhora2;
}


//punto 5 del taller
echo "<br><br>Ejercicio 5 <br>";











?>