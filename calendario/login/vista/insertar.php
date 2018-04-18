<?php
  include "../controlador/usuariosControlador.php";
  if(isset($_GET["usuario"]) || isset($_GET["pass"]))
  {
    if(trim($_GET["usuario"]) == "" || trim($_GET["pass"]) == "")
    {
      echo "false";
    }
    else{
    $usuariosCon = new usuariosControlador();
    if($usuariosCon->insertarUsuarios($_GET["usuario"],$_GET["pass"]))
    {
      echo "true";
    }
    else {
      echo "false";
    }
  }
  }
  else {
    echo "false";
  }
 ?>
