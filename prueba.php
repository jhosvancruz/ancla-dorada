<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<?php
    class conexion{
        function recuperarDatos(){
            $resultadoFinal = "";
            
            $db = new PDO("mysql:host=localhost;dbname=eventos", "root", "");

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
                //echo "<br><br><br>";
                //echo "<br><br><br>";
                
                //echo "<br><br><br>";
                //echo "<br><br><br>";
                /*
                
                
                for($i = 0; $i <= $tiempo; $i++){
                    //INICIO
                    echo "Dia: ";
                    $dia_i = substr($myText_inicio, 0, 2);
                    echo $dia_i;
                    echo "<br>";
                    
                    echo "Mes: ";
                    if(substr($myText_inicio, 3,1) == '0'){
                        $mes_i = substr($myText_inicio, 4, 1);
                    }
                    else{
                        $mes_i = substr($myText_inicio, 3, 2);
                    }
                    echo $mes_i;
                    echo "<br>";
                    
                    echo "Año: ";
                    $anio_i = substr($myText_inicio, 6, 4);
                    echo $anio_i;
                    echo "<br>";
                    
                    //FINAL
                    echo "Dia: ";
                    $dia_f = substr($myText_final, 0, 2);
                    echo $dia_f;
                    echo "<br>";
                    
                    echo "Mes: ";
                    if(substr($myText_final, 3,1) == '0'){
                        $mes_f = substr($myText_final, 4, 1);
                    }
                    else{
                        $mes_f = substr($myText_final, 3, 2);
                    }
                    echo $mes_f;
                    echo "<br>";
                    
                    echo "Año: ";
                    $anio_f = substr($myText_final, 6, 4);
                    echo $anio_f;
                    echo "<br>";
                    
                    echo "$mes_i-$dia_i-$anio_i<br>";
                }
                
                echo "******************<br>";
            }
            /*
            while($fila_inicio = mysqli_fetch_array($resultado_inicio))
            {
                
                echo $fila_inicio["inicio_normal"].'</br>';
            }
            */
            
            
            
            /*
            $resultadoFinal = "";
            
            
            
            
            
            $x = 0;
            $contador = 0;
            
            while($auxiliar_contador = mysqli_fetch_array($resultado_inicio)){
                $x++;
            }
            echo $x;
            
            
            while ($contador < $x){
                
                $fila_inicio = mysqli_fetch_array($resultado_inicio);
                $fila_final = mysqli_fetch_array($resultado_final);
                
                
                $inicio = $fila_inicio["inicio_normal"];
                echo "$fila_inicio[inicio_normal] <br>";
                
                $myText = (string)$inicio;
                
                echo "Dia: ";
                $dia = substr($myText, 0, 2);
                echo $dia;
                echo "<br>";
                
                echo "Mes: ";
                if(substr($myText, 3,1) == '0'){
                    $mes = substr($myText, 4, 1);
                }
                else{
                    $mes = substr($myText, 3, 2);
                }
                
                echo $mes;
                echo "<br>";
                
                echo "Año: ";
                $anio = substr($myText, 6, 4);
                echo $anio;
                echo "<br>";
                
                $evento = "$mes-$dia-$anio";
                echo $evento; 
                
                
                
                $resultadoFinal = "\"$evento\", $resultadoFinal";
                
                echo "<br><br><br>";
                
                
                
                $final = $fila_final["final_normal"];
                echo "$fila_final[final_normal] <br>";

                
                $myTextFinal = (string)$final;
                
                echo "Dia: ";
                $diaFinal = substr($myTextFinal, 0, 2);
                echo $diaFinal;
                echo "<br>";
                
                 echo "Mes: ";
                if(substr($myTextFinal, 3,1) == '0'){
                    $mesFinal = substr($myTextFinal, 4, 1);
                }
                else{
                    $mesFinal = substr($myTextFinal, 3, 2);
                }
                
                echo $mesFinal;
                echo "<br>";
                
                echo "Año: ";
                $anioFinal = substr($myTextFinal, 6, 4);
                echo $anioFinal;
                echo "<br>";
                
                echo "<br><br><br>";
                
                $contador++;
            }
            
            echo $resultadoFinal;
            echo "<br><br><br>";

            /*
            while (){
                $final = $fila_final["final_normal"];
                echo "$fila_final[final_normal] <br>";

                
                $myText = (string)$final;
                
                echo "Dia: ";
                $dia = substr($myText, 0, 2);
                echo $dia;
                echo "<br>";
                
                 echo "Mes: ";
                if(substr($myText, 3,1) == '0'){
                    $mes = substr($myText, 4, 1);
                }
                else{
                    $mes = substr($myText, 3, 2);
                }
                
                echo $mes;
                echo "<br>";
                
                echo "Año: ";
                $anio = substr($myText, 6, 4);
                echo $anio;
                echo "<br>";
                
                echo "<br><br><br>";
            }*/
            }
            echo "[$resultadoFinal]";
            
        }
    }
    $Conexion = new conexion();
    //$Conexion -> recuperarDatos();
?>
<script type="text/javascript">
	/* Datepicker*/
	$(function() {
		/* create an array of days which need to be disabled */
		/* bloquear fechas no reservacion */
				var disabledDays = <?php echo $Conexion -> recuperarDatos();?>;
                
                console.log(disabledDays);
				
				/* utility functions */
				function nationalDays(date) {
				  var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
				  var yesterday = new Date(); yesterday.setDate(yesterday.getDate() - 1);
				 // console.log("ayer: "+yesterday);
				 // console.log('Checking (raw): ' + m + '-' + d + '-' + y);
				  //console.log('dias: '+disabledDays.length);
				  for (i = 0; i < disabledDays.length; i++) {
					//console.log($.inArray((m+1) + '-' + d + '-' + y,disabledDays));
					if($.inArray((m+1) + '-' + d + '-' + y,disabledDays) != -1 || date < yesterday) {
					  //console.log('bad:  ' + (m+1) + '-' + d + '-' + y + ' / ' + disabledDays[i]);
					  return [false];
					}
				  }
				 // console.log('good:  ' + (m+1) + '-' + d + '-' + y);
				  return [true];
				}
				function noWeekendsOrHolidays(date) {
				  var noWeekend = jQuery.datepicker.noWeekends(date);
				  return nationalDays(date);
                    console.log(nationalDays);
				}
				
				/* create datepicker */
				
				jQuery(document).ready(function() {
				  jQuery('#datepicker').datepicker({
					dateFormat: 'd/mm/yy',
					constrainInput: true,
					beforeShowDay: noWeekendsOrHolidays
				  });
				});
				
		
		//$( "#datepicker" ).datepicker();
		
		
	});

	</script>
  <script>
 var nav4 = window.Event ? true : false; 
function acceptNum(evt){  
// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57  
var key = nav4 ? evt.which : evt.keyCode;  
return (key <= 13 || (key >= 48 && key <= 57)); 
} 
 </script>
 
 
 
<label class="email form-div-2">
<strong>Fecha*</strong>
<input name="datepicker" type="text" class="form" id="datepicker" readonly min="2016-11-08" max="2016-11-30" step="1">
<!--<input type="text" name="datepicker" id="datepicker" class="form"/>-->
<br>
<input value='<?php echo $Conexion -> recuperarDatos();?>' style="width: 100%; line-height:200px;">
</body>
</html>
   
