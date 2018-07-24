<?php
class conexion{
    function recuperarDatos(){
        $resultadoFinal = "";

        $db = new PDO("mysql:host=localhost;dbname=alebrij3_eventos", "alebrij3", "Jhosvan2018");

        $result = $db->query("SELECT inicio_normal, final_normal FROM eventos");
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            //print_r($row["inicio_normal"]);
            //echo "<br>";
            //print_r($row["final_normal"]);
            //echo "<br>";

            $myText_inicio = (string)$row["inicio_normal"];
            $myText_final = (string)$row["final_normal"];

            //DIAS------------------------//
            //echo "Dia inicio: ";
            if(substr($myText_inicio, 0,1) == '0'){
                $dia_i = substr($myText_inicio, 1, 1);
            }
            else{
                $dia_i = substr($myText_inicio, 0, 2);
            };
            //echo $dia_i;
            //echo "<br>";

            //echo "Dia final: ";
            if(substr($myText_final, 0,1) == '0'){
                $dia_f = substr($myText_final, 1, 1);
            }
            else{
                $dia_f = substr($myText_final, 0, 2);
            };
            //echo $dia_f;
            //echo "<br>";

            //MES(ES)------------------------//
            //echo "Mes inicio: ";
            if(substr($myText_inicio, 3,1) == '0'){
                $mes_i = substr($myText_inicio, 4, 1);
            }
            else{
                $mes_i = substr($myText_inicio, 3, 2);
            };
            //echo $mes_i;
            //echo "<br>";

            //echo "Mes final: ";
            if(substr($myText_final, 3,1) == '0'){
                $mes_f = substr($myText_final, 4, 1);
            }
            else{
                $mes_f = substr($myText_final, 3, 2);
            };
            //echo $mes_f;
            //echo "<br>";

            //AÑO(S)------------------------//
            //echo "Año inicio: ";
            $anio_i = substr($myText_inicio, 6, 4);
            //echo $anio_i;
            //echo "<br>";

            //echo "Año final: ";
            $anio_f = substr($myText_final, 6, 4);
            //echo $anio_f;
            //echo "<br>";

            $evento = "$mes_i-$dia_i-$anio_i";
            //echo $evento; 
            //echo "<br>";
            //echo "<br>";

            for($aux_anio = $anio_i; $aux_anio <= $anio_f; $aux_anio++){
                for($aux_mes = $mes_i; $aux_mes <= $mes_f; $aux_mes++){
                    for($aux_dia = $dia_i; $aux_dia <= $dia_f; $aux_dia++){
                        $evento = "$aux_mes-$aux_dia-$aux_anio";
                        //echo $evento;
                        //echo "<br>";
                        $resultadoFinal = "\"$evento\",$resultadoFinal";
                    }
                }
            }

        }
        echo "[$resultadoFinal]";
    }
}
?>