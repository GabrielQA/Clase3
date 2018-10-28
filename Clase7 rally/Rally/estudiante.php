<?php 
    require("DataAccess.php");
 

    $cedula = $_REQUEST['ced'];
    $nombre = $_REQUEST['user_name'];
    $apellidos = $_REQUEST['apellidos'];
    $id_carrera = $_REQUEST['carrera'];
   

  
        $con = new Conect("127.0.0.1","root","","rally");
        $open_con = $con->get_connection();
        $sql = ("INSERT INTO `estudiante`( `cedula`, `nombre`, `apellidos`, `id_carrera`) VALUES ('$cedula','$nombre','$apellidos','$id_carrera')"); 
        if (mysqli_query($open_con, $sql)) {
            echo "New record created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($open_con);
        }
        mysqli_close($open_con);
  


  


?>