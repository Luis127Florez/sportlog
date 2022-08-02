<br>

<div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 1081px; margin-left: -452px; padding: 0px; height: 380px;"> 
<div class="form-group form-inline">       
<div class="scrollbar scrollbar-success" style="width: 1025px;">
<table class="table table-hover table-bordered"  >
 <thead class="thead-dark">
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col" >Apellido</th>
     <th scope="col">TipoID</th>
     <th scope="col">NumeroID</th>
     <th scope="col">Edad</th>
     <th scope="col">sexo</th>  
     <th scope="col">Posicion</th>
     <th scope="col">EPS</th>
     <th scope="col">Categoria</th>
     <th scope="col">Accion</th>

   </tr>
 </thead>
 <tbod3>
   <?php
     if(!empty($jugador)){
       foreach ($jugador->result() as $data ) {      
   ?>
       <tr>
         <th scope="row">
           <?php
             echo $data->Nombre;
           ?>
         </th>
         <td>
            <?php
             echo $data->Apellido;
           ?>
         </td>
         <td>
            <?php
             echo $data->Tipo_de_Identificacion;
           ?>
         </td>
         <td>
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td>
            <?php
             echo $data->Edad;
           ?>
         </td>
         <td>
           <?php
             echo $data->Sexo;
           ?>
         </td>
         <td>
           <?php
             echo $data->Posicion;
           ?>
         </td>
         <td>
           <?php
             echo $data->EPS;
           ?>
         </td>
         <td>
           <?php
             echo $data->Categoria;
           ?>
         </td>
         <td>
 <button type="button" onclick="buscarjugador('<?php echo $data->Numero_de_Identificacion;?>')"  data-toggle="modal" data-target="#agregar"class="btn btn-outline-primary" style='width:90px; height:40px'>Buscar</button>

<button type="button" onclick="eliminarjugador('<?php echo $data->Numero_de_Identificacion;?>')" class="btn btn-outline-danger"  style='width:90px; height:40px'>Eliminar</button>
         </td>

       </tr>
   <?php
     }
   }
   ?>
 </tbody>
</table>
</tbod3>
</table>
</div>
</div>
</div>
