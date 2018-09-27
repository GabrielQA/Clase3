<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>workshop2</title>
</head>
<body>
<?php
//calcular y mostrar la temperatura promedio 
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$suma = array_sum($temp);
$cant = count($temp);

$resul =  $suma / $cant;
echo $resul."<br>";


//Acomodar el arrays de menor a mayor
$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($temp);
//varibles que contienen los 5 numeros de mayores y menores
$temp2 = array();
//Menores
$me0=$temp[0];
$me1=$temp[1];
$me2=$temp[2];
$me3=$temp[3];
$me4=$temp[4];
//Mayores
$me00=$temp[25];
$me11=$temp[26];
$me22=$temp[27];
$me33=$temp[28];
$me44=$temp[29];
//Agregarlos al arrays
$temp2[] += $me0;
$temp2[] += $me1;
$temp2[] += $me2;
$temp2[] += $me3;
$temp2[] += $me4;


$temp2[] += $me00;
$temp2[] += $me11;
$temp2[] += $me22;
$temp2[] += $me33;
$temp2[] += $me44;

foreach($temp2 as $num){
   
    echo $num."-";
}
//Unir los 2 arrays array_merge():
?>
</body>
</html>