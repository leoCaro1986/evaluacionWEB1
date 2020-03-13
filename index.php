<?php

include('funciones.php');

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
/*Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar información
de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A. Además, su programa debe estar
en la capacidad de sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada
$sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensual es de
20.000.000 y la sucursal C cuyo valor de salarios mensuales es de 15.000.000. Permita que su código muestre cual
sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5
usuarios de la sucursal A*/
echo "<br><br>Ejercicio 5 <br>";

echo "Los usuarios registrados en la sucursal A son:<br><br>";
$usuario1="Juan Perez - ";
$usuario2="Ana Gaviria - ";
$usuario3="Pedro Mesa - ";

$usuario4="Catalina Castaño - ";
$usuario5="Gabriel Rodriguez - ";
$telefono1="3224567898 - ";
$telefono2="3014569852 - ";
$telefono3="3108965474 - ";
$telefono4="3148555555 - ";
$telefono5="3001234879 - ";

$direccion1="Cll 100 sur # 35a-25 - ";
$direccion2="Cll 90 # 10-80 - ";
$direccion3="Cll 85 # 25-10 - ";
$direccion4="Cll 100 sur # 355-27 - ";
$direccion5="Cr 37 # 100-20 - ";

$salario1=3520000;
$salario2=4580000;
$salario3=1250000;
$salario4=3800000;
$salario5=6490000;

echo $usuario1.$telefono1.$direccion1." $".$salario1."<br>";
echo $usuario2.$telefono2.$direccion2." $".$salario2."<br>";
echo $usuario3.$telefono3.$direccion3." $".$salario3."<br>";
echo $usuario4.$telefono4.$direccion4." $".$salario4."<br>";
echo $usuario5.$telefono5.$direccion5." $".$salario5."<br>";

$sumatoriaSalarios= $salario1+$salario2+$salario3+$salario4+$salario5;
$salariosSucursalB=20000000;
$salariosSucursalC=15000000;
echo "<br>";
if($sumatoriaSalarios > $salariosSucursalB && $sumatoriaSalarios > $salariosSucursalC){
    echo "El mayor ingreso lo tiene la sucursal A";
}
elseif($salariosSucursalB > $sumatoriaSalarios && $salariosSucursalB > $salariosSucursalC){
    echo "El mayor ingreso lo tiene la sucursal B";
}
else 
{
    echo "El mayor ingreso lo tiene la sucursal C";
}


/*6. Almacena en un Array los 10 primeros números pares. Imprima en pantalla cada uno de estos, en una línea diferente con el siguiente
formato:*/
echo "<br><br>Ejercicio 6 <br>";

$arreglo=array('1°'=>"2",'2°'=>"4",'3°'=>"6",'4°'=>"8",'5°'=>"10",'6°'=>"12",'7°'=>"14",'8°'=>"16",'9°'=>"18",'10°'=>"20" );
foreach($arreglo as $clave=>$valor){
echo "<br>"."El ".$clave." numero par es: ";
echo($valor);
}



/*7. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de dicha
consulta en un arreglo denominado salpicon, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[dulce3]=>”Lulo”*/
echo "<br><br>Ejercicio 6 <br>";
echo "El salpicon esta compuesto por:<br>";
$salpicon=array('dulce1'=>"Banano",'dulce2'=>"Manzana",'dulce3'=>"Durazno",'acido1'=>"Piña",'acido2'=>"Naranja",'acido3'=>"Lulo");
print_r($salpicon);



/*8. La federación nacional de fútbol necesita de sus servicios como desarrollador de software,
para codificar una función en PHP que permita calcular la edad de los jugadores, de acuerdo al año
de nacimiento de estos. Declare la función calcularEdad() y pruebe su funcionamiento
con los años de nacimiento 1991,1995,1987.*/

echo "<br><br>Ejercicio 8 <br>";

$edad=calcularEdad(1991,2020);
echo("Si nacio en 1991 su edad es : ".$edad."<br>");
$edad=calcularEdad(1995,2020);
echo("Si nacio en 1995 su edad es : ".$edad."<br>");
$edad=calcularEdad(1987,2020);
echo("Si nacio en 1987 su edad es : ".$edad);

/**9. La federación nacional de fútbol también necesita que usted codifique una nueva función para establecer
* el biotipo de los jugadores teniendo en cuenta la estatura de estos. La clasificación internacional del
Biotipo de futbolista es:
Estatura <1.70 m (Biotipo Bajo)
1.70 m <=Estatura < 1.80 m (Biotipo Promedio)
Estatura >= 1,80 m (Biotipo Superior)
Ejecute 3 veces su función para las estaturas 1.65 m, 1.78 m y 1.95 m*/

echo "<br><br>Ejercicio 9 <br>";

$biotipo=calcularBiotipo(1.65);

$biotipo=calcularBiotipo(1.78);

$biotipo=calcularBiotipo(1.95);



echo "<br><br>Ejercicio 10 <br>";

$SeleccionColombia=array(
    'jugador1'=>array('JUGADOR'=>"Radamel Falcao",'AÑO DE NACIMIENTO'=>edad(1986,2020),'POSICION'=>"Delatero",'ESTATURA'=>Biotipo(1.77)),
    'jugador2'=>array('JUGADOR'=>"James Rodríguez",'AÑO DE NACIMIENTO'=>edad(1991,2020),'POSICION'=>"Medio Campista",'ESTATURA'=>Biotipo(1.81)),
    'jugador3'=>array('JUGADOR'=>"Juan Cuadrado",'AÑO DE NACIMIENTO'=>edad(1988,2020),'POSICION'=>"Delantero",'ESTATURA'=>Biotipo(1.78)),
    'jugador4'=>array('JUGADOR'=>"Yerry Mina",'AÑO DE NACIMIENTO'=>edad(1994,2020),'POSICION'=>"Defensor",'ESTATURA'=>Biotipo(1.95)),
    'jugador5'=>array('JUGADOR'=>"David Ospina",'AÑO DE NACIMIENTO'=>edad(1988,2020),'POSICION'=>"Portero",'ESTATURA'=>Biotipo(1.83)),
    'jugador6'=>array('JUGADOR'=>"Davinsón Sanchez",'AÑO DE NACIMIENTO'=>edad(1996,2020),'POSICION'=>"Defensor",'ESTATURA'=>Biotipo(1.87)),
    'jugador7'=>array('JUGADOR'=>"Duvan Zapata",'AÑO DE NACIMIENTO'=>edad(1991,2020),'POSICION'=>"Delatero",'ESTATURA'=>Biotipo(1.86)),
    'jugador8'=>array('JUGADOR'=>"Wilmar Barrios",'AÑO DE NACIMIENTO'=>edad(1993,2020),'POSICION'=>"Medio Campista",'ESTATURA'=>Biotipo(1.78)),
    'jugador9'=>array('JUGADOR'=>"Mateus Uribe",'AÑO DE NACIMIENTO'=>edad(1991,2020),'POSICION'=>"Medio Campista",'ESTATURA'=>Biotipo(1.80))

);

foreach($SeleccionColombia as $arregloseleccion => $arreglosjugador )
{
    echo("<br>".$arregloseleccion)."<br>";
    /*echo("<br>");*/
    foreach($arreglosjugador as $claves=>$valores)
    {
        echo($valores)."<br>";
    }
}




?>