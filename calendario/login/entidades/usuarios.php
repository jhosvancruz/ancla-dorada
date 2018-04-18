<?php
  class usuarios
  {
     public $id;
     function get_id(){
       return $this->id;
     }
     function set_id()
     {
        $this->id = $id;
     }
     public $usuario;
     function get_usuario(){
       return $this->usuario;
     }
     function set_usuario()
     {
        $this->usuario = $usuario;
     }
     public $contrasena;
     function get_contrasena(){
       return $this->contrasena;
     }
     function set_contrasena()
     {
        $this->contrasena = $contrasena;
     }
  }
 ?>
