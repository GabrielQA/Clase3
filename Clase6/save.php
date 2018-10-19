<?php

    require "Conexion.php";

             
            $nombre = $_POST['nombre'];
            $id = $_POST['id'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $conexion=conexion();
            $sql= "INSERT INTO personas (nombre,id,apellido,correo)VALUES('$nombre','$id','$apellido','$correo')";
            $Datos_de_conexion=$sql;
        if ($conexion->query($sql) === TRUE){
            }
            else{
              echo"Datos insertados correctamente";
            }
          
      

    

?>