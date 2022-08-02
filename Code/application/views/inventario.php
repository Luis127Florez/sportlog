 <br> 
 <br>
 <br>
 <br>

 <br>
 <link rel="stylesheet" type="text/css" href=" <?php echo base_url('asistentes/css/inventario.css'); ?>">



 <center>
<div class="conatiner shadow p-3 mb-5 bg-white rounded" id="cuadrito" style="width:1100px;">



   <center>
 <p class="text-success"><h1> Inventario </h1></p>
 </center>
<form>
  <div class="">

<div class="row">

      </div>

<br>
<br>


     <input style="width: 400px; display: initial;" type="text"  id="categoria1"  class="form-control" placeholder="Nombre /Fecha " aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">

 <button type="button" style="margin-right: -43%;" class="btn btn-outline-success" data-toggle="modal" data-target="#agregar">Agregar Articulo</button>

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

                          
<div class="col-md-6" >
    <label>Nombre </label>
    <input type="text" class="form-control" id="Nombre" placeholder="Nombre" >
  </div>
  <br>
  <div class="col-md-6">
   
     <label>Fecha</label> 
     <input type="date" class="form-control" id="Fecha" placeholder="Fecha">
 </div>
<br>
    <div class="col-md-6">
      <label>Cantidad de articulos</label>
    <input type="number" class="form-control" id="Cantidad" placeholder="Cantidad de articulos"></div>
    <br>
    <div class="col-md-6">
    <div><label>Estado</label> <select name="Estado" id="Estado" class="form-control" > 
          <option value="Bueno">Bueno</option>
          <option value="Malo">Malo</option>  
          <option value="En Mantenimiento">En Mantenimiento</option>                            
         </select>
       </div>
        </div> 
        </div>


                          <div class="modal-footer">

 <button type="button" onclick="guardar()" class="btn btn-outline-success"  style='width:90px; height:40px' id="Guardar">Guardar</button>


 <button type="button"  onclick="modificar()" class="btn btn-outline-primary"  style='width:90px; height:40px' id="editar">Modificar</button>

<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>

<br>
                   
<div id="tinventario">
</div>
                                 
</div>
</center>


<br>

            
<script type="text/javascript" src="<?php echo base_url('asistentes/js/componentes/inventario.js');?>"></script>
