
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/rendimiento.css');?>">
 
 <div class="container">
 <center>
      <br>
      <br>

 
         
      <br>   
      <br>
      <div id="contenido"  style="width: 1250px; margin-left :-40px;" class="shadow-lg p-3 mb-5 bg-white rounded" >
       <div><h2 >Registro De Rendimiento </h2></div>
        <br>

    


<input style="width: 400px; display: initial;" type="text"  id="categoria1"  class="form-control" placeholder="Nombre /Fecha " aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">


<button type="button" style="margin-right: -53%;" class="btn btn-outline-success" data-toggle="modal" data-target="#agregar">Agregar Articulo</button>

                <!--modal -->
                <!-- Modal -->
                    <div id="agregar" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">

        <div class="row">
          
       
        
      <div class="col-xs-6" style="max-width: 97%;"><h5>Nombre</h5><input class="form-control" id="Nombre" name="usuario" type="text"></div>  
      <div class="col-xs-6" ><h5>N° de indentificacion </h5><input  class="form-control" id="Identificacion" name="usuario" type="text"></div> 
      <div><h5>Posicion de juego</h5> <select name="op1"  id="Posicion"  class="form-control"> 
         <option ></option>
          <option > Delantero</option>
          <option >  Extremo</option>  
          <option >  Media punta</option>     
          <option > Volante</option>     
          <option > Interior</option>     
          <option > Pivote</option>     
          <option >Carrilero</option>  
          <option > Libero</option>        
          <option > Central</option>        
          <option > Lateral</option>              
          <option >  Portero</option>        
         </select>
       </div>
       

      <br/> 
       
       <div><h5>Velocidad</h5> <select name="op1" id="Velocidad" onchange="promedio()" class="form-control"> 
          <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>              
         
         </select></div>  
         <br>
           <div><h5>Destreza</h5> <select name="op1" id="Destreza" onchange="promedio()" class="form-control"> 
            <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>              
         
         </select></div>  
  
         <br>
           <div><h5>Agilidad</h5> <select name="op1" id="Agilidad" onchange="promedio()" class="form-control"> 
            <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>              
         
         </select></div>  
         <br>
           <div><h5>Resistencia</h5> <select name="op1" id="Resistencia" onchange="promedio()" class="form-control"> 
            <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>              
         
         </select></div>  
         <br>
           <div><h5>Disciplina</h5> <select name="op1" id="Disciplina" onchange="promedio()" class="form-control"> 
            <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>              
         
         </select></div>  
         <br>
           <div><h5>Punteria:</h5> <select name="op1" id="Punteria" onchange="promedio()" class="form-control"> 
            <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>              
         
         </select></div>  
         <br>
          <div><h5>Control:</h5> <select name="op1" id="Control" onchange="promedio()" class="form-control"> 
            <option ></option>
          <option value="1">1</option>
          <option value="2">2</option>  
          <option value="3">3</option>     
          <option value="4">4</option>     
          <option value="5">5</option>     
          <option value="6">6</option>     
          <option value="7">7</option>  
          <option value="8">8</option>        
          <option value="9">9</option>        
          <option value="10">10</option>

         
         </select>
       </div>  
     
         <br>
         <div><h5>Promedio:</h5><input  class="form-control" id="Promedio" name="usuario" type="text"></div> 

 </div>

                    


                          <div class="modal-footer">
                            <button  type="submit" id="Guardar" onclick="guardarrendimiento()" class="btn btn-outline-success" style='width:90px; height:40px'>Guardar</button>

                            <button type="button" id="editar" onclick="modificarrendimiento()" class="btn btn-outline-dark" style='width:90px; height:40px'>Modificar</button>

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           



                          </div>
                        </div>

                      </div>
                    </div>









         <br>
         <br>
            <br></div>


<div class="col-md-6 offset-md-4" style=" width: 530px;">                   
<div id="trendimiento">
</div>
 </div>





      


      </div>








<script type="text/javascript" src="<?php echo base_url('asistentes/js/rendimiento.js'); ?>"></script>