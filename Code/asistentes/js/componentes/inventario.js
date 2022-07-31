 function validar() {
    var nombre = "";
    var fecha  = "";
    var cantidad = 0;
    var estado = "" ;


    nombre = $("#Nombre").val();
    fecha = $("#Fecha").val();
    cantidad = $("#Cantidad").val();
    estado = $("#Estado").val();


    if ((nombre.length == 0)||(fecha.length == 0)||(cantidad.length == 0)||(estado.length == 0)) {
            alertify.error("favor llenar todos los campos")
        }else{
          alertify.success("buscar")
        }           
  
    }
        
    

function limpiar(){
    $("#Nombre").val("");
    $("#Fecha").val("");
    $("#Cantidad").val("");
    $("#Estado").val("");  
}


function guardar() {
    // body..
    var nombre = "";
    var fecha  = "";
    var cantidad = 0;
    var estado = "" ;

    var ruta = "";

    nombre = $("#Nombre").val();
    fecha = $("#Fecha").val();
    cantidad = $("#Cantidad").val();
    estado = $("#Estado").val(); 
    

    if ((nombre.length == 0)||(fecha.length == 0)||(cantidad.length == 0)||(estado.length == 0)) {
            alertify.error("favor llenar todos los campos")
        }else{
          ruta = url + inventario + 'guardar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombre': nombre ,
                    'fecha': fecha,
                    'cantidad': cantidad ,
                    'estado': estado

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
            tinventario();
        }else{
            alertify.error("Error al Guardar");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
        }        
    
    
}




function buscar() {
    

    var nombre = "";

    var ruta = "";
    nombre = $("#Nombre").val(); 

    if (nombre.length == 0) {
            alertify.error("favor llenar el campo Nombre para buscar")
        }else{
    ruta = url + inventario + 'buscar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombre': nombre 
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
            $("#Fecha").val(obj.respuestas[0].Fecha);
            $("#Cantidad").val(obj.respuestas[0].Cantidad_de_articulos);
            $("#Estado").val(obj.respuestas[0].Estado);            
            alertify.success("Dato Encontrado");
             
        } else{
            alertify.error("Error al Buscar Dato");
        }           
    }).fail(function() {
        alertify.error( "error" );
    })  
  }
}



function modificar() {
    // body...
    var nombre = "";
    var fecha  = "";
    var cantidad = 0;
    var estado = "" ;

    var ruta = "";

    nombre = $("#Nombre").val();
    fecha = $("#Fecha").val();
    cantidad = $("#Cantidad").val();
    estado = $("#Estado").val();           
  
    if (nombre.length == 0) {
            alertify.error("se requiere llenar el campo Nombre para modificar")
        }else{
    
    ruta = url + inventario + 'modificar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombre': nombre ,
                    'fecha': fecha,
                    'cantidad': cantidad ,
                    'estado': estado
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
            tinventario();
        }else{
            alertify.error("Error al Actualizar los datos");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
  }
}




function eliminar() {
    // body...
    var nombre = "";

     $(this).parents("th").find(".Nombre").each(function() {
          nombre = $(this).html() + "\n";
        });


  //  nombre = $("#Nombre").val(); 


    if (nombre.length == 0) {
       alertify.error("favor llenar el campo Nombrewswsws para eliminar "+nombre)

     console.log(nombre);

    }else{
    ruta = url + inventario + 'eliminar';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombre': nombre
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
            tinventario();
        }else{
            alertify.error("Error al Eliminar el dato");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
  }
}



function tinventario (){
   var ruta = "";
   var id_html = "";
   ruta=url+Cinventario+"tinventario";
   id_html = "tinventario";
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

function tinventario (){
   var ruta = "";
   var id_html = "";
   ruta=url+inventario+"tinventario";
   id_html = "tinventario";
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
tinventario ();
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

