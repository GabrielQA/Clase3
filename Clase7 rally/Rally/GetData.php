<?php

require "DataAccess.php";

class GetData{

function find()
    {
      $con = new Conect("127.0.0.1","root","","rally");
      $open_con = $con->get_connection();
      $result=$open_con->query('SELECT * FROM carrera order by id');
      return $result;
      mysql_close($open_con);
     
    }

}