<?php
  include "conexion.php";
  function crearTabla(){
    $cnn = new conexion();
    $con = $cnn -> conectar();
    mysqli_select_db($con, "alebrij3_eventos");
    $sql = "CREATE TABLE usuarios (
                                   id INT(11) NOT NULL AUTO_INCREMENT,
                                   usuario CHAR(50),
                                   contrasena CHAR(30),
                                   PRIMARY KEY (id)
                                 )";
    if(mysqli_query($con, $sql))
    {
      echo "tabla creada";
    }
    mysqli_close($con);
  }
  //crearTabla();
 ?>
