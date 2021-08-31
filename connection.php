<?php
  $server = "localhost";
  $username = "instalador";
  $password = "Softec2021Apps";
  $data_base= "ejemplo";
 
  try {
        $connect = new PDO("mysql:host=$server;dbname=$data_base", $username, $password);      
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conexión realizada Satisfactoriamente";
      }
 
  catch(PDOException $e)
      {
      echo "La conexión ha fallado: " . $e->getMessage();
      }
 
// $connection = null;