$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#Contraseña').attr('type', 'text');
    } else {
      $('#Contraseña').attr('type', 'password');
    }
  });
});

function ingresar() {
    // body...
    var acum = 0;
    var user = ""; 
    var pass = "";

    var ruta = "";
    user = $("#Usuario").val();   
    pass = $("#Contraseña").val();

    ruta = url + login + 'ingresar';
    if(!user||!pass){
     acum++;
 }
if(acum<1){
    $.ajax({
        'url'  : ruta,
        'data' : {
                    'user': user,
                    'pass': pass 
        },
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

         if(data!= false){
            location.href= url + login + "menu" ;           
            //alertify.success("Dato Encontrado");
        }else{
            alertify.error("Usted No esta registrado o Usuario y Contraseña son incorrectos");
        }            
    }).fail(function() {
        alertify.error( "error" );
    })  
}else{
     alertify.error( "Error, campos vacios" );
}
}

$(document).on('click', '#login', function(e){
       e.preventDefault();
    
        $.ajax({
            url : 'http://localhost/sport_log_luis/Code/' + 'index.php/Clogin/logout',
            success : function(data){
                window.location='http://localhost/sport_log_luis/Code/index.php/clogin';
            }

        })
    })

function cerrar() {
    // body...

    
    ruta = url + login + "cerrar";
    
    $.ajax({
        'url'  : ruta,        
        'type' : 'POST',
        'statusCode': {
            404: function() {
              alertify.error("La Ruta de la pagina no es la correcta" );
            }
          }
    }).done(function( data ) { 

         if(data!= false){
            location.href= url + cmain + "index";           
            //alertify.success("Dato Encontrado");
        }else{
            alertify.error("Error al Buscar Dato");
        }            
    }).fail(function() {
        alertify.error( "error" );
    })  
}