<?php
$Archivo = fopen($argv[1],"r");// Aqui se lee el primer archiv
$Mi_Archivo = fopen($argv[2], "w");//Aqui se abre o se escribe en el segundo archivo
$Archi=array();
while (($row = fgetcsv($Archivo, 0, ",")) !== FALSE) {    
    $row++;
    array_push($Archi,$row[0] . " :" . $row[1] . " Vive en" . $row[3] . " y el numero de telefono es:  " . $row[2] . "\n");
}

fwrite($Mi_Archivo, $Archi[1] . "\r\n" . $Archi[2]);
echo "Se guardo!";

fclose($Archivo);
  }
?>
