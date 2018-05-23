<?php
    class conexion{
        function recuperarDatos(){
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "eventos";
            
            $con = mysqli_connect($host, $user, $pw, $db) or die ("No se pudo :c");
            mysqli_select_db($con, "eventos") or die ("No hay BD :'v");
            $query = "SELECT inicio_normal FROM eventos";
            $resultado = mysqli_query($con, $query);
            
            while ($fila = mysqli_fetch_array($resultado)){
                echo "$fila[inicio_normal] <br>";
            }
        }
    }
?>