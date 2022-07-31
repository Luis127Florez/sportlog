<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/jugadores.css');?>">
<br> 
<br>
<br>
<br> 
<br>
<br>
<br> 
<br>
<br>
<br>
<br>
<center>
<div class="conatiner shadow p-3 mb-5 bg-white rounded" id="cuadrito" style="width:1100px;">

  <center>
    <h1>Jugadores</h1>
  </center>
<br>
 <form class="needs-validation" novalidate width="60%" border="1px" align="center">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="Nombre" placeholder="Nombre" onkeypress="return soloLetras(event)" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellido</label>
 <input type="text" class="form-control" id="Apellido" placeholder="Apellido" onkeypress="return soloLetras(event)" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Tipo de Identificacion</label>
 <select class="form-control" id="Tipo">
  <option class="rounded-pill "></option>
      <option>TI</option>
      <option>CC</option>
      
    </select>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Numero_de_Identificacion</label>
      <input type="number" class="form-control" id="Identificacion" placeholder="Numero_de_Identificacion" required>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Sexo</label>
      <select class="form-control" id="Sexo">
        <option class="rounded-pill "></option>
      <option>Masculino</option>
      <option>Femenino</option>
      
    </select>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Edad</label>
      <input type="number" class="form-control" id="Edad" placeholder="Edad" required>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
  </div>

<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Posicion</label>
      <select name="op1"  id="Posicion"  class="form-control"> 
        <option class="rounded-pill "></option>
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
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">EPS</label>
      <input type="text" class="form-control" id="EPS" placeholder="EPS" required>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Categoria</label>
      <select type="text" class="form-control" id="Categoria" aria-describedby="emailHelp" placeholder="Enter email">
                 <option class="rounded-pill "></option>
                 <option class="rounded-pill">pony</option>
                 <option class="rounded-pill">pre-pony</option>
                 <option class="rounded-pill">juvenil</option>
                 <option class="rounded-pill">pre-juvenil</option>
               </select>
      <div class="invalid-feedback">
        Por favor Colocar el Dato.
      </div>
    </div>
  </div>
  </div>
  </center>




<center>
  <div class="con form-inline shadow-lg p-3 mb-5 bg-white rounded" style="width:400px;">
  
    <br>
<button type="button" id="" onclick="guardarjugador()" class="btn btn-outline-success"   style='width:90px; height:40px '>Guardar</button>
<p></p>
<button type="button" onclick="buscarjugador()" class="btn btn-outline-primary" style='width:90px; height:40px'>Buscar</button>
<p></p>
<button type="button" onclick="modificarjugador()" class="btn btn-outline-dark"  style='width:90px; height:40px'>Modificar</button>
<p></p>
<button type="button" onclick="eliminarjugador()" class="btn btn-outline-danger"  style='width:90px; height:40px'>Eliminar</button>
</div>
</center>
</form>

<br>
<br>

<div class="col-md-6 offset-md-4" style=" width: 530px; " >                   
<div id="tjugadores"></div>
 </div>




<script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/jugadores.js');?>"></script>