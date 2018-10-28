<?php
require 'DataAccess.php';

$csvroute = $argv[1];

$con = new Conect("127.0.0.1","root","","rally");
$open_con = $con->get_connection();


$result = $open_con->query("SELECT * FROM estudiante JOIN carrera where estudiante.id_carrera = carrera.id");

$lista = array("Cedula, Nombre, Apellidos, Carrera, Fecha","\n");

while ($fila = $result ->fetch_assoc()) {
    array_push( $lista,  $fila['cedula'] . " ,". $fila['nombre'] . " ,".$fila['apellidos'] . " ,"
    . $fila['nombre_carrera'].",".date('d-m-y')."\n" );
}

$filecsv = fopen($csvroute,"w");

foreach($lista as $info)
{
    fwrite($filecsv, $info); 
}

fclose($filecsv);

?>