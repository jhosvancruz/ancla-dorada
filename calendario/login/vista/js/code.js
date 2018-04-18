$(document).ready(ini);

  function ini(){
    $("#btnRegistrar").click(enviarDatos);
    $("#singin").click(validar);
  }
  function enviarDatos(){
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();
    $.ajax({
      url: "insertar.php",
      success: function(result){
        if(result == "true"){
          $("#resultado").html("Se registro usuario");
        }
        else {
          $("#resultado").html("no se registro");
        }
      },
      data:{
        usuario: usuario,
        pass: pass
      },
      type: "GET"
    });
  }
  function validar(){
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();

  }
