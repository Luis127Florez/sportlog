function tasistencia1(){
   var ruta = "";
   var id_html = "";
   ruta = url+Casistencias+'tasistencia1';
   id_html = "tasistencia";
   cargar_tabla(ruta,id_html);
   ocultar2();
   mostrar();
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

function tasistencia1(){
   var ruta = "";
   var id_html = "";

   ruta =url+asistencias+'tasistencia1';
   id_html = "tasistencia";

   cargar_tabla(ruta,id_html);
   ocultar2();
   mostrar();
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


function tbuscarasis(){
   var ruta = "";
   var id_html = "";
   ruta = url+Casistencias+'tbuscarasis';
   id_html = "tasistencia";
   cargar_tabla(ruta,id_html);

   ocultar();
   mostrar2();

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

function tbuscarasis(){
   var ruta = "";
   var id_html = "";

   ruta =url+asistencias+'tbuscarasis';
   id_html = "tasistencia";

   cargar_tabla(ruta,id_html);
    ocultar();
   mostrar2();
   
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








function guardarasis(ID) {
    // body..
    var identificacion =0;
    var fecha = "";
    var asistencia = "";

    var ruta = "";
    identificacion = ID;
    fecha = $("#Fecha_"+ID).val();
    asistencia = $("#Asistencia_"+ID).val();
 
     ruta =url+asistencias+'guardarasis';
    
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'identificacion': identificacion ,
                    'fecha': fecha,
                    'asistencia': asistencia 
                    

        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) {
        if(data == 1){
            alertify.success("Guardado :)...");
        }else{
            alertify.error("Error al Guardar");
        }
            
    }).fail(function() {
        alertify.error( "error" );
    })
}


$(document).ready(function(){
 $("#categoria1").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tasistencia tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});

$(document).ready(function(){
 $("#categoria1").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them


 $.each($("#tasistencia1 tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});


$('#Categoria').change( function() {
    var ruta = "";
    var id_html = "";
    var cate = "";

    ruta =url+asistencias+'filtrar';
    cate = $('#Categoria').val(),
    id_html = "tasistencia";
    cargar(ruta,id_html,cate);
});

function cargar(ruta, id_html,cate){
    $.ajax({
        'url'  : ruta,
         'data' : {
                    'cate': cate
        },
        'type' : 'POST',
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




$('#Categoria11').change( function() {
    var ruta = "";
    var id_html = "";
    var cate = "";

    ruta =url+asistencias+'filtrar1';
    cate = $('#Categoria11').val(),
    id_html = "tasistencia";
    cargar(ruta,id_html,cate);
});
function cargar(ruta, id_html,cate){
    $.ajax({
        'url'  : ruta,
         'data' : {
                    'cate': cate
        },
        'type' : 'POST',
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
ocultar()

});

function ocultar(){
document.getElementById('Categoria').style.display = 'none';
}

function ocultar2(){
document.getElementById('Categoria11').style.display = 'none';
}

function mostrar(){
document.getElementById('Categoria').style.display = 'block';
}

function mostrar2(){
document.getElementById('Categoria11').style.display = 'block';
}





/*
function filtrar(){

  alertify success("xx")
  
var categoria = "";
categoria = $("#categoria").val();

function tasistencia(){
  var categoria = "";
categoria = $("#categoria").val();
   var ruta = "";
   var id_html = "";


if (categoria = "pony" ) {
ruta = url+Casistencias+'tasistenciap';
}
if ( categoria = "pre-pony") {
ruta = url+Casistencias+'tasistenciapre';
}
if ( categoria = "juvenil" ) {
ruta = url+Casistencias+'tasistenciaj';
}
if ( categoria = "pre-juvenil") {
ruta = url+Casistencias+'tasistenciapr'; 
}
   

   id_html = "tasistencia";
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

function tasistencia(){
  var categoria = "";
categoria = $("#categoria").val();
   var ruta = "";
   var id_html = "";

   
if (categoria = "pony" ) {
ruta = url+asistencias+'tasistenciap';
}
if ( categoria = "pre-pony") {
ruta = url+asistencias+'tasistenciapre';
}
if ( categoria = "juvenil" ) {
ruta = url+asistencias+'tasistenciaj';
}
if ( categoria = "pre-juvenil") {
ruta = url+asistencias+'tasistenciapr'; 
}
   
   id_html = "tasistencia";

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


}
*/
