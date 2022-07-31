$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#Contraseña1').attr('type', 'text');
    } else {
      $('#Contraseña1').attr('type', 'password');
    }
  });
});



function contraceña() {
    var contraceña1 = "";
    var contraceña2 = "";
    contraseña1 = $("#Contraseña1").val();      
    contraseña2 = $("#Contraseña2").val();
    if (contraceña1 == contraseña2){
        return true;
    } else {
        return false;
    }
}

function limpiar(){
    $("#Nombre").val("");
    $("#Cargo").val("");
    $("#Documento").val("");
    $("#Usuario").val("");  
    $("#Contraseña1").val("");  
    $("#Contraseña2").val("");  

}

function guardarregistrate() {
	// body..
	var nombres = "";
	var cargo  = "";
	var documento  = 0;
	var usuario  = "";
    var contraceña1 = "" ;
    var contraceña2 = "" ;
    var ruta = "";

    nombres = $("#Nombres").val();
	cargo = $("#Cargo").val();
	documento = $("#Documento").val();
 usuario = $("#Usuario").val();
    contraseña1 = $("#Contraseña1").val();		
    if ((nombres.length == 0)||(cargo.length == 0)||(documento.length == 0)||(usuario.length == 0)||(contraseña1.length == 0)){
            alertify.error("favor llenar todos los campos") 
        }else{
    
    
       ruta = url + registrate + 'guardarregistrate';
   
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombres': nombres,
                    'cargo': cargo,
                    'documento': documento,
                    'usuario': usuario,
                    'contraseña1': contraseña1 
                                       

        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            limpiar();
            alertify.success("Datos Guardado");
        }else{
            alertify.error("Error al Guardar");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })   
    }          
}

function numeros(e){
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = " 0123456789";
   especiales = [8,37,39,46];

   tecla_especial = false
   for(var i in especiales){
if(key == especiales[i]){
    tecla_especial = true;
    break;
       } 
   }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
      alertify.error("Querido Amigo solo numeros en este Campo porfavor");

        return false;
            
       }else{
           return true;
       }
}


 function soloLetras(e){
   var nombre ="";

      key = e.keyCode || e.which;
      tecla = String.fromCharCode(key).toLowerCase();
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
      especiales = "8-37-39-46";

      tecla_especial = false
      for(var i in especiales){
           if(key == especiales[i]){
               tecla_especial = true;
               break;
           }
       }

      if(letras.indexOf(tecla)==-1 && !tecla_especial){
      alertify.error("Querido Amigo solo letras en este Campo porfavor");

        return false;
            
       }else{
           return true;
       }
   }