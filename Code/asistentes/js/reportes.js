function reporte1 (){
location.href = url + cmain + 'reporte1'
}


function reporte1(){
   var ruta = "";
   var id_html = "";
   ruta = url+Creportes+'reporte1';
   id_html = "reporte1";
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

function reporte1(){
   var ruta = "";
   var id_html = "";

   ruta =url+Creportes+'reporte1';
   id_html = "reporte1";

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
