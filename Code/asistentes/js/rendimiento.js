$(document).on("click", ".btn-outline-primary", function () {
  $("#Guardar").hide();
  $("#editar").show();
});


$(document).on("click", ".btn-outline-success", function () {
  $("#Guardar").show();
  $("#editar").hide();
});

$(document).ready(function(){
 $("#categoria1").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#trendimiento tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});


function limpiar(){
    $("#Nombre").val("");
    $("#Identificacion").val("");
    $("#Posicion").val("");
    $("#Velocidad").val("");
    $("#Destreza").val("");  
    $("#Agilidad").val("");  
    $("#Resistencia").val("");  
    $("#Disciplina").val("");  
    $("#Punteria").val("");  
    $("#Control").val("");
    $("#Promedio").val("");  
}


function guardarrendimiento(){


	var nombre = "";
    var identificacion = 0;
	var posicion= "";
	var velocidad = 0;
	var destresa = 0;
    var agilidad = 0;
    var resistencia = 0;
    var disciplina = 0;
    var punteria = 0;
    var control = 0;
    var promedio = 0.0;

    var ruta = "";
	
    
		
    nombre = $("#Nombre").val();
    identificacion = $("#Identificacion").val();
    posicion = $("#Posicion").val();		
    velocidad = $("#Velocidad").val();	
    destreza = $("#Destreza").val();
    agilidad = $("#Agilidad").val();    
    resistencia = $("#Resistencia").val();    
    disciplina = $("#Disciplina").val();    
    punteria = $("#Punteria").val();    
    control = $("#Control").val();    
    promedio = $("#Promedio").val();   

     if ((nombre.length == 0)||(identificacion.length == 0)||(posicion.length == 0)||(velocidad.length == 0)||(destreza.length == 0)||(agilidad.length == 0)||(resistencia.length == 0)||(disciplina.length == 0)||(punteria.length == 0)||(control.length == 0)) {
            alertify.error("favor llenar todos los campos")
        }else{ 

    ruta = url + rendimiento + 'guardarrendimiento';

    $.ajax({	
        'url'  : ruta,
        'data' : {
        			'nombre': nombre,
                    'identificacion': identificacion,
                    'posicion': posicion,
                    'velocidad': velocidad,
                    'destreza': destreza,
                    'agilidad': agilidad,
                    'resistencia': resistencia,
                    'disciplina': disciplina,
                    'punteria': punteria,
                    'control': control,
                    'promedio': promedio


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
            trendimiento()           
        }else{
            alertify.error("Error al Guardar");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
   }
}


function buscarrendimiento(Numero_de_Identificacion) {
    // body...
    var identificacion = Numero_de_Identificacion;
    var ruta = "";

     if (identificacion.length == 0) {
            alertify.error("favor llenar el campo identificacion para Buscar")   
        }else{ 

    ruta = url + rendimiento + 'buscarrendimiento';
    
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
            $("#Identificacion").val(obj.respuestas[0].Numero_de_Identificacion);  
            $("#Posicion").val(obj.respuestas[0].Posicion_de_juego);
            $("#Velocidad").val(obj.respuestas[0].velocidad);
            $("#Destreza").val(obj.respuestas[0].Destreza); 
            $("#Agilidad").val(obj.respuestas[0].Agilidad);
            $("#Resistencia").val(obj.respuestas[0].Resistencia);
            $("#Disciplina").val(obj.respuestas[0].Disciplina);
            $("#Punteria").val(obj.respuestas[0].Punteria);
            $("#Control").val(obj.respuestas[0].Control);
            $("#Promedio").val(obj.respuestas[0].promedio);

            alertify.success("Dato Encontrado");
             
        } else{
            alertify.error("Error al Buscar Dato");
        }           
    }).fail(function() {
        alertify.error( "error" );
    })  
}
}



function modificarrendimiento() {
    // body...
    
    var nombre = "";
    var identificacion = 0;
    var posicion= "";
    var velocidad = 0;
    var destresa = 0;
    var agilidad = 0;
    var resistencia = 0;
    var disciplina = 0;
    var punteria = 0;
    var control = 0;
    var promedio = 0.0;

    var ruta = "";
    

    nombre = $("#Nombre").val();
    identificacion = $("#Identificacion").val();
    posicion = $("#Posicion").val();        
    velocidad = $("#Velocidad").val();  
    destreza = $("#Destreza").val();
    agilidad = $("#Agilidad").val();    
    resistencia = $("#Resistencia").val();    
    disciplina = $("#Disciplina").val();    
    punteria = $("#Punteria").val();    
    control = $("#Control").val();    
    promedio = $("#Promedio").val();   

    if (identificacion.length == 0) {
            alertify.error("favor llenar el campo identificacion para modificar")   
        }else{             
    
      ruta = url + rendimiento + 'modificarrendimiento';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'nombre': nombre,
                    'identificacion': identificacion,
                    'posicion': posicion,
                    'velocidad': velocidad,
                    'destreza': destreza,
                    'agilidad': agilidad,
                    'resistencia': resistencia,
                    'disciplina': disciplina,
                    'punteria': punteria,
                    'control': control,
                    'promedio': promedio

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
           trendimiento()
        }else{
            alertify.error("Error al Actualizar los datos");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
  }
}

function eliminarrendimiento(Numero_de_Identificacion) {
    // body...
    var identificacion = Numero_de_Identificacion;
    

    if (identificacion.length == 0) {
            alertify.error("favor llenar el campo identificacion para Eliminar")   
        }else{ 
        
    ruta = url + rendimiento + 'eliminarrendimiento';
    
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
            trendimiento()
        }else{
            alertify.error("Error al Eliminar el dato");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
   }
}

function trendimiento(){
   var ruta = "";
   var id_html = "";
   ruta = url+Crendimiento+'trendimiento';
   id_html = "trendimiento";
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

function trendimiento(){
   var ruta = "";
   var id_html = "";
   ruta = url+rendimiento+'trendimiento';
   id_html = "trendimiento";
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
trendimiento();
 });

function promedio() {
    var suma = 0;
    var velocidad = 0;
    var destresa = 0;
    var agilidad = 0;
    var resistencia = 0;
    var disciplina = 0;
    var punteria = 0;
    var control = 0;
    var promedio = 0;

    velocidad = $("#Velocidad").val();  
    destreza = $("#Destreza").val();
    agilidad = $("#Agilidad").val();    
    resistencia = $("#Resistencia").val();    
    disciplina = $("#Disciplina").val();    
    punteria = $("#Punteria").val();    
    control = $("#Control").val(); 

    promedio = (parseInt(velocidad)+ parseInt(destreza)+ parseInt(agilidad)+ parseInt(resistencia)+parseInt(disciplina)+parseInt(punteria)+parseInt(control))/7;
    $("#Promedio").val(promedio);
}

