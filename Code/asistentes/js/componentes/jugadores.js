
$(document).ready(function(){
 $("#categoria1").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tjugadores tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});



$('.input-number').on('input', function () { 
    this.value = this.value.replace(/[^0-9.]/g,'');
});


function limpiar(){
    $("#Nombre").val("");
    $("#Apellido").val("");
    $("#Tipo").val("");
    $("#Identificacion").val("");  
    $("#Edad").val("");  
    $("#Sexo").val("");  
    $("#Posicion").val("");
    $("#EPS").val("");  
    $("#Categoria").val("");  
}





function guardarjugador(){


	var nombre = "";
	var apellido  = "";
	var tipo = "";
  var identificacion = 0;
	var edad = 0;
	var sexo = "";
	var posicion = "";
	var eps = "";
	var categoria = "";
  var ruta = "";

		
    nombre = $("#Nombre").val();
	  apellido = $("#Apellido").val();
    tipo = $("#Tipo").val();
    identificacion = $("#Identificacion").val();
    edad = $("#Edad").val();		
    sexo = $("#Sexo").val();
    posicion = $("#Posicion").val();		
    eps = $("#EPS").val();	
    categoria = $("#Categoria").val();	


    if ((nombre.length == 0)||(apellido.length == 0)||(tipo.length == 0)||(identificacion.length == 0)||(edad.length == 0)||(sexo.length == 0)||(posicion.length == 0)||(eps.length == 0)||(categoria.length == 0)) {
            alertify.error("favor llenar todos los campos") 
        }else{
  
    ruta = url + jugadores + 'guardarjugador';

    $.ajax({	
        'url'  : ruta,
        'data' : {
        			'nombre': nombre,
        	 		'apellido': apellido,
                    'tipo': tipo,
                    'identificacion': identificacion,
                    'edad': edad,
                    'sexo': sexo,
                    'posicion': posicion,
                    'eps': eps,
                    'categoria': categoria
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
            tjugadores();
        }else{
            alertify.error("Error al Guardar");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
  }
}



function buscarjugador(Numero_de_Identificacion) {
    // body...

    var identificacion = Numero_de_Identificacion;
    var ruta = "";


     if (identificacion.length == 0) {
            alertify.error("favor llenar el campo Identificacion para Buscar")
        }else{
  
    ruta = url + jugadores + 'buscarjugador';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion 
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

        var respuesta = "";
        var obj = "";
        respuesta = '{"respuestas": ['+data+']}'; 
        obj = JSON.parse(respuesta);
        if(obj.respuestas[0]!= false){

            $("#Nombre").val(obj.respuestas[0].Nombre);
            $("#Apellido").val(obj.respuestas[0].Apellido);
            $("#Tipo").val(obj.respuestas[0].Tipo_de_Identificacion);
            $("#Identificacion").val(obj.respuestas[0].Numero_de_Identificacion);  
            $("#Edad").val(obj.respuestas[0].Edad);
            $("#Sexo").val(obj.respuestas[0].Sexo);
            $("#Posicion").val(obj.respuestas[0].Posicion);
            $("#EPS").val(obj.respuestas[0].EPS);
            $("#Categoria").val(obj.respuestas[0].Categoria);       

            alertify.success("Dato Encontrado");
             
        } else{
            alertify.error("Error al Buscar Dato");
        }           
    }).fail(function() {
        alertify.error( "error" );
    }) 
  }
}


function modificarjugador() {
    // body...
    var nombre = "";
    var apellido  = "";
    var tipo = "";
    var identificacion = 0;
    var edad = 0;
    var sexo = "";
    var posicion = "";
    var eps = "";
    var categoria = "";

    var ruta = "";

    nombre = $("#Nombre").val();
    apellido = $("#Apellido").val();
    tipo = $("#Tipo").val();
    identificacion = $("#Identificacion").val();
    edad = $("#Edad").val();        
    sexo = $("#Sexo").val();
    posicion = $("#Posicion").val();        
    eps = $("#EPS").val();  
    categoria = $("#Categoria").val();  

  if (identificacion.length == 0) {
            alertify.error("se requiere llenar el campo Identificacion para modificar")
        }else{
    
    
    ruta = url + jugadores + 'modificarjugador';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombre': nombre,
                    'apellido': apellido,
                    'tipo': tipo,
                    'identificacion': identificacion,
                    'edad': edad,
                    'sexo': sexo,
                    'posicion': posicion,
                    'eps': eps,
                    'categoria': categoria
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
            alertify.success("Datos Actualizado Con exitos");
            tjugadores()
        }else{
            alertify.error("Error al Actualizar los datos");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
     }
}


function eliminarjugador(Numero_de_Identificacion) {
    // body...
    var identificacion = 0;
    
    identificacion = Numero_de_Identificacion;
    
    if (identificacion.length == 0) {
            alertify.error("favor llenar el campo Identificacion para eliminar")
        }else{
        
    ruta = url + jugadores + 'eliminarjugador';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion
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
            alertify.success("Datos Eliminado Con exitos");
            tjugadores();
        }else{
            alertify.error("Error al Eliminar el dato");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
  }
}


function tjugadores(){
   var ruta = "";
   var id_html = "";
   ruta = url+Cjugadores+'tjugadores';
   id_html = "tjugadores";
   cargar_tabla(ruta,id_html);
}

function cargar_tabla(ruta, id_html){
   $.ajax({
       'url'  : ruta,
       'statusCode': {
           404: function() {
             alertify.error("La Ruta de la pagina no es la correcta" );
           }
         }
   }).done(function( data ) { 
       $("#"+id_html).html(data);            
   }).fail(function() {
       alertify.error( "error" );
   })
}

function tjugadores(){
   var ruta = "";
   var id_html = "";

   ruta =url+jugadores+'tjugadores';
   id_html = "tjugadores";

   cargar_tabla(ruta,id_html);
}

function cargar_tabla(ruta, id_html){
   $.ajax({
       'url'  : ruta,
       'statusCode': {
           404: function() {
             alertify.error("La Ruta de la pagina no es la correcta" );
           }
         }
   }).done(function( data ) { 
       $("#"+id_html).html(data);            
   }).fail(function() {
       alertify.error( "error" );
   })
}

$(document).ready(function(){
tjugadores ();
 });


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
      alertify.error("solo numero porfavor");

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
      alertify.error("solo letra porfavor");

        return false;
            
       }else{
           return true;
       }
   }