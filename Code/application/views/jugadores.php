<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/jugadores.css');?>">
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
<input style="width: 400px; display: initial;" type="text"  id="categoria1"  class="form-control" placeholder="Nombre /Fecha " aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">


<button type="button" style="margin-right: -48%;" class="btn btn-outline-success" data-toggle="modal" data-target="#agregar">Agregar Articulo</button>


<div id="agregar" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">



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
      <label for="validationCustom03">Numero de Identificacion</label>
      <input type="number" class="form-control" id="Identificacion" placeholder="Numero de Identificacion" required>
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
     <div class="modal-footer">
      <button type="button" id="Guardar" onclick="guardarjugador()" class="btn btn-outline-success"   style='width:90px; height:40px '>Guardar</button>

      <button type="button" id="editar" onclick="modificarjugador()" class="btn btn-outline-dark"  style='width:90px; height:40px'>Modificar</button>

      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

     </div>
   </div>





 
  </div>




<div class="col-md-6 offset-md-4" style=" width: 530px; " >                   
<div id="tjugadores"></div>
 </div>
  


  </div>
  </center>





</form>

<br>
<br>






<script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/jugadores.js');?>"></script>