
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/rendimiento.css');?>">
 
 <div class="container">
 <center>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

 
         <div><h2 >REGISTRO DE RENDIMIENTO </h2></div>
      <br>   
      <br>
      <div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" >
        <br>

      <div class="form-group form-inline">

        
      <div><h5>Nombre</h5><input  class="form-control" id="Nombre" name="usuario" type="text"></div>  
      <div><h5>N° de indentificacion </h5><input  class="form-control" id="Identificacion" name="usuario" type="text"></div> 
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
       </div>
         <div class="form-group form-inline"> 
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
         <br>
         <br>
         <br></div>


      </div>

      <div  class="con form-inline shadow-lg p-3 mb-5 bg-white rounded" style="width:400px;">
  
    <br>

<button  type="submit" onclick="guardarrendimiento()" class="btn btn-outline-success" style='width:90px; height:40px'>Guardar</button>
<p></p>
<button type="button" onclick="buscarrendimiento()" class="btn btn-outline-primary" style='width:90px; height:40px'>Buscar</button>
<p></p>
<button type="button" onclick="modificarrendimiento()" class="btn btn-outline-dark" style='width:90px; height:40px'>Modificar</button>
<p></p>
<button type="button" onclick="eliminarrendimiento()" class="btn btn-outline-danger" style='width:90px; height:40px'>Eliminar</button>
</div>



<div class="col-md-6 offset-md-4" style=" width: 530px;">                   
<div id="trendimiento">
</div>
 </div>





<script type="text/javascript" src="<?php echo base_url('asistentes/js/rendimiento.js'); ?>"></script>